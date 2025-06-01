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
      <button type="button" onclick="addCitys()">+ Add City</button>
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

function addCitys() {
  const cityList = document.getElementById("cityList");
  const cityFields = document.createElement("div");
  cityFields.className = "form-row city-row";
  cityFields.innerHTML = `
    <div class="form-group"><label>Pickup City</label><input type="text" required /></div>
    <div class="form-group"><label>Drop City</label><input type="text" required /></div>
    <button type="button" onclick="removeCitys(this)" style="align-self: flex-end; padding: 0.5rem 0.75rem; margin-top: 1.5rem; border: none; background: #2563eb; color: white; border-radius: 6px; cursor: pointer; margin-top: 35px;">Remove</button>
  `;
  cityList.appendChild(cityFields);
}

function removeCitys(button) {
  const row = button.closest(".city-row");
  if (row) row.remove();
}

window.addEventListener("load", () => {
  showForm('oneWay', { target: document.querySelector(".trip-btn") });
});

