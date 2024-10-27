<?php
// il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
require_once ("./conn2E.php");

$qID=$_GET['qID'];
$QLng=$_GET['lng'];
$cat=$_GET['cat'];
$catName=$_GET['catName'];



if($catName==='French' || $catName==='Fr_Ortho' || $catName==='English_'){
	if($cat==='as'){
	$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTableEx WHERE action=1 AND catID=?");
	$ps->execute(array($qID));
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
	}else{
	$ps=$pdo->prepare("SELECT * FROM questionsEx WHERE catID=?");
	$ps->execute(array($qID));
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working	
	}

}else{	
if($cat==='as'){
	if($QLng==='fr'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTable WHERE action=1 AND catID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($QLng==='es'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTableEs WHERE action=1 AND catID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}elseif($QLng==='pt'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTablePt WHERE action=1 AND catID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else{
	///English Db
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTableEn WHERE action=1 AND catID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}
}else{
if($QLng==='fr'){
$ps=$pdo->prepare("SELECT * FROM questions WHERE catID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else if($QLng==='es'){
$ps=$pdo->prepare("SELECT * FROM questionsEs WHERE catID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}elseif($QLng==='pt'){
$ps=$pdo->prepare("SELECT * FROM questionsPt WHERE catID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}else{
	/*English Db*/
$ps=$pdo->prepare("SELECT * FROM questionsEn WHERE catID=?");
$ps->execute(array($qID));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);    
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 	
}	
}
}
?>
		
		
		
		