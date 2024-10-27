<?php
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$qID=$_GET['qID'];
$langU =$_GET['langU'];
$tName =$_GET['tName'];
$frName ="YouQuiz Compétition des Questions Réponses";
$enName ="YouQuiz Questions and Answers Tournament";
$esName ="YouQuiz Competencia de Preguntas y Respuestas";
$ptName ="YouQuiz Torneio de Perguntas e Respostas";

if($langU=='fr'){
	$ps1=$pdo->prepare("INSERT INTO  genuisData(name,dateInit,dateEnd,dateExp,questionN,langueU) VALUES ('$frName',UNIX_TIMESTAMP()+400,UNIX_TIMESTAMP()+1000,UNIX_TIMESTAMP()+4000,'$qID','$langU')");
$ps1->execute();
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else if($lng=='en'){
	$ps1=$pdo->prepare("INSERT INTO  genuisData(name,dateInit,dateEnd,dateExp,questionN,langueU) VALUES ('$enName',UNIX_TIMESTAMP()+400,UNIX_TIMESTAMP()+1000,UNIX_TIMESTAMP()+4000,'$qID','$langU')");
$ps1->execute();
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else if($lng=='es'){
	$ps1=$pdo->prepare("INSERT INTO  genuisData(name,dateInit,dateEnd,dateExp,questionN,langueU) VALUES ('$esName',UNIX_TIMESTAMP()+400,UNIX_TIMESTAMP()+1000,UNIX_TIMESTAMP()+4000,'$qID','$langU')");
$ps1->execute();
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else if($lng=='pt'){
	$ps1=$pdo->prepare("INSERT INTO  genuisData(name,dateInit,dateEnd,dateExp,questionN,langueU) VALUES ('$ptName',UNIX_TIMESTAMP()+400,UNIX_TIMESTAMP()+1000,UNIX_TIMESTAMP()+4000,'$qID','$langU')");
$ps1->execute();
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else{
	$ps1=$pdo->prepare("INSERT INTO  genuisData(name,dateInit,dateEnd,dateExp,questionN,langueU) VALUES ('$frName',UNIX_TIMESTAMP()+400,UNIX_TIMESTAMP()+1000,UNIX_TIMESTAMP()+4000,'$qID','$langU')");
$ps1->execute();
$liste=$pdo->lastInsertId();
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working  
}


    
        ?>