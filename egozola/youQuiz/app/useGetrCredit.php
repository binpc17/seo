<?php
require_once ("./conn2.php");
 // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
$idUser=$_GET['idUser'];

//$ps=$pdo->prepare("SELECT m.catID,m.year,m.category,dd.datePaide FROM usercredit dd INNER JOIN category m  m.catID ON dd.catID WHERE dd.idUser=?" );
$ps=$pdo->prepare("SELECT credit,theCredit FROM user WHERE idUser=?" );
$ps->execute(array($idUser));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste));    
        ?>