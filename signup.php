<?php
session_start();

require 'includes/dbconnect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $message = '';

    $sql = 'INSERT INTO users(name,surname,email,password) VALUES (:name, :surname, :email, :password)';
    $query = $pdo->prepare($sql);
    if (empty($name)) {
        $message = "Name is required!";
    } else {
        $query->bindParam('name', $name);
    }
    if (empty($surname)) {
        $message = "Surname is required!";
    } else {
        $query->bindParam('surname', $surname);
    }
    if (empty($email)) {
        $message = "Email is required!";
    } else {
        $query->bindParam('email', $email);
    }
    if (empty($password)) {
        $message = "Password is required!";
    } else {
        $query->bindParam('password', $password);
    }

    if($query->execute()){
        $message = "Successfully created your account!";
    } else {
        $message = "A problem occured creating your account!";
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
          <li id="breadcrumbPage">Register Page</li>
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

       

        <div class="form signup_form" style="width: 500px; margin: 0 auto">
        <h2>Register</h2>
            <form action="signup.php" method="post" class="p-1">
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="First Name" required minlength="4">
                </div>
                <div class="form-group">
                    <label for="surname"></label>
                    <input type="text" name="surname" id="surname" class="form-control" placeholder="Last Name" required minlength="3">
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required minlength="6">
                </div>
                <br>
                <input type="submit" name="submit" value="Register" class="btn btn-dark mt-1">
                <br><br>
                <p>Are you a member? <a href="login.php" style="color: red ; text-decoration: none;">Login</a></p>
            </form>
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