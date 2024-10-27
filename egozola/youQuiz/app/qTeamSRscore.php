<?php
require_once ("./conn2.php");

$idTeam=$_GET['idTeam'];
$idUser=$_GET['idUser'];
$theDate=$_GET['theDate'];
$theScore=$_GET['theScore'];
$theTime=$_GET['theTime'];
$theCode=$_GET['theCode'];


$ps1=$pdo->prepare("UPDATE qteamdata SET score=$theScore,timeRecord=$theTime,dateCreated=NOW() WHERE idUser=$idUser AND idTeam=$idTeam");
$ps1->execute();



	$ps11=$pdo->prepare("UPDATE  qteam SET dateUp=UNIX_TIMESTAMP() WHERE  idTeam=$idTeam");
$ps11->execute();

$ps=$pdo->prepare("SELECT dt.id,dt.idUser,dt.score,dt.timeRecord,uc.userName FROM qteamData dt INNER JOIN user uc ON uc.idUser=dt.idUser WHERE dt.idTeam=$idTeam AND   dt.dateCreated >$theDate");

$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
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
	
		
		