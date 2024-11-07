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
.signin-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f8f8f8;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.signin-form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

.signin-form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.signin-btn {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.signin-btn:hover {
    background-color: #218838;
}
</style>

<?php include 'footer.php'; ?>
