<?php
include("header.php");
include('connection.php');

if(isset($_POST['btnsubmit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $current_password = $_POST['txtcurrent'];
    $new_password = $_POST['txtnew'];
    $confirm_password = $_POST['txtconfirm'];

    // Validate email, name, and phone against the user table
    $query = "SELECT * FROM users WHERE name=? AND email=? AND phone=?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $phone);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1) {
        if($new_password == $confirm_password) {
            // Hash the new password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            // Update the password in the database
            $update_query = "UPDATE users SET password='$new_password' WHERE email='$email'";
            $update_stmt = mysqli_prepare($con, $update_query);
            mysqli_stmt_bind_param($update_stmt, "ss", $hashed_password, $email);
            mysqli_stmt_execute($update_stmt);

            echo '<script>alert("Password updated successfully.")</script>';
            echo "<script>window.location='index.php'</script>";
        } else {
            echo '<script>alert("Passwords do not match.")</script>';
        }
    } else {
        echo '<script>alert("Invalid name, email, or phone number.")</script>';
    }
}
?>

<style>
    .table {
        /* width: 100%; */
        border-collapse: collapse;
        
    margin: 0 auto; /* Center the table horizontally */
    width: 50%; /* Set the width of the table */


    }

    .table th,
    .table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #f2f2f2;
    }
</style>

<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4><em>Forget</em> Password</h4>
                    <img src="assets/images/heading-line-dec.png" alt="">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="pricing-item-pro">
                    <form  method="POST">
                    <table class="table">
    <tr>
        <th>Name</th>
        <td><input required type="text" name="name"></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><input required type="email" name="email"></td>
    </tr>
    <tr>
        <th>Phone Number</th>
        <td><input required type="text" name="phone"></td>
    </tr>
    <tr>
        <th>New Password</th>
        <td><input required type="password" name="txtnew"></td>
    </tr>
    <tr>
        <th>Confirm Password</th>
        <td><input required type="password" name="txtconfirm"></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" value="Update" name="btnsubmit"></td>
    </tr>
</table>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>
