<?php
session_start();

// Dummy user data for demonstration
$dummy_username = 'demoUser';
$dummy_password = 'demoPass';

// Process login and signup
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'log_in') {
        // Process login
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate and authenticate user
        if ($email === $dummy_username && $password === $dummy_password) {
            $_SESSION['username'] = $email;
            header('Location: profile.php');
            exit;
        } else {
            $error_message = 'Invalid username or password';
        }
    } elseif (isset($_POST['action']) && $_POST['action'] === 'sign_up') {
        // Process signup
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        // Validate and register new user
        if ($password === $confirmPassword) {
            // Here you would normally save the user data
            $_SESSION['username'] = $email;
            header('Location: profile.php');
            exit;
        } else {
            $error_message = 'Passwords do not match';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In / Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Libre Franklin', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .auth-container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            width: 400px;
            transition: transform 0.3s ease, opacity 0.3s ease;
            opacity: 0;
            transform: translateY(-20px);
        }
        .auth-container.active {
            opacity: 1;
            transform: translateY(0);
        }
        .auth-container h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }
        .auth-container form {
            display: flex;
            flex-direction: column;
        }
        .auth-container input {
            margin-bottom: 15px;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1em;
        }
        .auth-container button {
            padding: 12px;
            background: #333;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            transition: background 0.3s ease;
        }
        .auth-container button:hover {
            background: #555;
        }
        .toggle-link {
            text-align: center;
            margin-top: 10px;
            color: #333;
            cursor: pointer;
            font-size: 0.9em;
        }
        .toggle-link span {
            color: inherit;
            transition: color 0.3s ease;
        }
        .toggle-link:hover span {
            color: blue;
        }
        .terms-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .terms-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
            height: 60%;
            overflow-y: auto;
            position: relative;
        }
        .terms-content h3 {
            margin-top: 0;
        }
        .agree-button {
            margin-top: 10px;
            padding: 10px;
            background: #333;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            transition: background 0.3s ease;
            display: block;
            width: 100%;
            opacity: 0.5;
            pointer-events: none;
        }
        .agree-button.active {
            opacity: 1;
            pointer-events: auto;
        }
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 1.5em;
            cursor: pointer;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="auth-container" id="auth-container">
        <h2 id="form-title">Log In</h2>
        <form id="auth-form" method="POST">
            <input type="hidden" name="action" value="log_in">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Submit</button>
        </form>
        <div class="toggle-link" id="toggle-link">Belum punya akun? <span>Daftar</span></div>
        <?php if (isset($error_message)): ?>
            <p style="color: red; text-align: center;"><?php echo $error_message; ?></p>
        <?php endif; ?>
    </div>

    <div class="terms-modal" id="terms-modal">
        <div class="terms-content" id="terms-content">
            <button class="close-button" onclick="closeTerms()">×</button>
            <h3>Terms and Conditions</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris.</p>
            <p>Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam.</p>
            <button class="agree-button" id="agree-button">Agree</button>
        </div>
    </div>

    <script>
        const form = document.getElementById('auth-form');
        const formTitle = document.getElementById('form-title');
        const toggleLink = document.getElementById('toggle-link');
        const authContainer = document.getElementById('auth-container');
        const termsModal = document.getElementById('terms-modal');
        const termsContent = document.getElementById('terms-content');
        const agreeButton = document.getElementById('agree-button');

        document.addEventListener('DOMContentLoaded', () => {
            authContainer.classList.add('active');
        });

        toggleLink.addEventListener('click', () => {
            if (formTitle.textContent === 'Log In') {
                formTitle.textContent = 'Sign Up';
                form.action.value = 'sign_up';
                form.innerHTML = `
                    <input type="hidden" name="action" value="sign_up">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    <button type="button" onclick="showTerms()">Submit</button>
                `;
                toggleLink.innerHTML = 'Sudah punya akun? <span>Log In</span>';
            } else {
                formTitle.textContent = 'Log In';
                form.action.value = 'log_in';
                form.innerHTML = `
                    <input type="hidden" name="action" value="log_in">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Submit</button>
                `;
                toggleLink.innerHTML = "Belum punya akun? <span>Daftar</span>";
            }
        });

        function showTerms() {
            termsModal.style.display = 'flex';
        }

        function closeTerms() {
            termsModal.style.display = 'none';
        }

        termsContent.addEventListener('scroll', () => {
            if (termsContent.scrollTop + termsContent.clientHeight >= termsContent.scrollHeight) {
                agreeButton.classList.add('active');
            }
        });

        agreeButton.addEventListener('click', () => {
            termsModal.style.display = 'none';
            form.submit();
        });
    </script>
</body>
</html>