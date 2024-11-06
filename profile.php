<?php include 'header.php'; ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap');

    /* Base Styles */
    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        font-family: 'Libre Franklin', sans-serif;
    }

    header {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    main {
        flex: 1;
        margin: 0;
        padding: 40px 20px;
        background: #f8f8f8;
    }

    footer {
        width: 100%;
        margin: 0;
        padding: 0;
        background: white;
    }

    .footer-content {
        margin: 0;
        padding: 20px;
    }

    /* Prevent horizontal scroll */
    body {
        overflow-x: hidden;
        width: 100%;
    }

    /* Adjust container widths */
    .profile-grid {
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
        gap: 30px;
        display: grid;
        grid-template-columns: 300px minmax(0, 1fr);
        padding: 0 20px;
        box-sizing: border-box;
    }

    .tab-content {
        width: 100%;
        position: relative;
    }

    .best-times-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        width: 100%;
    }

    .achievements-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        width: 100%;
    }
    /* Profile Card Styles */
    .profile-card {
        background: white;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Profile Content Area */
    .profile-content {
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        width: 100%;
        box-sizing: border-box;
    }

    main {
        flex: 1;
        margin: 0;
        padding: 40px 0;
        background: #f8f8f8;
    }

    .profile-picture {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        margin: 0 auto 20px;
        background: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3em;
    }

    .profile-name {
        font-size: 1.5em;
        font-weight: 600;
        margin: 0;
    }

    .profile-email {
        color: #666;
        margin: 5px 0 20px;
    }

    /* Profile Stats */
    .profile-stats {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        margin: 20px 0;
        padding: 20px 0;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-size: 1.5em;
        font-weight: 600;
        color: #ff4d4d;
    }

    /* Profile Content Area */
    .profile-content {
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Navigation Tabs */
    .nav-tabs {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    }

    .nav-tab {
        color: #666;
        text-decoration: none;
        padding: 10px 0;
        font-weight: 500;
        position: relative;
    }

    .nav-tab.active {
        color: #ff4d4d;
    }

    .nav-tab.active::after {
        content: '';
        position: absolute;
        bottom: -11px;
        left: 0;
        width: 100%;
        height: 2px;
        background: #ff4d4d;
    }

    /* Overview Section Styles */
    .overview-section {
        margin-bottom: 40px;
    }

    .overview-section h3 {
        color: #333;
        margin-bottom: 20px;
    }

    .best-times-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .time-card {
        background: #f8f8f8;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }

    .time-card .distance {
        font-weight: 600;
        color: #ff4d4d;
        margin-bottom: 5px;
    }

    .time-card .time {
        font-size: 1.5em;
        font-weight: 700;
        margin-bottom: 5px;
        font-variant-numeric: tabular-nums;
        font-feature-settings: "tnum";
    }

    .time-card .date {
        font-size: 0.9em;
        color: #666;
    }

    .achievements-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .achievement-card {
        display: flex;
        align-items: center;
        gap: 15px;
        background: #f8f8f8;
        padding: 20px;
        border-radius: 10px;
    }

    .medal-icon {
        font-size: 2em;
    }

    .achievement-details h4 {
        margin: 0;
        color: #333;
    }

    .achievement-details p {
        margin: 5px 0 0;
        color: #666;
        font-size: 0.9em;
    }

    /* Events History Styles */
    .events-history {
        margin-top: 20px;
    }

    .event-item {
        display: flex;
        gap: 20px;
        padding: 20px;
        border-bottom: 1px solid #eee;
    }

    .event-date {
        min-width: 100px;
        color: #666;
        font-weight: 500;
    }

    .event-details h4 {
        margin: 0 0 5px 0;
        color: #333;
    }

    .event-category {
        color: #666;
        margin: 0 0 10px 0;
    }

    .event-medal {
        background: #fff8e5;
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 0.9em;
        margin-right: 10px;
    }

    .finish-time {
        color: #666;
        font-size: 0.9em;
    }

    /* Animation Styles */
    .tab-content > div {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        transform: translateX(0);
        position: relative;
    }

    .tab-content > div.hidden {
        opacity: 0;
        transform: translateX(20px);
        position: absolute;
        width: 100%;
    }
    
</style>

<main>
    <div class="profile-grid">
        <div class="profile-card">
            <div class="profile-picture">👤</div>
            <h2 class="profile-name">John Doe</h2>
            <p class="profile-email">john.doe@example.com</p>
            
            <div class="profile-stats">
                <div class="stat-item">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Events</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Medals</div>
                </div>
            </div>
            
            <button class="edit-profile">Edit Profile</button>
        </div>

        <div class="profile-content">
            <div class="nav-tabs">
                <a href="#" class="nav-tab active">Overview</a>
                <a href="#" class="nav-tab">Events History</a>
            </div>

            <div class="tab-content">
                <!-- Overview Content -->
                <div class="overview-content">
                    <!-- Personal Best Times -->
                    <div class="overview-section">
                        <h3>Personal Best Times</h3>
                        <div class="best-times-grid">
                            <div class="time-card">
                                <div class="distance">5K</div>
                                <div class="time">22:45</div>
                                <div class="date">Oct 2023</div>
                            </div>
                            <div class="time-card">
                                <div class="distance">10K</div>
                                <div class="time">48:30</div>
                                <div class="date">Aug 2023</div>
                            </div>
                            <div class="time-card">
                                <div class="distance">21.1K</div>
                                <div class="time">1:52:15</div>
                                <div class="date">Sep 2023</div>
                            </div>
                            <div class="time-card">
                                <div class="distance">42.2K</div>
                                <div class="time">4:32:00</div>
                                <div class="date">Nov 2023</div>
                            </div>
                        </div>
                    </div>

                    <!-- Achievement Highlights -->
                    <div class="overview-section">
                        <h3>Achievement Highlights</h3>
                        <div class="achievements-grid">
                            <div class="achievement-card">
                                <div class="medal-icon">🏅</div>
                                <div class="achievement-details">
                                    <h4>Gold Medal</h4>
                                    <p>Jakarta Marathon 2023</p>
                                </div>
                            </div>
                            <div class="achievement-card">
                                <div class="medal-icon">🏃</div>
                                <div class="achievement-details">
                                    <h4>1000KM Club</h4>
                                    <p>Total Distance Milestone</p>
                                </div>
                            </div>
                            <div class="achievement-card">
                                <div class="medal-icon">⭐</div>
                                <div class="achievement-details">
                                    <h4>Sub 2-Hour</h4>
                                    <p>Half Marathon Achievement</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Events History Content -->
                <div class="events-history" style="display: none;">
                    <div class="event-item">
                        <div class="event-date">20 Nov 2023</div>
                        <div class="event-details">
                            <h4>Jakarta Marathon 2023</h4>
                            <p class="event-category">Full Marathon • 42.2K</p>
                            <span class="event-medal">🏅 Gold Medal</span>
                            <span class="finish-time">Finish Time: 4h 32m</span>
                        </div>
                    </div>
                    
                    <div class="event-item">
                        <div class="event-date">15 Oct 2023</div>
                        <div class="event-details">
                            <h4>Borobudur Marathon</h4>
                            <p class="event-category">Half Marathon • 21.1K</p>
                            <span class="event-medal">🏅 Silver Medal</span>
                            <span class="finish-time">Finish Time: 2h 15m</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.nav-tab');
    const overviewContent = document.querySelector('.overview-content');
    const eventsHistory = document.querySelector('.events-history');

    // Set initial state
    eventsHistory.classList.add('hidden');
    eventsHistory.style.display = 'block';

    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            
            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            if (this.textContent === 'Overview') {
                eventsHistory.classList.add('hidden');
                overviewContent.classList.remove('hidden');
            } else {
                overviewContent.classList.add('hidden');
                eventsHistory.classList.remove('hidden');
            }
                // Counter animation for Personal Best Times
    function animateValue(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            
            const currentValue = Math.floor(progress * (end - start) + start);
            const minutes = Math.floor(currentValue / 60);
            const seconds = currentValue % 60;
            element.textContent = `${minutes}:${seconds.toString().padStart(2, '0')}`;
            
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    const timeElements = document.querySelectorAll('.time');
    timeElements.forEach(element => {
        const timeText = element.textContent;
        const [minutes, seconds] = timeText.split(':').map(Number);
        const totalSeconds = minutes * 60 + seconds;
        
        element.textContent = '0:00';
        animateValue(element, 0, totalSeconds, 2000);
    });
});

});
});
</script>

<?php include 'footer.php'; ?>
