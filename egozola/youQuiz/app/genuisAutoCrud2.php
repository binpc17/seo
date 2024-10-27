<?php
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$qID=$_GET['qID'];
$langU =$_GET['langU'];
$tName =$_GET['tName'];
$frName ="YouQuiz Challenge des Questions Réponses";
$enName ="YouQuiz Questions Answers Challenge";
$esName ="YouQuiz Desafío de Preguntas Respuestas";
$ptName ="YouQuiz Desafio de Perguntas Respostas";
$hiName ="प्रश्न उत्तर प्रतियोगिता S2";

if($langU=='fr'){
	$ps1=$pdo->prepare("INSERT INTO  genuisData(name,dateInit,dateEnd,dateExp,questionN,langueU) VALUES ('$frName',$tName,$tName+600,$tName+172800,'$qID','$langU')");
$ps1->execute();
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else if($lng=='hi'){
	$ps1=$pdo->prepare("INSERT INTO  genuisData(name,dateInit,dateEnd,dateExp,questionN,langueU) VALUES ('$hiName',$tName,$tName+600,$tName+172800,'$qID','$langU')");
$ps1->execute();
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else if($lng=='es'){
	$ps1=$pdo->prepare("INSERT INTO  genuisData(name,dateInit,dateEnd,dateExp,questionN,langueU) VALUES ('$esName',$tName,$tName+600,$tName+172800,'$qID','$langU')");
$ps1->execute();
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else if($lng=='pt'){
	$ps1=$pdo->prepare("INSERT INTO  genuisData(name,dateInit,dateEnd,dateExp,questionN,langueU) VALUES ('$ptName',$tName,$tName+600,$tName+172800,'$qID','$langU')");
$ps1->execute();
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else{
	$ps1=$pdo->prepare("INSERT INTO  genuisData(name,dateInit,dateEnd,dateExp,questionN,langueU) VALUES ('$enName',$tName,$tName+600,$tName+172800,'$qID','$langU')");
$ps1->execute();
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working  
}


    
        ?>