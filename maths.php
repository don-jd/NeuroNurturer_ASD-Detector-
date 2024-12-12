<?php
include("header.php");
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

<!-- Preload audio files -->
<audio id="correctAudio" src="correct.mp3"></audio>
<audio id="wrongAudio" src="wrong.mp3"></audio>

<div id="pricing" class="pricing-tables">
    <div class="container">
        <div class="row">
        <div class="row justify-content-center">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4><em>Number</em>Nest</h4>
                    <h6>Logic Hub</h6>
                    <img src="assets/images/heading-line-dec.png" alt="">
                    <p>Explore basic operation interactively, making math enjoyable and accessible for all.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price"></span>
                    <h1>Addition</h1>
                    <h4>Add two numbers</h4>
                    <div class="icon">
                        <input type="text" id="addNum1" readonly><br><br>
                        <input type="text" id="addNum2" readonly><br><br>
                        <input type="number" id="addAnswer"><br><br>
                        <button onclick="checkAddition()" class="btn btn-danger btn-block">Check Answer</button><br><br>

                        <div id="additionResult"></div>
                        <br>

                    </div>
                    <br><br><br>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price"></span>
                    <h1>Subtraction</h1>
                    <h4>Subtract two numbers</h4>
                    <div class="icon">
                        <input type="text" id="subNum1" readonly><br><br>
                        <input type="text" id="subNum2" readonly><br><br>
                        <input type="number" id="subAnswer"><br><br>
                        <button onclick="checkSubtraction()" class="btn btn-danger btn-block">Check Answer</button><br><br>

                        <div id="subtractionResult"></div>
                        <br>

                    </div>
                    <br><br><br>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price"></span>
                    <h1>Multiplication</h1>
                    <h4>Multiply two numbers</h4>
                    <div class="icon">
                        <input type="text" id="mulNum1" readonly><br><br>
                        <input type="text" id="mulNum2" readonly><br><br>
                        <input type="number" id="mulAnswer"><br><br>
                        <button onclick="checkMultiplication()" class="btn btn-danger btn-block">Check Answer</button><br><br>

                        <div id="multiplicationResult"></div>
                        <br>

                    </div>
                    <br><br><br>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price"></span>
                    <h1>Division</h1>
                    <h4>Divide two numbers</h4>
                    <div class="icon">
                        <input type="text" id="divNum1" readonly><br><br>
                        <input type="text" id="divNum2" readonly><br><br>
                        <input type="number" id="divAnswer"><br><br>
                        <button onclick="checkDivision()" class="btn btn-danger btn-block">Check Answer</button><br><br>

                        <div id="divisionResult"></div>
                        <br>

                    </div>
                    <br><br><br>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to set random numbers for addition
    function setAdditionNumbers() {
        document.getElementById("addNum1").value = generateRandomNumber();
        document.getElementById("addNum2").value = generateRandomNumber();
    }

    // Function to check addition
    function checkAddition() {
        var num1 = parseInt(document.getElementById("addNum1").value);
        var num2 = parseInt(document.getElementById("addNum2").value);
        var userAnswer = parseInt(document.getElementById("addAnswer").value);
        var result = num1 + num2;

        if (userAnswer === result) {
            document.getElementById("additionResult").innerHTML = "Correct!";
            playCorrectAudio();
        } else {
            document.getElementById("additionResult").innerHTML = "Incorrect!";
            playWrongAudio();
        }

        // Reset numbers and clear answer input field
        setAdditionNumbers();
        document.getElementById("addAnswer").value = "";
    }

    // Function to set random numbers for subtraction
    function setSubtractionNumbers() {
        document.getElementById("subNum1").value = generateRandomNumber();
        document.getElementById("subNum2").value = generateRandomNumber();
    }

    // Function to check subtraction
    function checkSubtraction() {
        var num1 = parseInt(document.getElementById("subNum1").value);
        var num2 = parseInt(document.getElementById("subNum2").value);
        var userAnswer = parseInt(document.getElementById("subAnswer").value);
        var result = num1 - num2;

        if (userAnswer === result) {
            document.getElementById("subtractionResult").innerHTML = "Correct!";
            playCorrectAudio();
        } else {
            document.getElementById("subtractionResult").innerHTML = "Incorrect!";
            playWrongAudio();
        }

        // Reset numbers and clear answer input field
        setSubtractionNumbers();
        document.getElementById("subAnswer").value = "";
    }

    // Function to set random numbers for multiplication
    function setMultiplicationNumbers() {
        document.getElementById("mulNum1").value = generateRandomNumber();
        document.getElementById("mulNum2").value = generateRandomNumber();
    }

    // Function to check multiplication
    function checkMultiplication() {
        var num1 = parseInt(document.getElementById("mulNum1").value);
        var num2 = parseInt(document.getElementById("mulNum2").value);
        var userAnswer = parseInt(document.getElementById("mulAnswer").value);
        var result = num1 * num2;

        if (userAnswer === result) {
            document.getElementById("multiplicationResult").innerHTML = "Correct!";
            playCorrectAudio();
        } else {
            document.getElementById("multiplicationResult").innerHTML = "Incorrect!";
            playWrongAudio();
        }

        // Reset numbers and clear answer input field
        setMultiplicationNumbers();
        document.getElementById("mulAnswer").value = "";
    }

    // Function to set random numbers for division
    function setDivisionNumbers() {
        document.getElementById("divNum1").value = generateRandomNumber();
        document.getElementById("divNum2").value = generateRandomNumber();
    }

    // Function to check division
    function checkDivision() {
        var num1 = parseInt(document.getElementById("divNum1").value);
        var num2 = parseInt(document.getElementById("divNum2").value);
        var userAnswer = parseInt(document.getElementById("divAnswer").value);
        var result = num1 / num2;

        if (userAnswer === result) {
            document.getElementById("divisionResult").innerHTML = "Correct!";
            playCorrectAudio();
        } else {
            document.getElementById("divisionResult").innerHTML = "Incorrect!";
            playWrongAudio();
        }

        // Reset numbers and clear answer input field
        setDivisionNumbers();
        document.getElementById("divAnswer").value = "";
    }

    // Function to generate random single-digit numbers
    function generateRandomNumber() {
        return Math.floor(Math.random() * 10); // Generate numbers between 0 and 9
    }

    // Function to play correct audio
    function playCorrectAudio() {
        var audio = document.getElementById("correctAudio");
        audio.play();
    }

    // Function to play wrong audio
    function playWrongAudio() {
        var audio = document.getElementById("wrongAudio");
        audio.play();
    }

    // Set initial random numbers when the page loads
    window.onload = function () {
        setAdditionNumbers();
        setSubtractionNumbers();
        setMultiplicationNumbers();
        setDivisionNumbers();
    };
</script>

<?php
include("footer.php");
?>
