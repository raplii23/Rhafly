<?php
include 'db_connection.php';

// Ambil semua komentar utama (threads)
$query = "SELECT * FROM threads ORDER BY created_at DESC";
$result = $conn->query($query);

$threads = [];
if ($result->num_rows > 0) {
    while ($thread = $result->fetch_assoc()) {
        // Ambil balasan untuk setiap thread
        $thread_id = $thread['id'];
        $reply_query = "SELECT * FROM replies WHERE thread_id = $thread_id ORDER BY created_at ASC";
        $reply_result = $conn->query($reply_query);

        $replies = [];
        if ($reply_result->num_rows > 0) {
            while ($reply = $reply_result->fetch_assoc()) {
                $replies[] = $reply;
            }
        }

        $thread['replies'] = $replies;
        $threads[] = $thread;
    }
}

// Kirim data sebagai JSON
header('Content-Type: application/json');
echo json_encode($threads);
$conn->close();
?>
