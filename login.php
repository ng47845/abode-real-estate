<?php

    session_start();

    session_destroy();
    session_unset();

    session_start();

    require 'includes/dbconnect.php';

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $message = '';

        $query = $pdo->prepare('SELECT * FROM users WHERE email = :email');
        $query->bindParam(':email',$email);
        $query->execute();

        $user = $query->fetch();

        if ($user > 0 && password_verify($password, $user['password'])) {
          $_SESSION['user_id'] = $user['user_id'];
          $_SESSION['name'] = $user['name'];
          $_SESSION['surname'] = $user['surname'];
          $_SESSION['permission'] = $user['permission'];

          // condition that if user is admin take him straight to admin dashboard, else to home page
          if ($user['permission'] == 1) {
              header("Location: admin/index.php");
          } else {
              header("Location: index.php");
          }
          
      } else {
          $message = "Sorry, those credentials do not match!";
      }      
    }

?>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


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
      <!-- <div class="background-image" style="background-image: url('assets\img\inner-page_bg.png');">
        <div class="background-overlay"></div>
      </div> -->

      <?php
        if (!empty($message)) : ?>
            <div class="alert alert-primary">
                <?php echo $message ?>
            </div>
        <?php endif; ?>
      <div class="container">
        <p>
          Live the luxury life.
        </p>
        
    <?php
        if (!empty($message)) : ?>
            <div class="alert alert-primary">
                <?php echo $message ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="form login_form" style="width: 500px; margin: 0 auto">
            <h2>Login</h2>

                <form action="login.php" method="post" class="p-1">
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <br>
                    <input type="submit" name="submit" value="Login" class="btn btn-dark mt-2">
                    <br><br>
                    <p>Not a member yet? <a href="signup.php" style="color: red; text-decoration: none;">Sign Up</a></p>
                </form>
            </div>
        </div>
        </section>
    
  </main><!-- End #main -->

  <?php
    include "includes/footer.php";
?>
</body>

</html>