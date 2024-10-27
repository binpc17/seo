<?php
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
require_once ("./conn2E.php")

$qName=$_GET['qName'];
$lng=$_GET['lng'];
if($lng==='fr'){
$ps=$pdo->prepare("SELECT name,questionID,catID,category FROM questions WHERE name LIKE'%$qName%'");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='es'){
$ps=$pdo->prepare("SELECT name,questionID,catID,category FROM questionsEs WHERE name LIKE'%$qName%'");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='pt'){
	$ps=$pdo->prepare("SELECT name,questionID,catID,category FROM questionsPt WHERE name LIKE'%$qName%'");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else{
$ps=$pdoE->prepare("SELECT name,questionID,catID,category FROM questions WHERE name LIKE'%$qName%'");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
}
 ?>
		
		
		
		