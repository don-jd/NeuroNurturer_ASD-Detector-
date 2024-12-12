<?php
session_start();
include('connection.php');

if (isset($_POST['submit']))
{	
$username=$_POST['user']; 
$password=$_POST['password']; 

	if($username=="admin@gmail.com" && $password=="admin")
	{
		$_SESSION['user']='admin';
		header("location:admin/dashboard/dashboard.php");
	}
	else{

		$sel="SELECT * FROM users WHERE email='$username' and password='$password'";
		echo $sel;
		$result = mysqli_query($con,$sel) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		
		if($rows>0)
		{	  
			$_SESSION['user']='user';
			$_SESSION['uid']=$row['id'];
			$_SESSION['name']=$row['name'];
			header("location:index1.php");
			
		}
		else{
			
			// header("location:login.php?st=fail");
			echo "<script>alert('Incorrect Credentials'); window.location='index.php'</script>";
			
			
			
		}
	}
}
	
?>
 
 



