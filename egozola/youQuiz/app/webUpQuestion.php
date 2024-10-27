<?php
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
header('Access-Control-Allow-Headers: X-Requested-With, content-type, access-control-allow-origin, access-control-allow-methods, access-control-allow-headers');

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

require_once ("./conn2.php");
require_once ("./conn2E.php");

$name=$request->name;
$year=$request->year;
$category=$request->category;
$cment=$request->comment;
$lng=$request->lng;
$questionID=$request->questionID;

if($lng==='fr'){
$ps=$pdo->prepare("UPDATE questions SET name=?, year=?, category=?, comment=? WHERE questionID=?");
$ps->execute( array($name,$year,$category,$cment,$questionID));
$liste="200";
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='es'){
$ps=$pdo->prepare("UPDATE questionsEs SET name=?, year=?, category=?, comment=? WHERE questionID=?");
$ps->execute( array($name,$year,$category,$cment,$questionID));
$liste="200";
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='pt'){
$ps=$pdo->prepare("UPDATE questionsPt SET name=?, year=?, category=?, comment=? WHERE questionID=?");
$ps->execute( array($name,$year,$category,$cment,$questionID));
$liste="200";
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else($lng==='en'){
$ps=$pdoE->prepare("UPDATE questions SET name=?, year=?, category=?, comment=? WHERE questionID=?");
$ps->execute( array($name,$year,$category,$cment,$questionID));
$liste="200";
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 		
}

   
?>