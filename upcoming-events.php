<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--gray-light);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        :root {
            --primary: #000000;
            --secondary: #ffffff;
            --gray-light: #f8f8f8;
            --gray-medium: #e0e0e0;
            --gray-dark: #333333;
        }

        /* Animation */
        .fade-slide-in {
            animation: fadeSlideIn 1s ease-out;
        }

        @keyframes fadeSlideIn {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Event Section */
        .event-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-header h2 {
            font-size: 24px;
            color: var(--primary);
        }

        .event-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .event-card {
            background: var(--secondary);
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .event-card:hover {
            transform: translateY(-5px);
        }

        .event-image {
            position: relative;
            height: 200px;
        }

        .event-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .event-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 15px;
            border-radius: 20px;
            background: var(--primary);
            color: var(--secondary);
            font-size: 12px;
        }

        .event-details {
            padding: 20px;
        }

        .event-details h3 {
            margin: 0 0 10px 0;
            color: var(--primary);
        }

        .event-info {
            color: var(--gray-dark);
            margin: 5px 0;
        }

        .event-info:last-of-type {
            margin-bottom: 12px;
        }

        .distance-tags {
            display: flex;
            gap: 8px;
            margin: 8px 0;
        }

        .distance-tag {
            display: inline-block;
            padding: 4px 12px;
            background: var(--gray-light);
            border-radius: 20px;
            font-size: 14px;
            color: var(--primary);
            border: 1px solid var(--gray-medium);
        }

        .register-btn {
            width: 100%;
            padding: 12px;
            background: var(--primary);
            color: var(--secondary);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .register-btn:hover {
            background: var(--gray-dark);
        }

        .back-button {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            transform: translateX(-5px);
        }

        .back-link span {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <main class="page-transition">
        <div class="fade-slide-in">
            <div class="back-button">
                <a href="race.php" class="back-link">
                    <span>←</span> Kembali ke Race
                </a>
            </div>

            <section class="event-section">
                <div class="section-header">
                    <h2>Event Mendatang</h2>
                </div>

                <div class="event-grid">
                    <!-- IFG Labuan Bajo Marathon 2024 -->
                    <div class="event-card">
                        <div class="event-image">
                            <img src="images/labuan bajo.jpg" alt="IFG Labuan Bajo Marathon 2024">
                            <span class="event-badge">Upcoming</span>
                        </div>
                        <div class="event-details">
                            <h3>IFG Labuan Bajo 2024</h3>
                            <p class="event-info">9 November 2024</p>
                            <p class="event-info">Marina Waterfront Labuan Bajo, NTT</p>
                            <div class="distance-tags">
                                <span class="distance-tag">5K Run</span>
                                <span class="distance-tag">10K Run</span>
                                <span class="distance-tag">HM</span>
                                <span class="distance-tag">FM</span>
                            </div>
                            <button class="register-btn">Detail</button>
                        </div>
                    </div>

                    <!-- Reformasi Run -->
                    <div class="event-card">
                        <div class="event-image">
                            <img src="images/reformasi.jpg" alt="Reformasi Run 2024">
                            <span class="event-badge">Upcoming</span>
                        </div>
                        <div class="event-details">
                            <h3>Reformasi Run 2024</h3>
                            <p class="event-info">10 November 2024</p>
                            <p class="event-info">Plaza Timur GBK, Jakarta Pusat</p>
                            <div class="distance-tags">
                                <span class="distance-tag">5K Run</span>
                                <span class="distance-tag">10K Run</span>
                                <span class="distance-tag">21K Run</span>
                            </div>
                            <button class="register-btn">Detail</button>
                        </div>
                    </div>

                    <!-- Midea Run to Party -->
                    <div class="event-card">
                        <div class="event-image">
                            <img src="images/midea.jpg" alt="Midea Run to Party 2024">
                            <span class="event-badge">Upcoming</span>
                        </div>
                        <div class="event-details">
                            <h3>Midea Run to Party 2024</h3>
                            <p class="event-info">10 November 2024</p>
                            <p class="event-info">Pantai Indah Kapuk, Jakarta Utara</p>
                            <div class="distance-tags">
                                <span class="distance-tag">5K Run</span>
                                <span class="distance-tag">10K Run</span>
                            </div>
                            <button class="register-btn">Detail</button>
                        </div>
                    </div>

                    <!-- Carangsari Heritage Run -->
                    <div class="event-card">
                        <div class="event-image">
                            <img src="images/carangsari.jpg" alt="Carangsari Heritage Run 2024">
                            <span class="event-badge">Upcoming</span>
                        </div>
                        <div class="event-details">
                            <h3>Carangsari Heritage Run 2024</h3>
                            <p class="event-info">10 November 2024</p>
                            <p class="event-info">Desa Carangsari, Bali</p>
                            <div class="distance-tags">
                                <span class="distance-tag">5K Run</span>
                                <span class="distance-tag">10K Run</span>
                                <span class="distance-tag">15K Run</span>
                            </div>
                            <button class="register-btn">Detail</button>
                        </div>
                    </div>

                    <!-- Salak Eco Trail Run -->
                    <div class="event-card">
                        <div class="event-image">
                            <img src="images/salak.png" alt="Salak Eco Trail run 2024">
                            <span class="event-badge">Upcoming</span>
                        </div>
                        <div class="event-details">
                            <h3>Salak Eco Trail Run 2024</h3>
                            <p class="event-info">10 November 2024</p>
                            <p class="event-info">Gianyar, Bali</p>
                            <div class="distance-tags">
                                <span class="distance-tag">6K Run</span>
                                <span class="distance-tag">12K Run</span>
                                <span class="distance-tag">21K Run</span>
                            </div>
                            <button class="register-btn">Detail</button>
                        </div>
                    </div>

                    <!-- Astra Half Marathon -->
                    <div class="event-card">
                        <div class="event-image">
                            <img src="images/Astra Run 2024.jpg" alt="Astra Half Marathon 2024">
                            <span class="event-badge">Upcoming</span>
                        </div>
                        <div class="event-details">
                            <h3>Astra Half Marathon 2024</h3>
                            <p class="event-info">10 November 2024</p>
                            <p class="event-info">Astra Biz Center, BSD</p>
                            <div class="distance-tags">
                                <span class="distance-tag">5K Run</span>
                                <span class="distance-tag">10K Run</span>
                                <span class="distance-tag">HM</span>
                            </div>
                            <button class="register-btn">Detail</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const registerButtons = document.querySelectorAll('.register-btn');
            registerButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const eventTitle = this.closest('.event-card').querySelector('h3').textContent;
                    alert(`Pendaftaran untuk ${eventTitle} akan segera diproses!`);
                });
            });
        });
    </script>

<?php include 'footer.php'; ?>
