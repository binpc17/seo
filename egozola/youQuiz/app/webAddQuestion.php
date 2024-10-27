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
$catID=$request->catID;
$catName=$request->catName;

if($catName==='French' || $catName==='Fr_Ortho' || $catName==='English_'){
$ps=$pdo->prepare("INSERT INTO questionsEx (name,year,category,catID,comment) VALUES (?,?,?,?,?)");
$ps->execute( array($name,$year,$category,$catID,$cment));
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else{
 if($lng==='es'){
$ps=$pdo->prepare("INSERT INTO questionsEs (name,year,category,catID,comment) VALUES (?,?,?,?,?)");
$ps->execute( array($name,$year,$category,$catID,$cment));
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='pt'){
$ps=$pdo->prepare("INSERT INTO questionsPt (name,year,category,catID,comment) VALUES (?,?,?,?,?)");
$ps->execute( array($name,$year,$category,$catID,$cment));
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='en'){
$ps=$pdo->prepare("INSERT INTO questionsEn (name,year,category,catID,comment) VALUES (?,?,?,?,?)");
$ps->execute( array($name,$year,$category,$catID,$cment));
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 		
}else{
$ps=$pdo->prepare("INSERT INTO questions (name,year,category,catID,comment) VALUES (?,?,?,?,?)");
$ps->execute( array($name,$year,$category,$catID,$cment));
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}
	
}	
   
?>