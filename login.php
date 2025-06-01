<?php include("include/header.php"); ?>

<div style="display: flex; min-height: 100vh; align-items: center; justify-content: center; background-color: #f4f4f4; padding: 2rem;">
  <div style="display: flex; max-width: 900px; width: 100%; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">

    <!-- Left Side: Login Form -->
    <div style="flex: 1; padding: 3rem;">
      <h2 style="margin-bottom: 2rem; text-align: center;">User Login</h2>
      <form action="login_process.php" method="POST">
        <div class="form-group" style="margin-bottom: 1.2rem;">
          <label for="username" style="display: block; margin-bottom: 0.5rem;">Username</label>
          <input type="text" id="username" name="username" required placeholder="Enter User Id or Mail "
                 style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 6px;" />
        </div>

        <div class="form-group" style="margin-bottom: 1.5rem;">
          <label for="password" style="display: block; margin-bottom: 0.5rem;">Password</label>
          <input type="password" id="password" name="password" required placeholder="Enter Password"
                 style="width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 6px;" />
        </div>

        <button type="submit" style="width: 100%; background-color: #2563eb; color: white; padding: 0.75rem; border: none; border-radius: 6px; font-size: 1rem; cursor: pointer;">
          Login
        </button>
      </form>

      <!-- Sign Up Button -->
      <div style="text-align: center; margin-top: 1.5rem;">
        <p>Don't have an account?</p>
        <a href="register.php" style="display: inline-block; margin-top: 0.5rem; padding: 0.5rem 1.2rem; background: #10b981; color: white; text-decoration: none; border-radius: 6px;">
          Sign Up
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
