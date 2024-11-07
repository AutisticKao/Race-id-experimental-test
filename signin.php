<?php include 'header.php'; ?>

<main class="signin-container">
    <h2>Sign In</h2>
    <form action="process_signin.php" method="POST" class="signin-form">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <div class="password-container">
            <input type="password" id="password" name="password" required>
            <span class="toggle-password">Show</span>
        </div>

        <!-- Error message placeholder -->
        <div class="error-message" id="error-message" style="display: none;">
            Invalid email or password. Please try again.
        </div>

        <button type="submit" class="signin-btn">Sign In</button>
    </form>
    <div class="form-links">
        <a href="forgot_password.php">Forgot Password?</a>
        <span>|</span>
        <a href="signup.php">Create an Account</a>
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

.signin-container {
    max-width: 400px;
    margin: 80px auto;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.signin-form label {
    display: block;
    margin-bottom: 10px;
    font-weight: 600;
}

.signin-form input {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.password-container {
    position: relative;
}

.toggle-password {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 14px;
    color: #007bff;
}

.error-message {
    color: red;
    margin-bottom: 20px;
    font-size: 14px;
}

.signin-btn {
    width: 100%;
    padding: 12px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
}

.signin-btn:hover {
    background-color: #218838;
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.querySelector('.toggle-password');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.textContent = type === 'password' ? 'Show' : 'Hide';
    });

    // Example of showing an error message
    // This should be controlled by your server-side logic
    const errorMessage = document.getElementById('error-message');
    const showError = false; // Set this based on your server-side validation
    if (showError) {
        errorMessage.style.display = 'block';
    }
});
</script>

<?php include 'footer.php'; ?>
