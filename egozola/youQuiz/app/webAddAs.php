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

$name1=$request->name1;
$action1=$request->action1;
$questionID=$request->questionID;
$lng=$request->lng;
$catID=$request->catID;
$catName=$request->catName;

$name2=$request->name2;
$action2=$request->action2;
$name3=$request->name3;
$action3=$request->action3;
$name4=$request->name4;
$action4=$request->action4;
$name5=$request->name5;
$action5=$request->action5;
$name6=$request->name6;
$action6=$request->action6;
$name7=$request->name7;
$action7=$request->action7;


if($catName==='French' || $catName==='Fr_Ortho' || $catName==='English_'){
	$ps=$pdo->prepare("INSERT INTO answerTableEx (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name1,$action1,$questionID,$catID));
$ps=$pdo->prepare("INSERT INTO answerTableEx (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name2,$action2,$questionID,$catID));
$liste=$pdo->lastInsertId();
 if($action3>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEx (name,action,questionID,catID) VALUES (?,?,?,?)");
	$ps->execute( array($name3,$action3,$questionID,$catID));	
} 

if($action4>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEx (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name4,$action4,$questionID,$catID));	
}
if($action5>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEx (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name5,$action5,$questionID,$catID));	
}
if($action6>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEx (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name6,$action6,$questionID,$catID));	
}
 if($action7>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEx (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name7,$action7,$questionID,$catID));	
}
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else{
if($lng==='fr'){	
$ps=$pdo->prepare("INSERT INTO answerTable (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name1,$action1,$questionID,$catID));
$ps=$pdo->prepare("INSERT INTO answerTable (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name2,$action2,$questionID,$catID));
$liste=$pdo->lastInsertId();
 if($action3>-1){
	$ps=$pdo->prepare("INSERT INTO answerTable (name,action,questionID,catID) VALUES (?,?,?,?)");
	$ps->execute( array($name3,$action3,$questionID,$catID));	
} 

if($action4>-1){
	$ps=$pdo->prepare("INSERT INTO answerTable (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name4,$action4,$questionID,$catID));	
}
if($action5>-1){
	$ps=$pdo->prepare("INSERT INTO answerTable (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name5,$action5,$questionID,$catID));	
}
if($action6>-1){
	$ps=$pdo->prepare("INSERT INTO answerTable (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name6,$action6,$questionID,$catID));	
}
 if($action7>-1){
	$ps=$pdo->prepare("INSERT INTO answerTable (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name7,$action7,$questionID,$catID));	
}
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='es'){
	/**********************/
$ps=$pdo->prepare("INSERT INTO answerTableEs (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name1,$action1,$questionID,$catID));
$ps=$pdo->prepare("INSERT INTO answerTableEs (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name2,$action2,$questionID,$catID));
$liste=$pdo->lastInsertId();
 if($action3>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEs (name,action,questionID,catID) VALUES (?,?,?,?)");
	$ps->execute( array($name3,$action3,$questionID,$catID));	
} 

if($action4>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEs (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name4,$action4,$questionID,$catID));	
}
if($action5>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEs (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name5,$action5,$questionID,$catID));	
}
if($action6>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEs (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name6,$action6,$questionID,$catID));	
}
 if($action7>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEs (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name7,$action7,$questionID,$catID));	
}
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($lng==='pt'){
		/**********************/
$ps=$pdo->prepare("INSERT INTO answerTablePt (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name1,$action1,$questionID,$catID));
$ps=$pdo->prepare("INSERT INTO answerTablePt (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name2,$action2,$questionID,$catID));
$liste=$pdo->lastInsertId();
 if($action3>-1){
	$ps=$pdo->prepare("INSERT INTO answerTablePt (name,action,questionID,catID) VALUES (?,?,?,?)");
	$ps->execute( array($name3,$action3,$questionID,$catID));	
} 

if($action4>-1){
	$ps=$pdo->prepare("INSERT INTO answerTablePt (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name4,$action4,$questionID,$catID));	
}
if($action5>-1){
	$ps=$pdo->prepare("INSERT INTO answerTablePt (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name5,$action5,$questionID,$catID));	
}
if($action6>-1){
	$ps=$pdo->prepare("INSERT INTO answerTablePt (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name6,$action6,$questionID,$catID));	
}
 if($action7>-1){
	$ps=$pdo->prepare("INSERT INTO answerTablePt (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name7,$action7,$questionID,$catID));	
}
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else{
		/**********************/
$ps=$pdo->prepare("INSERT INTO answerTableEn (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name1,$action1,$questionID,$catID));
$ps=$pdo->prepare("INSERT INTO answerTableEn (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name2,$action2,$questionID,$catID));
$liste=$pdo->lastInsertId();
 if($action3>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEn (name,action,questionID,catID) VALUES (?,?,?,?)");
	$ps->execute( array($name3,$action3,$questionID,$catID));	
} 

if($action4>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEn (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name4,$action4,$questionID,$catID));	
}
if($action5>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEn (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name5,$action5,$questionID,$catID));	
}
if($action6>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEn (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name6,$action6,$questionID,$catID));	
}
 if($action7>-1){
	$ps=$pdo->prepare("INSERT INTO answerTableEn (name,action,questionID,catID) VALUES (?,?,?,?)");
$ps->execute( array($name7,$action7,$questionID,$catID));	
}
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 		
}
	
}
   
?>