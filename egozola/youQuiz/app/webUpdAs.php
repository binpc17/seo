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

$answersID=$request->answersID;
$name=$request->name;
$action=$request->action;
$questionID=$request->questionID;
$lng=$request->lng;
$catID=$request->catID;



if($lng==='fr'){
$ps=$pdo->prepare("UPDATE answerTable SET name=?, action=?,questionID=?,catID=? WHERE answersID=?");
$ps->execute( array($name,$action,$questionID,$catID,$answersID));
$liste="200";
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='es'){
$ps=$pdo->prepare("UPDATE answerTableEs SET name=?, action=?,questionID=?,catID=? WHERE answersID=?");
$ps->execute( array($name,$action,$questionID,$catID,$answersID));
$liste="200";
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='pt'){
$ps=$pdo->prepare("UPDATE answerTablePt SET name=?, action=?,questionID=?,catID=? WHERE answersID=?");
$ps->execute( array($name,$action,$questionID,$catID,$answersID));
$liste="200";
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else($lng==='en'){
$ps=$pdoE->prepare("UPDATE answerTable SET name=?, action=?,questionID=?,catID=? WHERE answersID=?");
$ps->execute( array($name,$action,$questionID,$catID,$answersID));
$liste="200";
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 		
}

   
?>