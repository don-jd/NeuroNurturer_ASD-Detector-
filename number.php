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
                    <h4><em>Number</em> Nest</h4>
                    <h6>Number Hub</h6>
                    <img src="assets/images/heading-line-dec.png" alt="">
                    <p>To explore the fundamentals of numbers and operations, empowering you to excel in logic and math.</p>
                </div>
            </div>
            <?php
            include("connection.php");
            $sel = "select * from numbers";
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
                            <img src="admin/language copy/uploads/<?php echo $row['image']; ?>" alt=""> <br>
                            
                            <input name="content" type="text" id="note-textarea_<?php echo $i; ?>" placeholder="Type the count  here"> <br><br>
                            <button type="button" class="btn btn-danger btn-block read-btn" data-word="<?php echo $row['word']; ?>">Read</button> &nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-primary btn-block check-btn" data-correct="<?php echo $row['word']; ?>" data-index="<?php echo $i; ?>">Check</button>

                            <p id="demo_<?php echo $i; ?>"></p>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".read-btn").click(function() {
            var word = $(this).data('word');
            var voice = new SpeechSynthesisUtterance(word);
            window.speechSynthesis.speak(voice);
        });

        $(".check-btn").click(function() {
    var guess = $("#note-textarea_" + $(this).data('index')).val();
    var correct = $(this).data('correct');

    // Check if guess is a number
    if (isNaN(guess)) {
        messageElement.text("Please enter a number.");
        return; // Exit the function early if guess is not a number
    }

    guess = parseInt(guess); // Convert guess to an integer
    correct = parseInt(correct); // Convert correct to an integer

    var messageElement = $("#demo_" + $(this).data('index'));

    // Print the values of guess and correct to the screen
    messageElement.text("Guess: " + guess + ", Correct: " + correct);

    if (guess === correct) {
        messageElement.append("<br>Correct");
    } else {
        messageElement.append("<br>Try again!!!");
    }
});


    });
</script>

<?php
include("footer.php");
?>
