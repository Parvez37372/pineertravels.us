<?php include("include/header.php"); ?>

<style>
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
    .contact-form {
        max-width: 800px;
        margin: 60px auto;
        padding: 40px;
        background-color: #f9f9ff;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
        border-radius: 16px;
        font-family: 'Segoe UI', sans-serif;
    }

    .contact-form form {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .contact-form h2 {
        width: 100%;
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    .contact-form input,
    .contact-form textarea {
        background-color: #e8edff;
        border: none;
        padding: 15px;
        border-radius: 8px;
        font-size: 16px;
        width: 100%;
        resize: none;
        box-sizing: border-box;
        transition: 0.3s ease;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        outline: none;
        box-shadow: 0 0 0 2px #0073e6;
    }

    .contact-form .half-width {
        width: calc(50% - 10px);
    }

    .contact-form textarea {
        height: 150px;
    }

    .contact-form button {
        background-color: #3a7bfd;
        color: #fff;
        border: none;
        padding: 14px 30px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        box-shadow: 0 4px 10px rgba(58, 123, 253, 0.2);
        align-self: flex-end;
        margin-left: auto;
    }

    .contact-form button:hover {
        background-color: #2f65c5;
    }
.map-container {
    position: relative;
    width: 100%;
    padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
    height: 0;
    overflow: hidden;
    margin: 20px 0;
}

.map-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

    @media (max-width: 768px) {
        .contact-form .half-width {
            width: 100%;
        }

        .contact-form button {
            width: 100%;
        }
    }
    @media (max-width: 768px) {
    .hero-section {
        flex-direction: column;
        padding: 30px 10px;
    }

    .left-content,
    .right-content,
    .center-content {
        flex: unset;
        width: 100%;
        margin: 10px 0;
    }

    .center-content h1 {
        font-size: 28px;
    }

    .left-content img,
    .right-content img {
        max-width: 100px;
    }
}

</style>
 <!-- Hero Section -->
    <section class="hero-section">
        <div class="left-content">
            <img src="assest/img/vacation.png" alt="Luggage and travel items">
        </div>
        <div class="center-content">
            <h1>Contact Us</h1>
        </div>
        <div class="right-content">
            <img src="assest/img/plane.png" alt="Airplane">
        </div>
    </section>
<section class="contact-form">
    <h2>Get in Touch</h2>
    <form action="send_contact.php" method="POST">
        <input type="text" name="name" placeholder="Name" class="half-width" required>
        <input type="email" name="email" placeholder="Email" class="half-width" required>
        <input type="text" name="phone" placeholder="Mobile Number" class="half-width" required>
        <input type="text" name="subject" placeholder="Subject" class="half-width" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>
<div class="map-container">
  <iframe
    src="https://www.google.com/maps/embed?pb=..."
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
<br>
<br>
<br>
<?php include("include/footer.php"); ?>
