<?php
  // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$userId=$_GET['idUser'];
$userName=$_GET['userName'];

$ps=$pdo->prepare("UPDATE  user SET userName=?  WHERE idUser=?");
$ps->execute(array($userName,$userId));
$liste="succes";
echo (json_encode($liste));
    
        ?>