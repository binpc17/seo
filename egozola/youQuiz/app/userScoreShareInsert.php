<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");


$idUser=$_GET['idUser'];
$category =$_GET['category'];
$score =$_GET['scoreMax'];
$rootScore=$_GET['rootScore'];

$ps=$pdo->prepare("INSERT INTO scorechallenge (idUser,category,score)
VALUES (?,?,?)");

$ps->execute( array($idUser,$category,$score));

$ps1=$pdo->prepare("UPDATE  user SET scoreMax=?  WHERE idUser=?");
$ps1->execute(array($rootScore,$userId));

$liste=$ps1->fetchAll(PDO::FETCH_ASSOC);
 
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
 if ($liste !=false){
 $dataRS =true;
 
 }else{
 
$dataRS =false;
 }

$data=array();
foreach ($liste as $i => $v) {
    $fields=array();
    foreach ($v as $key => $value) {
         $fields[$key]=  utf8_encode($value);
    }
  $data[$i]=$fields;
}


echo (json_encode($liste));

    
        ?>