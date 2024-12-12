<?php
include("header.php");
include("connection.php");
?>
<div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Add <em>NeuroHive</em> Videos</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Inclusive community empowers autistic talents,
              Safe space to freely showcase abilities.</p>
          </div>
        </div>
        
        <div class="col-lg-12" >
          <div class="pricing-item-pro">
          
            <h4>Upload File</h4>
            
            <form  method="POST" enctype="multipart/form-data">
			  <div class="row">
				<div class="col-md-12 form-group">
				  
				  <input type="text" name="title" class="form-control"  placeholder="title" >
				</div>
				<br><br><br>
				<div class="col-md-12 form-group">
				  <input type="file" name="file" class="form-control"  placeholder="Username" >
				</div>
			  </div>
			  <br>
			<input type="submit" name="submit" value="Submit" class="btn btn-primary" >
			  <br>
			</form><br><br><br><br>
          </div>
        </div>
<?php
if (isset($_POST['submit'])) {
	$title=$_POST['title'];
	$name=$_SESSION['uid'];
	
	if ($_FILES['file']['name'] != "") {
        // Define target path for uploaded file
        $target_path = "admin/social_community/uploads/" . basename($_FILES['file']['name']);

        // Move uploaded file to target path
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
			$img = basename($_FILES['file']['name']);
		
			$i = "INSERT INTO `social_community`(`user_id`, `title`, `video`, `status`)   
                      VALUES('$name','$title','$img','active')";

            $row = mysqli_query($con, $i);
			if($row)
			{
			echo '<script>alert("Successfully Added!")
				  window.location="social_community.php";
				  </script>';
			} 
			
		}
	}
}

?>        
      </div>
    </div>
  </div> 
  <?php
include("footer.php");
?>