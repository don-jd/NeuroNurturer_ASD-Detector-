<?php
include('header.php');
include('connection.php');
?>
  <!-- ***** Header Area End ***** -->
  
  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4><em>Early</em>Eye</h4>
            <p> Revolutionizing Autism Detection: Using advanced AI, our platform analyzes facial images and questionnaire responses 
              to identify potential signs of autism early on, enabling timely intervention and support.</p>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-center"> <!-- Added justify-content-center class here -->
          <div class="col-lg-3">
            <a href="upload.php"style="color: black;">
              <div class="service-item second-service_uploadimg">
              <div class="icon"></div>
                <h4>Upload Image</h4>
                <p> Facial feature analysis for early autism detection.</p>
                <div class="text-button"></div>
              </div>
            </a>
          </div>
          
          <div class="col-lg-3">
            <a href="test_autism.php" style="color: black;">
              <div class="service-item second-service_question">
              <div class="icon"></div>
                <h4>Attend the Test</h4>
                <p> Identifying autism through questionnaire analysis.</p>
                <div class="text-button"></div>
              </div>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>

<?php
include('footer.php');
?>
