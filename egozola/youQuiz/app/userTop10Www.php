<?php

     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$limitSize=$_GET['limitSize'];
$place=$_GET['place'];
$category=$_GET['category'];

$ps=$pdo->prepare("SELECT uu.scoreMax,uu.userName,uu.sex,uu.country ,uu.photoName  FROM  user uu  ORDER By uu.scoreMax DESC LIMIT 0,50");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste));
    
        ?>