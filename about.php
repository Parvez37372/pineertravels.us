<?php include("include/header.php");?>

<style>
    .main {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .hero-section {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 50px 20px;
          background-image: url('assest/img/title-banner.webp');
        flex-wrap: wrap;
        text-align: center;
    }

    .left-content,
    .right-content {
        flex: 1;
        display: flex;
        justify-content: center;
        margin: 10px;
    }

    .center-content {
        flex: 2;
        text-align: center;
    }

    .center-content h1 {
        font-size: 36px;
        font-weight: bold;
        color: #333;
    }

    .left-content img,
    .right-content img {
        max-width: 150px;
        height: auto;
    }
    /*new*/
    .history-section {
  display: flex;
  flex-wrap: wrap;
  background: white;
  border-radius: 20px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  overflow: hidden;
  padding: 2rem;
  gap: 2rem;
}

.history-left {
  flex: 1 1 400px;
  max-width: 600px;
}

.history-left h2 {
  font-size: 2rem;
  margin-bottom: 0.5rem;
}

.history-left .since {
  color: #3b82f6;
  font-weight: bold;
  margin-bottom: 1rem;
}

.history-left .description {
  color: #333;
  font-size: 0.95rem;
  margin-bottom: 2rem;
}

.features {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
  gap: 1rem;
}
.feature-box i {
  color: #3b82f6;
  font-size: 1.8rem;
  transition: color 0.3s ease, transform 0.3s ease;
}

.feature-box:hover i {
  color: #1d4ed8; /* Darker blue */
  transform: scale(1.2) rotate(5deg);
}

.feature-box:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

.feature-box {
  background: #f1f2f6;
  padding: 1rem;
  border-radius: 16px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 0.5rem;
}

.feature-box i {
  color: #3b82f6;
  font-size: 1.8rem;
}

.feature-box p {
  margin: 0;
  font-size: 1rem;
  color: #111;
}

.history-right {
  flex: 1 1 300px;
}

.image-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1rem;
}

.image-grid img {
  width: 100%;
  height: auto;
  border-radius: 16px;
  object-fit: cover;
}
.image-grid img {
  width: 100%;
  height: auto;
  border-radius: 16px;
  object-fit: cover;

  transition: transform 0.4s ease, opacity 0.4s ease;
  opacity: 0.9;
}

.image-grid img:hover {
  transform: scale(1.05);  /* Zoom in */
  opacity: 1;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}
.faq-wrapper {
  display: flex;
  min-height: 100vh;
  background: white;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
}
.faq-image {
  flex: 1;
}
.faq-image {
  flex: 1;
  padding: 50px;
}
.faq-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}
.faq-content {
  flex: 1;
  padding: 3rem;
  overflow-y: auto;
}
.faq-content h2 {
  font-size: 2rem;
  color: #111827;
  margin-bottom: 2rem;
}
.faq-item {
  margin-bottom: 1rem;
  border-bottom: 1px solid #e5e7eb;
}
.faq-question {
  background: none;
  border: none;
  font-size: 1.1rem;
  font-weight: 600;
  color: #1d4ed8;
  width: 100%;
  text-align: left;
  padding: 1rem 0;
  cursor: pointer;
  position: relative;
}
.faq-question::after {
  content: '+';
  position: absolute;
  right: 0;
  font-size: 1.3rem;
  color: #1d4ed8;
  transition: transform 0.3s ease;
}
.faq-question.active::after {
  content: '-';
}
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease;
  color: #4b5563;
}
.faq-answer.open {
  max-height: 200px;
  margin-bottom: 1rem;
}
@media (max-width: 768px) {
  .faq-wrapper {
    flex-direction: column;
  }

  .faq-image {
    padding: 20px;
  }

  .faq-image img {
    height: auto; /* Let it scale naturally */
    max-height: 300px;
    border-radius: 10px;
  }

  .faq-content {
    padding: 2rem 1.5rem;
  }

  .faq-content h2 {
    font-size: 1.5rem;
  }

  .faq-question {
    font-size: 1rem;
  }
}


    @media (max-width: 768px) {
        .hero-section {
            flex-direction: column;
        }

        .center-content h1 {
            font-size: 28px;
        }

        .left-content img,
        .right-content img {
            max-width: 120px;
        }

    }
</style>
<div class="main">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="left-content">
            <img src="assest/img/vacation.png" alt="Luggage and travel items">
        </div>
        <div class="center-content">
            <h1>About Us</h1>
        </div>
        <div class="right-content">
            <img src="assest/img/plane.png" alt="Airplane">
        </div>
    </section>
    
      <section class="history-section">
    <div class="history-left">
      <h2>Our History</h2>
      <p class="since">About <br> Pioneer Air Travels</p>
      <p class="description">
At Pioneer Air Travels, we believe that every journey should be smooth, memorable, and tailored to your needs. With years of experience in the travel industry, we specialize in providing top-notch flight booking services, personalized itineraries, and unmatched customer support.
      </p>
      <p class="description">
Our mission is to make air travel accessible, efficient, and hassle-free for everyone. Whether you're planning a family vacation, a business trip, or a multi-city adventure, our team is dedicated to ensuring you reach your destination with ease and comfort.
      </p>
      <p class="description">
We partner with leading airlines around the globe to offer competitive prices, flexible booking options, and real-time updates — all in one place. At Pioneer Air Travels, your journey begins with trust, care, and a commitment to excellence.
      </p>

      <div class="features">
        <div class="feature-box">
          <i class="fas fa-car-side"></i>
          <p><strong>Extensive Selection of Luxury Cars</strong></p>
        </div>
        <div class="feature-box">
          <i class="fa-solid fa-plane"></i>
          <p><strong>Well-Maintained & Flight</strong></p>
        </div>
        <div class="feature-box">
          <i class="fas fa-calendar-check"></i>
          <p><strong>Easy and Intuitive Booking Process</strong></p>
        </div>
        <div class="feature-box">
          <i class="fas fa-headset"></i>
          <p><strong>Exceptional Customer Service</strong></p>
        </div>
      </div>
    </div>

    <div class="history-right">
      <div class="image-grid">
        <img src="assest/img/a1.webp" alt="Luxury Car">
        <img src="assest/img/a2.webp" alt="Hotel">
        <img src="assest/img/a3.webp" alt="Teamwork">
        <img src="assest/img/a4.webp" alt="Customer Support">
      </div>
    </div>
  </section>
  
   <section class="faq-wrapper">
    <!-- LEFT IMAGE -->
    <div class="faq-image">
      <img src="https://t4.ftcdn.net/jpg/05/18/89/29/360_F_518892957_b871Ip6w6HTQEAldnDvWI1ITCAPlFlwO.jpg">
    </div>

    <!-- RIGHT FAQ -->
    <div class="faq-content">
      <h2>Frequently Asked Questions</h2>
      <div class="faq-item">
        <button class="faq-question">What destinations do you offer?</button>
        <div class="faq-answer">
          <p>We offer global travel including Europe, Asia, Middle East, and more.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Can I change or cancel my booking?</button>
        <div class="faq-answer">
          <p>Yes, based on the airline’s policy. Please contact our support team.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">Do you offer travel insurance?</button>
        <div class="faq-answer">
          <p>Yes, optional travel insurance can be added during booking.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-question">How do I contact support?</button>
        <div class="faq-answer">
          <p>Reach us via email, phone, or 24/7 live chat support.</p>
        </div>
      </div>
    </div>
  </section>

  <script>
    const faqButtons = document.querySelectorAll('.faq-question');
    faqButtons.forEach(button => {
      button.addEventListener('click', () => {
        const answer = button.nextElementSibling;
        answer.classList.toggle('open');
        button.classList.toggle('active');
      });
    });
  </script>
  
    
    <?php include("include/footer.php");?>