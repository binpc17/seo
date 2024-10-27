<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

$idTeam=$_GET['idTeam'];
$theDate=$_GET['theDate'];

$ps=$pdo->prepare("SELECT  id FROM qChat WHERE idTeam='$idTeam' AND date> $theDate ");
$ps->execute();

$liste=$ps->fetchAll(PDO::FETCH_ASSOC);

echo (json_encode($liste));    
        ?>