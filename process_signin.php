<?php
include 'sign-in-credentials.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['email']; // Correct key based on form input name
    $password = $_POST['password'];

    if (signIn($username, $password)) {
        echo "Sign-in berhasil!";
        // Redirect to a protected page or dashboard
        // header('Location: dashboard.php');
        // exit();
    } else {
        echo "Username atau password salah.";
        // Optionally redirect back to the sign-in page with an error message
        // header('Location: signin.php?error=invalid_credentials');
        // exit();
    }
}
?>
