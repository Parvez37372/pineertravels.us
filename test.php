<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Your Cab</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f9fafb;
      margin: 0;
      padding: 2rem;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .form-section {
      flex: 1;
      padding: 2rem;
      min-width: 320px;
    }

    .form-section h2 {
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
      .container {
        flex-direction: column;
      }

      .form-row {
        flex-direction: column;
      }

      .image-section {
        height: 200px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-section">
      <h2>Book Your Cab</h2>
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
      <img src="https://t4.ftcdn.net/jpg/03/89/59/55/360_F_389595567_scF0v7FBxKRJmnu9qdju19ngsBJhAJXs.jpg" alt="Cab Image">
    </div>
  </div>

<script>
  const formFields = document.getElementById("formFields");
  const buttons = document.querySelectorAll(".trip-btn");

  function showForm(type, e) {
    buttons.forEach(btn => btn.classList.remove("active"));
    e.target.classList.add("active");

    if (type === "oneWay") {
      formFields.innerHTML = `
        <div class="form-row">
          <div class="form-group"><label>Pickup Location</label><input type="text" required /></div>
          <div class="form-group"><label>Drop Location</label><input type="text" required /></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label>Date</label><input type="date" required /></div>
          <div class="form-group"><label>Time</label><input type="time" required /></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label>Car Type</label>
            <select><option>Sedan</option><option>SUV</option></select>
          </div>
        </div>
      `;
    } else if (type === "roundTrip") {
      formFields.innerHTML = `
        <div class="form-row">
          <div class="form-group"><label>Pickup Location</label><input type="text" required /></div>
          <div class="form-group"><label>Drop Location</label><input type="text" required /></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label>Date</label><input type="date" required /></div>
          <div class="form-group"><label>Time</label><input type="time" required /></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label>Return Date</label><input type="date" required /></div>
          <div class="form-group"><label>Car Type</label>
            <select><option>Sedan</option><option>SUV</option></select>
          </div>
        </div>
      `;
    } else if (type === "multiCity") {
      formFields.innerHTML = `
        <div class="multi-city" id="cityList">
          <div class="form-row city-row">
            <div class="form-group"><label>Pickup City</label><input type="text" required /></div>
            <div class="form-group"><label>Drop City</label><input type="text" required /></div>
            
          </div>
        </div>
        <button type="button" onclick="addCity()">+ Add City</button>
        <div class="form-row">
          <div class="form-group"><label>Date</label><input type="date" required /></div>
          <div class="form-group"><label>Time</label><input type="time" required /></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label>Car Type</label>
            <select><option>Sedan</option><option>SUV</option></select>
          </div>
        </div>
      `;
    }
  }

  function addCity() {
    const cityList = document.getElementById("cityList");
    const cityFields = document.createElement("div");
    cityFields.className = "form-row city-row";
    cityFields.innerHTML = `
      <div class="form-group"><label>Pickup City</label><input type="text" required /></div>
      <div class="form-group"><label>Drop City</label><input type="text" required /></div>
      <button type="button" onclick="removeCity(this)" style="align-self: flex-end; padding: 0.5rem 0.75rem; margin-top: 1.5rem; border: none; background: #2563eb; color: white; border-radius: 6px; cursor: pointer;gap:10px; margin-top:35px">Remove</button>
    `;
    cityList.appendChild(cityFields);
  }

  function removeCity(button) {
    const row = button.closest(".city-row");
    if (row) row.remove();
  }

  window.onload = () => showForm('oneWay', { target: document.querySelector(".trip-btn") });
</script>

</body>
</html>
