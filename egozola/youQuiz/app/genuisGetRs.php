<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
$idGeuinis=$_GET['idGenuis'];
$levelE=$_GET['levelE'];
/*
$ps1=$pdo->prepare("UPDATE `genuisdata` SET levelG=12  WHERE idGenuis IN(SELECT idGenuis FROM genuisUser WHERE scoreUser =0 ");
$ps1->execute(array($idGeuinis));
*/
$ps=$pdo->prepare("SELECT gu.idUser,gu.scoreUser,gu.timeUser,gu.statusUser,u.userName,u.country,u.town,u.photoName FROM genuisUser gu INNER JOIN user u ON gu.idUser=u.idUser WHERE gu.idGenuis=? order by gu.scoreUser DESC");
$ps->execute(array($idGeuinis));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
if($levelE ==1){
	$psQLU=$pdo->prepare("UPDATE genuisdata SET dateEnd=(select UNIX_TIMESTAMP()),dateExp=UNIX_TIMESTAMP()+2400,statusG=0,levelG=?  WHERE idGenuis=?");
$psQLU->execute(array($levelE,$idGeuinis));
}
echo(json_encode($liste,JSON_UNESCAPED_UNICODE));
?>