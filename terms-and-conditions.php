<?php include("include/header.php"); ?>

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
    .terms-section {
        max-width: 900px;
        margin: 50px auto;
        padding: 30px;
        background-color: #f9fafb;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        font-family: Arial, sans-serif;
    }

    .terms-section h1 {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #1f2937;
        text-align: center;
    }

    .terms-section h3 {
        margin-top: 25px;
        font-size: 20px;
        color: #111827;
    }

    .terms-section p {
        margin-top: 10px;
        line-height: 1.6;
        color: #4b5563;
        font-size: 16px;
    }

    .terms-section ul {
        padding-left: 20px;
        margin-top: 10px;
    }

    .terms-section li {
        margin-bottom: 10px;
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
  <!-- Hero Section -->
    <section class="hero-section">
        <div class="left-content">
            <img src="assest/img/vacation.png" alt="Luggage and travel items">
        </div>
        <div class="center-content">
            <h1>Pioneer Air Travels – Terms and Conditions</h1>
        </div>
        <div class="right-content">
            <img src="assest/img/plane.png" alt="Airplane">
        </div>
    </section>

<div class="terms-section">
    <h1>Terms and Conditions</h1>

    <h3>1. Booking and Payments</h3>
    <p>All bookings must be confirmed with full payment or an agreed deposit amount. Bookings are subject to availability and confirmation by Pioneer Air Travels.</p>

    <h3>2. Cancellation Policy</h3>
    <ul>
        <li>Cancellations made 7 days prior to the departure date will receive a full refund.</li>
        <li>Cancellations made within 7 days of travel will be subject to cancellation charges as per airline and hotel policies.</li>
    </ul>

    <h3>3. Changes to Booking</h3>
    <p>Any amendments or changes to the booking are subject to availability and may incur additional charges. Pioneer Air Travels is not responsible for airline schedule changes or delays.</p>

    <h3>4. Travel Documents</h3>
    <p>It is the responsibility of the traveler to carry valid documents such as passports, visas, and ID cards. Pioneer Air Travels is not liable for issues arising due to improper documentation.</p>

    <h3>5. Liability</h3>
    <p>Pioneer Air Travels acts as an intermediary and shall not be held responsible for any loss, injury, or damage caused during the travel arranged through third-party service providers.</p>

    <h3>6. Force Majeure</h3>
    <p>We shall not be liable for any failure or delay in performance due to circumstances beyond our control, including natural disasters, pandemics, or political unrest.</p>

    <h3>7. Governing Law</h3>
    <p>These terms and conditions are governed by the laws of the jurisdiction in which Pioneer Air Travels operates.</p>

    <p><strong>By booking with us, you agree to the above terms and conditions.</strong></p>
</div>

<?php include("include/footer.php"); ?>
