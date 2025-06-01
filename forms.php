 <style>
    .flight-search, .flight-search2 {
      background: white;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      padding: 30px 40px;
      max-width: 1200px;
      margin: auto;
      position: relative;
      margin-bottom:50px;
    }

    .tabs, .tabs2 {
      display: flex;
      gap: 10px;
      margin-bottom: 25px;
      flex-wrap: wrap;
    }

    .tabs2 {
      justify-content: center;
      gap: 15px;
    }

    .tab{
      padding: 12px 24px;
      font-size:16px;
      border: none;
     
      border-radius: 10px;
      background: #eee;
      cursor: pointer;
      font-weight: 500;
    }
    
    .tab:hover
    {
        background-color:#0c61eb;
        color:#fff;
    }
    
    .tab2 {
      padding: 12px 24px;
      font-size:16px;
      border: none;
      width:300px;
      border-radius: 10px;
      background: #eee;
      cursor: pointer;
      font-weight: 500;
    }

    .tab.active {
      background: #3b82f6;
      color: white;
    }

    .tab2.active, .tab2:hover {
      background: #ff944d;
      color: white;
    }

    .trip-type {
      display: flex;
      gap: 25px;
      margin-bottom: 20px;
      font-weight: 500;
      flex-wrap: wrap;
    }

    .trip-type label {
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .trip-type input {
      accent-color: #3b82f6;
    }

    .search-form {
      background: #f0f4ff;
      border-radius: 10px;
      padding: 25px;
    }

    .input-group {
      display: flex;
      gap: 25px;
      margin-bottom: 25px;
      align-items: center;
      flex-wrap: wrap;
    }

    .input-group label {
      font-size: 13px;
      color: #555;
      display: block;
      margin-bottom: 5px;
    }

    .input-group input[type="text"],
    .input-group input[type="date"] {
      padding: 10px 14px;
      border: none;
      border-radius: 6px;
      width: 160px;
      background: white;
      box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
    }

    .arrow {
      font-size: 24px;
      color: #3b82f6;
    }

    .passengers {
      font-weight: bold;
      font-size: 15px;
      background-color:#ff944d;
      color:#fff;
      border:none;
      padding:10px 16px;
      border-radius:10px;
      cursor: pointer;
    }

    .passengers:hover {
      background-color:#f56404;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
    }

    .actions .travel-class {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .actions input[type="text"] {
      padding: 10px 12px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    .cta {
      background: #3b82f6;
      color: white;
      padding: 12px 24px;
      border-radius: 8px;
      border: none;
      font-weight: 600;
      box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
      cursor: pointer;
      transition: all 0.3s;
    }
    .btn-add:hover {
  background-color: #ff6600;
  color: #fff;
}

    .cta:hover {
      background: #2563eb;
    }

    .passenger-dropdown {
      background: #f0f4ff;
      border-radius: 10px;
      padding: 20px;
      margin-top: 10px;
      display: none;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      max-width: 300px;
      position: absolute;
      z-index: 999;
    }

    .passenger-type {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 15px 0;
    }

    .passenger-type .label {
      font-weight: 600;
      font-size: 15px;
    }

    .passenger-type .sub-label {
      font-size: 12px;
      color: #666;
    }

    .counter {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .counter button {
      width: 30px;
      height: 30px;
      border-radius: 6px;
      border: none;
      background: #e0e7ff;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      color: #333;
    }

    .counter button:hover {
      background: #3b82f6;
      color: white;
    }

    .counter span {
      width: 20px;
      text-align: center;
      font-weight: bold;
    }

    .remove-city-btn {
      background-color:#ff944d;
      border:none;
      border-radius:10px;
      padding:10px;
      color:#fff;
      font-size:15px;
    }
    .main {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
   @media (max-width: 768px) {
  .flight-search, .flight-search2 {
    padding: 20px;
    margin: 20px 10px;
  }

  .tabs
  {
   flex-direction:row;   
  }
  .tabs2 {
    flex-direction:row;
    align-items: stretch;
  }

  .tab, .tab2 {
    width: 100%;
    text-align: center;
  }

  .trip-type {
    flex-direction: row;
    gap: 10px;
  }

  .input-group {
    flex-direction:row;
    gap: 15px;
  }

  .input-group input[type="text"],
  .input-group input[type="date"] {
    width: 100%;
  }

  .actions {
    flex-direction: column;
    align-items: stretch;
  }

  .actions .travel-class {
    flex-direction: row;
  }

  .cta {
    width: 100%;
    text-align: center;
  }

  .passenger-dropdown {
    position: static;
    width: 100%;
    max-width: 100%;
  }
}

  </style>
<div class="main">

<div class="flight-search">
  <div class="tabs">
    <button class="tab active">✈ Flight</button>
    <button class="tab" >🏨 Hotel</button>
    <button class="tab" id="card">🚗 Car Rental</button>
  </div>

  <div class="flight-search2">
    <div class="tabs2">
      <button class="tab2 active" onclick="switchTab('stopover')">Stopover</button>
      <button class="tab2" onclick="switchTab('manage')">Manage Booking / Check in</button>
      <button class="tab2" onclick="switchTab('status')">Flight Status</button>
    </div>

    <!-- STOP OVER FORM -->
    <div id="stopoverForm">
      <div class="trip-type">
        <label><input type="radio" name="trip" value="oneway" checked onchange="changeTripType(this.value)"> One way</label>
        <label><input type="radio" name="trip" value="round" onchange="changeTripType(this.value)"> Round-trip</label>
        <label><input type="radio" name="trip" value="multi" onchange="changeTripType(this.value)"> Multi-City</label>
      </div>

      <div class="search-form">
        <div class="input-group">
          <div>
            <label>From</label>
            <input type="text" placeholder="From">
          </div>
          <div class="arrow">⇄</div>
          <div>
            <label>To</label>
            <input type="text" placeholder="To">
          </div>
          <div>
            <label>Departing</label>
            <input type="date">
          </div>
          <div id="returnDateWrapper" style="display:none;">
            <label>Returning</label>
            <input type="date">
          </div>
          <div style="position: relative;">
            <label>Passengers</label>
            <button class="passengers" id="passengerBtn">2 Passengers</button>
            <div class="passenger-dropdown" id="passengerDropdown">
              <p><strong>Passenger</strong></p>
              <div class="passenger-type">
                <div><div class="label">Adult</div><div class="sub-label">Above 12 years</div></div>
                <div class="counter">
                  <button onclick="changeCount('adult', -1)">−</button>
                  <span id="adultCount">2</span>
                  <button onclick="changeCount('adult', 1)">+</button>
                </div>
              </div>
              <div class="passenger-type">
                <div><div class="label">Child</div><div class="sub-label">2–11 years</div></div>
                <div class="counter">
                  <button onclick="changeCount('child', -1)">−</button>
                  <span id="childCount">0</span>
                  <button onclick="changeCount('child', 1)">+</button>
                </div>
              </div>
              <div class="passenger-type">
                <div><div class="label">Infant</div><div class="sub-label">Below 2 years</div></div>
                <div class="counter">
                  <button onclick="changeCount('infant', -1)">−</button>
                  <span id="infantCount">0</span>
                  <button onclick="changeCount('infant', 1)">+</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="multiCityWrapper" style="display:none; flex-direction: column; gap: 15px; margin-top: 20px;"></div>
        <button id="addCityBtn" style="display:none;background-color:#ff944d; padding:10px;color:#fff;border:none;border-radius:10px" onclick="addCity()" class="btn-add">+ Add Another City</button>

       <div class="actions">
  <div class="travel-class">
    <label><input type="radio" name="travelClass" value="economy" checked> Economy</label>
    <label><input type="radio" name="travelClass" value="premium"> Premium Economy</label>
    <label><input type="radio" name="travelClass" value="business"> Business</label>
    <label><input type="radio" name="travelClass" value="first"> First Class</label>
  </div>
  <input type="text" placeholder="Enter Promo Code">
  <button class="cta">BookFlight ✈️</button>
</div>
      </div>
    </div>

    <!-- MANAGE BOOKING -->
    <div id="manageForm" style="display:none;">
      <div style="display: flex; gap: 25px; border-bottom: 1px solid #ddd; margin-bottom: 20px;">
        <button class="tab2 active" id="manageTab" onclick="switchBookingTab('manage')">Manage Booking</button>
        <button class="tab2" id="checkinTab" onclick="switchBookingTab('checkin')">Check in</button>
      </div>
      <div class="search-form" style="background-color: #e8edff;">
        <div class="input-group" style="gap: 0;">
          <input type="text" placeholder="Booking Reference" style="flex: 1; padding: 14px;" />
          &nbsp
          <input type="text" placeholder="Last Name" style="flex: 1; padding: 14px;" />
          <button class="cta" style="margin-left: 20px;">Check Booking</button>
        </div>
      </div>
    </div>

    <!-- FLIGHT STATUS -->
    <div id="statusForm" style="display:none;">
      <div class="search-form" style="background-color: #f0f4ff;">
        <div class="input-group">
          <div>
            <label>Flight Number</label>
            <input type="text" placeholder="e.g. AI203">
          </div>
          <div>
            <label>Departure Date</label>
            <input type="date">
          </div>
          <button class="cta" style="margin-top: 20px;">Check Status</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const passengerBtn = document.getElementById("passengerBtn");
    const passengerDropdown = document.getElementById("passengerDropdown");
    let counts = { adult: 2, child: 0, infant: 0 };

    if (passengerBtn && passengerDropdown) {
      passengerBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        passengerDropdown.style.display = passengerDropdown.style.display === "block" ? "none" : "block";
      });

      document.addEventListener("click", function (e) {
        if (!passengerDropdown.contains(e.target) && e.target !== passengerBtn) {
          passengerDropdown.style.display = "none";
        }
      });

      function updatePassengerLabel() {
        let total = counts.adult + counts.child + counts.infant;
        passengerBtn.innerText = total + " Passenger" + (total > 1 ? "s" : "");
      }

      window.changeCount = function (type, delta) {
        counts[type] = Math.max(0, counts[type] + delta);
        const countElem = document.getElementById(type + "Count");
        if (countElem) {
          countElem.innerText = counts[type];
        }
        updatePassengerLabel();
      };

      updatePassengerLabel();
    }

    window.changeTripType = function (type) {
      const returnDate = document.getElementById("returnDateWrapper");
      const multiCity = document.getElementById("multiCityWrapper");
      const addCityBtn = document.getElementById("addCityBtn");

      if (returnDate) returnDate.style.display = (type === "round") ? "block" : "none";
      if (multiCity) {
        multiCity.style.display = (type === "multi") ? "flex" : "none";
        if (type !== "multi") multiCity.innerHTML = "";
      }
      if (addCityBtn) addCityBtn.style.display = (type === "multi") ? "inline-block" : "none";
    };

    window.addCity = function () {
      const container = document.getElementById("multiCityWrapper");
      if (!container) return;

      const cityGroup = document.createElement("div");
      cityGroup.className = "input-group";
      cityGroup.innerHTML = `
        <div><label>From</label><input type="text" placeholder="From"></div>
        <div class="arrow">⇄</div>
        <div><label>To</label><input type="text" placeholder="To"></div>
        <div><label>Date</label><input type="date"></div>
        <button class="remove-city-btn">Remove City</button>
      `;

      cityGroup.querySelector('.remove-city-btn').addEventListener('click', () => {
        cityGroup.remove();
      });

      container.appendChild(cityGroup);
    };

    window.switchTab = function (tab) {
      const forms = {
        stopover: document.getElementById("stopoverForm"),
        manage: document.getElementById("manageForm"),
        status: document.getElementById("statusForm"),
      };

      Object.values(forms).forEach(form => {
        if (form) form.style.display = "none";
      });

      if (forms[tab]) forms[tab].style.display = "block";

      document.querySelectorAll(".tabs2 .tab2").forEach(t => t.classList.remove("active"));

      document.querySelectorAll(".tabs2 .tab2").forEach(btn => {
        if (btn.textContent.includes(tab === "manage" ? "Manage" : tab === "status" ? "Status" : "Stopover")) {
          btn.classList.add("active");
        }
      });
    };

    window.switchBookingTab = function (tab) {
      const manage = document.getElementById("manageTab");
      const checkin = document.getElementById("checkinTab");
      const selected = document.getElementById(tab + "Tab");

      if (manage) manage.classList.remove("active");
      if (checkin) checkin.classList.remove("active");
      if (selected) selected.classList.add("active");
    };
  });
</script>
<script>
    document.getElementById("card").addEventListener("click", function () {
        window.location.href = "car.php";
    });
</script>


