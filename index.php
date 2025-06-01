<?php include("include/header.php");?>
<section class="hero">
  <div class="hero-text">
    <h1><span>Book</span> Your Dream <span>Flights</span> Now!</h1>
    <p>"Pioneer Travels – Seamless journeys start here: flights, tours & unforgettable experiences!"</p>
    <button class="btn" title="To Click For Booking"><a href="f-listing.php">Book Now</a></button>
  </div>

  <div class="hero-image">
    <img src="plane.png" alt="Airplane" />
  </div>

  <!-- SVG Animation -->
  <div class="svg-container">
    <svg viewBox="0 0 1200 600">
      <!-- Flight Path -->
      <path id="flightPath" d="M200,480 C400,200 800,200 1000,400" />

      <!-- Plane -->
      <g>
        <polygon points="0,-10 25,0 0,10 5,0" fill="#000" transform="scale(1.2)" />
        <animateMotion dur="6s" repeatCount="indefinite" rotate="auto" direction="alternate">
          <mpath href="#flightPath" />
        </animateMotion>
      </g>

      <!-- Destination Icon -->
      <g transform="translate(1000,400)">
        <circle r="10" class="location-icon" />
        <path d="M0,-20 A20,20 0 1,1 0.1,-20" fill="#000"/>
      </g>
    </svg>
  </div>
</section>
<!--from-->
<?php include('forms.php'); ?>
<!--info-->
<div class="info-wrapper">
  <div class="info-container">

    <!-- Card 1 -->
    <div class="info-card">
      <img class="info-icon" src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png" alt="Info Icon">
      <div class="info-content">
        <h3>We are Now Available</h3>
        <p>Call +1-519-859-4958 contact with us</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="info-card">
      <h3>✈ </h3>  
      <div class="info-content">
        <h3>International Flight</h3>
        <p>Call +1-519-859-4958 contact with us</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="info-card">
    <img class="info-icon" src="https://cdn-icons-png.flaticon.com/512/1041/1041872.png



" alt="Money Icon">



      <div class="info-content">
        <h3>Check Refund</h3>
        <p>Call +1-519-859-4958 contact with us</p>
      </div>
    </div>

  </div>
</div>
<!--letus-->
<div class="slider">

  <section class="flight-deals">
    <div class="flight-deals-header">
      <h2>Latest Flight Deals</h2>
      <div class="custom-nav">
        <button class="custom-prev">&#10094;</button>
        <button class="custom-next">&#10095;</button>
      </div>
    </div>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
          <img src="assest/img/flight-1.png" alt="Dubai to Canada" />
          <div class="deal-info">
            <h4>Dubai to Canada</h4>
            <p>14 Aug, 2023 - 20 Aug 2023</p>
            <p>First Class</p>
            <p class="price">$5000</p>
            <a href="deal.php" class="booking-btn" title="To Click For Booking">Booking Now</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <img src="assest/img/flight-2.png" alt="Dubai to Dhaka" />
          <div class="deal-info">
            <h4>Dubai to Dhaka</h4>
            <p>14 Aug, 2023 - 20 Aug 2023</p>
            <p>Economy Class</p>
            <p class="price">$400</p>
            <a href="deal.php" class="booking-btn">Booking Now</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <img src="assest/img/flight-3.png" alt="Dubai to Dhaka" />
          <div class="deal-info">
            <h4>Dubai to Dhaka</h4>
            <p>14 Aug, 2023 - 20 Aug 2023</p>
            <p>Economy Class</p>
            <p class="price">$400</p>
            <a href="deal.php" class="booking-btn">Booking Now</a>
          </div>
        </div>

      </div>
    </div>
  </section>
 </div>
<!--end-->
<!--hero2-->
<div class="hero2-main">

  <section class="hero2">
    <!-- Left -->
    <div class="hero2-left">
      <div class="logo">
        <i class="fas fa-plane-departure"></i>
        <span>Pioneer Travels</span>
      </div>
      <div class="headline">
        <span>TRAVEL</span>
        <span>ALL</span><br>
        <span>OVER</span>
        <span class="highlight">THE</span><br>
        <span class="highlight">WORLD</span>
      </div>
      <button class="book-btn" title="To Click For Booking"><a href="https://pioneertravels.us//flight-book.php">Booking Now </a></button>
    </div>

    <!-- Right -->
    <div class="hero2-right">
      <div class="card small">
        <img src="assest/img/paris.png" alt="Paris">
       
      </div>
      <div class="card large">
        <img src="assest/img/dubai.png" alt="Dubai">
  
      </div>
      <div class="card small">
        <img src="assest/img/italy.png" alt="Italy">
    
      </div>

  </section>
</div></section>
</div>
</div>
<!--arch-->
<div class="man-arch1">
  <div class="main-arch">
    <div class="arch-container">
    
      <div class="arch-text">
        <h5>Achievement</h5>
        <h1>Your Destination Awaits, Book Now</h1>
        <p>"Get in touch with Pioneer Travels — your gateway to seamless journeys and unforgettable experiences."</p>
        
        <div class="stats">
  <div class="stat-box">
    <div class="stat-top-row">
      <h2><span id="count-customers">0</span>+</h2>
      <i class="fas fa-user stat-icon"></i>
    </div>
    <p><b>Happy Customers</b></p>
  </div>

  <div class="stat-box">
    <div class="stat-top-row">
      <h2><span id="count-satisfaction">0</span>%</h2>
      <i class="fas fa-smile stat-icon"></i>
    </div>
    <p><b>Client Satisfied</b></p>
  </div>
</div>

        
        <div class="contact-row">
          <span>Let's Connect Reach Out for More Information</span>
          <button class="contact-btn" id="ctn" title="To Click for Contact">Contact us</button>
        </div>
      </div>
      
      <div class="arch-image">
        <img src="assest/img/achievement-image.webp" alt="Woman on airplane">
      </div>
      
    </div>
  </div>
</div>
<!--paporal-->
<section class="travel-section">
  <h2>Popular Global Travel Destinations</h2>
  <button class="travel-show-btn" title=" To Click More Destinations"> <a href="destination.php">Show More</a></button>

  <div class="travel-wrapper">
    <div class="travel-globe-box">
      <img src="assest/img/map.webp" alt="World Map" class="travel-globe-img">
    </div>

    <div class="travel-grid">
      <div class="travel-card">
        <img src="assest/img/image-1.webp" alt="Rome">
        <h4>Rome</h4>
        <p style="color: grey; padding:10px">&nbsp 
          <i class="fa fa-location-dot"></i> - Italy 
          <i class="fa fa-globe"></i> Tour
        </p>
        <button class="travel-discover-btn" title="Discover Location"><a href="destination.php">Discover</a></button>
      </div>

      <div class="travel-card">
        <img src="assest/img/image-2.webp" alt="Tokyo">
        <h4>Tokyo</h4>
        <p style="color: grey; padding:10px">&nbsp 
          <i class="fa fa-location-dot"></i> - Japan 
          <i class="fa fa-globe"></i> Tour
        </p>
           <button class="travel-discover-btn" title="Discover Location"><a href="destination.php">Discover</a></button>
      </div>

      <div class="travel-card">
        <img src="assest/img/image-3.webp" alt="Sydney">
        <h4>Sydney</h4>
        <p style="color: grey;padding:10px">&nbsp 
          <i class="fa fa-location-dot"></i> - Australia
          <i class="fa fa-globe"></i> Tour
        </p>
           <button class="travel-discover-btn" title="Discover Location"><a href="destination.php">Discover</a></button>
      </div>

      <div class="travel-card">
        <img src="assest/img/image-4.webp" alt="London">
        <h4>London</h4>
        <p style="color: grey; padding:10px">&nbsp 
          <i class="fa fa-location-dot"></i> - United Kingdom
          <i class="fa fa-globe"></i> Tour
        </p>
          <button class="travel-discover-btn" title="Discover Location"><a href="destination.php">Discover</a></button>
      </div>
    </div>
  </div>
</section>
<!--testimonial-->
<section class="testimonial-section">
  <div class="testimonial-left">
    <p class="testi">Testimonials</p>
    <h2>What our clients<br>think about us?</h2>
  </div>

  <div class="testimonial-card" id="testimonial-card">
    <div class="testimonial-nav"><i class="fa-solid fa-arrow-left" onclick="prevTestimonial()"></i>
<i class="fa-solid fa-arrow-right" onclick="nextTestimonial()"></i>
    </div>

    <div class="testimonial-header" id="testimonial-images">
      <!-- Profile Images will go here -->
    </div>

    <p class="testimonial-text" id="testimonial-text">
      <!-- Text will load here -->
    </p>

    <p class="testimonial-name" id="testimonial-name"></p>
    <p class="testimonial-role" id="testimonial-role"></p>
  </div>
</section>
<br>
<br>

<br>

<br>

<br>

<br>

<?php include("include/footer.php");?>
<script>
   document.getElementById("ctn").onclick = function() {
      window.location.href = "contact.php";
   };
</script>
<script>
  const testimonials = [
    {
      images: [
        'https://randomuser.me/api/portraits/men/32.jpg',
        'https://randomuser.me/api/portraits/women/44.jpg',
        'https://randomuser.me/api/portraits/women/68.jpg'
      ],
      text: 'Booking my family’s Europe trip with Pioneer Travels was the best decision we made! From the moment we reached out, their team handled every detail—flights, hotels, transfers—even surprise day-trips—seamlessly.',
      name: 'Mr John Deo',
      role: 'CEO at FlyNow'
    },
    {
      images: [
        'https://randomuser.me/api/portraits/men/20.jpg',
        'https://randomuser.me/api/portraits/women/51.jpg'
      ],
      text: 'Pioneer Travels made our vacation absolutely seamless. From booking flights and accommodations to planning day trips, every detail was handled with care. Their team was responsive, professional, and',
      name: 'Aarav Sharma, Mumbai',
      role: 'Manager at TravelEasy'
    },
    {
      images: [
        'https://randomuser.me/api/portraits/men/30.jpg'
      ],
      text: 'Pioneer Travels planned our honeymoon to Bali, and it was nothing short of magical. Every hotel, excursion, and transfer was spot on. We felt pampered and safe throughout. They truly care about creating unforgettable memories!',
      name: 'Rohit & Meera Joshi',
      role: 'Delhi SBI Manager'
    },
    {
      images: [
        'https://randomuser.me/api/portraits/women/45.jpg',
        'https://randomuser.me/api/portraits/men/47.jpg'
      ],
      text: 'I’ve used many travel agencies, but Pioneer stands out. Their attention to detail, responsiveness, and local knowledge made my solo Europe tour smooth and enriching. Highly recommend for serious travelers',
      name: 'Ananya Patel',
      role: 'Founder at JetSmart'
    }
  ];

  let current = 0;

  function renderTestimonial(index) {
    const card = document.getElementById('testimonial-card');

    // Fade out
    card.classList.add('fade');

    setTimeout(() => {
      const data = testimonials[index];

      // Render images
      const imageHTML = data.images.map(src => `<img src="${src}" alt="Client testimonial photo">`).join('');
      document.getElementById('testimonial-images').innerHTML = imageHTML;

      // Text content
      document.getElementById('testimonial-text').textContent = data.text;
      document.getElementById('testimonial-name').textContent = data.name;
      document.getElementById('testimonial-role').textContent = data.role;

      // Fade in
      card.classList.remove('fade');
    }, 300);
  }

  function nextTestimonial() {
    current = (current + 1) % testimonials.length;
    renderTestimonial(current);
  }

  function prevTestimonial() {
    current = (current - 1 + testimonials.length) % testimonials.length;
    renderTestimonial(current);
  }

  // Load first testimonial
  renderTestimonial(current);

  // Auto-play every 5 seconds
  setInterval(nextTestimonial, 5000);
</script>

</body>
</html>

