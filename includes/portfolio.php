<?php 

require 'dbconnect.php';

$queryTop = $pdo->query('SELECT * FROM posts ORDER BY post_id DESC LIMIT 15');
$topPosts = $queryTop->fetchAll();

?>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Portfolio</span>
          <h2>Portfolio</h2>
          <p>Experience the extraordinary through our portfolio, showcasing a collection of residences that reinvent luxury living.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-residence">Residences</li>
              <li data-filter=".filter-apartment">Apartments</li> 
              <li data-filter=".filter-lot">Lots</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

        <?php foreach($topPosts as $topposts) : ?>
        
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $topposts['category'] ?>">
            <img src="admin/uploads/<?php echo $topposts['image'] ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo '$' . number_format($topposts['price'], 0, '.', ','); ?></h4>
              <p><?php echo $topposts['location'] ?></p>
              <a href="admin/uploads/<?php echo $topposts['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" 
                title="<?php echo $topposts['description'] ?>"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        <?php endforeach; ?>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-residence">
            <img src="assets/img/portfolio/portfolio-h-1-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$22,450,000</h4>
              <p>5 Promontory Pointe Ln, Las Vegas, NV 89135</p>
              <a href="assets/img/portfolio/portfolio-h-1-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following residence is located in 5 Promontory Pointe Ln, Las Vegas, NV 89135, boasting a price of $22,450,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Apartment">
            <img src="assets/img/portfolio/portfolio-a-1-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$7,995,000</h4>
              <p>450 Washington St #605, New York, NY 10013</p>
              <a href="assets/img/portfolio/portfolio-a-1-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following apartment is located in 450 Washington St #605, New York, NY 100135, boasting a price of $7,995,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lot">
            <img src="assets/img/portfolio/portfolio-l-1-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$13,000,000</h4>
              <p>1004 Fisher Island Dr, Miami Beach, FL 33109</p>
              <a href="assets/img/portfolio/portfolio-l-1-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following lot is located in 1004 Fisher Island Dr, Miami Beach, FL 3310, boasting a price of $13,000,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-residence">
            <img src="assets/img/portfolio/portfolio-h-2-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$11,750,000</h4>
              <p>5 Promontory Ridge Dr, Las Vegas, NV 89135</p>
              <a href="assets/img/portfolio/portfolio-h-2-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following residence is located in 5 Promontory Ridge Dr, Las Vegas, NV 89135, boasting a price of $11,750,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-apartment">
            <img src="assets/img/portfolio/portfolio-a-2-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$75,000,000</h4>
              <p>217 W 57th St APT 39B, New York, NY 10019</p>
              <a href="assets/img/portfolio/portfolio-a-2-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following apartment is located in 217 W 57th St APT 39B, New York, NY 10019, boasting a price of $75,000,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lot">
            <img src="assets/img/portfolio/portfolio-l-2-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$18,000,000</h4>
              <p>3900 N Fm 1788, Midland, TX 79707</p>
              <a href="assets/img/portfolio/portfolio-l-2-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following lot is located in 3900 N Fm 1788, Midland, TX 79707, boasting a price of $18,000,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-residence">
            <img src="assets/img/portfolio/portfolio-h-3-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$28,500,000</h4>
              <p>6889 Dume Dr, Malibu, CA 90265</p>
              <a href="assets/img/portfolio/portfolio-h-3-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following residence is located in 6889 Dume Dr, Malibu, CA 90265, boasting a price of $28,500,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-apartment">
            <img src="assets/img/portfolio/portfolio-a-3-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$149,500,000</h4>
              <p>217 W 57th St #107/108, New York, NY 10019</p>
              <a href="assets/img/portfolio/portfolio-a-3-1jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following apartment is located in 217 W 57th St #107/108, New York, NY 10019, boasting a price of $149,500,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lot">
            <img src="assets/img/portfolio/portfolio-l-3-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$50,000,000</h4>
              <p>698 E Mountain Dr, Santa Barbara, CA 93103</p>
              <a href="assets/img/portfolio/portfolio-l-3-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following lot is located in 698 E Mountain Dr, Santa Barbara, CA 93103, boasting a price of $50,000,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-residence">
            <img src="assets/img/portfolio/portfolio-h-4-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$139,000,000</h4>
              <p>1200 Bel Air Rd, Los Angeles, CA 90077</p>
              <a href="assets/img/portfolio/portfolio-h-4-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following residence is located in 1200 Bel Air Rd, Los Angeles, CA 90077, boasting a price of $139,000,000."><i class="bx bx-plus"></i></a> change App 1 to residence info
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-apartment">
            <img src="assets/img/portfolio/portfolio-a-4-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$63,815,000</h4>
              <p>53 W 53rd St PENTHOUSE 76, New York, NY 10019</p>
              <a href="assets/img/portfolio/portfolio-a-4-1jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following apartment is located in 53 W 53rd St PENTHOUSE 76, New York, NY 10019, boasting a price of $63,815,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lot">
            <img src="assets/img/portfolio/portfolio-l-4-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$32,230,915</h4>
              <p>24910 Fm 121, Gunter, TX 75058</p>
              <a href="assets/img/portfolio/portfolio-l-4-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following lot is located in 24910 Fm 121, Gunter, TX 75058, boasting a price of $32,230,915."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-residence">
            <img src="assets/img/portfolio/portfolio-h-5-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$25,000,000</h4>
              <p>130 W Rivo Alto Dr, Miami Beach, FL 33139</p>
              <a href="assets/img/portfolio/portfolio-h-5-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following residence is located in 130 W Rivo Alto Dr, Miami Beach, FL 3313, boasting a price of $25,000,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-apartment">
            <img src="assets/img/portfolio/portfolio-a-5-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$19,500,000</h4>
              <p>30 Front St, Brooklyn, NY 11201</p>
              <a href="assets/img/portfolio/portfolio-a-5-1jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following apartment is located in 30 Front St, Brooklyn, NY 11201, boasting a price of $19,500,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lot">
            <img src="assets/img/portfolio/portfolio-l-5-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$36,000,000</h4>
              <p>1996 Old Hillsboro Rd, Franklin, TN 37064</p>
              <a href="assets/img/portfolio/portfolio-l-5-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following lot is located in 1996 Old Hillsboro Rd, Franklin, TN 37064, boasting a price of $36,000,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-residence">
            <img src="assets/img/portfolio/portfolio-h-6-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$23,000,000</h4>
              <p>150 Edgewater Dr, Coral Gables, FL 33133</p>
              <a href="assets/img/portfolio/portfolio-h-6-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following residence is located in 150 Edgewater Dr, Coral Gables, FL 33133, boasting a price of $23,000,000."><i class="bx bx-plus"></i></a> change App 1 to residence info
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-apartment">
            <img src="assets/img/portfolio/portfolio-a-6-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$3,850,000</h4>
              <p>3501 N Ocean Dr PENTHOUSE 3, Hollywood, FL 33019</p>
              <a href="assets/img/portfolio/portfolio-a-6-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following apartment is located in 3501 N Ocean Dr PENTHOUSE 3, Hollywood, FL 3301, boasting a price of $3,850,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lot">
            <img src="assets/img/portfolio/portfolio-l-6-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>$17,850,000</h4>
              <p>Squirrel Creek Rd, Colorado Springs, CO 80928</p>
              <a href="assets/img/portfolio/portfolio-l-6-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="The following lot is located in Squirrel Creek Rd, Colorado Springs, CO 80928, boasting a price of $17,850,000."><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->