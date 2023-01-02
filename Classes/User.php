<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/quiz-php-backend/config/db.php');
session_start();
class User
{
    protected $id;
    public $name;
    protected $email;
    protected $password;
    public $role;



    function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }



    function logIn($email, $password)
    {
        $database = new Dbconnect();
        $db = $database->connect_pdo();
        $stmt = $db->prepare("SELECT * from user where email = '$email'");
        $stmt->execute();
        $row = $stmt->fetch();
        if (!$row) {
            echo "Email Is not valid !";
        } else {
            if ($row['password'] == $password) {
                $_SESSION['ID'] = $row['id'];
                $_SESSION['ROLE'] = $row['role'];
                header('location: ../Quiz.php ');
                // echo $_SESSION['ROLE'];                    
            } else {
                echo "Password Wrong !";
            }
        }
    }


function signup($email,$password){
    $database = new Dbconnect();
    $db = $database->connect_pdo();
    $stmt = $db->prepare("SELECT * from user where email = '$email'");
    $stmt->execute();
    $row = $stmt->fetch();
    if($row){
        echo "Email Is not valid !";

    }else{
            $req = $db->prepare("INSERT INTO `user`(`email`, `password`, `role`) VALUES ('$email','$password','player')");
            $userI=$req->execute();
            if($userI){
                header('location: ../index.php ');
            }

    }
}

public static function logout(){
    session_destroy();
    session_unset();
    unset($_SESSION['ID']);
    unset($_SESSION['ROLE']);
    
    // get back to index
    header('location: ../index.php');


}


}



?>