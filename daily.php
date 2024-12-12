<?php
include("header.php");
?>
<div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4><em>Daily</em> Eye</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>This advanced facial recognition technology helps identify potential markers of ASD
              in children, enabling early intervention .</p>
          </div>
        </div>
        
<div class="col-lg-12">
  <div class="pricing-item-pro">
    <h4>Upload Image</h4>
    <?php
// Define a list of tasks
$tasks = [
    "Read a chapter from a book",
    "Complete math exercises",
    "Write a short story",
    "Study for an upcoming test",
    "Practice an instrument for 30 minutes",
    "Research a topic of interest",
    "Exercise for 30 minutes",
    "Watch a documentary",
    "Learn a new recipe and cook it",
    "Create a piece of art",
    "Write a journal entry",
    "Practice a new language",
    "Clean and organize your study space"
];

// Define the CAPTCHA challenge
$number1 = mt_rand(1, 10);
$number2 = mt_rand(1, 10);
$sum = $number1 + $number2;

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate the CAPTCHA answer
    $captchaAnswer = $_POST["captcha"];
    if ($captchaAnswer == $sum) {
        // Get the current day of the week (1 = Monday, 7 = Sunday)
        $dayOfWeek = date('N');
        // Assign a task for the current day
        $task = $tasks[$dayOfWeek - 1];
        // Output the task for the current day
        echo "Today's task ({$dayOfWeek}): {$task}";
    } else {
        echo "Incorrect CAPTCHA answer. Please try again.";
    }
} else {
    // Display the CAPTCHA challenge
    echo "Solve the CAPTCHA to reveal today's task:<br>";
    echo "{$number1} + {$number2} = ?";
    // Display the form for submitting the CAPTCHA answer
    echo '<form method="post"><input type="text" name="captcha"><input type="submit" value="Submit"></form>';
}
?>

    <br><br><br><br>
  </div>
</div>





      </div>
    </div>
  </div> 
  <?php
include("footer.php");
?>