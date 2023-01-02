<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/quiz-php-backend/Classes/User.php') ;



if(isset($_POST['logsub'])) loginControlle();
if(isset($_POST['sigsub']))  SignupController();
if (isset($_POST['Logout'])) LogoutController();  





function loginControlle() {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $User = new User($email,$password);
    $User->logIn($email,$password);
}

function SignupController(){
    $password = $_POST['signuppassword'] ;
    $repassword = $_POST['rpassword'];
    $Semail = $_POST['emailsingup'];
    if($password==$repassword){
    $nUser = new User($Semail,$password);
    $nUser->signup($Semail,$password);
        
    }
    
}

function LogoutController(){
    User::logout();
}
?>