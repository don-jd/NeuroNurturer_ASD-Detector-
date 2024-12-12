

<?php
    $correct_word = "hello"; // You can change this to any word you want to check
?>

<html>
<head>
    <title>Voice Recognition</title>
    <style>
       .search_container {
            margin: 0 auto;
            width: 55%;
        }
       .search_container #speechText{
            width: 80%;
            padding-top: 5px;
            padding-bottom: 5px;
        }
       .search_container #start{
            padding-top: 5px;
            padding-bottom: 5px;
        }
       .container{
            width: 55%;
            margin: 0 auto;
            border: 0px solid black;
            padding: 10px 0px;
        }
       .container #result{
            width: 100%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class='search_container'>
        <!-- Search box-->
        <input type='text' id='speechText' > &nbsp;
        <input type='button' id='start' value='Start' onclick='startRecording();'>
    </div>
    <div class="container">
        <input type='text' id='result' disabled>
    </div>

    <script>
        var recognition;

        function getVoice() {
            if ('webkitSpeechRecognition' in window) {
                recognition = new webkitSpeechRecognition();
                recognition.continuous = false;
                recognition.interimResults = false;

                recognition.lang = 'en-US';
                recognition.onresult = function(event) {
                    document.getElementById('result').value = event.results[0][0].transcript;
                    checkVoice();
                }
            }
        }

        function startRecording() {
            getVoice();
            recognition.start();
        }

        function checkVoice() {
            var word = document.getElementById('result').value;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo $_SERVER['PHP_SELF'];?>', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status == 200) {
                    if(this.responseText == 'true') {
                        alert('Correct word spoken');
                    } else {
                        alert('Incorrect word spoken');
                    }
                }
            }
            xhr.send('word=' + word);
        }
    </script>
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $word = $_POST['word'];
        if(strtolower($word) == strtolower($correct_word)) {
            echo 'true';
        } else {
            echo 'false';
        }
    }
?>


