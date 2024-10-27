<?php
require_once ("./conn2.php");

$userId=$_GET['idUser'];
$userScore=$_GET['scoreMax'];
$category=$_GET['category'];
$rootScore=$_GET['rootScore'];

$ps=$pdo->prepare("UPDATE  scorechallenge SET scoreMax=?  WHERE idUser=? AND category=?");
$ps->execute(array($userScore,$userId,$category));

$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
 
$ps1=$pdo->prepare("UPDATE  user SET scoreMax=?  WHERE idUser=?");
$ps1->execute(array($rootScore,$userId));

$liste=$ps1->fetchAll(PDO::FETCH_ASSOC);
 
  
/*pour resoudre e problem des accesnt pour Json_encode
 * 
 */
$data=array();
foreach ($liste as $i => $v) {
    $fields=array();
    foreach ($v as $key => $value) {
         $fields[$key]=  utf8_encode($value);
    }
  $data[$i]=$fields;
}

     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
echo (json_encode($liste));
    
        ?>