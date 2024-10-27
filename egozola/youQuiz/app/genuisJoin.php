<?php
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$idGeuinis=$_GET['idGenuis'];
$idUser =$_GET['idUser'];
$sizeUser =$_GET['sizeUser'];

$ps1=$pdo->prepare("INSERT INTO genuisUser(idUser,idGenuis) VALUES (?,?)");
$ps1->execute(array($idUser,$idGeuinis));

$ps2=$pdo->prepare("UPDATE genuisData SET sizeUser=? WHERE idGenuis=?");
$ps2->execute(array($sizeUser,$idGeuinis));
/*
$ps=$pdo->prepare("SELECT * FROM genuisData WHERE dateInit > (select UNIX_TIMESTAMP())");
$ps->execute();
*/
$liste=$ps1->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 

    
        ?>