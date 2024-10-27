<?php
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$category=$_GET['cat'];
$year=$_GET['year'];
$ps=$pdo->prepare("SELECT category,year,catID,verState FROM category WHERE category='$category' AND year=$year");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working  
        ?>
		
		
		
		