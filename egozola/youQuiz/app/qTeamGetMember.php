<?php
require_once ("./conn2.php");

$idTeam=$_GET['idTeam'];
$theDate=$_GET['theDate'];


if($theDate=='null'){
	$theDate=1525065650;
//$ps=$pdo->prepare("SELECT m.score,m.timeRecord,m.msg,uu.userName,cc.nameTeam FROM qteamData m  INNER JOIN (user uu,qteam cc) ON m.idUser=uu.idUser AND cc.idTeam=m.idTeam  WHERE  m.idUser=?");
$ps=$pdo->prepare("SELECT m.id,m.score,m.timeRecord,m.msg,m.idTeam,m.idUser,uu.userName FROM qteamData m  INNER JOIN user uu ON  m.idUser=uu.idUser  WHERE  m.idTeam IN $idTeam AND  m.dateCreated >$theDate");

$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
}else{
	//$ps=$pdo->prepare("SELECT m.score,m.timeRecord,m.msg,uu.userName,cc.nameTeam FROM qteamData m  INNER JOIN (user uu,qteam cc) ON m.idUser=uu.idUser AND cc.idTeam=m.idTeam  WHERE  m.idUser=?");
$ps=$pdo->prepare("SELECT m.id,m.score,m.timeRecord,m.msg,m.idTeam,m.idUser,uu.userName FROM qteamData m  INNER JOIN user uu ON  m.idUser=uu.idUser  WHERE  m.idTeam IN $idTeam AND  m.dateCreated >$theDate");

$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
}    
/*pour resoudre e problem des accesnt pour Json_encode
 * 
 */
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
	
		
		