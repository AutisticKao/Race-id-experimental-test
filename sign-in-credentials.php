<?php
function signIn($username, $password) {
    // Dummy data
    $dummyUser = [
        'username' => 'user@example.com',
        'password' => 'password123' // Ensure this is encrypted in a real application
    ];

    // Check credentials
    return $username === $dummyUser['username'] && $password === $dummyUser['password'];
}
if (signIn($_POST['username'], $_POST['password'])) {
    echo "Sign-in berhasil!";
} else {
    echo "Username atau password salah.";
}
?>
