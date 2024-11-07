<style>
    .top-header {
        background: #000;
        color: #fff;
        padding: 10px 0;
    }

    .top-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }

    .logo {
        font-size: 1.5em;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
    }

    .tagline {
        font-size: 0.9em;
    }

    .profile-menu {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .profile-menu a {
        color: #fff;
        text-decoration: none;
    }

    header {
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    .top-header {
        background: #000;
        color: #fff;
        padding: 10px 0;
    }

    .nav-container {
        background: #fff;
        padding: 15px 0;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .nav-menu {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }

    .nav-menu ul {
        list-style: none;
        display: flex;
        gap: 30px;
        margin: 0;
        padding: 0;
    }

    .nav-menu a {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .nav-menu a:hover {
        color: #ff4d4d;
    }

    .search-box {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .search-box input {
        padding: 8px 15px;
        border-radius: 20px;
        border: 1px solid #ddd;
        width: 200px;
    }

    .search-box button {
        background: none;
        border: none;
        cursor: pointer;
    }

    /* Add these styles */
    .top-header {
        background: #000;
        color: #fff;
        padding: 10px 0;
        position: relative;  /* Added this */
    }

    .profile-icon {
        position: relative;
        cursor: pointer;
    }

    .profile-img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #fff;
        color: #333;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }

    .profile-img:hover {
        transform: scale(1.05);
    }

    .profile-balloon {
        position: absolute;
        top: 45px;  /* Adjusted position */
        right: 0;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        width: 200px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
    }

    .profile-balloon.active {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .balloon-header {
        padding: 15px;
        border-bottom: 1px solid #eee;
        text-align: center;
        color: #333;
    }

    .balloon-options {
        padding: 10px;
    }

    .balloon-option {
        padding: 12px 15px;
        display: block;
        color: #333;
        text-decoration: none;
        border-radius: 6px;
        transition: all 0.3s ease;
        font-size: 0.95em;
    }

    .balloon-option:hover {
        background: #f8f8f8;
        padding-left: 20px;
    }

    .sign-in {
        background: #333;
        color: white;
        text-align: center;
        margin: 5px 10px;
        padding: 10px;
        border-radius: 20px;
        transition: all 0.3s ease;
    }

    .sign-in:hover {
        background: #444;
        transform: translateY(-2px);
    }
</style>

<header>
    <div class="top-header">
        <div class="top-container">
            <a href="home.php" class="logo">Race.id</a>
            <div class="tagline">We provide running information for you.</div>
            <div class="profile-menu">
                <div class="profile-icon" onclick="toggleBalloon()">
                    <div class="profile-img">👤</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Balloon -->
<div id="profileBalloon" class="profile-balloon">
    <div class="balloon-content">
        <h3>Welcome to Race.id!</h3>
        <div class="balloon-options">
            <!-- Link to auth.php for Sign In -->
            <a href="signin.php" class="balloon-btn sign-in">Sign In</a>
            <div class="divider">or</div>
            <!-- Link to auth.php for Create Account -->
            <a href="signup.php" class="balloon-btn create-account">Create Account</a>
        </div>
    </div>
</div>


    <style>
        .profile-balloon {
            display: none;
            position: absolute;
            top: 50px;
            right: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 250px;
            z-index: 1001;
        }

        .balloon-content {
            padding: 20px;
        }

        .balloon-content h3 {
            color: #333;
            margin: 0 0 15px 0;
            text-align: center;
        }

        .balloon-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .balloon-btn {
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .sign-in {
            background: #333;
            color: white;
        }

        .create-account {
            border: 1px solid #333;
            color: #333;
        }

        .balloon-btn:hover {
            transform: translateY(-2px);
        }

        .divider {
            text-align: center;
            color: #666;
            margin: 5px 0;
        }

        /* Show balloon when active */
        .profile-balloon.active {
            display: block;
        }
    </style>

    <script>
        function toggleBalloon() {
            const balloon = document.getElementById('profileBalloon');
            balloon.classList.toggle('active');
        }

        // Close balloon when clicking outside
        document.addEventListener('click', (e) => {
            const balloon = document.getElementById('profileBalloon');
            const profileIcon = document.querySelector('.profile-icon');
            
            if (!profileIcon.contains(e.target) && !balloon.contains(e.target)) {
                balloon.classList.remove('active');
            }
        });
    </script>

    <div class="nav-container">
        <nav class="nav-menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="race.php">Race</a></li>
                <li><a href="articles.php">Articles</a></li>
                <li><a href="equipment.php">Equipment</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <div class="search-box">
                <input type="text" placeholder="Search events...">
                <button type="button">🔍</button>
            </div>
        </nav>
    </div>
</header>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

<script>
    const profileIcon = document.getElementById('profileIcon');
    const profileBalloon = document.getElementById('profileBalloon');

    profileIcon.addEventListener('click', () => {
        profileBalloon.classList.toggle('active');
    });

    // Close balloon when clicking outside
    document.addEventListener('click', (e) => {
        if (!profileIcon.contains(e.target)) {
            profileBalloon.classList.remove('active');
        }
    });
</script>
<style>
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
    }
</style>
