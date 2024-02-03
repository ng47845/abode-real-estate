<?php 

require 'dbconnect.php';

    if(isset($_POST['submit'])){
        $client_name = $_POST['client_name'];
        $client_email = $_POST['client_email'];
        $client_message = $_POST['client_message'];

        $sql = "INSERT INTO contacts(client_name,client_email,client_message) VALUE (:client_name, :client_email, :client_message)";
        $query = $pdo->prepare($sql);

        $query->bindParam('client_name',$client_name);
        $query->bindParam('client_email',$client_email);
        $query->bindParam('client_message',$client_message);

        $query->execute();

    }

?>

<!-- Contact Section -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Reach out to us now for personalized assistance and property inquiries.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>50 Sewall Street, Portland, ME 04102, USA</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@aboderealestate.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 202 555 0109</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8526.706359585818!2d-70.29645764781253!3d43.651611776055255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb29b53bf66d1df%3A0xc17e28af408c6380!2sABODE%20Real%20Estate%20Group%20at%20Keller%20Williams%20Realty!5e0!3m2!1sen!2s!4v1701978567253!5m2!1sen!2s" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form method="post" class="p-1" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 form-group">
                <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" name="client_email" id="client_email" class="form-control" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
              <textarea rows="9" type="text" name="client_message" id="client_message" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
              </div>
              <div class="form-group" style="text-align: right;">
    <input type="submit" name="submit" value="Send Message" class="btn btn-danger mt-1">
</div>

            </form>
          </div>
        </div>

      </div>
    </section>
<!-- Contact Section end -->