<<<<<<< Updated upstream:account.html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Account - PathFinders</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    .account-container { padding: 40px; background: #f9f9f9; max-width: 800px; margin: auto; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    .section-title { margin-top: 30px; font-size: 22px; }
    .info-box { background: #fff; padding: 20px; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); }
    .info-box h3 { margin: 0 0 10px; }
  </style>
</head>
<body>

<nav>
  <div class="logo">PathFinders</div>
  <div class="nav-links">
    <a href="home.html" class="nav-item">Home</a>
    <a href="jobs.html" class="nav-item">Jobs</a>
  </div>
  <div class="nav-actions">
    <a href="account.html" class="account-logo">
      <img src="acc.jpg" alt="Account" style="width: 30px; height: 30px;"/>
    </a>
  </div>
  
</nav>

<div class="account-container">
  <h1>My Account</h1>

  <div class="info-box">
    <h3>Personal Info</h3>
    <p><strong>Name:</strong> <span id="userName">Loading...</span></p>
    <p><strong>Email:</strong> <span id="userEmail">Loading...</span></p>
  </div>

  <div class="info-box">
    <h3>Achievements</h3>
    <ul id="achievementsList">
      <!-- Filled by JS -->
    </ul>
  </div>

  <div class="info-box">
    <h3>Experience</h3>
    <ul id="experienceList">
      <!-- Filled by JS -->
    </ul>
  </div>
</div>
<div class="logout-container">
    <button onclick="logout()" class="logout-btn">Logout</button>
  </div>

<footer>
  &copy; 2025 PathFinders. All rights reserved.
</footer>


<script>
  function logout() {
    localStorage.removeItem('loggedIn');
    localStorage.removeItem('userData');
    window.location.href = "index.html";
  }

  // Check login
  if (!localStorage.getItem('loggedIn')) {
    window.location.href = "index.html";
  }

  // Load user data
  const userData = JSON.parse(localStorage.getItem('userData')) || {
    name: "John Doe",
    email: "john@example.com",
    achievements: ["Completed 100 job applications", "Top 5% viewed resume", "Certified Project Manager"],
    experience: ["Software Engineer at DevTech (2019–2022)", "Frontend Developer at WebHive (2022–2025)"]
  };

  document.getElementById("userName").textContent = userData.name;
  document.getElementById("userEmail").textContent = userData.email;

  const achList = document.getElementById("achievementsList");
  userData.achievements.forEach(item => {
    const li = document.createElement("li");
    li.textContent = item;
    achList.appendChild(li);
  });

  const expList = document.getElementById("experienceList");
  userData.experience.forEach(item => {
    const li = document.createElement("li");
    li.textContent = item;
    expList.appendChild(li);
  });
</script>

</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Account - PathFinders</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    .account-container { padding: 40px; background: #f9f9f9; max-width: 800px; margin: auto; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    .section-title { margin-top: 30px; font-size: 22px; }
    .info-box { background: #fff; padding: 20px; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); }
    .info-box h3 { margin: 0 0 10px; }
  </style>
</head>
<body>

<nav>
  <div class="logo">PathFinders</div>
  <div class="nav-links">
    <a href="home.html" class="nav-item">Home</a>
    <a href="jobs.html" class="nav-item">Jobs</a>
  </div>
  <div class="nav-actions">
    <a href="account.html" class="account-logo">
      <img src="acc.jpg" alt="Account" style="width: 30px; height: 30px;"/>
    </a>
  </div>
  
</nav>

<div class="account-container">
  <h1>My Account</h1>

  <div class="info-box">
    <h3>Personal Info</h3>
    <p><strong>Name:</strong> <span id="userName">Loading...</span></p>
    <p><strong>Email:</strong> <span id="userEmail">Loading...</span></p>
  </div>

  <div class="info-box">
    <h3>Achievements</h3>
    <ul id="achievementsList">
      <!-- Filled by JS -->
    </ul>
  </div>

  <div class="info-box">
    <h3>Experience</h3>
    <ul id="experienceList">
      <!-- Filled by JS -->
    </ul>
  </div>
</div>
<div class="logout-container">
    <button onclick="logout()" class="logout-btn">Logout</button>
  </div>

<footer>
  &copy; 2025 PathFinders. All rights reserved.
</footer>


<script>
  function logout() {
    localStorage.removeItem('loggedIn');
    localStorage.removeItem('userData');
    window.location.href = "index.php";
  }

  // Check login
  if (!localStorage.getItem('loggedIn')) {
    window.location.href = "index.php";
  }

  // Load user data
 /* const userData = JSON.parse(localStorage.getItem('userData')) || {
    name: "John Doe",
    email: "john@example.com",
    achievements: ["Completed 100 job applications", "Top 5% viewed resume", "Certified Project Manager"],
    experience: ["Software Engineer at DevTech (2019–2022)", "Frontend Developer at WebHive (2022–2025)"]
  };

  document.getElementById("userName").textContent = userData.name;
  document.getElementById("userEmail").textContent = userData.email;

  const achList = document.getElementById("achievementsList");
  userData.achievements.forEach(item => {
    const li = document.createElement("li");
    li.textContent = item;
    achList.appendChild(li);
  });

  const expList = document.getElementById("experienceList");
  userData.experience.forEach(item => {
    const li = document.createElement("li");
    li.textContent = item;
    expList.appendChild(li);
  });*/
</script>

</body>
</html>
>>>>>>> Stashed changes:account.php
