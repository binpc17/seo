<?php
 // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
require_once ("./conn2E.php");

$theCat=$_GET['questionID'];
$lng=$_GET['lng'];

if($lng=='fr'){
$ps=$pdo->prepare("SELECT answersID,questionID,name,action,catID FROM answerTable WHERE  questionID IN $theCat");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}

if($lng=='en'){
$ps=$pdoE->prepare("SELECT answersID,questionID,name,action,catID FROM answerTable WHERE  questionID IN $theCat");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}

if($lng=='undefined'){
$ps=$pdoE->prepare("SELECT answersID,questionID,name,action,catID FROM answerTable WHERE  questionID IN $theCat");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}
        ?>