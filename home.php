<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Race.id - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Libre Franklin', sans-serif;
            background: #f8f9fa;
            color: #333;
        }

        .page-content {
            animation: pageLoad 0.6s ease-out;
        }

        @keyframes pageLoad {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hero Banner */
        .hero-banner {
            width: 100%;
            position: relative;
            overflow: hidden;
            height: 500px;
        }

        .banner-slider {
            display: flex;
            transition: transform 0.5s ease;
            height: 100%;
        }

        .banner-slide {
            min-width: 100%;
            position: relative;
        }
        .banner-slide.active {
            opacity: 1;
        }
        .banner-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Menyesuaikan gambar agar menutupi seluruh area tanpa distorsi */
        }

        .banner-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 60px;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
        }

        .banner-content h1 {
            font-size: 3em;
            margin-bottom: 15px;
        }

        .banner-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: calc(100% - 100px);
            margin: 0 50px;
            display: flex;
            justify-content: space-between;
            z-index: 10;
        }

        .nav-btn {
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.9);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .nav-btn:hover {
            background: white;
            transform: scale(1.1);
        }
        .banner-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }
        .dot {
            width: 12px;
            height: 12px;
            background: rgba(255,255,255,0.5);
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background: white;
            transform: scale(1.2);
        }
        /* Stats Counter */
        .stats-section {
            background: linear-gradient(135deg, #000000, #333333);
            padding: 40px 0;
            color: white;
            text-align: center;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .stat-item {
            padding: 20px;
        }

        .stat-number {
            font-size: 2.5em;
            font-weight: 700;
            margin-bottom: 10px;
        }

        /* Featured Categories */
        .categories-section {
            padding: 60px 0;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2em;
            color: #333;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            padding: 0 20px;
        }

        .category-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .category-card:hover {
            transform: translateY(-10px);
        }

        .category-icon {
            font-size: 2.5em;
            color: #000000;
            margin-bottom: 20px;
        }

        /* Upcoming Events */
        .events-section {
            padding: 60px 0;
            background: #fff;
        }

        .events-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 0 20px;
        }

        .event-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .event-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .event-details {
            padding: 20px;
        }

        .event-date {
            color: #ff4d4d;
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* Newsletter */
        .newsletter-section {
            background: linear-gradient(135deg, #333, #666);
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .newsletter-form {
            max-width: 500px;
            margin: 30px auto;
            display: flex;
            gap: 10px;
        }

        .newsletter-input {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 30px;
            font-size: 1em;
        }

        .newsletter-button {
            padding: 15px 30px;
            background: #ff4d4d;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter-button:hover {
            background: #ff3333;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .banner-content h1 {
                font-size: 2em;
            }

            .newsletter-form {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<div class="page-content">
        <!-- Hero Banner -->
        <section class="hero-banner">
            <div class="banner-slider">
                <div class="banner-slide active">
                    <img src="images/Astra Run 2024.jpg" alt="Astra Run 2024">
                    <div class="banner-content">
                        <h1>Astra Run 2024</h1>
                        <p>Run with happiness!</p>
                    </div>
                </div>
                <div class="banner-slide">
                    <img src="images/PLN run 2024.jpeg" alt="PLN Electric Run">
                    <div class="banner-content">
                        <h1>PLN Electric Run 2024</h1>
                        <p>Power up togetherness!</p>
                    </div>
                </div>
                <div class="banner-slide">
                    <img src="images/Borobudur Marathon 2024.jpg" alt="Borobudur Marathon">
                    <div class="banner-content">
                        <h1>Borobudur Marathon 2024</h1>
                        <p>Run on, mark it</p>
                    </div>
                </div>
            </div>
            <div class="banner-nav">
                <button class="nav-btn prev">&#10094;</button>
                <button class="nav-btn next">&#10095;</button>
            </div>
            <div class="banner-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </section>

        <!-- Stats Counter -->
        <section class="stats-section">
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number" data-target="25">0</div>
                    <div class="stat-label">Upcoming Events</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="50000">0</div>
                    <div class="stat-label">Active Runners</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="100">0</div>
                    <div class="stat-label">Partner Cities</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="200">0</div>
                    <div class="stat-label">Events Completed This Year</div>
                </div>
            </div>
        </section>

        <!-- Featured Categories -->
        <section class="categories-section">
            <h2 class="section-title">Event Categories</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <i class="fas fa-running category-icon"></i>
                    <h3>Road Running</h3>
                    <p>City marathons and road races</p>
                </div>
                <div class="category-card">
                    <i class="fas fa-mountain category-icon"></i>
                    <h3>Trail Running</h3>
                    <p>Off-road adventures and challenges</p>
                </div>
                <div class="category-card">
                    <i class="fas fa-globe category-icon"></i>
                    <h3>Virtual Runs</h3>
                    <p>Run anywhere, anytime</p>
                </div>
                <div class="category-card">
                    <i class="fas fa-heart category-icon"></i>
                    <h3>Charity Runs</h3>
                    <p>Run for a cause</p>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section class="newsletter-section">
            <h2>Stay Updated</h2>
            <p>Subscribe to get the latest updates on upcoming events</p>
            <form class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="Enter your email">
                <button type="submit" class="newsletter-button">Subscribe</button>
            </form>
        </section>
    </div>

    <script>
        // Banner Slider with working navigation
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.banner-slider');
    const slides = document.querySelectorAll('.banner-slide');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentSlide = 0;

    function updateSlide() {
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        // Update dots
        document.querySelectorAll('.dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
        
        // Update slide opacity
        document.querySelectorAll('.banner-slide').forEach((slide, index) => {
            slide.classList.toggle('active', index === currentSlide);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        updateSlide();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        updateSlide();
    }

    // Event listeners for navigation buttons
    prevBtn.addEventListener('click', () => {
        clearInterval(slideInterval);
        prevSlide();
        slideInterval = setInterval(nextSlide, 5000);
    });

    nextBtn.addEventListener('click', () => {
        clearInterval(slideInterval);
        nextSlide();
        slideInterval = setInterval(nextSlide, 5000);
    });

    // Auto slide
    let slideInterval = setInterval(nextSlide, 5000);

    // Stats Counter Animation
    const counters = document.querySelectorAll('.stat-number');
    
    function animateCounter(counter) {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.ceil(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };

        updateCounter();
    }

    // Intersection Observer for counter animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    });

    counters.forEach(counter => observer.observe(counter));
});

    </script>
</body>
</html>

<?php include 'footer.php'; ?>
