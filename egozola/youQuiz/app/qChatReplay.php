<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

$msgRep =$_GET['msgRep'];
$idUser =$_GET['idUser'];
$idqChat=$_GET['idqChat'];
$sRep=$_GET['sRep'];


$ps=$pdo->prepare("INSERT INTO qChatReplay(responseM,idqChat,idUser)
VALUES (?,?,?)");
$ps->execute( array($msgRep,$idqChat,$idUser));

	$ps11=$pdo->prepare("UPDATE  qteam SET dateUp=UNIX_TIMESTAMP() WHERE  idTeam=$idTeam");
$ps11->execute();

// try updating size replay

$ps1=$pdo->prepare("UPDATE qChat SET sRep=?,date=UNIX_TIMESTAMP() WHERE id=?");
$ps1->execute( array($sRep,$idqChat));
$liste="sucees";


echo (json_encode($liste));

    
        ?>