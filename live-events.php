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

/* Reset margin dan padding global */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
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

body {
    font-family: 'Inter', sans-serif;
    background: var(--gray-light);
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

<main class="page-transition">
    <div class="fade-slide-in">
        <div class="back-button">
            <a href="race.php" class="back-link">
                <span>←</span> Kembali ke Race
            </a>
        </div>

        <section class="event-section">
            <div class="section-header">
                <h2>Event Berlangsung</h2>
            </div>

            <div class="event-grid">
                <!-- Salonpas Run -->
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
                        <button class="register-btn">Daftar Sekarang</button>
                    </div>
                </div>

                <!-- Arutmin Run -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="images/arutmin.jpg" alt="Arutmin Run 2024">
                        <span class="event-badge">Live</span>
                    </div>
                    <div class="event-details">
                        <h3>Arutmin Run 2024</h3>
                        <p class="event-info">3 November 2024</p>
                        <p class="event-info">Kalimantan Selatan</p>
                        <div class="distance-tags">
                            <span class="distance-tag">5K Run</span>
                            <span class="distance-tag">10K Run</span>
                        </div>
                        <button class="register-btn">Daftar Sekarang</button>
                    </div>
                </div>
                <!-- Victoria Run -->
                <div class="event-card">
                    <div class="event-image">
                    <img src="images/victoria.png" alt="Victoria Run 2024">
                    <span class="event-badge">Live</span>
                    </div>
                    <div class="event-details">
                        <h3>Victoria Run 2024</h3>
                        <p class="event-info">3 November 2024</p>
                        <p class="event-info">QBIG BSD, Tangerang</p>
                        <div class="distance-tags">
                            <span class="distance-tag">5K Run</span>
                            <span class="distance-tag">10K Run</span>
                            <span class="distance-tag">HM </span>
                            <span class="distance-tag">430K Run</span>
                        </div>
                        <button class="register-btn">Daftar Sekarang</button>
                    </div>
                </div>
                <!-- MD Mall Blora Run -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="images/MD Mall Blora Run.jpg" alt="Arutmin Run 2024">
                        <span class="event-badge">Live</span>
                    </div>
                    <div class="event-details">
                        <h3>MD Mall Blora Run 2024</h3>
                        <p class="event-info">3 November 2024</p>
                        <p class="event-info">Alun Alun Blora, Jawa Tengah</p>
                        <div class="distance-tags">
                            <span class="distance-tag">5K Run</span>
                            <span class="distance-tag">10K Run</span>
                        </div>
                        <button class="register-btn">Daftar Sekarang</button>
                    </div>
                </div>
                <!-- TGM Fun Run -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="images/TGM Fun Run.jpg" alt="TGM Fun Run 2024">
                        <span class="event-badge">Live</span>
                    </div>
                    <div class="event-details">
                        <h3>TGM Fun Run 2024</h3>
                        <p class="event-info">3 November 2024</p>
                        <p class="event-info">Alas Daun, Bandung, Jawa Barat</p>
                        <div class="distance-tags">
                            <span class="distance-tag">5K Run</span>
                        </div>
                        <button class="register-btn">Daftar Sekarang</button>
                    </div>
                </div>
                <!-- ISEF Run -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="images/isef run.png" alt="ISEF Family Run 2024">
                        <span class="event-badge">Live</span>
                    </div>
                    <div class="event-details">
                        <h3>ISEF Family Run 2024</h3>
                        <p class="event-info">3 November 2024</p>
                        <p class="event-info">JCC, Jakarta</p>
                        <div class="distance-tags">
                            <span class="distance-tag">3K Run</span>
                            <span class="distance-tag">5K Run</span>
                        </div>
                        <button class="register-btn">Daftar Sekarang</button>
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
