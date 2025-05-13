<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PathFinders Sign Up</title>
  <link rel="stylesheet" href="signup.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <div class="signup-container">
    <h2>Create Your Account</h2>
    <form action="register.php" method="POST">
      
      <div class="form-group">
        <label for="fullname">Fullname</label>
        <input type="text" id="fullname" name="fullname" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
      </div>

      <div class="form-group">
        <label>User Role</label><br>
        <div class="checkbox-group">
          <input type="radio" id="job-seeker" name="user-role" value="jobseeker" required>
          <label for="job-seeker">Employee</label>
          <input type="radio" id="employer" name="user-role" value="employer">
          <label for="employer">Employer</label>
        </div>
      </div>

      <!-- Corrected button: removed <a> tag inside button -->
      <button type="submit" class="signup-btn">Sign Up</button>
    </form>

    <div class="login-link">
      Already have an account? <a href="index.php">Log in</a>
    </div>
  </div>
</body>
</html>
