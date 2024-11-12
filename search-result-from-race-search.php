<?php include 'header.php'; ?>

<style>
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

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    font-family: 'Inter', sans-serif;
    background: var(--gray-light);
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

.filter-tags {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

.filter-tags .tag {
    padding: 8px 20px;
    background: var(--gray-light);
    border-radius: 20px;
    font-size: 14px;
    color: var(--primary);
    border: 1px solid var(--gray-medium);
    transition: all 0.3s ease;
}

.filter-tags .tag:hover {
    transform: translateY(-2px);
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
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

.search-results {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
}

.results-header {
    margin-bottom: 30px;
}

.results-header h2 {
    font-size: 24px;
    color: var(--primary);
    margin-bottom: 15px;
}
</style>

<main class="page-transition">
    <div class="fade-slide-in">
        <div class="back-button">
            <a href="race.php" class="back-link">
                <span>←</span> Kembali ke Race
            </a>
        </div>

        <div class="search-results">
            <div class="results-header">
                <h2>Hasil Pencarian</h2>
                <div class="filter-tags">
                    <span class="tag">"Salonpas"</span>
                </div>
            </div>
            <div class="event-grid">
                
                <!-- Salonpas Run Card -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="images/salonpas.png" alt="Salonpas Run 2024">
                        <span class="event-badge">Live</span>
                    </div>
                    <div class="event-details">
                        <h3>Salonpas Run 2024</h3>
                        <p class="event-info">3 November 2024</p>
                        <p class="event-info">Jakarta</p>
                        <div class="distance-tags">
                            <span class="distance-tag">5K Run</span>
                            <span class="distance-tag">10K Run</span>
                        </div>
                        <button onclick="window.location.href='race-details.php'" class="register-btn">Detail</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const registerButtons = document.querySelectorAll('.register-btn');
    registerButtons.forEach(button => {
        button.addEventListener('click', function() {
            const eventTitle = this.closest('.event-card').querySelector('h3').textContent;
            //alert(`Pendaftaran untuk ${eventTitle} akan segera diproses!`);
        });
    });
});
</script>

<?php include 'footer.php'; ?>
