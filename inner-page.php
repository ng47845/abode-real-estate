<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Join Us - Abode</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Browser icon -->
  <link href="assets/img/abode_web_icon.jpg" rel="icon">
  <link href="assets/img/abode_web_icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<?php
    include "includes/header.php"
  ?>

  <!-- Main section -->
  <main id="main">

    <!-- Breadcrumbs -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li id="breadcrumbPage">Login Page</li>
        </ol>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="background-image" style="background-image: url('assets\img\inner-page_bg.jpg');">
        <div class="background-overlay"></div>
      </div>
      <div class="container">
        <p>
          Live the luxury life.
        </p>

            <!-- Container for the forms -->
            <div class="forms-container" id="formsContainer">

              <!-- Login form -->
              <div class="form login_form">
                <form action="#">
                  <h2>Login</h2>
                  <div class="input_box">
                    <input type="email" placeholder="Enter your email" required />
                    <i class="uil uil-envelope-alt email"></i>
                  </div>
                  <div class="input_box">
                    <input type="password" placeholder="Enter your password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                  </div>
                  <div class="option_field">
                    <span class="checkbox">
                      <input type="checkbox" id="check" />
                      <label for="check">Remember me</label>
                    </span>
                    <a href="#" class="forgot_pw">Forgot password?</a>
                  </div>
                  <button type="submit" class="button">Login</button>
                  <div class="login_signup">
                    Don't have an account? <a href="#signup" id="signupLink">Signup</a>
                  </div>
                </form>
              </div>
              
    
              <!-- Signup form -->
              <div class="form signup_form hidden">
                <form action="#" method="post">
                  <h2>Signup</h2>
                  <div class="input_box">
                    <input type="email" placeholder="Enter your email" required />
                    <i class="uil uil-envelope-alt email"></i>
                  </div>
                  <div class="input_box">
                    <input type="password" placeholder="Create password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                  </div>
                  <div class="input_box">
                    <input type="password" placeholder="Confirm password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                  </div>
                  <button type="submit" class="button">Signup</button>
                  <div class="login_signup">
                    Already have an account? <a href="#login" id="loginLink">Login</a>
                  </div>
                </form>
              </div>
          </div>
        </section>
      </div>
    </section>
    
  </main><!-- End #main -->

  <?php
    include "includes/footer.php";
?>

</body>

</html>