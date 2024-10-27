<?php
// il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$theCat=$_GET['questionID'];
$timeEnd=$_GET['timeEnd'];
$idGeuinis=$_GET['idGenuis'];
$lng=$_GET['lng'];

if($idGeuinis>0){
if($timeEnd==='Y'){
	if($lng=='fr'){
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questions WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working	
	}else if($lng=='en'){
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questionsEn WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working
	}else if($lng=='es'){
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questionsEs WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working
		
	}else if($lng=='pt'){
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questionsPt WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working		
	}else if($lng=='hi'){
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questionsHi WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working		
	}else{
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questionsEn WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working		
	}
}else{
$liste=0;
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}

}else{
	/*For Solo Comptetition*/
	if($lng=='fr'){
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questions WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working	
	}else if($lng=='en'){
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questionsEn WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working
	}else if($lng=='es'){
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questionsEs WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working
		
	}else if($lng=='pt'){
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questionsPt WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working		
	}else if($lng=='hi'){
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questionsHi WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working		
	}else{
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questionsEn WHERE questionID IN $theCat");
	$ps->execute();
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working		
	}
 
}
   
        ?>
		
		
		
		