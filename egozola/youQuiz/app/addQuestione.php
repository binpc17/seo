<?php
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
require_once ("./conn2E.php");

$name=$_GET['name'];
$year =$_GET['year'];
$category =$_GET['category'];
$cment =$_GET['comment'];
$lng=$_GET['lng'];

if($lng==='fr'){
$ps=$pdo->prepare("INSERT INTO questions (name,year,category,comment) VALUES (?,?,?,?)");
$ps->execute( array($name,$year,$category,$cment));
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='es'){
$ps=$pdo->prepare("INSERT INTO questionsEs (name,year,category,comment) VALUES (?,?,?,?)");
$ps->execute( array($name,$year,$category,$cment));
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='pt'){
$ps=$pdo->prepare("INSERT INTO questionsPt (name,year,category,comment) VALUES (?,?,?,?)");
$ps->execute( array($name,$year,$category,$cment));
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else($lng==='en'){
$ps=$pdoE->prepare("INSERT INTO questions (name,year,category,comment) VALUES (?,?,?,?)");
$ps->execute( array($name,$year,$category,$cment));
$liste=$pdoE->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 		
}

   
?>