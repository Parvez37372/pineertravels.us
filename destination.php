<?php include("include/header.php");?>
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

</style>
 <!-- Hero Section -->
    <section class="hero-section">
        <div class="left-content">
            <img src="assest/img/vacation.png" alt="Luggage and travel items">
        </div>
        <div class="center-content">
            <h1> Travel Destinations</h1>
        </div>
        <div class="right-content">
            <img src="assest/img/plane.png" alt="Airplane">
        </div>
    </section>
<section class="travel-section">
  <h2>Popular Global Travel Destinations</h2>


  <div class="travel-wrapper">
    <div class="travel-globe-box">
   <form>
       <label>form</label>
       <input type="text" id="form-destination" Placeholder="Form Destination" auto >
       <lable>To</lable>
              <input type="text" id="To" Placeholder="To Destination">
              <label>Date</label>
              <input type="date" placeholder="date">
              <br>
          <label for="country">Choose Country</label>
<select id="country" name="country">
    <option value="UK">UK</option>
    <option value="Saudi">Saudi Arabia</option>
    <option value="UAE">UAE</option>
    <option value="UAE">Italy</option>
    <option value="UAE">Japan</option>
    <option value="UAE">Australia</option>
     <option value="UAE">    United Kingdom</option>
</select><br>

              <button type="btn" name="submit" value="submit" class="subbtn">Book Now</button>

   </form>
    </div>

    <div class="travel-grid">
      <div class="travel-card">
        <img src="assest/img/image-1.webp" alt="Rome">
        <h4>Rome</h4>
        <p style="color: grey; padding:10px">&nbsp 
          <i class="fa fa-location-dot"></i> - Italy 
          <i class="fa fa-globe"></i> Tour
        </p>
        <button class="travel-discover-btn" title="Discover Location">Discover</button>
      </div>

      <div class="travel-card">
        <img src="assest/img/image-2.webp" alt="Tokyo">
        <h4>Tokyo</h4>
        <p style="color: grey; padding:10px">&nbsp 
          <i class="fa fa-location-dot"></i> - Japan 
          <i class="fa fa-globe"></i> Tour
        </p>
        <button class="travel-discover-btn" title="Discover Location">Discover</button>
      </div>

      <div class="travel-card">
        <img src="assest/img/image-3.webp" alt="Sydney">
        <h4>Sydney</h4>
        <p style="color: grey;padding:10px">&nbsp 
          <i class="fa fa-location-dot"></i> - Australia
          <i class="fa fa-globe"></i> Tour
        </p>
        <button class="travel-discover-btn" title="Discover Location">Discover</button>
      </div>

      <div class="travel-card">
        <img src="assest/img/image-4.webp" alt="London">
        <h4>London</h4>
        <p style="color: grey; padding:10px">&nbsp 
          <i class="fa fa-location-dot"></i> - United Kingdom
          <i class="fa fa-globe"></i> Tour
        </p>
        <button class="travel-discover-btn" title="Discover Location">Discover</button>
      </div>
    </div>
  </div>
</section>
<?php include("include/footer.php");?>