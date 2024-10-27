<?php
// il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
require_once ("./conn2E.php");

$qID=$_GET['qID'];
$QLng=$_GET['lng'];
$catName=$_GET['catName'];

if($catName==='French' || $catName==='Fr_Ortho' || $catName==='English_'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTableEx WHERE questionID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else{
if($QLng==='fr'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTable WHERE questionID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($QLng==='es'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTableEs WHERE questionID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}elseif($QLng==='pt'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTablePt WHERE questionID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else{
	/*English Db*/
$ps=$pdoE->prepare("SELECT answersID,name,action,questionID,catID FROM answerTable WHERE questionID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}
}

?>
		
		
		
		