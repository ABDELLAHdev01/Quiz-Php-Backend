<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/quiz-php-backend/controller/User-controller.php');

if (!isset($_SESSION['ROLE'])) {
    header('location: ./index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./assets/css/Style.css">
    <link rel="icon" href="assets/img/quiz.png" type="image/x-icon">

    <!-- CSS only -->

    <title>You Quizz</title>
</head>

<body>
    <form action="./controller/User-controller.php" method="POST">
<button name="Logout" style="background:none; border: none; cursor: pointer;"><img src="./assets/img/3596144.png" alt="" width="36px" height="36px" style=" margin-left: 1160px;"></button>
</form>   
<div class="container1">

        <div class="quizbox">
            <button type="submit" id="refreash" style="text-decoration: none;   color: white; background-color: blue;  border: 5px solid blue;
          border-radius: 50%; margin-left: 430px; cursor: pointer; display: none;">&#9747</button>
            <div id="quiz">
                <h1>PHP Quizz</h1>
                <div class="quizheader">
                </div>
                <center>
                    <div style="font-size: 20px;">
                <table>
  <thead>
    <tr>
      <th>Name</th>
      <th> </th>
      <th>Score</th>
    </tr>
   </thead>
   <tbody>
    <?php  scoresController();?>
  </tbody>
</table>
</div>
</center>   
                </div>


                <!-- leadearboard -->
                <div class="scoore" id="scores" style="display: none;">
                    <p class="sc-no" id="scno"></p>
                    <p class="sc-text" id="sct"></p>
                    <center><button><a style="text-decoration: none;" href="./pages/Answers.html">All
                                Answers</a></button></center>
                </div>
                <!-- Q1  -->
                <div class="disp" id="q1">

                    <div class="w3-light-grey">
                        <div id="myBar" class="w3-container w3-green" style="height:24px;width:1%"></div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-bar-fill"></div>
                        <div id="timer"></div>

                    </div>

                    <p id="question">What is OOP ?</p>

                    <div class="options">
                        <input type="radio" name="answers" value="1" class="answersss" id="question1"><label id="a"
                            class="styleq" for="question1">Object Orinetetin professionel</label><br>
                        <br>
                        <input type="radio" name="answers" value="2" class="answersss" id="question2"><label id="b"
                            class="styleq" for="question2">Object Orinetetin professionel</label><br>
                        <br>
                        <input type="radio" name="answers" value="3" class="answersss" id="question3"><label id="c"
                            class="styleq" for="question3">Object Orinetetin professionel</label><br>
                        <br>
                        <input type="radio" name="answers" value="4" class="answersss" id="question4"><label id="d"
                            class="styleq" for="question4">Object Orinetetin professionel</label><br>

                    </div>
                    <hr>
                    <center> <button id="subbtn" class="btn1" style="text-align: center; width: 50vh;"
                            onclick="">Next</button> </center>
                </div>
         
                <hr>
                <footer>
                    <p class="bluebg">Abdellah El GHOULAM</p>

                </footer>
            </div>

        </div>


    </div>

    <div class="bg"></div>
    <div class="star-field">
        <div class="layer"></div>
        <div class="layer"></div>
        <div class="layer"></div>

        <!-- js -->
        <script src="./assets/js/qs.js"></script>
        <script src="./assets/js/main.js" type="module"></script>

        <!--  -->

</body>

</html>