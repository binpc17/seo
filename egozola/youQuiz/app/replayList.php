<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");



$idRep=$_GET['idRep'];


$ps=$pdo->prepare("SELECT m.idRep,m.responseM,u.userName FROM qChatReplay m INNER JOIN user u ON m.idUser=u.idUser WHERE m.idqChat='$idRep' ORDER By m.idRep");
$ps->execute();

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