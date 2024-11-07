<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Race.id - Article</title>

<style>
/* Animation styles */
main {
        animation: fadeSlideIn 0.5s ease-out;
    }

    @keyframes fadeSlideIn {
        0% {
            opacity: 0;
            transform: translateX(-20px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    body {
        font-family: 'Libre Franklin', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
    }

    main {
        max-width: 1200px;
        margin: 60px auto;
        padding: 0 20px;
    }

    .articles-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .article-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .article-card:hover {
        transform: translateY(-5px);
    }

    .article-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .article-content {
        padding: 20px;
    }

    .article-category {
        color: #ff4d4d;
        font-size: 0.9em;
        margin-bottom: 10px;
    }

    .article-title {
        font-size: 1.4em;
        margin: 0 0 10px 0;
        color: #333;
    }

    .article-excerpt {
        color: #666;
        margin-bottom: 15px;
        line-height: 1.6;
    }

    .article-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #999;
        font-size: 0.9em;
        border-top: 1px solid #eee;
        padding-top: 15px;
    }

    .read-more {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .read-more:hover {
        color: #ff4d4d;
    }
</style>

<main>
    <h1>Latest Articles</h1>
    <div class="articles-grid">

        <!-- Article Card 1 -->
        <div class="article-card">
            <img src="images/Article 1.jpg" alt="Article 1" class="article-image">
            <div class="article-content">
                <div class="article-category">Training</div>
                <h2 class="article-title">10 Essential Tips for Marathon Training</h2>
                <p class="article-excerpt">Master your marathon preparation with these proven training strategies that will help you cross the finish line strong.</p>
                <div class="article-meta">
                    <span>5 min read</span>
                    <a href="article-details.php" class="read-more">Read More →</a>
                </div>
            </div>
        </div>

        <!-- Article Card 2 -->
        <div class="article-card">
            <img src="images/Article 2.jpg" alt="Article 2" class="article-image">
            <div class="article-content">
                <div class="article-category">Nutrition</div>
                <h2 class="article-title">Best Pre-Race Nutrition Guide</h2>
                <p class="article-excerpt">Learn what to eat before your big race to maximize your performance and avoid hitting the wall.</p>
                <div class="article-meta">
                    <span>4 min read</span>
                    <a href="#" class="read-more">Read More →</a>
                </div>
             </div>
        </div>

        <!-- Article Card 3 -->
        <div class="article-card">
            <img src="images/Article 3.jpg" alt="Article 3" class="article-image">
            <div class="article-content">
                <div class="article-category">Gear</div>
                <h2 class="article-title">Choosing the Right Running Shoes</h2>
                <p class="article-excerpt">Find the perfect running shoes for your foot type and running style with our comprehensive guide.</p>
                <div class="article-meta">
                    <span>6 min read</span>
                    <a href="#" class="read-more">Read More →</a>
                </div>

            </div>
        </div>
            <!-- Article Card 4 -->
            <div class="article-card">
            <img src="images/Article 4.jpg" alt="Article 4" class="article-image">
            <div class="article-content">
                <div class="article-category">Recovery</div>
                <h2 class="article-title">Post-Run Recovery Techniques</h2>
                <p class="article-excerpt">Discover effective recovery methods to help your body bounce back faster after intense training sessions.</p>
                <div class="article-meta">
                    <span>7 min read</span>
                    <a href="#" class="read-more">Read More →</a>
                </div>
            </div>
        </div>

         <!-- Article Card 5 -->
         <div class="article-card">
            <img src="images/Article 5.jpg" alt="Article 5" class="article-image">
            <div class="article-content">
                <div class="article-category">Motivation</div>
                <h2 class="article-title">Stay Motivated During Training</h2>
                <p class="article-excerpt">Learn powerful mental strategies to keep your motivation high throughout your training journey.</p>
                <div class="article-meta">
                    <span>5 min read</span>
                    <a href="#" class="read-more">Read More →</a>
                </div>
            </div>
        </div>

       <!-- Article Card 6 -->
        <div class="article-card">
            <img src="images/Article 6.jpg" alt="Article 6" class="article-image">
            <div class="article-content">
                <div class="article-category">Training</div>
                <h2 class="article-title">Speed Training for Runners</h2>
                <p class="article-excerpt">Master the art of speed with these proven interval training workouts for all levels, enhancing your pace and endurance.</p>
                <div class="article-meta">
                    <span>8 min read</span>
                    <a href="#" class="read-more">Read More →</a>
                </div>
            </div>
        </div>

        <!-- Article Card 7 -->
        <div class="article-card">
            <img src="images/Article 7.jpg" alt="Article 7" class="article-image">
            <div class="article-content">
                <div class="article-category">Lifestyle</div>
                <h2 class="article-title">Balancing Work and Training</h2>
                <p class="article-excerpt">Tips and strategies for maintaining a successful training schedule while managing a busy career.</p>
                <div class="article-meta">
                    <span>6 min read</span>
                    <a href="#" class="read-more">Read More →</a>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'footer.php'; ?>
