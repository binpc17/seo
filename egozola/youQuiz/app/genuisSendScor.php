<?php
// il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
$idGeuinis=$_GET['idGenuis'];
$idUser =$_GET['idUser'];
$scoreU =$_GET['scoreU'];
$timeU =$_GET['timeU'];

$levelG =$_GET['levelG'];
$qList =$_GET['qList'];


$psQL=$pdo->prepare("SELECT levelG FROM genuisdata  WHERE idGenuis=?");
$psQL->execute(array($idGeuinis));
$oldLevel=$psQL->fetchColumn(0); // get Olde Level


if($oldLevel>$levelG){ // if it's High than Old
$psQLU=$pdo->prepare("UPDATE genuisdata SET questionN=?,levelG=?  WHERE idGenuis=?");
$psQLU->execute(array($qList,$levelG,$idGeuinis));
}

/*
if($levelG>2){ 
$ps=$pdo->prepare("UPDATE genuisdata SET levelG=?  WHERE idGenuis=?");
$ps->execute(array($levelG,$idGeuinis));
}

*/

$psS=$pdo->prepare("SELECT scoreUser FROM genuisUser  WHERE idGenuis=? AND idUser=?");
$psS->execute(array($idGeuinis,$idUser));

$psT=$pdo->prepare("SELECT timeUser FROM genuisUser  WHERE idGenuis=? AND idUser=?");
$psT->execute(array($idGeuinis,$idUser));


$oldScor=$psS->fetchColumn(0);
$oldTime=$psT->fetchColumn(0);

//$liste=$ps1->fetchAll(PDO::FETCH_ASSOC);


if($oldScor !== false){	
	$ps1=$pdo->prepare("UPDATE genuisUser SET scoreUser=?,timeUser=? WHERE idGenuis=? AND idUser=?");
$ps1->execute(array($scoreU+$oldScor,$timeU+$oldTime,$idGeuinis,$idUser));
//$liste=$ps1->fetchAll(PDO::FETCH_ASSOC);
/*
	echo $oldScor;
	echo  $oldTime;
	echo "---->";
	echo $oldScor+30;
	*/
	}

/*pour resoudre e problem des accesnt pour Json_encode

 */
$psN=$pdo->prepare("SELECT questionN FROM genuisdata  WHERE idGenuis=?");
$psN->execute(array($idGeuinis));
$liste=$psN->fetchAll(PDO::FETCH_ASSOC);

echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
//echo $oldScor ;

    
        ?>