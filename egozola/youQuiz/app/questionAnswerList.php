<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
require_once ("./conn2E.php");
$theDate=$_GET['theDate'];
$theCat=$_GET['catID'];
$lng=$_GET['lng'];
$exetat=$_GET['exetat'];
$catName=$_GET['catName'];
$apID=$_GET['apID'];
if($exetat<=1){
	if($catName==='English_' || $catName==='French' || $catName==='Fr_Ortho' || $catName==='HIFR'|| $catName==='INSTFR'|| $catName==='GEOF' || $catName==='GRAMA'){
	 if($catName==='HIFR'|| $catName==='INSTFR'|| $catName==='GEOF'){
		$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTable WHERE  catID=?");
	$ps->execute(array($theCat));
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);  
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE));
	 }else{
	$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTableEx WHERE  catID=?");
	$ps->execute(array($theCat));
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);  
	echo (json_encode($liste,JSON_UNESCAPED_UNICODE));
	 }  	
	}else{
if($lng=='fr'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTable WHERE  catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);  
echo(json_encode($liste,JSON_UNESCAPED_UNICODE));    
}else if($lng=='en'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTableEn WHERE  catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);  
echo (json_encode($liste,JSON_UNESCAPED_UNICODE));    
}else if($lng=='es'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTableEs WHERE  catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);  
echo (json_encode($liste,JSON_UNESCAPED_UNICODE));    
}else if($lng=='pt'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTablePt WHERE  catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);  
echo (json_encode($liste,JSON_UNESCAPED_UNICODE));    
}else if($lng=='hi'){
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTableHi WHERE  catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);  
echo (json_encode($liste,JSON_UNESCAPED_UNICODE));    
}else{
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTableEn WHERE  catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);  
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); 
}	
}
}else{
$ps=$pdo->prepare("SELECT answersID,name,action,questionID,catID FROM answerTableEx WHERE  catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);  
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); 	
}
  ?>