<?php
session_start();
include 'db_connection.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'You must be logged in to post.']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $username = htmlspecialchars($_SESSION['username']);
    $content = htmlspecialchars($_POST['content']);

    $query = "INSERT INTO threads (user_id, username, content) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iss", $user_id, $username, $content);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Thread posted successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error posting thread.']);
    }

    $stmt->close();
    $conn->close();
}
?>
