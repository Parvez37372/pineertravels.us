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
.feature-row {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 2rem;
  padding: 3rem;
  background-color: #f3f4f6;
  flex-wrap: wrap;
}

.feature-card {
  display: flex;
  align-items: center;
  gap: 1rem;
  padding: 1.5rem 2rem;
  background-color: #f9fafb;
  border-radius: 12px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
  transition: transform 0.2s ease;
}

.feature-card:hover {
  transform: translateY(-4px);
}

.feature-card img {
  width: 36px;
  height: 36px;
  object-fit: contain;
  filter: invert(31%) sepia(95%) saturate(1496%) hue-rotate(211deg) brightness(97%) contrast(103%);
}

.feature-card span {
  font-size: 1.25rem;
  color: #111827;
  font-weight: 600;
}
@media (max-width: 768px) {
  .feature-row {
    flex-direction: column;
    padding: 2rem 1rem;
  }

  .feature-card {
    width: 100%;
    justify-content: center;
    padding: 1.25rem;
  }

  .feature-card img {
    width: 28px;
    height: 28px;
  }

  .feature-card span {
    font-size: 1.1rem;
    text-align: center;
  }
}

    .container {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      max-width: 1200px;
      margin: auto;
    }

    .sidebar {
      flex: 1;
      max-width: 300px;
      background: white;
      border-radius: 10px;
      padding: 1.5rem;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.07);
    }

    .sidebar h3 {
      background: #c7d5f5;
      padding: 0.75rem 1rem;
      border-radius: 8px;
      margin-bottom: 1.5rem;
      font-size: 1.2rem;
    }

    .sidebar label {
      display: block;
      margin-top: 1rem;
      font-weight: 500;
    }

    .sidebar input,
    .sidebar select {
      width: 100%;
      padding: 0.6rem;
      margin-top: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .radio-group {
      display: flex;
      gap: 1rem;
      margin-top: 0.5rem;
    }

    .search-btn {
      margin-top: 1.5rem;
      width: 100%;
      padding: 0.8rem;
      background: #3b82f6;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .search-btn:hover {
      background: #2563eb;
    }

    .listing-section {
      flex: 3;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .car-card {
      display: flex;
      flex-direction: column;
      background: white;
      border-radius: 12px;
      padding: 1rem;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s;
    }

    .car-card:hover {
      transform: translateY(-4px);
    }

     .car-top {
      display: flex;
      gap: 1rem;
    }
    .car-top img {
      width: 180px;
      height:100px;
      border-radius: 10px;
    }

    .car-details {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .car-title {
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 0.25rem;
    }

    .car-meta {
      color: #6b7280;
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
    }

    .car-features {
      display: flex;
      gap: 1rem;
      margin-bottom: 0.5rem;
      font-size: 0.9rem;
    }

    .car-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      margin-top: 1rem;
    }

    .vendor {
      font-weight: bold;
    }

    .rating {
      background: #e5e7eb;
      padding: 2px 6px;
      border-radius: 4px;
      font-size: 0.85rem;
    }

    .car-price {
      font-size: 1.25rem;
      font-weight: bold;
      color: #1f2937;
    }

    .car-buttons {
      display: flex;
      gap: 0.5rem;
    }

    .car-buttons button {
      padding: 0.5rem 1rem;
      border-radius: 6px;
      border: none;
      cursor: pointer;
      transition: all 0.3s;
      font-weight: 500;
    }

    .select-btn {
      background: #3b82f6;
      color: white;
    }

    .select-btn:hover {
      background: #2563eb;
    }

    .quote-btn {
      border: 1px solid #3b82f6;
      background: white;
      color: #3b82f6;
    }

    .quote-btn:hover {
      background: #ebf2ff;
    }
 button a {
    text-decoration: none;
    border:none;
    background-color:#3b82f6;
}

  @media (max-width: 768px) {
  .container {
    flex-direction: column;
    padding: 0 1rem;
  }

  .sidebar {
    max-width: 100%;
    width: 100%;
  }

  .car-top {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .car-top img {
    width: 100%;
    max-width: 300px;
    height: auto;
  }

  .car-details {
    width: 100%;
  }

  .car-bottom {
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 1rem;
  }

  .car-buttons {
    justify-content: center;
    width: 100%;
    flex-wrap: wrap;
  }

  .car-buttons button {
    width: 100%;
    max-width: 200px;
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

<div class="main">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="left-content">
            <img src="assest/img/vacation.png" alt="Luggage and travel items">
        </div>
        <div class="center-content">
            <h1>Car Details</h1>
        </div>
        <div class="right-content">
            <img src="assest/img/car.webp" alt="car">
        </div>
    </section>
    <section class="feature-row">
  <div class="feature-card">
    <img src="assest/img/check_1.webp" alt="Free Cancellation Icon" />
    <span>Free Cancellation</span>
  </div>
  <div class="feature-card">
    <img src="assest/img/benefit-2_1.webp" alt="No Hidden Charges Icon" />
    <span>No Hidden Charges</span>
  </div>
  <div class="feature-card">
    <img src="assest/img/benefit-3.webp" alt="Customer Service Icon" />
    <span>24/7 Customer Service</span>
  </div>
</section>
<div class="container">
    <!-- Sidebar -->
    <div class="sidebar">
      <h3>Trip Summary</h3>
      <label>Destination/Property</label>
      <input type="text" placeholder="Pick-up Location">
      <label>Pick-up Date</label>
      <input type="date">
      <label><input type="checkbox"> Return to a different location</label>
      <label>Drop-off Location</label>
      <input type="text" placeholder="Drop-off Location">
      <label>Drop-off Date</label>
      <input type="date">
      <label>I live in:</label>
      <input type="text" placeholder="Dubai">
      <label>Driver's Age:</label>
      <div class="radio-group">
        <label><input type="radio" name="age"> 18-29</label>
        <label><input type="radio" name="age"> 30-49</label>
        <label><input type="radio" name="age"> 50-70</label>
      </div>
      <label>Currency:</label>
      <select>
        <option>USD - $</option>
        <option>EUR - €</option>
      </select>
      <button class="search-btn">Search</button>
    </div>

    <!-- Car Listings -->
    <div class="listing-section">

      <!-- Car 1 -->
      <div class="car-card">
        <div class="car-top">
          <img src="assest/img/car-5.png" alt="Car Image">
          <div class="car-details">
            <div>
              <div class="car-title">Acura NSX</div>
              <div class="car-meta">Hyundai Accent or similar</div>
              <div class="car-features">
                <span>👤 4</span>
                <span>💼 2</span>
                <span>🚗 Auto</span>
              </div>
              <div>✓ Air Conditioning</div>
            </div>
            <div class="car-bottom">
              <div>
                <div class="vendor">Europcar <span class="rating">9.6</span></div>
                <div style="font-size: 0.9rem;">Fuel: Full to Full<br>Mileage: Unlimited</div>
              </div>
              <div class="car-price">$140.00/day<br><span style="font-weight: normal;">Total: $320.40</span></div>
              <div class="car-buttons">
                <button class="select-btn">Select</button>
                <button class="quote-btn"><a href="mailto:info@pioneertravels.us" class="quote-btn">Email Quotes</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Car 2 -->
      <div class="car-card">
        <div class="car-top">
          <img src="assest/img/car-4.png" alt="Car Image">
          <div class="car-details">
            <div>
              <div class="car-title">LMB Huracan</div>
              <div class="car-meta">Compact or similar</div>
              <div class="car-features">
                <span>👤 5</span>
                <span>💼 3</span>
                <span>🚗 Auto</span>
              </div>
              <div>✓ Air Conditioning</div>
            </div>
            <div class="car-bottom">
              <div>
                <div class="vendor">Hertz <span class="rating">8.9</span></div>
                <div style="font-size: 0.9rem;">Fuel: Full to Full<br>Mileage: Unlimited</div>
              </div>
              <div class="car-price">$120.00/day<br><span style="font-weight: normal;">Total: $275.00</span></div>
              <div class="car-buttons">
                <button class="select-btn">Select</button>
                <button class="quote-btn"><a href="mailto:info@pioneertravels.us" class="quote-btn">Email Quotes</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Car 3 -->
      <div class="car-card">
        <div class="car-top">
          <img src="assest/img/car-1.png" alt="Car Image">
          <div class="car-details">
            <div>
              <div class="car-title">S Class - Benz</div>
              <div class="car-meta">SUV or similar</div>
              <div class="car-features">
                <span>👤 7</span>
                <span>💼 4</span>
                <span>🚗 Auto</span>
              </div>
              <div>✓ Air Conditioning</div>
            </div>
            <div class="car-bottom">
              <div>
                <div class="vendor">Avis <span class="rating">9.1</span></div>
                <div style="font-size: 0.9rem;">Fuel: Full to Full<br>Mileage: Unlimited</div>
              </div>
              <div class="car-price">$180.00/day<br><span style="font-weight: normal;">Total: $390.00</span></div>
              <div class="car-buttons">
                <button class="select-btn">Select</button>
                <button class="quote-btn"><a href="mailto:info@pioneertravels.us" class="quote-btn">Email Quotes</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Car 4 -->
      <div class="car-card">
        <div class="car-top">
          <img src="assest/img/car-6.png" alt="Car Image">
          <div class="car-details">
            <div>
              <div class="car-title">LMB Huracan</div>
              <div class="car-meta">SUV or similar</div>
              <div class="car-features">
                <span>👤 7</span>
                <span>💼 4</span>
                <span>🚗 Auto</span>
              </div>
              <div>✓ Air Conditioning</div>
            </div>
            <div class="car-bottom">
              <div>
                <div class="vendor">Avis <span class="rating">9.1</span></div>
                <div style="font-size: 0.9rem;">Fuel: Full to Full<br>Mileage: Unlimited</div>
              </div>
              <div class="car-price">$180.00/day<br><span style="font-weight: normal;">Total: $390.00</span></div>
              <div class="car-buttons">
                <button class="select-btn">Select</button>
                <button class="quote-btn"><a href="mailto:info@pioneertravels.us" class="quote-btn">Email Quotes</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <br>
   <br>
    <br>
  <?php include("include/footer.php");?>
