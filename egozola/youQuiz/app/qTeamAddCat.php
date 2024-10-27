<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");


$ListidCat=$_GET['ListidCat'];
$idTeam=$_GET['idTeam'];
$idUser=$_GET['idUser'];
$theDate=$_GET['theDate'];
//$idTeam ="(67,12),(66,1)";


$ps=$pdo->prepare("INSERT  INTO  qteamCat (idCat,idQTeam)
VALUES $ListidCat");
$ps->execute();


$ps1=$pdo->prepare("UPDATE qTeamData SET dateCreated=NOW() WHERE idTeam=?  AND idUser=?");
$ps1->execute(array($idTeam,$idUser,));

$liste="sucees";
echo (json_encode($liste));

    
        ?>