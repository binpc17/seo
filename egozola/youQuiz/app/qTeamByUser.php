<?php
require_once ("./conn2.php");

$idUser=$_GET['idUser'];
$theDate=$_GET['theDate'];

if($theDate=='null'){
		$theDate=1425065650;
//$ps=$pdo->prepare("SELECT m.idTeam,cc.nameTeam,m.idUser,cc.photoName FROM qTeamData m  INNER JOIN  qteam cc  ON m.idTeam=cc.idTeam WHERE  m.idUser=? AND m.dateCreated >$theDate");
$ps=$pdo->prepare("SELECT m.idTeam,cc.nameTeam,m.idUser,cc.photoName FROM qTeamData m  INNER JOIN  qteam cc  ON m.idTeam=cc.idTeam WHERE  m.idUser=? AND m.dateCreated >$theDate");
//$ps=$pdo->prepare("SELECT m.idTeam,cc.nameTeam,m.idUser,cc.photoName FROM qTeamData m  INNER JOIN  qteam cc  ON m.idTeam=cc.idTeam WHERE  m.idUser=? AND m.dateCreated >$theDate");

$ps->execute(array($idUser));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
/*pour resoudre e problem des accesnt pour Json_encode
 * 
 */
}else{
	//$ps=$pdo->prepare("SELECT m.idTeam,cc.nameTeam,m.idUser,cc.photoName FROM qTeamData m  INNER JOIN  qteam cc  ON m.idTeam=cc.idTeam WHERE  m.idUser=? AND m.dateCreated >$theDate");
$ps=$pdo->prepare("SELECT m.idTeam,cc.nameTeam,m.idUser,cc.photoName FROM qTeamData m  INNER JOIN  qteam cc  ON m.idTeam=cc.idTeam WHERE  m.idUser=? AND m.dateCreated >$theDate");
//$ps=$pdo->prepare("SELECT m.idTeam,cc.nameTeam,m.idUser,cc.photoName FROM qTeamData m  INNER JOIN  qteam cc  ON m.idTeam=cc.idTeam WHERE  m.idUser=? AND m.dateCreated >$theDate");

$ps->execute(array($idUser));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
/*pour resoudre e problem des accesnt pour Json_encode
 * 
 */
}


$data=array();
foreach ($liste as $i => $v) {
    $fields=array();
    foreach ($v as $key => $value) {
         $fields[$key]=  utf8_encode($value);
    }
  $data[$i]=$fields;
}


     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
echo (json_encode($liste));
    
	

 ?>
	
		
		