<?php include 'header.php'; ?>



        <div class="race-details fade-in">
            <!-- Hero Section -->
            <div class="race-hero fade-in">
                <img src="images/salonpas.png" alt="Salonpas Run 2024">
                <div class="hero-overlay fade-in">
                    <h1>Salonpas Run 2024</h1>
                </div>
            </div>

            <!-- Event Information -->
            <div class="event-info-container fade-in">
                <div class="event-info">
                    <h2>Event Details</h2>
                    <p><strong>Date:</strong> 3 November 2024</p>
                    <p><strong>Location:</strong> Plaza Gajah Mada TMII, Jakarta Timur</p>
                    <p><strong>Category:</strong> Road Run</p>
                </div>
            </div>

            <!-- Race Categories -->
            <div class="race-categories fade-in">
                <h2>Race Categories</h2>
                <div class="category-cards">
                    <div class="category-card">
                        <h3>5K Run</h3>
                        <ul>
                            <li>Medal Finisher</li>
                            <li>Race Pack</li>
                            <li>Event Jersey</li>
                        </ul>
                    </div>
                    <div class="category-card">
                        <h3>10K Run</h3>
                        <ul>
                            <li>Medal Finisher</li>
                            <li>Race Pack</li>
                            <li>Event Jersey</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Register Button -->
            <div class="register-section fade-in">
                <a href="https://salonpasrun.com/register" target="_blank" class="register-btn">
                    Register Now
                </a>
            </div>
        </div>
    </div>
</main>

<style>
body {
    font-family: 'Libre Franklin', sans-serif;
    background: var(--gray-light);
    margin: 0;
    padding: 0;
}

.fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.5s ease-out, transform 0.5s ease-out;
}

.fade-in.active {
    opacity: 1;
    transform: translateY(0);
}


.race-hero {
    position: relative;
    height: 400px;
    margin-bottom: 30px;
}

.race-hero img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 20px;
    background: rgba(0, 0, 0, 0.5);
    color: white;
    text-align: center;
}

.hero-overlay h1 {
    font-size: 36px;
    margin: 0;
}

.event-info-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
}

.event-info h2 {
    font-size: 24px;
    margin-bottom: 15px;
}

.event-info p {
    font-size: 16px;
    margin: 5px 0;
}

.register-section {
    text-align: center;
    margin-top: 40px;
}

.register-btn {
    display: inline-block;
    padding: 15px 30px;
    background: var(--primary);
    color: white;
    border-radius: 8px;
    text-decoration: none;
    font-size: 16px;
    transition: background 0.3s ease;
}

.register-btn:hover {
    background: var(--gray-dark);
}

.race-categories {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.race-categories h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.category-cards {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.category-card {
    flex: 1;
    min-width: 200px;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.category-card h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.category-card ul {
    list-style: none;
    padding: 0;
}

.category-card li {
    font-size: 14px;
    margin: 5px 0;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const registerButtons = document.querySelectorAll('.register-btn');
    registerButtons.forEach(button => {
        button.addEventListener('click', function() {
            alert('Redirecting to registration page!');
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(el => {
        el.classList.add('active');
    });
});

</script>

<?php include 'footer.php'; ?>
