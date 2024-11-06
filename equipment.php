<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment - Coming Soon</title>
    <!-- Tambahkan link font di bagian head -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Libre Franklin', sans-serif;
            margin: 0;
            padding: 0;
        }

        .coming-soon-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #000000, #1a1a1a);
            color: white;
            padding: 20px;
        }

        .content-wrapper {
            text-align: center;
            max-width: 800px;
        }

        .title {
            font-family: 'Libre Franklin', sans-serif;
            font-weight: 700; /* Bold untuk judul */
            font-size: 3.5em;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease;
        }

        .subtitle {
            font-family: 'Libre Franklin', sans-serif;
            font-weight: 300; /* Light untuk subtitle */
            font-size: 1.5em;
            margin-bottom: 40px;
            color: #888;
            animation: fadeInUp 1s ease 0.3s both;
        }

        .notify-form {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-bottom: 30px;
            animation: fadeIn 1s ease 0.6s both;
        }

        .notify-input {
            padding: 15px 20px;
            width: 300px;
            border: none;
            border-radius: 25px;
            font-size: 1em;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
        }

        .notify-input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.2);
        }

        .notify-button {
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            background: #ff4d4d;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .notify-button:hover {
            transform: scale(1.05);
        }

        .countdown {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 40px;
            animation: fadeIn 1s ease 0.9s both;
        }

        .countdown-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            min-width: 100px;
        }

        .countdown-number {
            font-size: 2em;
            font-weight: bold;
        }

        .countdown-label {
            font-size: 0.9em;
            color: #888;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="coming-soon-container">
        <div class="content-wrapper">
            <h1 class="title">Race.id Equipment Store</h1>
            <p class="subtitle">Get ready for the ultimate running gear experience. Coming to elevate your run.</p>
            
            <form class="notify-form">
                <input type="email" class="notify-input" placeholder="Enter your email" required>
                <button type="submit" class="notify-button">Notify Me</button>
            </form>

            <div class="waitlist-section">
                <div class="early-bird-banner">
                    <span class="sparkle">✨</span>
                    <h3>Early Bird Special Offer</h3>
                    <span class="sparkle">✨</span>
                </div>
                
                <div class="waitlist-benefits">
                    <div class="benefit-item">
                        <span class="benefit-icon">🎁</span>
                        <p>20% Off First Purchase</p>
                    </div>
                    <div class="benefit-item">
                        <span class="benefit-icon">⭐</span>
                        <p>Exclusive Member Preview</p>
                    </div>
                    <div class="benefit-item">
                        <span class="benefit-icon">🏃</span>
                        <p>Free Running Socks</p>
                    </div>
                </div>

                <div class="waitlist-counter">
                    <p>Join <span id="waitlist-count">486</span> runners on the waitlist!</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 48.6%"></div>
                    </div>
                    <p class="slots-left">Only <strong>514</strong> slots left!</p>
                </div>
            </div>

            <div class="countdown">
                <div class="countdown-item">
                    <div class="countdown-number" id="days">00</div>
                    <div class="countdown-label">Days</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="hours">00</div>
                    <div class="countdown-label">Hours</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="minutes">00</div>
                    <div class="countdown-label">Minutes</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="seconds">00</div>
                    <div class="countdown-label">Seconds</div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .waitlist-section {
            margin-top: 40px;
            animation: fadeIn 1s ease 1.2s both;
        }

        .early-bird-banner {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .sparkle {
            font-size: 1.5em;
            animation: sparkle 1.5s infinite;
        }

        .waitlist-benefits {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 20px 0;
        }

        .benefit-item {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 10px;
            width: 150px;
            transition: transform 0.3s ease;
        }

        .benefit-item:hover {
            transform: translateY(-5px);
        }

        .benefit-icon {
            font-size: 2em;
            margin-bottom: 10px;
            display: block;
        }

        .waitlist-counter {
            text-align: center;
            margin-top: 30px;
        }

        #waitlist-count {
            color: #ff4d4d;
            font-weight: bold;
        }

        .progress-bar {
            background: rgba(255, 255, 255, 0.1);
            height: 10px;
            border-radius: 5px;
            margin: 15px auto;
            width: 80%;
            max-width: 400px;
        }

        .progress {
            background: #ff4d4d;
            height: 100%;
            border-radius: 5px;
            transition: width 1s ease;
        }

        .slots-left {
            color: #ff4d4d;
            font-size: 0.9em;
        }

        @keyframes sparkle {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.2); }
        }
    </style>

    <script>
        // Set the launch date (1 month from now)
        const launchDate = new Date();

        // Animasi increment counter
        let count = 480;
        const targetCount = 486;
        const counter = document.getElementById('waitlist-count');
        
        const incrementCounter = () => {
            if (count < targetCount) {
                count++;
                counter.textContent = count;
                setTimeout(incrementCounter, 50);
            }
        }

        // Mulai animasi saat halaman dimuat
        setTimeout(incrementCounter, 2000);
        launchDate.setMonth(launchDate.getMonth() + 1);

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = launchDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('days').innerHTML = days.toString().padStart(2, '0');
            document.getElementById('hours').innerHTML = hours.toString().padStart(2, '0');
            document.getElementById('minutes').innerHTML = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').innerHTML = seconds.toString().padStart(2, '0');
        }

        setInterval(updateCountdown, 1000);
        updateCountdown();

        // Form submission
        document.querySelector('.notify-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            alert(`Thank you! We'll notify ${email} when we launch.`);
            this.reset();
        });
    </script>
</body>
</html>

<?php include 'footer.php'; ?>