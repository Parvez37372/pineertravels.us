 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" sizes="32x32" href="https://cdn-icons-png.flaticon.com/32/201/201623.png">
  <title>Pioneer Travels | Explore the World with Us</title>
  <link rel="stylesheet" href="include/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <meta name="description" content="Pioneer Travels offers affordable and hassle-free travel services including flight bookings, holiday packages, visa assistance, and more. Start your journey with trust and convenience.">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f6f7fb;
    }

    header {
      background-color: #f6f7fb;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      flex-wrap: wrap;
      position: relative;
      z-index: 1000;
    }

    .logo h5 {
      font-size: 24px;
      font-weight: bold;
      color: #2c3e50;
    }

    .menu-btn {
      font-size: 26px;
      color: #2c3e50;
      background: none;
      border: none;
      cursor: pointer;
      display: none;
      z-index: 11;
    }

    nav, .right-icons {
      display: flex;
      gap: 25px;
      align-items: center;
    }

    nav a {
      text-decoration: none;
      color: #2c3e50;
      font-weight: 500;
      padding: 8px 12px;
      border-radius: 5px;
      position: relative;
    }

    nav a:hover,
    nav a.active {
      background-color: #4a6cf7;
      color: #fff;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      top: 35px;
      left: 0;
      color: black;
      background-color: white;
      min-width: 150px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      z-index: 1000;
      border-radius: 5px;
    }

    .dropdown-content a {
      display: block;
      padding: 10px;
      color: #2c3e50;
      text-decoration: none;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
      color: black;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .right-icons i {
      font-size: 18px;
      color: #2c3e50;
      cursor: pointer;
      transition: 0.3s;
    }

    .right-icons span {
      font-weight: 500;
      cursor: pointer;
      color: #2c3e50;
      transition: 0.3s;
    }

    .right-icons i:hover,
    .right-icons span:hover {
      color: #4a6cf7;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
      .menu-btn {
        display: block;
      }

      nav, .right-icons {
        display: none;
        flex-direction: column;
        width: 100%;
        background-color: #fff;
        padding: 10px 0;
        border-top: 1px solid #ddd;
        animation: fadeIn 0.3s ease-in-out;
      }

      nav a, .dropdown-content a, .right-icons span {
        padding: 10px;
        width: 100%;
        text-align: center;
      }

      header.active nav,
      header.active .right-icons {
        display: flex;
      }

      .dropdown-content {
        position: static;
        box-shadow: none;
        border-radius: 0;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .dropdown.active .dropdown-content {
        display: flex;
        flex-direction: column;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
          /*letus*/
    slider{
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f5f7fa;
      
    }

    .flight-deals {
      padding: 50px 20px;
      background: #f5f7fa;
      max-width: 1200px;
      margin: auto;
    }

    .flight-deals-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .flight-deals-header h2 {
      font-size: 28px;
      font-weight: bold;
      color: #222;
      margin: 0;
    }

    .custom-nav {
      display: flex;
      gap: 10px;
    }

    .custom-prev,
    .custom-next {
        
      background-color: #4e6cf1;
      border: none;
      color: white;
      font-size: 20px;
      width: 40px;
      height: 40px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .custom-prev:hover,
    .custom-next:hover {
      background-color: #3954d9;
    }

    .swiper {
      padding-bottom: 40px;
    }

    .swiper-slide {
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      padding: 15px;
      box-sizing: border-box;
      width: 280px;
      transition: transform 0.3s ease;
    }

    .swiper-slide:hover {
      transform: translateY(-5px);
    }

    .swiper-slide img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px;
    }

    .deal-info {
      margin-top: 15px;
    }

    .deal-info h4 {
      margin: 0;
      font-size: 18px;
      color: #333;
    }

    .deal-info p {
      margin: 5px 0;
      color: #666;
      font-size: 14px;
    }

    .deal-info .price {
      font-weight: bold;
      font-size: 16px;
      color: #000;
    }

    .booking-btn {
      margin-top: 15px;
      display: inline-block;
      background-color: #4e6cf1;
      color: #fff;
      padding: 10px 18px;
      border-radius: 8px;
      text-decoration: none;
      font-size: 14px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .booking-btn:hover {
      background-color: #3954d9;
    }
  a {
    text-decoration: none;
    color:#4a6cf7;
}

    
  </style>
</head>
<body>

<header id="navbar">
  <div class="logo">
    <h5></a><i class="fas fa-plane-departure"></i><a href="index.php"> Pioneer Travels</a></h5>
  </div>

  <button class="menu-btn" onclick="toggleMenu()" aria-label="Toggle Menu">
    <i class="fas fa-bars"></i>
  </button>

  <nav>
    <a href="index.php" class="active">Home</a>
    <div class="dropdown">
      <a href="javascript:void(0)">Flight <i class="fas fa-caret-down"></i></a>
      <div class="dropdown-content">
        <a href="flight-booking.php">Flight Listing</a>
        <a href="f-listing.php">Flight Booking</a>
      </div>
    </div>
    <div class="dropdown">
    <a href="javascript:void(0)">Car <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content">
        <a href="car-book.php">Car Booking</a>
        <a href="car.php">Car Details</a>
     
      </div>
      </div>
    <a href="about.php">About</a>
    <div class="dropdown">
      <a href="javascript:void(0)">Tour <i class="fas fa-caret-down"></i></a>
      <div class="dropdown-content">
        <a href="in-tour.php">International</a>
        <a href="local-tour.php">Local</a>
        <a href="adventure.php">Adventure</a>
      </div>
    </div>
    <div class="dropdown">
      <a href="javascript:void(0)">Pages <i class="fas fa-caret-down"></i></a>
      <div class="dropdown-content">
        <a href="blog.php">Blogs</a>
        <a href="contact.php">Contact Us</a>
        <a href="privacy.php">Privacy Policy</a>
        <a href="terms-and-conditions.php">Terms and conditions</a>
      </div>
    </div>
    <a href="news.php">News</a>
  </nav>

  <div class="right-icons">
    <i class="fas fa-search" id="search"></i>
    <span><a href="login.php">Login</a> / <a href="register.php">Signup</a></span>
  </div>
</header>

<script>
  function toggleMenu() {
    const header = document.getElementById("navbar");
    const icon = header.querySelector(".menu-btn i");
    header.classList.toggle("active");
    icon.classList.toggle("fa-bars");
    icon.classList.toggle("fa-times");

    // Close dropdowns on toggle
    document.querySelectorAll('.dropdown').forEach(drop => drop.classList.remove('active'));
  }

  // Toggle dropdowns in mobile
  document.querySelectorAll(".dropdown > a").forEach(anchor => {
    anchor.addEventListener("click", function(e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        this.parentElement.classList.toggle("active");
      }
    });
  });

  // Auto-close mobile menu when clicking a nav item
  document.querySelectorAll("nav a").forEach(link => {
    link.addEventListener("click", () => {
      const header = document.getElementById("navbar");
      if (header.classList.contains("active")) {
        header.classList.remove("active");
        const icon = header.querySelector(".menu-btn i");
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
      }
    });
  });
</script>

</body>
</html>

