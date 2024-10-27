<?php
require_once ("./conn2.php");
$country=$_GET['country'];
$deviceOs=$_GET['deviceOs'];
$deviceModel=$_GET['deviceModel'];

//$ps=$pdo->prepare("SELECT * FROM user WHERE country='$country' AND phoneNumber='$phoneNumber' AND deviceOs='$uuid'" );
$ps=$pdo->prepare("SELECT * FROM user WHERE country='$country'  AND deviceOs='$deviceOs' AND deviceModel='$deviceModel'" );

$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);

  
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

  echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
    
        ?>