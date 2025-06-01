<?php include("include/header.php"); ?>
<style>
  @media (max-width: 768px) {
    .container {
      flex-direction: column;
    }

    .form-section, .image-section {
      width: 100%;
    }

    .form-section {
      padding: 2rem 1.5rem;
    }

    .image-section {
      height: 200px;
    }
  }
</style>


<div style="display: flex; min-height: 100vh; align-items: center; justify-content: center; background-color: #f4f4f4; padding: 2rem;">
  <div style="display: flex; max-width: 900px; width: 100%; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">

    <!-- Left Side: Registration Form -->
    <div style="flex: 1; padding: 3rem;">
      <h2 style="margin-bottom: 2rem; text-align: center;">Create an Account</h2>
      <form action="register_process.php" method="POST">
        <div class="form-group" style="margin-bottom: 1rem;">
          <label for="fullname" style="display: block; margin-bottom: 0.5rem;">Full Name</label>
          <input type="text" id="fullname" name="fullname" required placeholder="Enter your full name"
                 style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 6px;" />
        </div>

        <div class="form-group" style="margin-bottom: 1rem;">
          <label for="email" style="display: block; margin-bottom: 0.5rem;">Email</label>
          <input type="email" id="email" name="email" required placeholder="Enter your email"
                 style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 6px;" />
        </div>

        <div class="form-group" style="margin-bottom: 1rem;">
          <label for="username" style="display: block; margin-bottom: 0.5rem;">Username</label>
          <input type="text" id="username" name="username" required placeholder="Choose a username"
                 style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 6px;" />
        </div>

        <div class="form-group" style="margin-bottom: 1rem;">
          <label for="password" style="display: block; margin-bottom: 0.5rem;">Password</label>
          <input type="password" id="password" name="password" required placeholder="Create a password"
                 style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 6px;" />
        </div>

        <div class="form-group" style="margin-bottom: 1.5rem;">
          <label for="confirm_password" style="display: block; margin-bottom: 0.5rem;">Confirm Password</label>
          <input type="password" id="confirm_password" name="confirm_password" required placeholder="Re-enter password"
                 style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 6px;" />
        </div>

        <button type="submit" style="width: 100%; background-color: #10b981; color: white; padding: 0.75rem; border: none; border-radius: 6px; font-size: 1rem; cursor: pointer;">
          Sign Up
        </button>
      </form>

      <!-- Login Button -->
      <div style="text-align: center; margin-top: 1.5rem;">
        <p>Already have an account?</p>
        <a href="login.php" style="display: inline-block; margin-top: 0.5rem; padding: 0.5rem 1.2rem; background: #2563eb; color: white; text-decoration: none; border-radius: 6px;">
          Login
        </a>
      </div>
    </div>

    <!-- Right Side: Image -->
    <div style="flex: 1; background-image: url('https://t4.ftcdn.net/jpg/03/45/99/77/360_F_345997742_uqF3NNXxnrkYU4C7MBJJeLVHBRh12Vln.jpg'); background-size: cover; background-position: center;">
      <!-- You can replace the image path as needed -->
    </div>

  </div>
</div>

<?php include("include/footer.php"); ?>
