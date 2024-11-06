<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Race.id</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
          /* Animation styles */
          .faq-container {
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

        .faq-container {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .faq-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .faq-header h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 15px;
        }

        .faq-header p {
            color: #666;
            font-size: 1.1em;
        }

        .faq-categories {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
        }

        .category-btn {
            padding: 10px 20px;
            border: none;
            background: white;
            border-radius: 25px;
            cursor: pointer;
            font-family: 'Libre Franklin', sans-serif;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .category-btn.active {
            background: #333;
            color: white;
        }
        .faq-item {
            background: white;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            overflow: hidden;
            opacity: 1;
            transform: translateY(0);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .faq-item.fade-out {
            opacity: 0;
            transform: translateY(30px);
            margin-bottom: 0;
            padding: 0;
            height: 0;
        }

        .faq-item.fade-in {
            opacity: 1;
            transform: translateY(0);
            height: auto;
        }
        .faq-question {
            padding: 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .faq-question:hover {
            background: #f9f9f9;
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            color: #666;
        }

        .faq-answer.active {
            padding: 20px;
            max-height: 500px;
        }

        .toggle-icon {
            font-size: 1.2em;
            transition: transform 0.3s ease;
        }

        .faq-item.active .toggle-icon {
            transform: rotate(45deg);
        }

        .search-box {
            margin-bottom: 30px;
            text-align: center;
        }

        .search-input {
            width: 100%;
            max-width: 500px;
            padding: 15px 25px;
            border: none;
            border-radius: 25px;
            font-size: 1em;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
    <div class="faq-container">
        <div class="faq-header">
            <h1>Frequently Asked Questions</h1>
            <p>Find answers to common questions about Race.id</p>
        </div>

        <div class="search-box">
            <input type="text" class="search-input" placeholder="Search your question...">
        </div>

        <div class="faq-categories">
            <button class="category-btn active">All</button>
            <button class="category-btn">Events</button>
            <button class="category-btn">Membership</button>
            <button class="category-btn">Payment</button>
        </div>
          <div class="faq-list">
              <div class="faq-item" data-category="events">
                  <div class="faq-question">
                      How do I register for an event?
                      <span class="toggle-icon">+</span>
                  </div>
                  <div class="faq-answer">
                      To register for an event, simply browse our events page, select your desired event, and click the "Register" button. Follow the registration process and complete the payment to secure your spot.
                  </div>
              </div>

              <div class="faq-item" data-category="membership">
                  <div class="faq-question">
                      What are membership benefits?
                      <span class="toggle-icon">+</span>
                  </div>
                  <div class="faq-answer">
                      Members enjoy exclusive benefits including early bird registration, special discounts, points rewards system, and access to premium content and special events.
                  </div>
              </div>

              <div class="faq-item" data-category="payment">
                  <div class="faq-question">
                      Apa saja metode pembayaran yang diterima?
                      <span class="toggle-icon">+</span>
                  </div>
                  <div class="faq-answer">
                      Kami menerima berbagai metode pembayaran termasuk kartu kredit, transfer bank, dan e-wallet seperti GoPay dan OVO.
                  </div>
              </div>

              <div class="faq-item" data-category="events">
                  <div class="faq-question">
                      What should I bring on race day?
                      <span class="toggle-icon">+</span>
                  </div>
                  <div class="faq-answer">
                      Please bring your race confirmation email, valid ID, and your own hydration system. Don't forget comfortable running gear and proper running shoes.
                  </div>
              </div>
          </div>
      </div>

      <script>
          // Toggle FAQ answers
          document.querySelectorAll('.faq-question').forEach(question => {
              question.addEventListener('click', () => {
                  const item = question.parentElement;
                  const answer = question.nextElementSibling;
                
                  // Close other open items
                  document.querySelectorAll('.faq-item').forEach(otherItem => {
                      if (otherItem !== item && otherItem.classList.contains('active')) {
                          otherItem.classList.remove('active');
                          otherItem.querySelector('.faq-answer').classList.remove('active');
                      }
                  });

                  // Toggle current item
                  item.classList.toggle('active');
                  answer.classList.toggle('active');
              });
          });
            // Updated Category filter
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    document.querySelector('.category-btn.active').classList.remove('active');
                    btn.classList.add('active');
                  
                    const selectedCategory = btn.textContent.toLowerCase();
                  
                    document.querySelectorAll('.faq-item').forEach(item => {
                        item.classList.add('hidden');
                      
                        setTimeout(() => {
                            if (selectedCategory === 'all') {
                                item.style.display = 'block';
                            } else {
                                item.style.display = item.dataset.category === selectedCategory ? 'block' : 'none';
                            }
                          
                            setTimeout(() => {
                                if (item.style.display === 'block') {
                                    item.classList.remove('hidden');
                                    item.classList.add('visible');
                                }
                            }, 50);
                        }, 400);
                    });
                });
            });
          // Search functionality
          const searchInput = document.querySelector('.search-input');
          searchInput.addEventListener('input', (e) => {
              const searchTerm = e.target.value.toLowerCase();
              document.querySelectorAll('.faq-item').forEach(item => {
                  const question = item.querySelector('.faq-question').textContent.toLowerCase();
                  const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                
                  if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                      item.style.display = 'block';
                  } else {
                      item.style.display = 'none';
                  }
              });
          });
      </script>
  </body>
</html>

<?php include 'footer.php'; ?>
