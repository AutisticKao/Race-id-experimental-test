
<?php include 'header.php'; ?>

<main class="signin-container">
    <h2>Sign In</h2>
    <form action="process_signin.php" method="POST" class="signin-form">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="signin-btn">Sign In</button>
    </form>
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
</style>

<?php include 'footer.php'; ?>
