<?php
// Start session
session_start();

// Include the database connection file (ensure this file exists and works correctly)
include 'db_connection.php';

// Initialize error message
$error_message = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Check if fields are empty
    if (empty($username) || empty($password) || empty($email)) {
        $error_message = 'All fields are required!';
    } else {
        // Check if username already exists
        $query = "SELECT id FROM users WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error_message = 'Username is already taken!';
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user into the database
            $insert_query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
            $insert_stmt = $conn->prepare($insert_query);
            $insert_stmt->bind_param("sss", $username, $hashed_password, $email);

            if ($insert_stmt->execute()) {
                // Registration successful, redirect to login
                header('Location: login.php');
                exit();
            } else {
                $error_message = 'Error registering user. Please try again later.';
            }

            $insert_stmt->close();
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login-register.css">
</head>
<body>
    <div class="login-container">
        <h2>Register</h2>
        <?php if (!empty($error_message)): ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
