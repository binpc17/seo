<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

$category=$_GET['category'];
$scoreMax=$_GET['scoreMax'];
$place=$_GET['place'];


$ps=$pdo->prepare("SELECT count(DISTINCT uu.scoreMax)  AS myRank FROM  user uu WHERE uu.cCode='$place'  AND uu.scoreMax>='$scoreMax' ORDER BY uu.scoreMax DESC ");
$ps->execute(array());
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste));
    
        ?>