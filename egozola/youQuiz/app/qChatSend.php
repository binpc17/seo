<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");



$idTeam=$_GET['idTeam'];
$idUser =$_GET['idUser'];
$msg =$_GET['msg'];
$nameUser =$_GET['nameUser'];
/*
$date=;

$ps=$pdo->prepare("select UNIX_TIMESTAMP()");
$ps->execute();
*/

	$ps11=$pdo->prepare("UPDATE  qteam SET dateUp=UNIX_TIMESTAMP() WHERE  idTeam=$idTeam");
$ps11->execute();

$ps=$pdo->prepare("INSERT INTO qChat(idTeam,idUser,msg,nameUser,date)
VALUES (?,?,?,?,UNIX_TIMESTAMP())");
$ps->execute(array($idTeam,$idUser,$msg,$nameUser));

$liste=$pdo->lastInsertId();

echo (json_encode($liste));

    
        ?>