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


function signup($name,$email,$password){
    $database = new Dbconnect();
    $db = $database->connect_pdo();
    $stmt = $db->prepare("SELECT * from user where email = '$email'");
    $stmt->execute();
    $row = $stmt->fetch();
    if($row){
            header('location: ../index.php ');

    }else{
            $req = $db->prepare("INSERT INTO `user`(`name`, `email`, `password`, `role`) VALUES ('$name','$email','$password','player')");
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

function CreateMyScoore($id,$score,$ip,$os,$browser,$date){
    $database = new Dbconnect();
    $db = $database->connect_pdo();
    $stmt = $db->prepare("INSERT INTO `player`(`UserId`, `Score`, `ip`, `os`, `browser`, `datePlayed`) VALUES ($id,$score, '$ip', '$os', '$browser', '$date')");
    $stmt->execute();

    header('location: ../ScoreBoard.php');
}

static function ReadScores(){
    $database = new Dbconnect();
    $db = $database->connect_pdo();
        $stmt = $db->prepare("SELECT u.name, p.score
        FROM `user` u
        JOIN player p ON u.id = p.UserId
        JOIN (
          SELECT UserId, MAX(score) as max_score
          FROM player
          GROUP BY UserId
        ) m ON m.UserId = p.UserId AND m.max_score = p.score
        ORDER BY p.score DESC");
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            $score =  $row["score"];
            $name =  $row["name"];
            echo "<tr>
               <td>$name</td>
               <td> </td>
                <td>$score/10</td>
              </tr>";

        }
}


}




?>