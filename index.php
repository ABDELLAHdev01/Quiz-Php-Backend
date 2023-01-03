<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/quiz-php-backend/controller/User-controller.php');

if(isset($_SESSION['ROLE'])) {
    header('location: ./Quiz.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
    <link rel="icon" href="assets/img/quiz.png" type="image/x-icon">
    <title>Quiz App</title>
</head>

<body>
  
    <div class="container1">
  
        <div class="quizbox1">
 
            <button type="submit" class="xbtn" id="refr" style="text-decoration: none;   color: white; background-color: blue;  border: 5px solid blue;
          border-radius: 50%; margin-left: 430px; cursor: pointer;">&#9747</button>
            <h1>PHP Quizz</h1>

            <center>
                <div id="login">
                    
                    <form data-parsley-validate action="./controller/User-controller.php" method="POST">
                        <label for="email">email:</label><br>
                        <input type="text" id="email" name="email" required data-parsley-type="email"><br>
                        <label for="password">Password:</label><br>
                        <input type="password" id="password" name="password" required data-parsley-length="[6, 10]"><br><br>
                        <button name="logsub" class="btn-log" type="submit">LOGIN</button>
                    </form>
                </div>
                <div id="singup">
                    <form data-parsley-validate action="./controller/User-controller.php" method="POST">
                    <label for="name">name:</label><br>
                        <input type="text" id="name" name="name" required><br>
                        <label for="emailsingup">Email:</label><br>
                        <input type="text" id="emailsingup" name="emailsingup" required data-parsley-type="email"><br>
                        <label for="signuppassword">Password:</label><br>
                        <input type="password" id="signuppassword" name="signuppassword" required data-parsley-length="[6, 10]"><br>
                        <label for="rpassword">Repeat password:</label><br>
                        <input type="password" id="rpassword" name="rpassword" required data-parsley-length="[6, 10]"><br><br>
                        <button name="sigsub" class="btn-log" type="submit">SIGNUP</button>
                    </form>
                </div>
            </center>
            <div id="welc">
                <center>
                    <p class="bluebg">You can test your PHP skills with PHP Quiz.</p>
                </center>
                <center>
                    <p class="bluebg">Sign up now and take the quiz .</p>
                </center>

                <center><button id="log" class="btn-log">Login</button> <button id="sig" class="btn-log">Sign
                        up</button>
                </center>

            </div>



        </div>



    </div>



    <div class="bg"></div>
    <div class="star-field">
        <div class="layer"></div>
        <div class="layer"></div>
        <div class="layer"></div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" ></script>
        <script src="./assets/js/index.js"></script>
</body>

</html>