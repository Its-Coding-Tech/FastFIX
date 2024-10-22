<?php
include('dbConnection.php');

if (isset($_POST['submit'])) {
  // Using isset() to avoid undefined index notices
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';

  // Insert into database
  $sql = "INSERT INTO contact_us (name, subject, email, message) VALUES ('$name', '$subject', '$email', '$message')";
  
  if ($conn->query($sql) === TRUE) {
      $msg = "Message sent successfully!";
  } else {
      $msg = "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
<!DOCTYPE>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>FastFIX</title>
  <link rel="icon" type="image/x-icon" href="images/logo.ico">
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <!-- font awesome style -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css"/>
  <link rel="stylesheet" href="fontawesome/js/all.min.js" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
    <!-- header section strats -->
  <class="hero_area">
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="navbar-nav">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="width: 15%;"/><span>FastFIX</span></a>

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
        </div>
      </div>
      </div>
    </header>
<!--Start Contact Us Row-->
<div class="container" id="Contact">
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->

    <div class="col-md-8">
        <!--Start Contact Us Form-->
        <form action="" method="post">
    <input type="text" class="form-control" name="name" placeholder="Name"><br>
    <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
    <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
    <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
    <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
</form>

        <!-- Display success or error message -->
        <?php if (isset($msg)) { echo $msg; } ?>
    </div>
</div>
<!-- Form End -->
<footer>
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
</body>
</html>