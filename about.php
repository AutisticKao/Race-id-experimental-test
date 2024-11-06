<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Race.id</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Animation styles */
    .about-container {
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
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .about-container {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .hero-section {
            text-align: center;
            margin-bottom: 60px;
        }

        .hero-title {
            font-size: 2.5em;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.2em;
            color: #666;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }

        .content-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-top: 40px;
        }

        .info-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-title {
            font-size: 1.2em;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .info-content {
            color: #666;
            line-height: 1.6;
        }

        .contact-section {
            text-align: center;
            margin-top: 60px;
            padding: 40px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .contact-title {
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #333;
        }

        .contact-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
        }

        .contact-link {
            color: #333;
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid #ddd;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .contact-link:hover {
            background: #333;
            color: white;
            border-color: #333;
        }

        @media (max-width: 768px) {
            .content-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="about-container">
        <section class="hero-section">
            <h1 class="hero-title">About Race.id</h1>
            <p class="hero-subtitle">Platform komunitas lari terdepan di Indonesia yang menghubungkan pelari dengan event-event berkualitas dan produk terbaik untuk mendukung performa Anda.</p>
        </section>

        <div class="content-grid">
            <div class="info-card">
                <h3 class="info-title">Visi Kami</h3>
                <p class="info-content">Menjadi platform terpercaya yang menginspirasi dan mendukung komunitas pelari Indonesia untuk mencapai potensi terbaik mereka.</p>
            </div>

            <div class="info-card">
                <h3 class="info-title">Misi Kami</h3>
                <p class="info-content">Menyediakan akses mudah ke event lari berkualitas, informasi terpercaya, dan produk terbaik untuk mendukung perjalanan lari Anda.</p>
            </div>

            <div class="info-card">
                <h3 class="info-title">Layanan Kami</h3>
                <p class="info-content">Event Management, Membership Rewards, Equipment Store, dan Artikel Informatif untuk komunitas pelari Indonesia.</p>
            </div>

            <div class="info-card">
                <h3 class="info-title">Lokasi</h3>
                <p class="info-content">Jakarta, Indonesia<br>
                Phone: (021) 123-4567<br>
                Email: info@race.id</p>
            </div>
        </div>

        <section class="contact-section">
            <h2 class="contact-title">Mari Berkolaborasi</h2>
            <p>Tertarik untuk bekerjasama dengan Race.id?</p>
            <div class="contact-links">
                <a href="#" class="contact-link" id="partnership-btn">Partnership</a>
                <a href="#" class="contact-link" id="eo-btn">Event Organizer</a>
            </div>
        </section>
    </div>

<!-- Update style modal -->
<style>
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 1000;
        overflow-y: auto; /* Enable scrolling */
        padding: 20px 0;
    }

    /* Form khusus EO */
    .eo-form {
        display: none;
    }

    .eo-form .form-group {
        margin-bottom: 20px;
    }

    /* Tambahan field untuk EO */
    .form-group.half {
        display: inline-block;
        width: 48%;
        margin-right: 2%;
    }

    .form-group.half:nth-child(even) {
        margin-right: 0;
    }
</style>

<!-- Tambahkan form EO -->
<div id="eo-form" class="modal">
    <div class="modal-content">
        <span class="close-btn">×</span>
        <h2>Event Organizer Registration</h2>
        <form class="partnership-form">
            <div class="form-group">
                <label>Organization Name</label>
                <input type="text" required>
            </div>
            
            <div class="form-group half">
                <label>PIC Name</label>
                <input type="text" required>
            </div>
            
            <div class="form-group half">
                <label>Position</label>
                <input type="text" required>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" required>
            </div>
            
            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" required>
            </div>
            
            <div class="form-group">
                <label>Previous Events Portfolio</label>
                <textarea rows="4" placeholder="List your previous running events"></textarea>
            </div>
            
            <div class="form-group">
                <label>Upcoming Event Plans</label>
                <textarea rows="4" placeholder="Tell us about your upcoming event plans"></textarea>
            </div>
            
            <div class="form-group">
                <label>Why Choose Race.id?</label>
                <textarea rows="4" placeholder="Tell us why you want to partner with Race.id"></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Submit Application</button>
        </form>
    </div>
</div>

<script>
    // Update event listeners
    document.getElementById('partnership-btn').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('partnership-form').style.display = 'block';
    });

    document.getElementById('eo-btn').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('eo-form').style.display = 'block';
    });

    // Close buttons
    document.querySelectorAll('.close-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            this.closest('.modal').style.display = 'none';
        });
    });

    // Close when clicking outside
    window.addEventListener('click', function(e) {
        if (e.target.classList.contains('modal')) {
            e.target.style.display = 'none';
        }
    });
</script></body>
</html>

<?php include 'footer.php'; ?>

<!-- Tambahkan di bagian bawah sebelum closing div.about-container -->
<div id="partnership-form" class="modal">
    <div class="modal-content">
        <span class="close-btn">×</span>
        <h2>Partnership Form</h2>
        <form class="partnership-form">
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" required>
            </div>
            
            <div class="form-group">
                <label>Business Type</label>
                <select required>
                    <option value="">Select Type</option>
                    <option value="event">Event Organizer</option>
                    <option value="brand">Brand/Sponsor</option>
                    <option value="media">Media Partner</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Contact Person</label>
                <input type="text" required>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" required>
            </div>
            
            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" required>
            </div>
            
            <div class="form-group">
                <label>Partnership Proposal</label>
                <textarea rows="4" placeholder="Tell us about your partnership idea"></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Submit Proposal</button>
        </form>
    </div>
</div>

<style>
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 1000;
    }

    .modal-content {
        background: white;
        width: 90%;
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        border-radius: 12px;
        position: relative;
        animation: slideDown 0.3s ease;
    }

    .close-btn {
        position: absolute;
        right: 20px;
        top: 20px;
        font-size: 24px;
        cursor: pointer;
        color: #666;
    }

    .partnership-form {
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 500;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-family: 'Libre Franklin', sans-serif;
    }

    .submit-btn {
        background: #333;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        cursor: pointer;
        font-family: 'Libre Franklin', sans-serif;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        background: #555;
        transform: translateY(-2px);
    }

    @keyframes slideDown {
        from {
            transform: translateY(-100px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
  <script>
      // Event listeners untuk tombol buka form
      document.getElementById('partnership-btn').addEventListener('click', function(e) {
          e.preventDefault();
          document.getElementById('partnership-form').style.display = 'block';
      });

      document.getElementById('eo-btn').addEventListener('click', function(e) {
          e.preventDefault();
          document.getElementById('eo-form').style.display = 'block';
      });

      // Update event listeners untuk close buttons
      document.querySelectorAll('.close-btn').forEach(button => {
          button.addEventListener('click', function() {
              document.getElementById('partnership-form').style.display = 'none';
              document.getElementById('eo-form').style.display = 'none';
          });
      });

      // Close when clicking outside
      window.addEventListener('click', function(e) {
          if (e.target == document.getElementById('partnership-form')) {
              document.getElementById('partnership-form').style.display = 'none';
          }
      });

      // Form submission
      document.querySelector('.partnership-form').addEventListener('submit', function(e) {
          e.preventDefault();
          alert('Thank you for your interest! We will review your proposal and contact you soon.');
          document.getElementById('partnership-form').style.display = 'none';
          this.reset();
      });
  </script>
