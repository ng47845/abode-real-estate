<?php 

require 'dbconnect.php';

$queryTop = $pdo->query('SELECT * FROM opportunities ORDER BY opportunity_id ASC LIMIT 6');
$topOpportunities = $queryTop->fetchAll();

?>

<!-- Opportunities Section -->
<section id="opportunities" class="opportunities">
      <div class="container">

        <div class="section-title">
          <span>Opportunities</span>
          <h2>Opportunities</h2>
          <p>Discover a realm of unique investment prospects tailored to redefine success.</p>
        </div>

        <div class="row">

          <?php foreach($topOpportunities as $topopportunities) : ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="<?php echo $topopportunities['icon_type'] ?>"></i></div>
              <h4><a href=""><?php echo $topopportunities['title'] ?></a></h4>
              <p><?php echo $topopportunities['description'] ?></p>
            </div>
          </div>

          <?php endforeach ?>

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Private Investors</a></h4>
              <p>Providing private investors with investment opportunities usually available only to major institutional investors.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Aligned Interests</a></h4>
              <p>Our local operating partners invest approximately 35% in each deal, up front, thereby creating shared and common interests with us.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Spread the risks</a></h4>
              <p>Offering a way to spread the risk across a diverse portfolio of income-producing properties throughout the world.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Global Diversity</a></h4>
              <p>Access distinctive investment opportunities worldwide, ensuring a globally diversified and resilient portfolio.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Exclusive Access</a></h4>
              <p>Benefit from our network, securing exclusive access to unique investment opportunities tailored for discerning investors.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Innovative Ventures</a></h4>
              <p>Explore groundbreaking investment ventures, where innovation meets profitability for unique and rewarding opportunities.</p>
            </div> -->
          </div>

        </div>

      </div>
    </section>
    <!-- End Opportunities Section -->