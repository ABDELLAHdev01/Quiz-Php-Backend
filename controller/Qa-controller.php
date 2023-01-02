<?php 
require(realpath($_SERVER["DOCUMENT_ROOT"]) . '/quiz-php-backend/Classes/Qa.php') ;

$Qa = new Qa();
$Qa->showQa();





