<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
require_once ("./conn2E.php");
$theCat=$_GET['catID'];
$theDate=$_GET['theDate'];
$lng=$_GET['lng'];
$exetat=$_GET['exetat'];
$catName=$_GET['catName'];
$apID=$_GET['apID'];
$nLng=explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
if($exetat<=1){
	if($catName==='English_' || $catName==='French' || $catName==='Fr_Ortho' || $catName==='HIFR'|| $catName==='INSTFR'|| $catName==='GEOF' || $catName==='GRAMA'){
		if($catName==='HIFR'|| $catName==='INSTFR'|| $catName==='GEOF'){
			$ps=$pdo->prepare("SELECT questionID,name,catID,comment FROM questions WHERE catID=?");
			$ps->execute(array($theCat));
			$liste=$ps->fetchAll(PDO::FETCH_ASSOC);  
			echo(json_encode($liste,JSON_UNESCAPED_UNICODE));	
		}else{
	$ps=$pdo->prepare("SELECT questionID,name,catID,comment FROM questionsEx WHERE catID=?");
	$ps->execute(array($theCat));
	$liste=$ps->fetchAll(PDO::FETCH_ASSOC);  
	echo(json_encode($liste,JSON_UNESCAPED_UNICODE));
		}	
	}else{
if($lng=='fr'){
$ps=$pdo->prepare("SELECT questionID,name,catID,comment FROM questions WHERE catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo(json_encode($liste,JSON_UNESCAPED_UNICODE)); 
}else if($lng=='pt'){
$ps=$pdo->prepare("SELECT questionID,name,catID,comment FROM questionsPt WHERE catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo(json_encode($liste,JSON_UNESCAPED_UNICODE)); 
}else if($lng=='es'){
$ps=$pdo->prepare("SELECT questionID,name,catID,comment FROM questionsEs WHERE catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo(json_encode($liste,JSON_UNESCAPED_UNICODE)); 
}else if($lng=='hi'){
$ps=$pdo->prepare("SELECT questionID,name,catID,comment FROM questionsHi WHERE catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo(json_encode($liste,JSON_UNESCAPED_UNICODE)); 
}else{
$ps=$pdo->prepare("SELECT questionID,name,catID,comment FROM questionsEn WHERE catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo(json_encode($liste,JSON_UNESCAPED_UNICODE)); 
}	
}
if($lng=='undefined'){
$ps=$pdo->prepare("SELECT questionID,name,catID,comment FROM questionsEn WHERE catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo(json_encode($liste,JSON_UNESCAPED_UNICODE));
}	
}else{
$ps=$pdo->prepare("SELECT questionID,name,catID,comment FROM questionsEx WHERE catID=?");
$ps->execute(array($theCat));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo(json_encode($liste,JSON_UNESCAPED_UNICODE));
}
 ?>