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
            <h4><em>Number</em>Nest</h4>
            <p> To explore the fundamentals of numbers and operations, empowering you to excel in logic and math.</p>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-center"> <!-- Added justify-content-center class here -->
          <div class="col-lg-3">
            <a href="Number.php" style="color :black;">
              <div class="service-item second-service_numberhub">
                <div class="icon"></div>
                <h4>Numbers Hub</h4>
                <p> Your guide to mastering basic numbers and operations, making math fun and engaging</p>
                <div class="text-button"></div>
              </div>
            </a>
          </div>
          
          <div class="col-lg-3">
            <a href="maths.php"style="color :black;">
              <div class="service-item second-service_numberlogic">
                <div class="icon"></div>
                <h4>Logic Hub</h4>
                <p> Explore basic operation interactively, making math enjoyable and accessible for all.</p>
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
