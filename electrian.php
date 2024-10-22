<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electrical Services</title>
  <link rel="icon" type="image/x-icon" href="images/logo.ico">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/style.css"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- font awesome style -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css"/>
  <link rel="stylesheet" href="fontawesome/js/all.min.js" />

  <style>
    .service-sidebar {
      background-color:#DC3545;
      padding: 20px;
      height: 100%;
    }
    h3{
      color: #fff;
    }
    .service-sidebar .list-group-item.hover {
      background-color: #DC3545;
      border-color: #0355cc;
    }
    .breadcrumb-item + .breadcrumb-item::before {
      content: ">";
    }
    .service-image {
      max-width: 100%;
      height: auto;
    }
    .icon-box {
  padding: 20px;
  background-color: #f9f9f9; 
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  transition: transform 0.3s ease, box-shadow 0.3s ease; 
  margin: 20px 0;
}

/* Icon Styling */
.icon-box i {
  color: #DC3545; 
  margin-bottom: 15px; 
  transition: color 0.3s ease; 
}
/* Heading Styling */
.icon-box h5 {
  font-size: 20px; 
  font-weight: bold; 
  margin-bottom: 10px; 
  color: #333; }

/* Paragraph Styling */
.icon-box p {
  font-size: 16px; 
  color: #666; 
  margin-bottom: 0; 
}
/* Hover Effects */
.icon-box:hover {
  transform: translateY(-10px); 
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
}

.icon-box:hover i {
  color: #007bff; 
}



  </style>
</head>
<body>
<div class="hero_area">
  <header class="header_section">
    <div class="header_top">
      <div class="container-fluid">
        <div class="navbar-nav">
          <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="width: 15%;"/><span>FastFIX</span></a>
            <!-- navbar starts -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="registration.php" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
              </ul>
            </div>
          </nav>
          <!-- navbar ends -->
        </div>
      </div>
    </header>
</div>
    <div class="row">
      <!-- Sidebar -->
      <div class="col-lg-3">
        <div class="service-sidebar">
          <div class="list-group">
            <h3>Services</h3>
            <a href="electrian.php" class="list-group-item list-group-item-action">Electrican</a>
            <a href="plumber.php" class="list-group-item list-group-item-action">Plumber</a>
            <a href="tv.php" class="list-group-item list-group-item-action">Tv Repairing</a>
            <a href="ac.php" class="list-group-item list-group-item-action">Ac Repairing</a>
            <a href="pc.php" class="list-group-item list-group-item-action">PC Reparing</a>
            <a href="carpenter.php" class="list-group-item list-group-item-action">Carpenter</a>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-lg-9">
        <div class="card">
          <img src="images/electrican.jpg" class="card-img-top service-image" alt="Electrical Tools">
          <div class="card-body">
            <h4 class="card-title">Electrical Services</h4>
            <p class="card-text">
              FastFix provide electrical services. Our electricians are skilled, trained, and professional, and can do any kind of electrical work required at your house, office, or other property.
            </p>
            <p class="card-text">
              We provide both services related to maintenance and repair such as diagnosing and resolving electrical problems, and those related to new construction projects such as complete MEP works, installation of wiring, distribution boxes, fixtures, lights, generators, UPS, etc.
            </p>
            <p class="card-text">
              Our prices are really affordable.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Icon Section -->
    <div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-6 icon-box text-center">
      <i class="fa-solid fa-tag fa-2x mb-3"></i>
      <h5>Uniform Pricing</h5>
      <p>All our prices are transparently listed in units so you don’t have to bargain.</p>
    </div>
    <div class="col-lg-6 col-md-6 icon-box text-center">
      <i class="fa-solid fa-clock fa-2x mb-3"></i>
      <h5>Always on Time</h5>
      <p>Our team will get the job done in time and budget.</p>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="container_footer">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h5>About</h5>
        <p>FastFIX is your trusted platform for quick and reliable home services. We connect you with skilled professionals for all your maintenance needs.</p>
      </div>
      <div class="col-md-3 mb-4">
        <h5>Services</h5>
        <ul class="list-unstyled">
          <li><a href="electrian.php">Electrician</a></li>
          <li><a href="plumber.php">Plumbing</a></li>
          <li><a href="ac.php">AC Repair</a></li>
          <li><a href="tv.php">TV Repair</a></li>
          <li><a href="pc.php">PC Repair</a></li>
          <li><a href="carpenter.php">Carpenter</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="registration.php">Registration</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-2 mb-4">
        <h5>Contact Us</h5>
        <ul class="list-unstyled">
          <li><i class="fa-solid fa-phone"></i> +1 (555) 123-4567</li>
          <li><i class="fa-solid fa-envelope"></i> fasfixt@gmail.com</li>
        </ul>
      </div>
    </div>
    <!-- Social Media Icons Section -->
    <div class="row">
      <div class="col text-center">
        <a href="https://facebook.com" class="social-icon facebook"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="https://twitter.com" class="social-icon twitter"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="https://instagram.com" class="social-icon instagram"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="https://linkedin.com" class="social-icon linkedin"><i class="fab fa-linkedin fa-2x"></i></a>
      </div>
    </div>
    <div class="col text-center">
      <p class="mb-0">&copy; 2024 FastFIX. All rights reserved.</p>
    </div>
  </div>
</footer>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
