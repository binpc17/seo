<?php
require_once ("./conn2.php");

$idTeam=$_GET['idTeam'];
$theDate=$_GET['theDate'];

//$ps=$pdo->prepare("SELECT m.idCat FROM qTeamCat m WHERE  m.idQTeam=? AND dateCreated >$theDate");

if($theDate=='null'){
		$theDate=1425065650;
$ps=$pdo->prepare("SELECT m.idCat,m.idQTeam FROM qTeamCat m WHERE  m.idQTeam IN $idTeam AND m.dateCreated >$theDate");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
}
else{
	$ps=$pdo->prepare("SELECT m.idCat,m.idQTeam FROM qTeamCat m WHERE  m.idQTeam IN $idTeam AND m.dateCreated >$theDate");
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
	
		
		