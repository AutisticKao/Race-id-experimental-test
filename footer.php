<footer class="site-footer">
    <style>
        .site-footer {
            background: #000;
            color: #fff;
            padding: 40px 0;
            font-size: 0.9em;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 0 20px;
        }

        .footer-section {
            flex: 1 1 200px;
            margin-bottom: 20px;
        }

        .footer-section:nth-child(2) {
            margin-left: 40px;
        }

        .footer-section h3 {
            font-size: 1.2em;
            margin-bottom: 15px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #ff4d4d;
        }

        .footer-bottom {
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #333;
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                align-items: center;
            }
            .footer-section:nth-child(2) {
                margin-left: 0;
            }
        }
    </style>

    <div class="footer-container">
        <div class="footer-section">
            <h3>About Race.id</h3>
            <p>Your trusted platform for inspiring and supporting the Indonesian running community to reach their best potential.</p>
        </div>

        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="race.php">Race</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Email: info@race.id</p>
            <p>Phone: (021) 123-4567</p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2024 Race.id. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
