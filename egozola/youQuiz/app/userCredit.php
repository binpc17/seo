<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
require_once ("./conn2E.php");
$idUser=$_GET['idUser'];
$cdTime=$_GET['cdTime'];
$ZoneCd=$_GET['ZoneCd'];
$cCod=$_GET['cCod'];
$cCat=$_GET['cCat'];

if($cCat==='add'){
$ps1=$pdo->prepare("INSERT INTO usercredit(idUser,creditDate,cCod,zoneCd) VALUES (?,?,?,?)");
$ps1->execute(array($idUser,$cdTime,$cCod,$ZoneCd));
$liste=200;
echo(json_encode($liste,JSON_UNESCAPED_UNICODE));	
}else{
$ps=$pdo->prepare("SELECT creditDate FROM usercredit WHERE idUser=? ORDER BY id DESC LIMIT 0,1");
$ps->execute(array($idUser));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
echo(json_encode($liste,JSON_UNESCAPED_UNICODE));	
}
?>