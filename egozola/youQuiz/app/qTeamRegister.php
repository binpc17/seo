<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

$nameTeam=$_GET['nameTeam'];
$idAdmin =$_GET['idAdmin'];


$ps=$pdo->prepare("INSERT INTO  qTeam (nameTeam,idAdmin) VALUES ('$nameTeam','$idAdmin')");
$ps->execute();
$liste=$pdo->lastInsertId();;

 if ($liste !=false){
 $dataRS =true;
 
 }else{
 
$dataRS =false;
 }

$data=array();

echo (json_encode($liste));

    
        ?>