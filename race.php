<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Race.id - Race</title>
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
            font-family: 'Libre Franklin', sans-serif;
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
        .hero-section {
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary);
            text-align: center;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
        }
        .hero-content h1 {
            font-size: 48px;
            margin-bottom: 30px;
        }
        .search-bar {
            display: flex;
            gap: 10px;
            max-width: 600px;
            margin: 0 auto;
        }
        .search-bar input {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
        }
        .search-btn {
            padding: 10px 20px;
            background: var(--primary);
            color: var(--secondary);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .search-btn:hover {
            background: var(--gray-dark);
            transform: translateY(-2px);
        }
        .quick-filters {
            padding: 20px;
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        .tag {
            padding: 8px 20px;
            border: 1px solid var(--gray-medium);
            border-radius: 20px;
            background: var(--secondary);
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: var(--primary);
        }
        .tag.active {
            background: var(--primary);
            color: var(--secondary);
            border-color: var(--primary);
        }
        .advanced-filter {
            padding: 20px;
            background: var(--secondary);
            margin: 20px auto;
            max-width: 1200px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .filter-group {
            display: flex;
            gap: 15px;
        }
        .filter-group select,
        .filter-group input {
            padding: 10px;
            border: 1px solid var(--gray-medium);
            border-radius: 8px;
            flex: 1;
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
        .view-all {
            color: var(--primary);
            text-decoration: none;
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
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 32px;
            }
            .filter-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<main class="page-transition">
    <div class="fade-slide-in">
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="hero-content">
                <h1>Find Your Next Race</h1>
                <div class="search-bar">
                    <input type="text" placeholder="Cari event marathon...">
                    <button onclick="window.location.href='search-result-from-race-search.php'" class="search-btn">Search Events</button>
                </div>
            </div>
        </div>

        <!-- Quick Filter Tags -->
        <div class="quick-filters">
            <button class="tag active">Semua</button>
            <a href="5k-races.php" class="tag">5K</a>
            <button class="tag">10K</button>
            <button class="tag">Half Marathon</button>
            <button class="tag">Full Marathon</button>
        </div>

        <!-- Advanced Filter -->
        <div class="advanced-filter">
            <div class="filter-group">
                <select>
                    <option value="">Kategori</option>
                    <option value="road">Road Run</option>
                    <option value="trail">Trail Run</option>
                    <option value="virtual">Virtual Run</option>
                </select>
                <select>
                    <option value="">Lokasi</option>
                    <option value="aceh">Aceh</option>
                    <option value="sumut">Sumatera Utara</option>
                    <option value="sumbar">Sumatera Barat</option>
                    <option value="riau">Riau</option>
                    <option value="jambi">Jambi</option>
                    <option value="sumsel">Sumatera Selatan</option>
                    <option value="bengkulu">Bengkulu</option>
                    <option value="lampung">Lampung</option>
                    <option value="babel">Kepulauan Bangka Belitung</option>
                    <option value="kepri">Kepulauan Riau</option>
                    <option value="jakarta">DKI Jakarta</option>
                    <option value="jabar">Jawa Barat</option>
                    <option value="jateng">Jawa Tengah</option>
                    <option value="yogya">DI Yogyakarta</option>
                    <option value="jatim">Jawa Timur</option>
                    <option value="banten">Banten</option>
                    <option value="bali">Bali</option>
                    <option value="ntb">Nusa Tenggara Barat</option>
                    <option value="ntt">Nusa Tenggara Timur</option>
                    <option value="kalbar">Kalimantan Barat</option>
                    <option value="kalteng">Kalimantan Tengah</option>
                    <option value="kalsel">Kalimantan Selatan</option>
                    <option value="kaltim">Kalimantan Timur</option>
                    <option value="kalut">Kalimantan Utara</option>
                    <option value="sulut">Sulawesi Utara</option>
                    <option value="sulteng">Sulawesi Tengah</option>
                    <option value="sulsel">Sulawesi Selatan</option>
                    <option value="sultengg">Sulawesi Tenggara</option>
                    <option value="gorontalo">Gorontalo</option>
                    <option value="sulbar">Sulawesi Barat</option>
                    <option value="maluku">Maluku</option>
                    <option value="malut">Maluku Utara</option>
                    <option value="papuabarat">Papua Barat</option>
                    <option value="papua">Papua</option>
                    <option value="papuaselatan">Papua Selatan</option>
                    <option value="papuatengah">Papua Tengah</option>
                    <option value="papuapegunungan">Papua Timur</option>
                </select>
                <input type="date" placeholder="Tanggal">
                <button onclick="window.location.href='search-results.php'" class="search-btn">Search Events</button>
            </div>
        </div>

        <!-- Live Events Section -->
        <section class="event-section">
            <div class="section-header">
                <h2>Event Berlangsung</h2>
                <a href="live-events.php" class="view-all">Lihat Semua</a>
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
                        <p class="event-info">Plaza Gajah Mada TMII, Jakarta Timur</p>
                        <div class="distance-tags">
                            <span class="distance-tag">5K Run</span>
                            <span class="distance-tag">10K Run</span>
                        </div>
                        <button onclick="window.location.href='race-details.php'" class="register-btn">Detail</button>
                    </div>
                </div>

                <!-- Arutmin Run Card -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="images/arutmin.jpg" alt="Arutmin Borneo Run 2024">
                        <span class="event-badge">Live</span>
                    </div>
                    <div class="event-details">
                        <h3>Arutmin Borneo Run 2024</h3>
                        <p class="event-info">3 November 2024</p>
                        <p class="event-info">Banjarbaru, Kalimantan Selatan</p>
                        <div class="distance-tags">
                            <span class="distance-tag">5K Run</span>
                            <span class="distance-tag">10K Run</span>
                        </div>
                        <button class="register-btn">Detail</button>
                    </div>
                </div>

                <!-- Victoria Run Card -->
                <div class="event-card">
                    <div class="event-image">
                        <img src="images/victoria.png" alt="Victoria Run 2024">
                        <span class="event-badge">Live</span>
                    </div>
                    <div class="event-details">
                        <h3>Victoria Run 2024</h3>
                        <p class="event-info">3 November 2024</p>
                        <p class="event-info">QBIG, BSD</p>
                        <div class="distance-tags">
                            <span class="distance-tag">5K Run</span>
                            <span class="distance-tag">10K Run</span>
                            <span class="distance-tag">HM </span>
                            <span class="distance-tag">30K</span>
                        </div>
                        <button class="register-btn">Detail</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Upcoming Events Section -->
        <section class="event-section">
            <div class="section-header">
                <h2>Event Mendatang</h2>
                <a href="upcoming-events.php" class="view-all">Lihat Semua</a>
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
                            <span class="distance-tag">HM </span>
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
            </div>
        </section>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Background image rotation for hero section
    const heroSection = document.querySelector('.hero-section');
    const images = [
        'images/marathon.jpeg',
        'images/marathon2.jpg',
        'images/marathon3.jpg'
    ];
    let currentIndex = 0;

    function changeBackground() {
        currentIndex = (currentIndex + 1) % images.length;
        heroSection.style.backgroundImage = `url(${images[currentIndex]})`;
    }

    // Set initial background
    heroSection.style.backgroundImage = `url(${images[currentIndex]})`;

    // Change background every 7 seconds
    setInterval(changeBackground, 7000);

    // Quick Filter functionality
    const filterTags = document.querySelectorAll('.tag');
    filterTags.forEach(tag => {
        tag.addEventListener('click', () => {
            filterTags.forEach(t => t.classList.remove('active'));
            tag.classList.add('active');
        });
    });

    const filterButton = document.querySelector('.filter-section .register-btn');
    filterButton.addEventListener('click', function() {
        const date = "2024-11-03";
        const type = "10K";
        const location = "Jakarta";

        const formattedDate = new Date(date).toLocaleDateString('id-ID', {
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });

        const filteredSection = document.querySelector('#filteredResults');
        filteredSection.style.display = 'block';

        const filterTags = document.querySelector('#filterTags');
        filterTags.textContent = `${formattedDate} • ${type} • ${location}`;

        const eventGrid = document.querySelector('.filtered-results .event-grid');
        eventGrid.innerHTML = `
            <div class="event-card fade-slide-in">
                <div class="event-image">
                    <img src="images/salonpas.png" alt="Salonpas Run 2024">
                    <span class="event-badge">Upcoming</span>
                </div>
                <div class="event-details">
                    <h3>Salonpas Run 2024</h3>
                    <p class="event-info">3 November 2024</p>
                    <p class="event-info">Jakarta</p>
                    <p class="event-info">10K Run</p>
                    <button class="register-btn">Daftar Sekarang</button>
                </div>
            </div>
        `;
        filteredSection.scrollIntoView({ behavior: 'smooth' });
    });
});
</script>

<?php include 'footer.php'; ?>