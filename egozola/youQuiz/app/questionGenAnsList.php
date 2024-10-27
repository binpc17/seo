<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$theCat=$_GET['questionID'];
$lng=$_GET['lng'];

if($lng=='fr'){
$ps=$pdo->prepare("SELECT answersID,questionID,name,action,catID FROM answerTable WHERE  questionID IN $theCat");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else if($lng=='en'){
$ps=$pdo->prepare("SELECT answersID,questionID,name,action,catID FROM answerTableEn WHERE  questionID IN $theCat");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else if($lng=='pt'){
$ps=$pdo->prepare("SELECT answersID,questionID,name,action,catID FROM answerTablePt WHERE  questionID IN $theCat");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else if($lng=='es'){
$ps=$pdo->prepare("SELECT answersID,questionID,name,action,catID FROM answerTableEs WHERE  questionID IN $theCat");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else if($lng=='hi'){
$ps=$pdo->prepare("SELECT answersID,questionID,name,action,catID FROM answerTableHi WHERE  questionID IN $theCat");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else{
$ps=$pdo->prepare("SELECT answersID,questionID,name,action,catID FROM answerTableEn WHERE  questionID IN $theCat");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}
        ?>