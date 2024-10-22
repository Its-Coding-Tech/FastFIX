<?php
// Start the session at the very beginning
session_start();

// Include the database connection
include('dbConnection.php');

// Initialize message variable
$msg = '';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $_POST['role'];
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));
    
    if ($role === 'admin') {
        // Admin login
        $sql = "SELECT a_email, a_password FROM adminlogin_tb WHERE a_email='$email' AND a_password='$password' LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $_SESSION['is_adminlogin'] = true;
            $_SESSION['aEmail'] = $email;
            echo "<script> location.href='Admin/dashboard.php'; </script>";
            exit;
        } else {
            $msg = '<div class="alert alert-warning mt-2" role="alert">Invalid Admin Email or Password</div>';
        }
    } elseif ($role === 'customer') {
        // Customer login
        $sql = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email='$email' AND r_password='$password' LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $_SESSION['is_login'] = true;
            $_SESSION['rEmail'] = $email;
            echo "<script> location.href='Requester/RequesterProfile.php'; </script>";
            exit;
        } else {
            $msg = '<div class="alert alert-warning mt-2" role="alert">Invalid Customer Email or Password</div>';
        }
    } elseif ($role === 'service-provider') {
        // Service provider login
        $sql = "SELECT sp_email, sp_password FROM sp_login_tb WHERE sp_email='$email' AND sp_password='$password' LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $_SESSION['is_login'] = true;
            $_SESSION['spEmail'] = $email;
            echo "<script> location.href='ServiceProvider/RequesterProfile.php'; </script>";
            exit;
        } else {
            $msg = '<div class="alert alert-warning mt-2" role="alert">Invalid Service Provider Email or Password</div>';
        }
    } else {
        $msg = '<div class="alert alert-danger mt-2" role="alert">Invalid Role Selected</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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
  <link rel="stylesheet" href="css/style.css"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
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
                <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
              </ul>
            </div>
          </nav>
          <!-- navbar ends -->
        </div>
      </div>
    </header>

    <h4 class="text-center">Welcome Back to Login</h4>
    <div class="container-fluid mb-5">
      <div class="row justify-content-center custom-margin">
        <div class="col-sm-6 col-md-4">
          <form action="" class="shadow-lg p-4" method="POST">
            <div class="form-group">
              <i class="fa-solid fa-user"></i>
              <label for="role" class="pl-2 font-weight-bold">Select Role</label>
              <select class="form-control" name="role" id="role" required>
                <option value="admin">Admin</option>
                <option value="customer">Customer</option>
                <option value="service-provider">Service Provider</option>
              </select>
            </div>
            <div class="form-group">
              <i class="fa-solid fa-envelope"></i>
              <label for="email" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="email" required>
              <small class="form-text">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <i class="fa-solid fa-key"></i> 
              <label for="password" class="pl-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <button type="submit" class="btn btn-outline-primary mt-3 btn-block shadow-sm font-weight-bold">Login</button>
            <em style="font-size:15px;"><br>Already have an account? <a href="registration.php">SignUp</a></em>
            <em style="font-size:10px;"><br>Note - By clicking Sign Up, you agree to our Terms, Data Policy, and Cookie Policy.</em>
            <?php if (isset($msg)) { echo $msg; } ?>
          </form>
        </div>
      </div>
    </div>
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
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
