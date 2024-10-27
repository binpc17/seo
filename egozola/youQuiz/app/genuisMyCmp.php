<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
$idUser =$_GET['idUser'];
$sSart=$_GET['sStart'];
$sEnd2=$_GET['sEnd'];
$sEnd=20;
$langU =$_GET['langU'];

$ps=$pdo->prepare("SELECT u.idGenuis,u.dateInit,u.name,u.sizeUser,u.questionN FROM genuisUser gu INNER JOIN genuisData u ON gu.idGenuis=u.idGenuis WHERE gu.idUser=$idUser  AND u.dateInit>= (select UNIX_TIMESTAMP()) ORDER BY u.dateInit LIMIT $sSart,$sEnd");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);

echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 

        ?>