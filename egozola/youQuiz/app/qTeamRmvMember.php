<?php
require_once ("./conn2.php");
/*
$idTeam=$_GET['idTeam'];
$idUser =$_GET['idUser'];
*/
$msgT =$_GET['msgT'];
$msg="qt";

/*
//$ps=$pdo->prepare("SELECT m.score,m.timeRecord,m.msg,uu.userName,cc.nameTeam FROM qteamData m  INNER JOIN (user uu,qteam cc) ON m.idUser=uu.idUser AND cc.idTeam=m.idTeam  WHERE  m.idUser=?");
$ps=$pdo->prepare("DELETE FROM qteamData WHERE  idUser=$idUser AND  idTeam=$idTeam");

$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
*/
//http://192.168.56.1/IONIC_Scripte/MeteoApp/qTeamRmvMember.php?msgT=(28,107,'qt','Brandy Amos'),(28,107,'qt','Brandy Amos'),(38,107,'qt','Brandy Amos'),(40,107,'qt','Brandy Amos')

$ps1=$pdo->prepare("INSERT INTO qChat(idTeam,idUser,msg,nameUser) VALUES $msgT");
$ps1->execute();

$liste="success";


     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
echo (json_encode($liste));
 ?>
	
		
		