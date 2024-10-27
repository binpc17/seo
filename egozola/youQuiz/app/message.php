<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");


$mTitle=$_GET['mTitle'];
$mBody =$_GET['mBody'];
$mCategory =$_GET['mCategory'];
$mFrom =$_GET['mFrom'];
$mFromName =$_GET['mFromName'];
$mTo =$_GET['mTo'];
$mToName =$_GET['mToName'];
$mYear =$_GET['mYear'];

$ps=$pdo->prepare("INSERT INTO message(mTitle,mBody,mFrom,mFromName,mTo,mToName,mCategory,mYear)
VALUES (?,?,?,?,?,?,?,?)");
$ps->execute( array($mTitle,$mBody,$mFrom,$mFromName,$mTo,$mToName,$mCategory,$mYear));

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