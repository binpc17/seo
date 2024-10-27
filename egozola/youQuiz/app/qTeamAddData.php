<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");


$idUser=$_GET['idUser'];
$idCat =$_GET['idCat'];
$idTeam =$_GET['idTeam'];
$timeRecord =$_GET['timeRecord'];
$score =$_GET['score'];
$msg =$_GET['msg'];

$ps=$pdo->prepare("INSERT INTO  qteamData (idUser,idTeam,idCat,score,msg,timeRecord)
VALUES (?,?,?,?,?,?)");


$ps->execute( array($idUser,$idCat,$idTeam,$msg,$timeRecord));
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