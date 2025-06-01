<?php include("include/header.php"); ?>
<style>
  :root {
    --primary: #3b82f6;
    --bg: #f9fafb;
    --text: #1f2937;
    --text-light: #6b7280;
    --white: #fff;
    --card-radius: 16px;
  }

  body {
    font-family: 'Poppins', sans-serif;
    background: var(--bg);
    color: var(--text);
    padding: 0;
    margin: 0;
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

  .left-content, .right-content {
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

  .left-content img, .right-content img {
    max-width: 150px;
    height: auto;
  }

  .filter-buttons-wrapper {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1rem;
    margin: 2rem 0;
  }

  .filter-btn {
    padding: 0.6rem 1.2rem;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    background-color: var(--white);
    color: var(--text);
    font-weight: 500;
    cursor: pointer;
    transition: 0.3s ease;
  }

  .filter-btn:hover,
  .filter-btn.active {
    background-color: var(--primary);
    color: var(--white);
    border-color: var(--primary);
  }

  .card-grid-wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
    padding: 0 2rem 3rem;
  }

  .blog-card {
    background-color: var(--white);
    border-radius: var(--card-radius);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: all 0.4s ease;
  }

  .blog-card.hidden {
    opacity: 0;
    transform: scale(0.9);
    pointer-events: none;
    height: 0;
    margin: 0;
    padding: 0;
    overflow: hidden;
  }

  .blog-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);
  }

  .blog-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.4s ease;
  }

  .blog-card:hover img {
    transform: scale(1.07);
  }

  .card-details {
    padding: 1rem 1.2rem 1.5rem;
  }

  .card-meta {
    font-size: 0.85rem;
    color: var(--text-light);
    margin-bottom: 0.4rem;
  }

  .card-details h3 {
    font-size: 1.1rem;
    font-weight: 600;
    margin: 0.4rem 0 0.8rem;
  }

  .card-details p {
    font-size: 0.9rem;
    color: var(--text-light);
    margin-bottom: 1rem;
  }

  .card-details a {
    text-decoration: none;
    background-color: var(--primary);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 6px;
    font-size: 0.9rem;
    transition: 0.3s;
  }

  .card-details a:hover {
    background-color: #2563eb;
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
    <h1>Our News</h1>
  </div>
  <div class="right-content">
    <img src="assest/img/plane.png" alt="Airplane">
  </div>
</section>

<!-- Filter Buttons -->
<div class="filter-buttons-wrapper">
  <button class="filter-btn active" data-category="all">All Time</button>
  <button class="filter-btn" data-category="today">Today</button>
  <button class="filter-btn" data-category="week">This Week</button>
  <button class="filter-btn" data-category="month">This Month</button>
  <button class="filter-btn" data-category="year">This Year</button>
</div>

<!-- Blog Cards -->
<div class="card-grid-wrapper">
  <div class="blog-card" data-type="today">
    <img src="assest/img/blog-1.webp" alt="Traveling Responsibly">
    <div class="card-details">
      <div class="card-meta">ðŸ‘¤ Malisa | ðŸ“… Today</div>
      <h3>Traveling Responsibly and Sustainably</h3>
      <p>Lorem ipsum dolor sit amet consectetur.</p>
      <a href="#">Read More</a>
    </div>
  </div>

  <div class="blog-card" data-type="week">
    <img src="assest/img/blog-2.webp" alt="Urban Explorations">
    <div class="card-details">
      <div class="card-meta">ðŸ‘¤ Malisa | ðŸ“… This Week</div>
      <h3>Urban Explorations: City Navigations</h3>
      <p>Lorem ipsum dolor sit amet consectetur.</p>
      <a href="#">Read More</a>
    </div>
  </div>

  <div class="blog-card" data-type="month">
    <img src="assest/img/blog-3.webp" alt="Culture">
    <div class="card-details">
      <div class="card-meta">ðŸ‘¤ Malisa | ðŸ“… This Month</div>
      <h3>Cross-Cultural Insights</h3>
      <p>Lorem ipsum dolor sit amet consectetur.</p>
      <a href="#">Read More</a>
    </div>
  </div>

  <div class="blog-card" data-type="year">
    <img src="assest/img/blog-6.webp" alt="Balloons">
    <div class="card-details">
      <div class="card-meta">ðŸ‘¤ Malisa | ðŸ“… This Year</div>
      <h3>Horizons Beyond Borders</h3>
      <p>Lorem ipsum dolor sit amet consectetur.</p>
      <a href="#">Read More</a>
    </div>
  </div>
</div>

<script>
  const filterBtns = document.querySelectorAll(".filter-btn");
  const blogCards = document.querySelectorAll(".blog-card");

  filterBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      filterBtns.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      const selected = btn.getAttribute("data-category");

      blogCards.forEach(card => {
        const category = card.getAttribute("data-type");
        if (selected === "all" || selected === category) {
          card.classList.remove("hidden");
        } else {
          card.classList.add("hidden");
        }
      });
    });
  });
</script>

<?php include("include/footer.php"); ?>
