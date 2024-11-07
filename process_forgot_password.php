<?php
// Include necessary files and initialize database connection
include 'config.php'; // This file should contain database connection settings

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Check if the email exists in the database
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate a unique token
        $token = bin2hex(random_bytes(50));

        // Store the token in the database with an expiration time
        $stmt = $conn->prepare("INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, ?)");
        $expires_at = date("Y-m-d H:i:s", strtotime('+1 hour')); // Token valid for 1 hour
        $stmt->bind_param("sss", $email, $token, $expires_at);
        $stmt->execute();

        // Send the reset link to the user's email
        $resetLink = "http://yourdomain.com/reset_password.php?token=" . $token;
        $subject = "Password Reset Request";
        $message = "Click the following link to reset your password: " . $resetLink;
        $headers = "From: no-reply@yourdomain.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "A password reset link has been sent to your email.";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "No account found with that email.";
    }
}
?>
