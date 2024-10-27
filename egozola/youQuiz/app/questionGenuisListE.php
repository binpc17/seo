<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2E.php");
$theCat=$_GET['questionID'];
$ps=$pdo->prepare("SELECT questionID,name,catID,comment,category FROM questions WHERE questionID IN $theCat");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 

echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
//SELECT m.catID,m.category,m.year FROM category m  WHERE NOT EXISTS (SELECT CatID,category,year FROM usercreditbonus)
    
        ?>
		
		
		
		