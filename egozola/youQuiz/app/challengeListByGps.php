<?php
require_once ("./conn2.php");

$province=$_GET['province']; 
$sex=$_GET['sex']; 
//$phoneNum=$_GET['userName'];
$ps=$pdo->prepare("SELECT idUser,userName,latutude,longitude,sex,photoName,town FROM  user WHERE town='$province' AND sex='$sex'");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
   
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