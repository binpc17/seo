<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$sSart=$_GET['sStart'];
$sEnd=$_GET['sEnd'];
$langU =$_GET['langU'];


//$ps=$pdo->prepare("SELECT * FROM genuisData WHERE  statusG=0,langueU='$langU' AND dateExp >(SELECT SUM(UNIX_TIMESTAMP()-2500)) AND dateExp < UNIX_TIMESTAMP() AND statusG=1 ORDER BY dateInit DESC LIMIT $sSart,$sEnd");

$ps=$pdo->prepare("SELECT idGenuis,idUser,name,dateInit,sizeUser,levelG,dateExp,questionN FROM genuisData WHERE  statusG>1 AND langueU='$langU' AND dateInit >=(SELECT UNIX_TIMESTAMP()+(87264*2)) ORDER BY dateExp DESC LIMIT $sSart,$sEnd");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 

        ?>