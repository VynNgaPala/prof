<<<<<<< Updated upstream:home.html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PathFinders - Home</title>
  <link rel="stylesheet" href="style.css" />
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

  

  <div class="hero">
    <div class="hero-content">
      <h1>Welcome to PathFinders</h1>
      <p>Connect to opportunities that match your skills</p>
  
      <div class="search-bar">
        <input id="searchInput" type="text" placeholder="Search for jobs, companies..." />
        <select id="jobTypeFilter">
          <option value="">All Types</option>
          <option value="Full-Time">Full-Time</option>
          <option value="Part-Time">Part-Time</option>
          <option value="Freelance">Freelance</option>
        </select>
        <select id="locationFilter">
          <option value="">All Locations</option>
          <option value="Metro Manila">Metro Manila</option>
          <option value="Cebu">Cebu</option>
          <option value="Davao">Davao</option>
          <option value="Remote">Remote</option>
        </select>
        <select id="workTypeFilter">
          <option value="">Onsite or Remote</option>
          <option value="Onsite">Onsite</option>
          <option value="Remote">Remote</option>
          <option value="Hybrid">Hybrid</option>
        </select>
        <select id="salaryFilter">
          <option value="">Any Salary</option>
          <option value="50000">Above 50,000</option>
          <option value="100000">Above 100,000</option>
        </select>
        <button onclick="filterJobs()">Search</button>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Job Categories</h2>
    <div class="grid">
      <div class="card"><h3>IT & Software</h3><p>125 open positions</p></div>
      <div class="card"><h3>Customer Service</h3><p>78 openings</p></div>
      <div class="card"><h3>Healthcare</h3><p>60 roles</p></div>
      <div class="card"><h3>Education</h3><p>89 listings</p></div>
    </div>
  </div>

  <div class="section">
    <h2>Featured Jobs</h2>
    <div class="grid">
      <div class="card">
        <h3>Frontend Developer</h3>
        <p>Company: TechNova</p>
        <p>Location: Remote</p>
        <button>Apply Now</button>
      </div>
      <div class="card">
        <h3>Customer Support Agent</h3>
        <p>Company: QuickHelp</p>
        <p>Location: Manila</p>
        <button>Apply Now</button>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Latest Job Listings</h2>
    <div class="grid">
      <div class="card">
        <h3>UX Designer</h3>
        <p>Company: PixelPerfect</p>
        <p>Posted: 2 days ago</p>
        <button>View</button>
      </div>
      <div class="card">
        <h3>Data Analyst</h3>
        <p>Company: DataSage</p>
        <p>Posted: 3 days ago</p>
        <button>View</button>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Top Companies Hiring</h2>
    <div class="grid logos">
      <img src="strawhat.jpg" alt="Strawhat Pirates"/>
      <img src="heart.png" alt="Company 2" />
      <img src="marine.webp" alt="Company 3" />
    </div>
  </div>

  <div class="section">
    <h2>Career Tips</h2>
    <ul>
      <li><a href="#">How to write a job-winning resume</a></li>
      <li><a href="#">Interview questions to prepare for in 2025</a></li>
      <li><a href="#">Skills most in-demand this year</a></li>
    </ul>
  </div>

  <footer>
    &copy; 2025 PathFinders. All rights reserved.
  </footer>

  <script>
    function logout() {
      localStorage.removeItem('loggedIn');
      window.location.href = "index.html";
    }

    if (!localStorage.getItem('loggedIn')) {
      window.location.href = "index.html";
    }

    // Highlight current nav item
    const currentPage = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('.nav-item');
    navLinks.forEach(link => {
      if (link.href.includes(currentPage)) {
        link.classList.add('active');
      }
    });
  </script>
  <script>
    function filterJobs() {
      const keyword = document.getElementById('searchInput').value;
      const jobType = document.getElementById('jobTypeFilter').value;
      const location = document.getElementById('locationFilter').value;
      const workType = document.getElementById('workTypeFilter').value;
      const salary = document.getElementById('salaryFilter').value;
  
      const params = new URLSearchParams({
        keyword,
        jobType,
        location,
        workType,
        salary
      });
  
      window.location.href = `jobs.html?${params.toString()}`;
    }
  </script>
  


</body>
</html>
=======
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PathFinders - Home</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <nav>
    <div class="logo">PathFinders</div>
    <div class="nav-links">
      <a href="home.php" class="nav-item">Home</a>
      <a href="jobs.php" class="nav-item">Jobs</a>
    </div>
    <div class="nav-actions">
      <a href="account.php" class="account-logo">
        <img src="acc.jpg" alt="Account" style="width: 30px; height: 30px;"/>
      </a>
    </div>
  </nav>

  <div class="hero">
    <div class="hero-content">
      <h1>Welcome to PathFinders</h1>
      <p>Connect to opportunities that match your skills</p>
  
      <div class="search-bar">
        <input id="searchInput" type="text" placeholder="Search for jobs, companies..." />
        <select id="jobTypeFilter">
          <option value="">All Types</option>
          <option value="Full-Time">Full-Time</option>
          <option value="Part-Time">Part-Time</option>
          <option value="Freelance">Freelance</option>
        </select>
        <select id="locationFilter">
          <option value="">All Locations</option>
          <option value="Metro Manila">Metro Manila</option>
          <option value="Cebu">Cebu</option>
          <option value="Davao">Davao</option>
          <option value="Remote">Remote</option>
        </select>
        <select id="workTypeFilter">
          <option value="">Onsite or Remote</option>
          <option value="Onsite">Onsite</option>
          <option value="Remote">Remote</option>
          <option value="Hybrid">Hybrid</option>
        </select>
        <select id="salaryFilter">
          <option value="">Any Salary</option>
          <option value="50000">Above 50,000</option>
          <option value="100000">Above 100,000</option>
        </select>
        <button onclick="filterJobs()">Search</button>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Job Categories</h2>
    <div class="grid">
      <div class="card"><h3>IT & Software</h3><p>125 open positions</p></div>
      <div class="card"><h3>Customer Service</h3><p>78 openings</p></div>
      <div class="card"><h3>Healthcare</h3><p>60 roles</p></div>
      <div class="card"><h3>Education</h3><p>89 listings</p></div>
    </div>
  </div>

  <div class="section">
    <h2>Featured Jobs</h2>
    <div class="grid">
      <div class="card">
        <h3>Frontend Developer</h3>
        <p>Company: TechNova</p>
        <p>Location: Remote</p>
        <button>Apply Now</button>
      </div>
      <div class="card">
        <h3>Customer Support Agent</h3>
        <p>Company: QuickHelp</p>
        <p>Location: Manila</p>
        <button>Apply Now</button>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Latest Job Listings</h2>
    <div class="grid">
      <div class="card">
        <h3>UX Designer</h3>
        <p>Company: PixelPerfect</p>
        <p>Posted: 2 days ago</p>
        <button>View</button>
      </div>
      <div class="card">
        <h3>Data Analyst</h3>
        <p>Company: DataSage</p>
        <p>Posted: 3 days ago</p>
        <button>View</button>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Top Companies Hiring</h2>
    <div class="grid logos">
      <img src="strawhat.jpg" alt="Strawhat Pirates"/>
      <img src="heart.png" alt="Company 2" />
      <img src="marine.webp" alt="Company 3" />
    </div>
  </div>

  <div class="section">
    <h2>Career Tips</h2>
    <ul>
      <li><a href="#">How to write a job-winning resume</a></li>
      <li><a href="#">Interview questions to prepare for in 2025</a></li>
      <li><a href="#">Skills most in-demand this year</a></li>
    </ul>
  </div>

  <footer>
    &copy; 2025 PathFinders. All rights reserved.
  </footer>

  <script>
    function logout() {
      // Remove session on logout
      window.location.href = "logout.php"; // Create a logout.php to clear session and redirect to index.php
    }

    // Highlight current nav item
    const currentPage = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('.nav-item');
    navLinks.forEach(link => {
      if (link.href.includes(currentPage)) {
        link.classList.add('active');
      }
    });
  </script>
  <script>
    function filterJobs() {
      const keyword = document.getElementById('searchInput').value;
      const jobType = document.getElementById('jobTypeFilter').value;
      const location = document.getElementById('locationFilter').value;
      const workType = document.getElementById('workTypeFilter').value;
      const salary = document.getElementById('salaryFilter').value;
  
      const params = new URLSearchParams({
        keyword,
        jobType,
        location,
        workType,
        salary
      });
  
      window.location.href = `jobs.html?${params.toString()}`;
    }
  </script>
</body>
</html>
>>>>>>> Stashed changes:home.php
