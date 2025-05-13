<?php
session_start();

// If already logged in, redirect to home
if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}

// Handle optional error messages
$error = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PathFinders – Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #eef1f6;
      position: relative;
    }
    body::before {
      content: "";
      background: url('cat.gif') no-repeat center center/cover;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      z-index: -1;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.1);
      max-width: 1100px;
      width: 95%;
      margin: 80px auto;
      display: flex;
      flex-wrap: wrap;
      overflow: hidden;
    }

    .left {
      flex: 1;
      padding: 60px 50px;
      min-width: 300px;
    }

    .left h1 {
      color: #00e1ff;
      font-size: 36px;
      margin-bottom: 30px;
      line-height: 1.3;
    }

    input {
      width: 100%;
      padding: 14px 16px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      transition: border 0.3s;
    }

    input:focus {
      border-color: #0a66c2;
      outline: none;
    }

    .btn {
      width: 100%;
      padding: 14px;
      background-color: #0a66c2;
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: 600;
      font-size: 16px;
      cursor: pointer;
      margin-bottom: 18px;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #0080ff;
    }

    .or {
      text-align: center;
      color: #ffffff;
      margin: 20px 0;
      font-size: 14px;
    }

    .oauth-btn {
      width: 100%;
      padding: 12px;
      border-radius: 6px;
      font-size: 15px;
      margin-bottom: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color: #000;
      background-color: white;
      border: 1px solid #ccc;
      transition: background-color 0.3s;
    }

    .oauth-btn:hover {
      background-color: #f2f2f2;
    }

    .right {
      flex: 1;
      background: url("map.png") no-repeat center;
      background-size: 100%;
      min-height: 400px;
    }

    .small-text {
      font-size: 13px;
      color: #ffffff;
      margin-top: 20px;
      line-height: 1.5;
    }

    .error-msg {
      background: rgba(255, 0, 0, 0.1);
      border: 1px solid red;
      padding: 10px;
      color: red;
      border-radius: 5px;
      margin-bottom: 15px;
    }

    @media (max-width: 768px) {
      .container { flex-direction: column; margin: 40px 20px; }
      .right { display: none; }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="left">
      <h1>Welcome to PathFinders</h1>

      <?php if (!empty($error)) : ?>
        <div class="error-msg"><?= $error ?></div>
      <?php endif; ?>

      <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Email address" required />
        <input type="password" name="password" placeholder="Password" required />
        <button class="btn" type="submit">Sign in</button>
      </form>

      <div class="or">or</div>

      <a href="signup.php" class="oauth-btn">Sign Up</a>

      <div class="small-text">
        By continuing, you agree to our
        <a href="#">User Agreement</a>,
        <a href="#">Privacy Policy</a>, and
        <a href="#">Cookie Policy</a>.
      </div>
    </div>
    <div class="right"></div>
  </div>

</body>
</html>
