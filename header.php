
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Nuro Nurturer</title>
    <!-- <link rel="icon" href="C:\xampp\htdocs\djlm\assets\images\favcon.ico" type="image/x-icon"> -->


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    

 

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
    <div class="custom-div">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <div class="logo">
            <img src="assets/images/logo.png" width="80" height="80" alt="NeuroNurturer" style="margin-left: 30px;">
</div>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <?php 
				session_start();
				error_reporting(0);
				if ($_SESSION['user']=='user')
				{
				?>
			   <li class="scroll-to-section"><a href="index1.php" class="active">Home</a></li>
              <?php
              include('connection.php');
              $res=mysqli_query($con,"select * from result where user_id='$_SESSION[uid]'");
              // 
              
              

              //echo "select * from result where user_id='$_SESSION[uid]'";
              $cc=mysqli_num_rows($res);
              
              if($cc>0)
              {
                echo '<li class="scroll-to-section"><a href="activities.php">Lumina</a></li>';
                if (basename($_SERVER['PHP_SELF']) === 'social_community.php') {
                  echo '<li class="scroll-to-section"><a href="add_social.php">upload</a></li>';
              }
                echo '<li class="scroll-to-section"><a href="detection.php">Early Eye</a></li>';
              }
              else
              {
                echo '<li class="scroll-to-section"><a href="detection.php">Early Eye</a></li>';
              }
              ?>
              
              <li><div class="gradient-button"><a  href="logout.php"><i class="fa fa-sign-in-alt"></i> Logout</a></div></li>
			  <?php
				}else{
			   ?>
		
				<li class="scroll-to-section"><a href="index.php#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div></li> 
			   <?php
				}
				?>
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
      </div>
    </div>
  </header>