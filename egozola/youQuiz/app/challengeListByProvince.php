<?php
require_once ("./conn2.php");

$province=$_GET['province']; 
$phoneNum=$_GET['userName'];

$sSart=$_GET['sStart'];
$sEnd=$_GET['sEnd'];
$paramQ=$_GET['paramQ'];


if($paramQ>0){ 

$ps=$pdo->prepare("SELECT idUser,scoreMax,userName,phoneNumber,town,sex,photoName,country,theCredit FROM  user WHERE province = '$province' and  phoneNumber LIKE'%$phoneNum%'  LIMIT $sSart,$sEnd ");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
}
if($paramQ<1){ 

$ps=$pdo->prepare("SELECT idUser,scoreMax,userName,phoneNumber,town,sex,photoName,country,theCredit FROM  user WHERE province = '$province' and  userName LIKE '%$phoneNum%' LIMIT $sSart,$sEnd ");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
}

   
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