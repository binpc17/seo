<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

$typeFead=$_GET['typeF'];
$idUser =$_GET['idUser'];
$msg =$_GET['feadBack'];



$ps=$pdo->prepare("INSERT INTO qFeadBack(typeF,feadBack,idUser)
VALUES (?,?,?)");
$ps->execute(array($typeFead,$msg,$idUser));

$liste=$pdo->lastInsertId();

echo (json_encode($liste));

    
        ?>