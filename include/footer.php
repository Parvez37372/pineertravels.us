<style>
  a {
    text-decoration: none;
    color:4a6cf7;
  }

  footer {
    background: #f9f9ff;
    padding: 30px 20px;
    font-family: 'Segoe UI', sans-serif;
    color: #333;
  }

  footer .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: auto;
    gap: 40px;
  }

  footer h2, footer h4 {
    color: #357ded;
    margin-bottom: 15px;
  }

  footer p, footer li, footer small {
    color: black;
    line-height: 1.6;
  }

  footer ul {
    list-style: none;
    padding: 0;
  }

  footer input[type="email"] {
    padding: 10px;
    border: none;
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
    background: #eef1ff;
    flex: 1;
  }

  footer button {
    padding: 10px 15px;
    background: #357ded;
    color: white;
    border: none;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
    cursor: pointer;
  }

  footer .social-icons a i {
    background: #357ded;
    color: white;
    padding: 8px;
    border-radius: 5px;
    transition: background 0.3s;
  }

  footer .social-icons a i:hover {
    background: #285bb5;
  }

  footer .bottom {
    text-align: center;
    padding: 20px;
    color: #888;
    font-size: 14px;
    border-top: 1px solid #ddd;
    margin-top: 40px;
  }
  span
  {
    color:#4a6cf7;
    font-weight:bold;
  }
  /*hero*/


    .hero2-main{
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
      background-image: url('assest/img/vector-line.png');
      background-repeat:no-repeat;

    }

    .hero2 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 8%;
      position: relative;
      flex-wrap: wrap;
      min-height: 100vh;
     
    }

    /* Left Side */
    .hero2-left {
      flex: 1;
      max-width: 400px;
    }

    .logo {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .logo i {
      font-size: 24px;
      color: #4e6cf1;
      margin-right: 10px;
    }

    .logo span {
      font-size: 24px;
      color: #4e6cf1;
      font-weight: 700;
    }

    .headline span {
      display: inline-block;
      font-size: 36px;
      font-weight: 700;
      background: white;
      margin: 5px 5px 0 0;
      padding: 4px 10px;
    }

    .headline .highlight {
      background: #4e6cf1;
      color: white;
    }

    .book-btn {
      margin-top: 30px;
      background-color: #4e6cf1;
      color: #fff;
      padding: 12px 20px;
      border-radius: 8px;
      border: none;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .book-btn:hover {
      background-color: #3954d9;
    }

    /* Right Image Cards */
    .hero2-right {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: flex-end;
      gap: 20px;
      border-radius:15px;
      position: relative;
      margin-top: 30px;
      background-image: url('assest/img/border-line.png');
      background-repeat: no-repeat;
      background-position: center;
    }

    .card {
      position: relative;
      overflow: hidden;
      border-radius: 20px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      border-radius: 20px;
    }

    .card h3 {
      position: absolute;
      bottom: 0;
      width: 100%;
      text-align: center;
      padding: 10px 0;
      background: rgba(0, 0, 0, 0.6);
      color: white;
      font-size: 18px;
    }

    .card.small {
      width: 160px;
      height: 260px;
    }

    .card.large {
      width: 260px;
      height: 380px;
      z-index: 1;
    }

    .hero2-right .card:nth-child(1) {
      z-index: 0;
      transform: translateY(40px);
    }

    .hero2-right .card:nth-child(3) {
      z-index: 0;
      transform: translateY(40px);
    }

    /* Plane Path */
    .plane-path {
      position: absolute;
      top: 40%;
      left: 100px;
      width: 500px;
      height: 200px;
      border-top: 2px dashed #333;
      border-radius: 50%;
      border-left: none;
      border-right: none;
      border-bottom: none;
    }

    .plane-icon {
      position: absolute;
      left: 100px;
      top: 40%;
      width: 20px;
      animation: fly 4s infinite linear;
    }

    @keyframes fly {
      0% {
        transform: translate(0, 0) rotate(45deg);
      }
      100% {
        transform: translate(480px, -20px) rotate(45deg);
      }
    }
    /* Animation classes */
.animate-up {
  opacity: 0;
  transform: translateY(100px);
  transition: all 0.6s ease-out;
}
a
{
    text-decoration:none;
    color:black;
}

.animate-up.visible {
  opacity: 1;
  transform: translateY(0);
}


    /* Responsive */
    @media (max-width: 768px) {
      .hero2 {
        flex-direction: column;
        padding: 30px 5%;
      }

      .hero2-right {
        flex-direction: row;
        align-items: center;
      }

      .plane-path,
      .plane-icon {
        display: none;
      }

      .card.small, .card.large {
        width: 100%;
        height: auto;
        transform: none !important;
      }
    }
@media (max-width: 768px) {
  .hero2-main {
    background-size: contain;
    background-position: top center;
    background-repeat: no-repeat;
  }
}

</style>

<footer>
  <div class="container">
    <!-- Logo & Description -->
    <div style="flex: 1; min-width: 220px;">
      <h2><i class="fas fa-plane-departure"></i> Pioneer Travels</h2>
      <p><span>Pioneer Travels </span>Your trusted travel partner for smooth, personalized journeys.

</p>
      <small>Subscribe to our special offers</small>
      <div style="display: flex; margin-top: 10px;">
   <form id="subscribeForm" style="display: flex; margin-top: 10px;">
  <input type="email" name="email" id="subscriberEmail" placeholder="Email address" required>
  <button type="submit">Subscribe</button>
</form>

      </div>
    </div>

    <!-- Booking Links -->
    <div style="flex: 1; min-width: 150px;">
      <h4>Booking</h4>
      <ul>
        <li><a href="https://pioneertravels.us//flight-book.php">Book Flights</a></li>
        <li>Travel Services</li>
        <li>Transportation</li>
        <li>Planning Your Trip</li>
      </ul>
    </div>

    <!-- Useful Links -->
    <div style="flex: 1; min-width: 150px;">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blogs</a><li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a> </li>
      </ul>
    </div>

    <!-- Manage -->
    <div style="flex: 1; min-width: 150px;">
      <h4>Manage</h4>
      <ul>
        <li><a href="f-listing.php">Check-in</a></li>
        <li><a href="terms-and-conditions.php">Terms and Conditions</a></li>
        <li><a href="car-book.php">Cab Service</a></li>
        <li><a href="f-listing.php">Flight Status</a></li>
      </ul>
    </div>

    <!-- Contact Info -->
    <div style="flex: 1; min-width: 220px;">
      <h4>Contact Us</h4>
      <p><i class="fas fa-map-marker-alt"></i> 3500 S Dupont Hwy Suite HO-101 Dover, DE 19901</p>
      <p><i class="fas fa-phone"></i> <a href="tel:+1234567890" style="color: #357ded;">+1-519-859-4958</a></p>
      <p><i class="fas fa-envelope"></i> <a href="mailto:info@pioneertravels.us" style="color: #357ded;">info@pioneertravels.us</a></p>
      <p style="margin-top: 10px;">Follow Us:</p>
      <div class="social-icons" style="display: flex; gap: 10px; margin-top: 8px;">
        <a href="https://www.instagram.com/pioneer.travels.usa/#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-x-twitter"></i></a>
      </div>
    </div>
  </div>

  <div class="bottom">
    ©2025 Pioneer Travels All Rights Reserved.
  </div>

  <!-- FontAwesome Icons CDN -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</footer>
<!--formscript-->

  <script>
  let passengers = { adult: 2, child: 0, infant: 0 };
  let travelClass = 'Business';

  function updatePassengerLabel() {
    const total = passengers.adult + passengers.child + passengers.infant;
    document.getElementById('dropdownToggle').innerText = `${total} Passengers / ${travelClass}`;
  }

  function changeCount(type, delta) {
    passengers[type] = Math.max(0, passengers[type] + delta);
    document.getElementById(type + 'Count').innerText = passengers[type];
    updatePassengerLabel();
  }

  function setClass(cls) {
    travelClass = cls;
    updatePassengerLabel();
  }

  function bindPassengerDropdown() {
    const toggle = document.getElementById('dropdownToggle');
    const panel = document.getElementById('dropdownPanel');
    if (toggle && panel) {
      toggle.onclick = () => {
        panel.style.display = panel.style.display === 'block' ? 'none' : 'block';
      };
    }
  }

  function updateTripType() {
    const trip = document.querySelector('input[name="trip"]:checked').value;
    document.getElementById('returnDetails').style.display = (trip === 'roundtrip') ? 'block' : 'none';
    document.getElementById('multiCityDetails').style.display = (trip === 'multicity') ? 'block' : 'none';
  }

  function addCity() {
    const container = document.getElementById('multiCityCities');
    const div = document.createElement('div');
    div.className = 'citySection';
    div.innerHTML = `
      <input type="text" placeholder="From" class="cityFrom">
      <input type="text" placeholder="To" class="cityTo">
      <input type="date" class="cityDate">
    `;
    container.appendChild(div);
  }

  function removeCity() {
    const container = document.getElementById('multiCityCities');
    const sections = container.getElementsByClassName('citySection');
    if (sections.length > 1) {
      container.removeChild(sections[sections.length - 1]);
    }
  }

  function submitForm(event) {
    event.preventDefault();

    const tripType = document.querySelector('input[name="trip"]:checked').value;
    const from = document.getElementById('from').value;
    const to = document.getElementById('to').value;
    const date = document.getElementById('date1').value;
    const returnFrom = document.getElementById('returnFrom') ? document.getElementById('returnFrom').value : '';
    const returnTo = document.getElementById('returnTo') ? document.getElementById('returnTo').value : '';
    const returnDate = document.getElementById('returnDate') ? document.getElementById('returnDate').value : '';

    const passengersData = {
      adult: parseInt(document.getElementById('adultCount').innerText),
      child: parseInt(document.getElementById('childCount').innerText),
      infant: parseInt(document.getElementById('infantCount').innerText),
      travelClass: travelClass
    };

    const formData = {
      tripType: tripType,
      from: from,
      to: to,
      date: date,
      returnFrom: returnFrom,
      returnTo: returnTo,
      returnDate: returnDate,
      passengers: passengersData
    };

    // ✅ ADD THIS SECTION for Multi-City
    if (tripType === 'multicity') {
      const multiCityData = [];
      const sections = document.querySelectorAll('.citySection');
      sections.forEach(section => {
        multiCityData.push({
          from: section.querySelector('.cityFrom').value,
          to: section.querySelector('.cityTo').value,
          date: section.querySelector('.cityDate').value
        });
      });
      formData.multiCity = multiCityData;
    }

    fetch('submit_form.php', {  
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formData)  
    })
    .then(response => response.json())
    .then(data => {
  if (data.success) {
    window.location.href = 'thankyou.php'; // ✅ Redirect to thank you page
  } else {
    alert('There was an error submitting the form');
  }
})  
    .catch(error => console.error('Error:', error));
  }

  window.onload = () => {
    bindPassengerDropdown();
    updatePassengerLabel();
  };
</script>



  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Swiper Init -->
  <script>
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      navigation: {
        nextEl: ".custom-next",
        prevEl: ".custom-prev"
      },
      breakpoints: {
        640: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      }
    });
  </script>
  <!--hero2-->
  <script>
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      } else {
        entry.target.classList.remove('visible');
      }
    });
  }, {
    threshold: 0.1
  });

  document.querySelectorAll('.card').forEach(card => {
    card.classList.add('animate-up'); // initial state
    observer.observe(card);           // observe each card
  });
</script>

<!-- ✅ Working Count Animation Script -->
<script>
  function animateCount(id, target, speed = 20) {
    const el = document.getElementById(id);
    if (!el) return; // safety check
    let count = 0;
    const increment = Math.ceil(target / 100);

    const update = () => {
      count += increment;
      if (count >= target) {
        el.innerText = target;
      } else {
        el.innerText = count;
        requestAnimationFrame(update);
      }
    };

    update();
  }

  // ✅ Safer way to run on load without overwriting others
  document.addEventListener("DOMContentLoaded", function () {
    animateCount("count-customers", 12870);
    animateCount("count-satisfaction", 100);
  });
</script>

<!--sub-->
<!-- Include SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.getElementById("subscribeForm").addEventListener("submit", function(e) {
  e.preventDefault(); // stop page reload

  const email = document.getElementById("subscriberEmail").value;

  fetch("subscribe.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded"
    },
    body: "subscribe=1&email=" + encodeURIComponent(email)
  })
  .then(response => response.text())
  .then(data => {
    Swal.fire({
      title: 'Thanks You For Subscribe',
      text: data,
      icon: 'success'
    });
    document.getElementById("subscriberEmail").value = ""; // clear field
  })
  .catch(error => {
    Swal.fire({
      title: 'Error',
      text: 'Something went wrong!',
      icon: 'error'
    });
  });
});
</script>
