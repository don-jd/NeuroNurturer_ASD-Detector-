<?php
include("header.php");
?>

<?php
@$submit = $_POST['process'];
@$word = $_POST['texttospeech'];

$voice = new COM("SAPI.SpVoice");

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($submit) and !empty($word)) {
  $voice->Speak($word);
}
?>

<style>
  .border-button1 a {
    display: inline-block !important;
    padding: 10px 20px !important;
    color: #ffff !important;
    border: 1px solid #ff0000;
    text-transform: capitalize;
    font-size: 15px;
    display: inline-block;
    background-color: #ff0000;
    border-radius: 23px;
    font-weight: 500 !important;
    letter-spacing: 0.3px !important;
    transition: all .5s;
  }
</style>

<div id="pricing" class="pricing-tables">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="section-heading">
          <h4><em>Check</em> da</h4>
          <img src="assets/images/heading-line-dec.png" alt="">
          <p>Embark on a reading adventure! Enhance word recognition and fluency with interactive exercises tailored to your level.
            Dive into captivating stories and progress at your own pace towards literacy mastery.</p>
        </div>
      </div>
      <?php
      // Check for connection error (assuming mysqli functions are used)
      if (mysqli_connect_error()) {
        echo "Failed to connect to database: " . mysqli_connect_error();
        exit();
      }

      include("connection.php");
      $sel = "select * from language";
      $res = mysqli_query($con, $sel);
      $i = 1;
      while ($row = mysqli_fetch_array($res)) {
      ?>
      <div class="col-lg-4">
        <div class="pricing-item-regular">
          <span class="price"></span>
          <h1><?php echo $row['letter']; ?></h1>
          <?php //echo $row['word']; ?><div class="icon">
            <img src="admin/language/uploads/<?php echo $row['image']; ?>" alt=""> <br>
            <form method="post">
              <input type="hidden" name="texttospeech" value="<?php echo $row['word']; ?>">
              <button type="submit" name="process" class="btn btn-danger btn-block">Read</button>
            </form>
            <form method="post" name="checkForm" action="">
              <input type="hidden" name="correctWord" value="<?php echo $row['word']; ?>">
              <input type="text" name="content" id="content-<?php echo $i; ?>" placeholder="Type or Speak">
              <br>
              <input type="submit" name="submit" value="Check">
            </form>
            <p id="demo-<?php echo $i; ?>"></p>
            <br>
            <button onclick="startRecording(<?php echo $i; ?>)">
              <i class="fa fa-microphone"></i> Speak
            </button>
          </div>
          <br><br><br>
        </div>
      </div>
      <?php
        $i++;
      }
      ?>
    </div>
  </div>
</div>

<script>
  function startRecording(index) {
    if (window.webkitSpeechRecognition) {
      var recognition = new webkitSpeechRecognition();
      recognition.lang = 'en-US'; // Change language recognition as needed

      recognition.onresult = function (event) {
        var result = event.results[0][0].transcript;
        document.getElementById('content-' + index).value = result;
      };

      recognition.onerror = function(event) {
        console.error("Speech recognition error:", event.error);
      };

      recognition.start();
    } 
  }

  // Add an event listener to the form submission
  document.addEventListener('DOMContentLoaded', function() {
    var forms = document.querySelectorAll('form[name="checkForm"]');
    forms.forEach(function(form) {
      form.addEventListener('submit', function(event) {
        var index = this.getAttribute('data-index');
        document.getElementById('content-' + index).value = document.getElementById('content-' + index).value.trim();
      });
    });
  });
</script>


<?php
if (isset($_POST['submit'])) {
    $c = strtolower(trim($_POST['content']));
    $crt = strtolower(trim($_POST['correctWord']));
    

    if ($c == $crt) {
        echo "<script>alert('Correct: Your word is ".$crt." and you entered ".$c."');</script>";
    } else {
        echo "<script>alert('Wrong: Your word is ".$crt." and you entered ".$c."');</script>";
    }
}
?>

<?php
include("footer.php");
?>
