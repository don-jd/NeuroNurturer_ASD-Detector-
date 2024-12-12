<?php
include("header.php");
?>
<div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4><em>Early</em> Eye</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>This advanced facial recognition technology helps identify potential markers of ASD
              in children, enabling early intervention .</p>
          </div>
        </div>
        
<div class="col-lg-12">
  <div class="pricing-item-pro">
    <h4>Upload Image</h4>
    
    <form id="imageUploadForm" method="post" enctype="multipart/form-data">
      <div class="row">
      <div class="col-lg-8 offset-lg-2">
          <input type="file" name="uploadedfile" id="imageInput" class="form-control" accept="image/*" onchange="previewImage(event)" placeholder="Username">
        </div>
      </div>
      <br>
      <div id="imagePreview" style="display: none;"></div>
      <br>
      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
    <br><br><br><br>
  </div>
</div>

<script>
  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
      var output = document.getElementById('imagePreview');
      output.style.display = 'block';
      output.innerHTML = '<img src="' + reader.result + '" style="max-width:224px; max-height:224px; border: 5px solid #D5EEFF; border-radius: 30px;">';
    };
    reader.readAsDataURL(event.target.files[0]);
  }
</script>


        
        <?php
        set_time_limit(0);
				include('connection.php');

        $target_path="test/test.png";

        $target_path = $target_path;

        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {

          echo "<br>";
				  //$python = `python averaging_predictor.py`;
				  //echo "<pre>".$python."</pre>";
				
          $python1 = "C:\\Users\\hp\\AppData\\Local\\Programs\\Python\\Python38\\python.exe";
          $file = "C:\\xampp\\htdocs\\djlm\\averaging_predictor.py";
          $python=exec($python1 . " " . $file);

          //echo $python;
				
          echo "<div class='col-lg-12 col-md-12 well' style='background-color:white; padding: 20px; border: 1px solid #ddd; border-radius: 5px;'>
          <center><h1 style='margin-bottom: 20px; font-family: Arial, sans-serif;'>OUTPUT</h1><hr>
          <pre style='font-family: Courier, monospace; font-size: 16px;'>".$python."</pre></center>
          </div>";


          if($python=='autistic') 
          {
            echo "<script>window.location='activities.php'</script>";
            $date=date('Y-m-d');
            mysqli_query($con,"insert into result(user_id,result,date) Values ('$_SESSION[uid]','$python','$date')");
          } 
          

          
            
        } 
        
				


        ?>




      </div>
    </div>
  </div> 
  <?php
include("footer.php");
?>