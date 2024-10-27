<?php
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$idUser=$_GET['idUser'];
$initTime =$_GET['initTime'];
$liveTime =$_GET['liveTime'];
$expTime =$_GET['expTime'];
$nameCmp =$_GET['nameCmp'];
$langU =$_GET['langU'];
$qID=$_GET['qID'];
$sUser=2;
$timeU=time();

$ps1=$pdo->prepare("INSERT INTO genuisData(idUser,dateInit,dateEnd,dateExp,name,langueU,questionN) VALUES (?,?,?,?,?,?,?)");
$ps1->execute(array($idUser,$initTime,$liveTime,$expTime,$nameCmp,$langU,$qID));
$idGeuinis=$pdo->lastInsertId();
//Try add Local user

$ps3=$pdo->prepare("INSERT INTO genuisUser(idUser,sizeUser,idGenuis) VALUES (?,?,?)");
$ps3->execute(array($idUser,$sUser,$idGeuinis));

$ps2=$pdo->prepare("SELECT idGenuis,idUser,name,dateInit,sizeUser,levelG,questionN FROM genuisData WHERE dateInit>=$timeU AND langueU=?  ORDER BY dateInit");
$ps2->execute(array($langU));
$liste=$ps2->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 

    
        ?>