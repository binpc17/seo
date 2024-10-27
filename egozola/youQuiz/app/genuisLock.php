<?php
require_once ("./conn2.php");

header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

$idGeuinis=$_GET['idGenuis'];
$idUser =$_GET['idUser'];
$levelG =$_GET['levelG'];


$ps1=$pdo->prepare("UPDATE genuisUser SET stageFaild=?,statusUser=0 WHERE idGenuis=? AND idUser=?");
$ps1->execute(array($levelG,$idGeuinis,$idUser));
$liste=$ps1->fetchAll(PDO::FETCH_ASSOC);

$data=array();
foreach ($liste as $i => $v) {
    $fields=array();
    foreach ($v as $key => $value) {
         $fields[$key]=  utf8_encode($value);
    }
  $data[$i]=$fields;
}


echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 

    
        ?>