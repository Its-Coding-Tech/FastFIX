<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FastFIX</title>
  <link rel="icon" type="image/x-icon" href="images/logo.ico">
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css"/>
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="fontawesome/css/all.min.css"/>
  <link rel="stylesheet" href="fontawesome/js/all.min.js" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  
  <script>
    $(document).ready(function() {
      $('#role').change(function() {
        var selectedRole = $(this).val();
        if (selectedRole === 'user') {
          $('.service-provider-fields').hide();
          $('.user-fields').show();
        } else if (selectedRole === 'service-provider') {
          $('.user-fields').hide();
          $('.service-provider-fields').show();
        } else {
          $('.user-fields, .service-provider-fields').hide();
        }
      });
    });
  </script>
</head>
<body>
  <div class="hero_area">
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="width: 15%;"/><span>FastFIX</span></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
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
    </header>
  </div>

  <div class="container pt-5" id="registration">
    <h4 class="text-center">Create an Account</h4>
    <div class="row mt-4 mb-4">
      <div class="col-md-6 offset-md-3">
        <form action="" class="shadow-lg p-4" method="POST">
          <div class="form-group">
          <i class="fa-solid fa-user"></i><label for="role" class="pl-2 font-weight-bold">Role</label>
            <select id="role" name="role" class="form-control">
              <option value="">Select Role</option>
              <option value="user">User</option>
              <option value="service-provider">Service Provider</option>
            </select>
          </div>

          <!-- User Fields -->
          <div class="user-fields">
            <div class="form-group">
            <i class="fa-solid fa-user"></i><label for="name" class="pl-2 font-weight-bold">Name</label>
              <input type="text" class="form-control" placeholder="Name" name="rName">
            </div>
            <div class="form-group">
           <label class="pl-2 font-weight-bold">Gender</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rGender" id="male" value="male">
                <label class="form-check-label" for="male">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rGender" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
              </div>
            </div>
            <div class="form-group">
            <i class="fa-solid fa-phone"></i><label for="number" class="pl-2 font-weight-bold">Mobile No</label>
              <input type="number" class="form-control" placeholder="Number" name="rMobile">
            </div>
            <div class="form-group">
            <i class="fa-solid fa-envelope"></i><label for="email" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="rEmail">
              <small class="form-text">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
            <i class="fa-solid fa-key"></i><label for="pass" class="pl-2 font-weight-bold">New Password</label>
              <input type="password" class="form-control" placeholder="Password" name="rPassword">
            </div>
            <div class="form-group">
            <i class="fa-solid fa-key"></i><label for="confirm_pass" class="pl-2 font-weight-bold">Confirm Password</label>
              <input type="password" class="form-control" placeholder="Confirm Password" name="rConfirmPassword">
            </div>
          </div>

          <!-- Service Provider Fields -->
          <div class="service-provider-fields" style="display:none;">
            <div class="form-group">
              <label for="name" class="pl-2 font-weight-bold">Name</label>
              <input type="text" class="form-control" placeholder="Name" name="spName">
            </div>
            <div class="form-group">
              <label class="pl-2 font-weight-bold">Gender</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="spGender" id="male" value="male">
                <label class="form-check-label" for="male">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="spGender" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
              </div>
            </div>
            <div class="form-group">
              <label for="number" class="pl-2 font-weight-bold">Mobile No</label>
              <input type="number" class="form-control" placeholder="Number" name="spMobile">
            </div>
            <div class="form-group">
              <label for="email" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="spEmail">
              <small class="form-text">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="pass" class="pl-2 font-weight-bold">New Password</label>
              <input type="password" class="form-control" placeholder="Password" name="spPassword">
            </div>
            <div class="form-group">
              <label for="confirm_pass" class="pl-2 font-weight-bold">Confirm Password</label>
              <input type="password" class="form-control" placeholder="Confirm Password" name="spConfirmPassword">
            </div>
            <div class="form-group">
              <label for="service_field" class="pl-2 font-weight-bold">Service Field</label>
              <select name="spField" id="service_field" class="form-control">
                <option value="">Select Field</option>
                <option value="electrican">Electrican</option>
                <option value="plumber">Plumbing</option>
                <option value="carpenter">Carpenter</option>
                <option value="tv">TV Reparing</option>
                <option value="ac">AC Reparing</option>
                <option value="pc">PC Reparing</option>
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
          <em style="font-size:15px;"><br>Already have an account? <a href="login.php">Login</a></em>
          <em style="font-size:10px;"><br>Note - By clicking Sign Up, you agree to our Terms, Data Policy, and Cookie Policy.</em>
          
          <?php if(isset($regmsg)) {echo $regmsg; } ?>
        </form>
      </div>
    </div>
  </div>
  <?php
include('dbConnection.php');

$regmsg = ''; // Initialize message variable

if (isset($_POST['signup'])) {
    $role = $_POST['role'];

    // Common validation for both user and service provider
    if ($role === 'user') {
        // User-specific validations
        if (empty($_POST['rName']) || empty($_POST['rEmail']) || empty($_POST['rPassword']) || empty($_POST['rConfirmPassword'])) {
            $regmsg = '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>';
        } elseif ($_POST['rPassword'] !== $_POST['rConfirmPassword']) {
            $regmsg = '<div class="alert alert-warning mt-2" role="alert">Passwords Do Not Match</div>';
        } else {
            $email = $conn->real_escape_string($_POST['rEmail']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $regmsg = '<div class="alert alert-warning mt-2" role="alert">Invalid Email Format</div>';
            } else {
                $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='$email'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $regmsg = '<div class="alert alert-warning mt-2" role="alert">Email ID Already Registered</div>';
                } else {
                    $rName = $conn->real_escape_string($_POST['rName']);
                    $rGender = $conn->real_escape_string($_POST['rGender']);
                    $rMobile = $conn->real_escape_string($_POST['rMobile']);
                    $rPassword = $conn->real_escape_string($_POST['rPassword']);

                    $sql = "INSERT INTO requesterlogin_tb (r_name, r_gender, r_mobile, r_email, r_password) 
                            VALUES ('$rName', '$rGender', '$rMobile', '$email', '$rPassword')";
                    if($conn->query($sql) == TRUE){
                      $regmsg = '<div class="alert alert-success mt-2" role="alert">Account Successfully Created</div>';
                    } else {
                      $regmsg = '<div class="alert alert-danger mt-2" role="alert">Unable to Create Account</div>';
                    }
                }
            }
        }
    } elseif ($role === 'service-provider') {
      // Service provider-specific validations
      if (empty($_POST['spName']) || empty($_POST['spEmail']) || empty($_POST['spPassword']) || empty($_POST['spConfirmPassword']) || empty($_POST['spField'])) {
          $regmsg = '<div class="alert alert-warning mt-2" role="alert">All Fields are Required</div>';
      } elseif ($_POST['spPassword'] !== $_POST['spConfirmPassword']) {
          $regmsg = '<div class="alert alert-warning mt-2" role="alert">Passwords Do Not Match</div>';
      } else {
          $email = $conn->real_escape_string($_POST['spEmail']);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $regmsg = '<div class="alert alert-warning mt-2" role="alert">Invalid Email Format</div>';
          } else {
              $sql = "SELECT sp_email FROM sp_login_tb WHERE sp_email='$email'";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  $regmsg = '<div class="alert alert-warning mt-2" role="alert">Email ID Already Registered</div>';
              } else {
                  $spName = $conn->real_escape_string($_POST['spName']);
                  $spGender = $conn->real_escape_string($_POST['spGender']);
                  $spMobile = $conn->real_escape_string($_POST['spMobile']);
                  $spPassword = $conn->real_escape_string($_POST['spPassword']);
                  $spField = $conn->real_escape_string($_POST['spField']);

                  $sql = "INSERT INTO sp_login_tb (sp_name, sp_gender, sp_mobile, sp_email, sp_password, sp_field) 
                          VALUES ('$spName', '$spGender', '$spMobile', '$email', '$spPassword', '$spField')";
                          if($conn->query($sql) == TRUE){
                            $regmsg = '<div class="alert alert-success mt-2" role="alert">Account Successfully Created</div>';
                          } else {
                            $regmsg = '<div class="alert alert-danger mt-2" role="alert">Unable to Create Account</div>';
                          }
              }
          }
      }
  } else {
      $regmsg = '<div class="alert alert-danger mt-2" role="alert">Invalid Role Selected</div>';
  }
}
?>

<!-- Display registration messages -->
<?php if(isset($regmsg)) { echo $regmsg; } ?>

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
