<?php

require 'includes/dbconnect.php';

$queryTop = $pdo->query('SELECT * FROM posts ORDER BY post_id DESC LIMIT 15');
$topPosts = $queryTop->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Listing Details - Abode</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Browser icon -->
  <link href="assets/img/abode_web_icon.jpg" rel="icon">
  <link href="assets/img/abode_web_icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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

  <main id="main">

    <!-- Breadcrumbs -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Residence Listing Details</li>
        </ol>

        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <?php foreach ($topPosts as $topposts): ?>
        
            <div class="swiper-slide">
            <h2><?php echo $topposts['location'] ?></h2>
            </div>

            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <?php foreach ($topPosts as $topposts): ?>

                  <div class="swiper-slide">
                    <img src="admin/uploads/<?php echo $topposts['image'] ?>" alt="">
                  </div>

                <?php endforeach; ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div class="portfolio-description">
              <h2>What's special</h2>
              <h6>5 Bedrooms, 8 Bathrooms, 3 Full Bathrooms, 2 3/4 Bathrooms, 3 Half Bathrooms</h6>
              <p>Spectacular home perched high above the city with stunning 360-degree views of The Strip, Vegas Valley & surrounding mountains from every window. This nearly 15,000 sq ft home recently underwent an exquisite $6 million renovation of the finest standard and is in one of the most prestigious neighborhoods in Vegas: triple gated The Pointe enclave of The Ridges. Enjoy the utmost privacy, backing to the mountains & no surrounding neighbors. Whether you’re a true home cook or prefer a private chef, the kitchen has it all: double islands w/waterfall onyx, 3 full ovens, commercial walk-in fridge/freezer, steamer, deep fat fryer & more. Seamless indoor/outdoor living at its best with multiple pocketing door systems, huge balcony w/dining & full outdoor kitchen. Gorgeous primary suite w/more views, two enormous closets, lounge, sauna, yoga studio, steam shower, soaking tub & private outdoor bath. Other features: state-of-the-art movie theater, game room, loft area, neg-edge pool & much more.
              </p>
            </div> -->
          </div>


          <div class="col-lg-4">
            <div class="portfolio-info">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                  <?php foreach ($topPosts as $topposts): ?>

                    <div class="swiper-slide">
                      <h2>
                        <?php echo '$' . number_format($topposts['price'], 0, '.', ','); ?>
                      </h2>
                      <h3>
                        <?php echo $topposts['location'] ?>
                      </h3>
                      <ul class="list-inline">
                        <li><i class="bi bi-house-door"></i> <strong>Residence Type</strong>:
                          <?php echo $topposts['residence_type'] ?>
                        </li>
                        <li><i class="bi bi-calendar"></i> <strong>Year Built</strong>:
                          <?php echo $topposts['year'] ?>
                        </li>
                        <li><i class="bi bi-geo-alt"></i> <strong>Lot Size</strong>:
                          <?php echo $topposts['lot_size'] ?> Acres
                        </li>
                        <li><i class="bi bi-card-text"></i> <strong>Description</strong>:
                          <?php echo $topposts['description'] ?>
                        </li>
                      </ul>
                    </div>

                  <?php endforeach; ?>


                </div>
              </div>
            </div>
            <!-- <ul>
                <li><i class="bi bi-house-door"></i> <strong>Residence Type</strong>: Single Family Residence</li>
                <li><i class="bi bi-calendar"></i> <strong>Year Built</strong>: 2019</li>
                <li><i class="bi bi-geo-alt"></i> <strong>Lot Size</strong>: 1.14 Acres lot</li>
                <li><i class="bi bi-currency-dollar"></i> <strong>Price per Square Feet</strong>: $1,505</li>
                <li><i class="bi bi-cash"></i> <strong>Estimated Down Payment</strong>: $5,612,500</li>
                <li><i class="bi bi-calculator"></i> <strong>Estimated Monthly Cost</strong>: $135,450</li> 
              </ul>
              <ul class="list-inline">
                <li class="list-inline-item"><i class="bi bi-star"></i><strong> Huge Balcony</strong></li>
                <li class="list-inline-item"><i class="bi bi-star"></i><strong> Neg-Edge Pool</strong></li>
                <li class="list-inline-item"><i class="bi bi-star"></i><strong> Game Room</strong></li>
                <li class="list-inline-item"><i class="bi bi-star"></i><strong> Sauna Room</strong></li>
                <li class="list-inline-item"><i class="bi bi-star"></i><strong> Double Islands</strong></li>
                <li class="list-inline-item"><i class="bi bi-star"></i><strong> Yoga Studio</strong></li>
                <li class="list-inline-item"><i class="bi bi-star"></i><strong> State-of-the-Art Movie Theater</strong></li>
                <li class="list-inline-item"><i class="bi bi-star"></i><strong> Gated Community</strong></li>
              </ul> -->
          </div>
        </div>
      </div>
      </div>
    </section>

  </main>

  <?php
  include "includes/footer.php";
  ?>

</body>

</html>