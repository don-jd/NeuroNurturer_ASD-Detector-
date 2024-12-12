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
            <h4><em>Letter</em>Safari</h4>
            <p> Empowering individuals to learn the alphabet with specialized resources and tools</p>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-center"> <!-- Added justify-content-center class here -->
          <div class="col-lg-3">
            <a href="lan.php"style="color:black;">
              <div class="service-item second-service_write">
                <div class="icon"></div>
                <h4>Write Hub</h4>
                <p> Learn letter basics interactively. Practice handwriting with tailored exercises.</p>
                <div class="text-button"></div>
              </div>
            </a>
          </div>
          
          <div class="col-lg-3">
            <a href="language.php" style="color:black;">
              <div class="service-item second-service">
                <div class="icon"></div>
                <h4>Read Hub</h4>
                <p> Experience a reading journey, for enhancing word recognition and fluency .</p>
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
