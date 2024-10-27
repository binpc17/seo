<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

$province=$_GET['province']; 
$phoneNum=$_GET['userName'];
$paramQ=$_GET['paramQ'];

$sSart=$_GET['sStart'];
$sEnd2=$_GET['sEnd'];
$sEnd=20;



				$ps=$pdo->prepare("SELECT idUser,scoreMax,userName,phoneNumber,town,sex,photoName,country,theCredit FROM  user WHERE cCode ='$province' and  userName LIKE '%$phoneNum%'  LIMIT $sSart,$sEnd ");
			$ps->execute();
			$liste=$ps->fetchAll(PDO::FETCH_ASSOC);

echo (json_encode($liste));
    
        ?>