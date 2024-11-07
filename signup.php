<?php include 'header.php'; ?>

<main class="signup-container">
    <h2>Sign Up</h2>
    <form action="process_signup.php" method="POST" class="signup-form">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="signup-btn">Sign Up</button>
    </form>
</main>

<style>
.signup-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f8f8f8;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.signup-form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

.signup-form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.signup-btn {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.signup-btn:hover {
    background-color: #0056b3;
}
</style>

<?php include 'footer.php'; ?>
