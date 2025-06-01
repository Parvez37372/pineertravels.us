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
        background-image:url('assest/img/title-banner.webp');
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

    .privacy-content {
        background-color: #ffffff;
        padding: 40px;
        margin: 40px auto;
        max-width: 900px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.8;
        color: #333;
    }

    .privacy-content h2 {
        font-size: 28px;
        color: #0073e6;
        margin-bottom: 10px;
    }

    .privacy-content h3 {
        font-size: 22px;
        margin-top: 30px;
        color: #005aa7;
    }

    .privacy-content ul {
        padding-left: 20px;
    }

    .privacy-content ul li {
        margin-bottom: 10px;
    }

    .privacy-content p {
        margin-bottom: 15px;
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

        .privacy-content {
            padding: 20px;
            margin: 20px;
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
            <h1>Privacy Policy</h1>
        </div>
        <div class="right-content">
            <img src="assest/img/plane.png" alt="Airplane">
        </div>
    </section>

    <!-- Privacy Policy Content -->
    <section class="privacy-content">
        <h2>Privacy Policy – AirTravels ✈️</h2>
        <p><strong>Effective Date:</strong> May 1, 2025</p>

        <h3>1. Information We Collect</h3>
        <p>We may collect the following types of information:</p>
        <ul>
            <li><strong>Personal Information:</strong> Name, email address, phone number, passport details, billing address, etc.</li>
            <li><strong>Travel Information:</strong> Flight preferences, travel dates, destinations, seat selection, meal preferences.</li>
            <li><strong>Payment Information:</strong> Credit/debit card details or other payment methods (processed securely).</li>
            <li><strong>Technical Data:</strong> IP address, browser type, device information, and cookies for analytics and functionality.</li>
        </ul>

        <h3>2. How We Use Your Information</h3>
        <p>We use your data to:</p>
        <ul>
            <li>Process flight bookings and travel-related services.</li>
            <li>Provide customer support and updates on your travel.</li>
            <li>Send confirmations, itineraries, and reminders.</li>
            <li>Improve our website and services.</li>
            <li>Comply with legal requirements.</li>
        </ul>

        <h3>3. Data Sharing and Disclosure</h3>
        <p>We <strong>do not sell</strong> your personal data. We may share your information with:</p>
        <ul>
            <li>Airlines and travel service providers (to complete your bookings).</li>
            <li>Payment gateways for secure processing.</li>
            <li>Legal authorities, if required by law.</li>
            <li>Trusted third-party partners under strict confidentiality agreements.</li>
        </ul>

        <h3>4. Cookies and Tracking</h3>
        <p>We use cookies to:</p>
        <ul>
            <li>Remember your preferences.</li>
            <li>Analyze website traffic and improve performance.</li>
            <li>Deliver personalized content.</li>
        </ul>
        <p>You can control or disable cookies through your browser settings.</p>

        <h3>5. Data Security</h3>
        <p>We implement advanced security measures to protect your data, including SSL encryption and secure payment gateways. However, no online transmission is 100% secure.</p>

        <h3>6. Your Rights</h3>
        <p>You have the right to:</p>
        <ul>
            <li>Access the personal data we hold about you.</li>
            <li>Request corrections or deletion.</li>
            <li>Withdraw consent for marketing.</li>
            <li>Lodge a complaint with a data protection authority.</li>
        </ul>
        <p>To exercise these rights, contact us at <strong>privacy@airtravels.com</strong>.</p>

        <h3>7. Changes to This Policy</h3>
        <p>We may update this Privacy Policy from time to time. Changes will be posted on this page with a new "Effective Date."</p>

        <h3>8. Contact Us</h3>
        <p>If you have any questions, contact us at:</p>
        <ul>
            <li><strong>Email:</strong> privacy@airtravels.com</li>
            <li><strong>Phone:</strong> +1-519-859-4958</li>
            <li><strong>Website:</strong> <a href="https://pioneertravels.us/" target="_blank">https://pioneertravels.us/</a></li>
        </ul>
    </section>
</div>

<?php include("include/footer.php");?>
