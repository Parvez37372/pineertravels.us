
    const formFields = document.getElementById("formFields");
    const buttons = document.querySelectorAll(".trip-btn");

    function showForm(type, e) {
      buttons.forEach(btn => btn.classList.remove("active"));
      e.target.classList.add("active");

      let baseFields = `
        <div class="form-row">
          <div class="form-group"><label>Date</label><input type="date" required /></div>
          <div class="form-group"><label>Time</label><input type="time" required /></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label>Travel Class</label>
            <select>
              <option>Business Class</option>
              <option>Economic Class</option>
              <option>First Class</option>
            </select>
          </div>
        </div>
        <div id="passengerList">
          <div class="form-row passenger-row">
            <div class="form-group"><label>Name</label><input type="text" required /></div>
            <div class="form-group"><label>Age</label><input type="number" required /></div>
            <div class="form-group"><label>Gender</label>
              <select required>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
          </div>
        </div>
        <button type="button" onclick="addPassenger()">+ Add Passenger</button>
      `;

      if (type === "oneWay") {
        formFields.innerHTML = `
          <div class="form-row">
            <div class="form-group"><label>Pickup Location</label><input type="text" required /></div>
            <div class="form-group"><label>Drop Location</label><input type="text" required /></div>
          </div>
          ${baseFields}
        `;
      } else if (type === "roundTrip") {
        formFields.innerHTML = `
          <div class="form-row">
            <div class="form-group"><label>Pickup Location</label><input type="text" required /></div>
            <div class="form-group"><label>Drop Location</label><input type="text" required /></div>
          </div>
          <div class="form-row">
            <div class="form-group"><label>Return Date</label><input type="date" required /></div>
            <div class="form-group"><label>Return Time</label><input type="time" required /></div>
          </div>
          ${baseFields}
        `;
      } else if (type === "multiCity") {
        formFields.innerHTML = `
          <div class="multi-city" id="cityList">
            <div class="form-row city-row">
              <div class="form-group"><label>Pickup City</label><input type="text" required /></div>
              <div class="form-group"><label>Drop City</label><input type="text" required /></div>
            </div>
          </div>
          <button type="button" onclick="addCitys()">+ Add City</button>
          ${baseFields}
        `;
      }
    }

    function addCitys() {
      const cityList = document.getElementById("cityList");
      const cityFields = document.createElement("div");
      cityFields.className = "form-row city-row";
      cityFields.innerHTML = `
        <div class="form-group"><label>Pickup City</label><input type="text" required /></div>
        <div class="form-group"><label>Drop City</label><input type="text" required /></div>
        <button type="button" onclick="removeCitys(this)" style="align-self: flex-end; padding: 0.5rem 0.75rem; margin-top: 1.5rem; border: none; background: #2563eb; color: white; border-radius: 6px; cursor: pointer;">Remove</button>
      `;
      cityList.appendChild(cityFields);
    }

    function removeCitys(button) {
      const row = button.closest(".city-row");
      if (row) row.remove();
    }

    function addPassenger() {
      const passengerList = document.getElementById("passengerList");
      const row = document.createElement("div");
      row.className = "form-row passenger-row";
      row.innerHTML = `
        <div class="form-group"><label>Name</label><input type="text" required /></div>
        <div class="form-group"><label>Age</label><input type="number" required /></div>
        <div class="form-group"><label>Gender</label>
          <select required>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>
        <button type="button" onclick="removePassenger(this)" style="margin-top: 35px; background: #ef4444; color: white; border: none; border-radius: 5px; padding: 5px 10px;">Remove</button>
      `;
      passengerList.appendChild(row);
    }

    function removePassenger(btn) {
      const row = btn.closest(".passenger-row");
      if (row) row.remove();
    }

    window.addEventListener("load", () => {
      showForm('oneWay', { target: document.querySelector(".trip-btn") });
    });
 