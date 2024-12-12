<?php
include('header.php');
include('connection.php');
?>
  <!-- ***** Header Area End ***** -->
  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
            
            
            <img src="assets/images/Profile.png" style="max-width: 100%; height: auto;" alt="NeuroNurturer">

            </div>
            

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>
        
        <!-- Username & Password Login form -->
        <div class="user_login">
            <form method="post" action="log.php">
                <label>Email / Username</label>
                <input type="text" name="user" required/>
                <br />

                <label>Password</label>
                <input type="password" name="password" required />
                <br />

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><input type="submit" name="submit" class="btn btn_red" value="Login"></div><br><br><br><br>
                    <!-- <div class="one_half lastfor"><a href="#" id="register_form" class="btn">ForgetPassword</a></div> -->
                </div>
            </form>

            <a href="pwd_reset.php" class="forgot_password">Forgot password?</a>
        </div>
       
        
      



        <!-- Register Form -->
        <div class="user_register">
            <form method="POST">
                <label>Full Name</label>
                <input type="text"  name="name" required/>
                <br />

                <label>Email Address</label>
                <input type="email"  name="email"  required/>
                <br />
				
				<label>Phone</label>
                <input type="text" pattern="{0-9}[10]"  name="phone" required/>
                <br />

                <label>Password</label>
                <input type="password"  name="password"  />
                <br />

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><input type="submit" name="submit" class="btn btn_red" value="Register"></div>
                </div>
            </form>
			
			 <?php
			 if(isset($_POST['submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
    
        $sql5="INSERT INTO users(`name`,`email`, `phone`,`password`) 
               VALUES ('$name','$email','$phone','$password')";
        $res = mysqli_query($con, $sql5);
    
        if($res) {
            echo '<script>alert("Successfully Registered!")
                  window.location="index.php";
                  </script>';
        } else {
            
            echo "<script>alert('Failed to register. Please enter correct details.'); window.location='index.php'</script>";
        }
       }
			
			 ?>
			
        </div>
    </section>
</div>

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Revolutionizing Autism Care: Introducing NeuroNurturer</h2>
                    <p>Neuronurturer uses AI to detect autism in children and offers educational resources alongside early intervention support. 
                      It then goes beyond diagnosis with <br>virtual assistants designed for autistic individuals' daily needs.</p>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/slider-dec.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Amazing <em>Services &amp; Features</em> for you</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Neuronurturer utilizes AI to analyze facial scans for potential signs of Autism in children. 
              This early detection allows access to crucial interventions and personalized educational resources.
              Our comprehensive system goes beyond diagnosis, providing virtual assistants tailored to help autistic 
              students navigate daily life and learning.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Early Eye</h4>
            <p>This advanced facial recognition technology helps identify potential markers of ASD
              in children, enabling early intervention .</p>
            
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Lumina</h4>
            <p>Empower your social journey with our personalized virtual assistant – streamlining individuals life for enhanced productivity and success."</p>
            <div class="text-button">
              
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>NeuroHive</h4>
            <p>Inclusive community empowers autistic talents,
              Safe space to freely showcase abilities,
              Find belonging and support.</p>
            <div class="text-button">
              
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>SpectrumSkills</h4>
            <p>Compassionate support hub for parents and caregivers of autistic individuals, offering guidance, community, and resilience.</p>
            <div class="text-button">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>About <em>What We Do</em> &amp; Who We Are</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Discover a range of tailored support services designed to meet the unique needs of autistic individuals, 
              promoting growth, independence, and fulfillment.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a>Early ASD Detection</a></h4>
                
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a >24/7 Support &amp; Help</a></h4>
                
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a >Virtual Assistant</a></h4>
                
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a >NeuroHive</a></h4>
                
              </div>
            </div>
            
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/about-right-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
include('footer.php');
?>