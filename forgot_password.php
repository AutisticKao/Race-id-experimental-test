<?php include 'header.php'; ?>

<main class="forgot-password-container">
    <h2>Forgot Password</h2>
    <form action="process_forgot_password.php" method="POST" class="forgot-password-form">
        <label for="email">Enter your email address:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit" class="forgot-password-btn">Send Reset Link</button>
    </form>
    <div class="form-links">
        <a href="signin.php">Back to Sign In</a>
    </div>
</main>

<style>
@import url('https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap');

body {
    font-family: 'Libre Franklin', sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.forgot-password-container {
    max-width: 400px;
    margin: 80px auto;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.forgot-password-form label {
    display: block;
    margin-bottom: 10px;
    font-weight: 600;
}

.forgot-password-form input {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.forgot-password-btn {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
}

.forgot-password-btn:hover {
    background-color: #0056b3;
}

.form-links {
    text-align: center;
    margin-top: 20px;
}

.form-links a {
    color: #007bff;
    text-decoration: none;
    font-size: 14px;
}

.form-links a:hover {
    text-decoration: underline;
}
</style>

<?php include 'footer.php'; ?>
