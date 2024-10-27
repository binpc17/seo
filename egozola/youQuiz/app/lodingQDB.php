<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

$questions=$_GET['questions'];
$catID =$_GET['catID'];
$year =$_GET['year'];
$category =$_GET['category'];



		 	 
		 $ps=$pdo->prepare("INSERT INTO questions (name,year,catID,category) VALUES (?,?,?,?)");
$ps->execute( array($questions,$catID,$year,$category));
$liste=$pdo->lastInsertId();

		  echo (json_encode($liste)); 

    
        ?>