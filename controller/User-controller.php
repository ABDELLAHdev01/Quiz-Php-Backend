<?php
use LDAP\Result;
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/quiz-php-backend/Classes/User.php') ;



if(isset($_POST['logsub'])) loginControlle();
if(isset($_POST['sigsub']))  SignupController();
if (isset($_POST['Logout'])) LogoutController();
if (isset($_POST['savescore'])) saveScoreController();




function loginControlle() {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $User = new User();
    $User->logIn($email,$password);
}

function SignupController(){
    $password = $_POST['signuppassword'] ;
    $repassword = $_POST['rpassword'];
    $Semail = $_POST['emailsingup'];
    $name = $_POST['name'];

    if($password==$repassword){
    $nUser = new User();
    $nUser->signup($name,$Semail,$password);
        
    }
    
}

function LogoutController(){
    User::logout();
}

function saveScoreController(){
    $id = $_SESSION['ID'];
    $score = $_POST['scoore'];
    $ip =  $_POST['ip'];
    $os = php_uname();
    $browser =  $_SERVER['HTTP_USER_AGENT'];
    $date = date('Y-m-d');
    // echo $id;
    // echo $score;
    // echo $ip;
    // echo $os;
    // echo $browser;
    // echo $date;
    $SUser = new User();
    $SUser->CreateMyScoore($id,$score,$ip,$os,$browser,$date);



    
}

function scoresController(){
    $result = User::ReadScores();

    

}


?>