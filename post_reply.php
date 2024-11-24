<?php
session_start();
include 'db_connection.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'You must be logged in to reply.']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $username = htmlspecialchars($_SESSION['username']);
    $thread_id = intval($_POST['thread_id']);
    $content = htmlspecialchars($_POST['content']);

    $query = "INSERT INTO replies (thread_id, user_id, username, content) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iiss", $thread_id, $user_id, $username, $content);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Reply posted successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error posting reply.']);
    }

    $stmt->close();
    $conn->close();
}
?>
