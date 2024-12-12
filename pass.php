<?php
include("header.php");
include('connection.php');

// Include the Really Simple CAPTCHA library
require_once 'really-simple-captcha/really-simple-captcha.php';

if(isset($_POST['btnsubmit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $current_password = $_POST['txtcurrent'];
    $new_password = $_POST['txtnew'];
    $confirm_password = $_POST['txtconfirm'];
    $entered_captcha = $_POST['captcha']; // Captcha entered by the user

    // Validate email, name, and phone against the user table
    $query = "SELECT * FROM users WHERE name=? AND email=? AND phone=?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $phone);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1) {
        // Check if captcha matches the sent captcha
        if($entered_captcha == $_SESSION['captcha']) {
            if($new_password == $confirm_password) {
                // Hash the new password
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                // Update the password in the database
                $update_query = "UPDATE users SET password=? WHERE email=?";
                $update_stmt = mysqli_prepare($con, $update_query);
                mysqli_stmt_bind_param($update_stmt, "ss", $hashed_password, $email);
                mysqli_stmt_execute($update_stmt);

                echo '<script>alert("Password updated successfully.")</script>';
            } else {
                echo '<script>alert("Passwords do not match.")</script>';
            }
        } else {
            echo '<script>alert("Invalid captcha code.")</script>';
        }
    } else {
        echo '<script>alert("Invalid name, email, or phone number.")</script>';
    }
}

// Generate a captcha code
$captcha_instance = new ReallySimpleCaptcha();
$captcha_instance->bg = array(255, 255, 255); // Set background color to white
$captcha_instance->fg = array(0, 0, 0); // Set foreground color to black
$captcha_instance->generate_image('captcha', 'captcha_image');
$_SESSION['captcha'] = $captcha_instance->simple_captcha;

// Send the captcha image to the user's email
$captcha_image = 'captcha_image.png'; // Path to the captcha image
$to = $email;
$subject = 'Captcha Code for Password Reset';
$message = 'Please enter the following captcha code: <br><img src="cid:captcha_image">';
$headers = "From: your-email@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "Content-Disposition: inline\r\n";
$headers .= "Content-ID: <captcha_image>\r\n";
mail($to, $subject, $message, $headers);
?>

<style>
    .table {
        width: 100%;
        border-collapse: collapse;
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

<div id="pricing" class="pricing-tables">
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
                    <form method="POST">
                        <table class="table" align="center">
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
                                <th>Current Password</th>
                                <td><input required type="text" name="txtcurrent" value="<?php echo $_SESSION['captcha']; ?>" disabled></td>
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
                                <th>Captcha</th>
                                <td><img src="captcha_image.png" alt="Captcha Image"></td>
                            </tr>
                            <tr>
                                <th>Enter Captcha</th>
                                <td><input required type="text" name="captcha"></td>
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
