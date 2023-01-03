<?php
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/quiz-php-backend/config/db.php');
session_start();


class Qa
{

function showQa(){
    $database = new Dbconnect();
    $db = $database->connect_pdo();
    $stmt = $db->prepare("SELECT * FROM `qa`");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //  var_dump($result);
    $data = array();
 
    foreach( $result as $row){
        $data[] = $row ;
    }
    echo json_encode($data);

    

    
    //  var_dump($data);
    
    

}





}


