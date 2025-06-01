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
      background-color:;
      padding:10px;
      color: #fff;
    }

    .quote-btn:hover {
      background: #ebf2ff;
    }
 button a {
    text-decoration: none;
    border:none;
    background-color:;
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
.airhost
{
    width:300px;
    padding-right:20px;
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
            <h1>Flight Details</h1>
        </div>
        <div class="right-content">
            <img src="assest/img/plane.png" alt="Flight Image">
        </div>
    </section>

    <!-- Feature Row -->
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

    <!-- Main Container -->
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Trip Summary</h3>
            <label>From</label>
            <input type="text" placeholder="Departure City">

            <label>To</label>
            <input type="text" placeholder="Arrival City">

            <label>Departure Date</label>
            <input type="date">

            <label>Return Date</label>
            <input type="date">

            <label>Travel Class</label>
            <select>
                <option>Economy</option>
                <option>Premium Economy</option>
                <option>Business</option>
                <option>First</option>
            </select>

            <label>Passengers</label>
            <input type="number" placeholder="Number of Travelers">

            <button class="search-btn">Search Flights</button>
      <img src="assest/img/airhost.webp" class="airhost">
        </div>
     
        <!-- Flight Listings -->
        <div class="listing-section">
            <?php
           $flights = [
    [
        'image' => 'https://cdn.lhsystems.com/styles/lead_image__fallback/public/2021-04/Emirates_Boeing777-300er.jpg.webp',
        'airline' => 'Emirates',
        'route' => 'Dubai to New York',
        'time' => '08:00 AM - 04:00 PM',
        'stops' => 'Non-stop',
        'duration' => '14h',
        'rating' => '9.4',
        'price' => '750.00'
    ],
    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSSJNOqi2usUR393nsBAucZcvMaEerAdJcDA&s',
        'airline' => 'Qatar Airways',
        'route' => 'Delhi to London',
        'time' => '06:00 AM - 02:00 PM',
        'stops' => '1 stop',
        'duration' => '10h',
        'rating' => '9.1',
        'price' => '620.00'
    ],
    [
        'image' => 'https://s28477.pcdn.co/wp-content/uploads/2017/07/singapore_airlines_A380-984x554.jpg',
        'airline' => 'Singapore Airlines',
        'route' => 'Mumbai to Singapore',
        'time' => '09:30 AM - 03:45 PM',
        'stops' => 'Non-stop',
        'duration' => '5h 45m',
        'rating' => '9.7',
        'price' => '480.00'
    ],
    [
        'image' => 'https://etimg.etb2bimg.com/photo/121180507.cms',
        'airline' => 'Air Canada',
        'route' => 'Toronto to Vancouver',
        'time' => '07:45 AM - 10:15 AM',
        'stops' => 'Non-stop',
        'duration' => '5h 30m',
        'rating' => '8.9',
        'price' => '340.00'
    ],
    [
        'image' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/cd/52/1b/qantas.jpg?w=1200&h=-1&s=1',
        'airline' => 'Qantas',
        'route' => 'Sydney to Melbourne',
        'time' => '11:00 AM - 12:30 PM',
        'stops' => 'Non-stop',
        'duration' => '1h 30m',
        'rating' => '9.0',
        'price' => '210.00'
    ],
    [
        'image' => 'https://mediacentre.britishairways.com/contents/archives/216/86/images/thumb1200x628_width/dsc_0005_1638b_thumb.jpg',
        'airline' => 'British Airways',
        'route' => 'London to Paris',
        'time' => '10:00 AM - 12:00 PM',
        'stops' => 'Non-stop',
        'duration' => '2h',
        'rating' => '8.7',
        'price' => '290.00'
    ],
    [
        'image' => 'https://d3lcr32v2pp4l1.cloudfront.net/Pictures/2000xAny/4/3/2/100432_allnipponairwaysanaboeing787_3708.jpg',
        'airline' => 'ANA - All Nippon Airways',
        'route' => 'Tokyo to Osaka',
        'time' => '01:00 PM - 02:30 PM',
        'stops' => 'Non-stop',
        'duration' => '1h 30m',
        'rating' => '9.3',
        'price' => '250.00'
    ]
];


            foreach ($flights as $flight) {
                // Check if image is a full URL or local file
                $imageSrc = (filter_var($flight['image'], FILTER_VALIDATE_URL)) 
                            ? $flight['image'] 
                            : 'assest/img/' . $flight['image'];

                echo '
                <div class="car-card">
                    <div class="car-top">
                        <img src="' . $imageSrc . '" alt="' . htmlspecialchars($flight['airline']) . '">
                        <div class="car-details">
                            <div>
                                <div class="car-title">' . htmlspecialchars($flight['airline']) . '</div>
                                <div class="car-meta">' . htmlspecialchars($flight['route']) . '</div>
                                <div class="car-features">
                                    <span>🛫 ' . htmlspecialchars($flight['time']) . '</span>
                                    <span>⏱ ' . htmlspecialchars($flight['duration']) . '</span>
                                    <span>🔁 ' . htmlspecialchars($flight['stops']) . '</span>
                                </div>
                            </div>
                            <div class="car-bottom">
                                <div>
                                    <div class="vendor">Rating: <span class="rating">' . htmlspecialchars($flight['rating']) . '</span></div>
                                </div>
                                <div class="car-price">$' . htmlspecialchars($flight['price']) . '</div>
                                <div class="car-buttons">
                                    <button class="select-btn">Book Now</button>
                                    <button class="quote-btn"><a href="mailto:info@fusionairtravels.com" >Email Quote</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
