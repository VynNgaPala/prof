<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jobs - PathFinders</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body { margin: 0; font-family: 'Segoe UI', sans-serif; background: #eef3f8; }
    nav, footer { background: #fff; padding: 15px 40px; border-bottom: 1px solid #ddd; }
    .logo { font-size: 22px; font-weight: bold; color: #0a66c2; }
    .nav-links a { margin: 0 15px; text-decoration: none; color: #333; font-weight: 500; }
    .nav-actions button { background: #0a66c2; color: white; border: none; padding: 8px 18px; border-radius: 20px; cursor: pointer; }
    .section { padding: 40px; }
    .job-card { background: white; padding: 20px; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); transition: transform 0.3s; }
    .job-card:hover { transform: translateY(-5px); }
    .job-card h3 { margin: 0 0 8px; }
    .job-card p { margin: 5px 0; color: #555; }
    .apply-btn { background: #0a66c2; color: white; border: none; padding: 10px 20px; border-radius: 6px; cursor: pointer; margin-top: 10px; }
    footer { text-align: center; color: #777; border-top: 1px solid #ddd; }
    input, select { padding: 10px; margin: 10px 5px 20px 0; border-radius: 6px; border: 1px solid #ccc; }
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

  <!-- Search and Filter Section -->
  <div class="hero">
    <div class="hero-content">
      <h1>Explore Jobs</h1>
      <p>Apply Now!</p>
  
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

  <!-- Job Listings Section -->
  <div class="job-card" 
     data-title="Senior Software Engineer" 
     data-company="TechSolutions Inc." 
     data-type="Full-Time" 
     data-location="Quezon City" 
     data-work="Hybrid" 
     data-salary="60000">
  <h3>Senior Software Engineer</h3>
  <p>TechSolutions Inc. · Quezon City, Metro Manila</p>
  <p>PHP 60,000/month</p>
  <button class="apply-btn">Apply Now</button>
</div>

<div class="job-card" 
     data-title="Virtual Assistant" 
     data-company="AssistMe Solutions" 
     data-type="Part-Time" 
     data-location="Remote" 
     data-work="Remote" 
     data-salary="15000">
  <h3>Virtual Assistant</h3>
  <p>AssistMe Solutions · Remote</p>
  <p>PHP 15,000/month</p>
  <button class="apply-btn">Apply Now</button>
</div>

<div class="job-card" 
     data-title="Freelance Graphic Designer" 
     data-company="Creative Agency" 
     data-type="Freelance" 
     data-location="Cebu" 
     data-work="Remote" 
     data-salary="55000">
  <h3>Freelance Graphic Designer</h3>
  <p>Creative Agency · Cebu</p>
  <p>PHP 55,000/month</p>
  <button class="apply-btn">Apply Now</button>
</div>

<div class="job-card" 
     data-title="Data Scientist" 
     data-company="DataCorp Analytics" 
     data-type="Full-Time" 
     data-location="Davao City" 
     data-work="Onsite" 
     data-salary="120000">
  <h3>Data Scientist</h3>
  <p>DataCorp Analytics · Davao City</p>
  <p>PHP 120,000/month</p>
  <button class="apply-btn">Apply Now</button>
</div>

<div class="job-card" 
     data-title="Senior Project Manager" 
     data-company="GlobalTech Solutions" 
     data-type="Full-Time" 
     data-location="Remote" 
     data-work="Remote" 
     data-salary="150000">
  <h3>Senior Project Manager</h3>
  <p>GlobalTech Solutions · Remote</p>
  <p>PHP 150,000/month</p>
  <button class="apply-btn">Apply Now</button>
</div>


  <footer>
    &copy; 2025 PathFinders. All rights reserved.
  </footer>

  <!-- Script: Logout and Page Check -->
  <script>
    function logout() {
      localStorage.removeItem('loggedIn');
      window.location.href = "index.html";
    }
    if (!localStorage.getItem('loggedIn')) {
      window.location.href = "index.html";
    }
  </script>

  <!-- Script: Highlight current nav link -->
  <script>
    const currentPage = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('.nav-item');
    navLinks.forEach(link => {
      if (link.href.includes(currentPage)) {
        link.classList.add('active');
      }
    });
  </script>

<script>
  window.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    const keyword = (params.get('keyword') || '').toLowerCase();
    const jobType = params.get('jobType');
    const location = params.get('location');
    const workType = params.get('workType');
    const salary = parseInt(params.get('salary') || '0');

    const jobCards = document.querySelectorAll('.job-card');

    jobCards.forEach(card => {
      const title = card.dataset.title?.toLowerCase() || "";
      const company = card.dataset.company?.toLowerCase() || "";
      const type = card.dataset.type || "";
      const loc = card.dataset.location || "";
      const work = card.dataset.work || "";
      const jobSalary = parseInt(card.dataset.salary || "0");

      const matchesKeyword = title.includes(keyword) || company.includes(keyword);
      const matchesType = !jobType || jobType === type;
      const matchesLocation = !location || location === loc;
      const matchesWork = !workType || workType === work;
      const matchesSalary = jobSalary >= salary;

      const show = matchesKeyword && matchesType && matchesLocation && matchesWork && matchesSalary;
      card.style.display = show ? "block" : "none";
    });
  });
</script>


</body>
</html>
