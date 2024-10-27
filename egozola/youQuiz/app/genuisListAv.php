<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$sSart=$_GET['sStart'];
$sEnd2=$_GET['sEnd'];
$sEnd=20;
$langU =$_GET['langU'];
$timeU=time();

$ps=$pdo->prepare("SELECT idGenuis,idUser,name,dateInit,sizeUser,levelG,questionN FROM genuisData WHERE langueU=? AND dateInit>=$timeU ORDER BY dateInit LIMIT $sSart,$sEnd ");
$ps->execute(array($langU));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
 echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working   

        ?>