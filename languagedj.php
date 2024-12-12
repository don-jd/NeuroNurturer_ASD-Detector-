<?php
include("header.php");
?>

<?php
@$submit = $_POST['process'];
@$word = $_POST['texttospeech'];

$voice = new COM("SAPI.SpVoice");
var_dump($voice);

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
                    <h4><em>Read </em> Hub</h4>
                    <img src="assets/images/heading-line-dec.png" alt="">
                    <p>Embark on a reading adventure! Enhance word recognition and fluency with interactive exercises tailored to your level.
                         Dive into captivating stories and progress at your own pace towards literacy mastery.</p>
                </div>
            </div>
            <?php
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
                        <!-- <h4><?php echo $row['word']; ?></h4> -->
                        <div class="icon">
                            <img src="admin/language/uploads/<?php echo $row['image']; ?>" alt=""> <br>
                            <form method="post">
                                <input type="hidden" name="texttospeech" value="<?php echo $row['word']; ?>">
                                <button type="submit" name="process" class="btn btn-danger btn-block">Read</button>
                            </form>
                            <form method="post" name="checkForm" action="">
                            <input type="text" name="texttospeech1" value="<?php echo $row['word']; ?>">    
                            <input type="text" name="content"  placeholder="Type msg">
                                <br>
                                <input type="submit" name="submit" value="Check">
                            </form>
                            <p id="demo-<?php echo $i; ?>"></p>
                            <br>
                            <!-- Button for voice input -->
                            <button onclick="startRecording(<?php echo $i; ?>)"><i class="fa fa-microphone"></i></button>
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
        var recognition = new webkitSpeechRecognition();
        recognition.lang = 'en-US';
        recognition.onresult = function(event) {
            var result = event.results[0][0].transcript;
            document.getElementById('content-' + index).value = result;
        };
        recognition.start();
    }
</script>

<?php
/*
if (isset($_POST['submit'])) {
    echo "aaaaa";
    $c = strtolower($_POST['content-']);
    $crt = $row['word'];
    echo $c . "aaa";
    echo $crt . "aaa";


    if ($c == $crt) {
       echo "<script>alert('correct'); window.location='language.php'</script>";
    } else {
        echo "<script>alert('try again!!!');  window.location='language.php'</script>";
    } 

}

*/

if (isset($_POST['submit'])) {
    $input_word = strtolower($_POST['content']); 
    $expected_word = strtolower($_POST['texttospeech1']); 
	
	
	//echo "cccccc".$input_word."---".$expected_word;

    
    if ($input_word == $expected_word) {
       echo "<script>alert('Correct!'); window.location='language.php'</script>";
    } else {
        echo "<script>alert('Try again!'); window.location='language.php'</script>";
    }
}

include("footer.php");
?>
