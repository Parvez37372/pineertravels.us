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
        max-width: 180px;
        height: auto;
    }
.step-progress {
  display: flex;
  align-items: center;
  background: #f9f9fc;
  padding: 1.5rem 2.5rem;
  border-radius: 12px;
  
  justify-content: center;
  gap: 1.5rem;
  flex-wrap: wrap;
}

.step {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  color: #4b5563;
  font-weight: 600;
  font-size: 1.1rem;
}

.circle {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  border: 2px solid #d1d5db;
  color: #374151;
  font-size: 1rem;
}

.step.completed .circle {
  background: #3b82f6;
  color: white;
  border-color: #3b82f6;
}

.step.active .circle {
  background: white;
  color: #3b82f6;
  border-color: #3b82f6;
  font-weight: bold;
}

.step.completed .label,
.step.active .label {
  color: #111827;
}

.divider {
  flex: 1;
  height: 2px;
  background: #cbd5e1;
  max-width: 80px;
}

    .contu {
      display: flex;
      flex-wrap: wrap;
      background: #ffffff;
      margin-top:50px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .form-sectiones {
      flex: 1;
      padding: 2rem;
      min-width: 320px;
    }

    .form-sectiones h2 {
      margin-bottom: 1.5rem;
      font-size: 1.8rem;
      color: #111827;
    }

    .trip-buttons {
      display: flex;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .trip-buttons button {
      flex: 1;
      padding: 0.8rem;
      border: none;
      border-radius: 8px;
      background: #e5e7eb;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .trip-buttons button.active {
      background: #2563eb;
      color: white;
    }

    .form-row {
      display: flex;
      gap: 1.5rem;
      margin-bottom: 1.2rem;
    }

    .form-group {
      flex: 1;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: #374151;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 0.65rem 0.75rem;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      font-size: 1rem;
      color: #111827;
      background: #f9fafb;
    }

    .multi-city {
      margin-bottom: 1.5rem;
    }

    .image-section {
      flex: 1;
      min-width: 300px;
      max-height: 600px;
    }

  .image-section {
  padding: 30px;
}
.image-section img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 15px;
  display: block;
}


    .book-btn {
      width: 100%;
      padding: 0.9rem;
      border: none;
      background: #2563eb;
      color: white;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease-in-out;
    }

    .book-btn:hover {
      background: #1e40af;
    }

    button[type="button"] {
      background: transparent;
      border: 1px dashed #6b7280;
      color: #374151;
      padding: 0.5rem 1rem;
      border-radius: 6px;
      cursor: pointer;
      margin-bottom: 1rem;
    }

    @media (max-width: 768px) {
      .contu {
        flex-direction: column;
      }

      .form-row {
        flex-direction: column;
      }

      .image-section {
        height: 200px;
      }
    }
@media (max-width: 480px) {
  .step-progress {
    flex-direction: column;
    align-items: flex-start;
  }

  .divider {
    display: none;
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
            max-width: 150px;
        }
    }
    </style>
</style>
<div class="main">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="left-content">
            <img src="assest/img/vacation.png" alt="Luggage and travel items">
        </div>
        <div class="center-content">
            <h1>Book Your Dream Flight</h1>
        </div>
        <div class="right-content">
            <img src="assest/img/plane.png" alt="flight">
        </div>
    </section>
    </div>
    <div class="step-progress">
  <div class="step completed">
    <span class="circle">✔</span>
    <span class="label">Your Selection</span>
  </div>
  <div class="divider"></div>
  <div class="step active">
    <span class="circle">2</span>
    <span class="label">Your Details</span>
  </div>
  <div class="divider"></div>
  <div class="step">
    <span class="circle">3</span>
    <span class="label">Final Step</span>
  </div>
</div>
 <div class="contu">
    <div class="form-sectiones">
      <h2>Book Your Flight</h2>
      <div class="trip-buttons">
        <button class="trip-btn active" onclick="showForm('oneWay', event)">One Way</button>
        <button class="trip-btn" onclick="showForm('roundTrip', event)">Round Trip</button>
        <button class="trip-btn" onclick="showForm('multiCity', event)">Multi-City</button>
      </div>

      <form id="cabForm">
        <div id="formFields"></div>
        <button type="submit" class="book-btn">Book Now</button>
      </form>
    </div>
    <div class="image-section">
      <img src="https://images.ctfassets.net/pdf29us7flmy/5ExZrNddyjKlFVC4oJWpci/d52b2225f0bf3342779a965ea6907c2e/airplane-runway-vertical.jpg" alt="Cab Image">
    </div>
  </div>
  
  <script src="flight-booking.js"></script>

    <?php include("include/footer.php");?>