<?php
require_once ("./conn2.php");

$idUser=$_GET['idUser'];
$theDate=$_GET['theDate'];

if($theDate=='null'){
	$theDate=1425065650;
//$ps=$pdo->prepare("SELECT m.mId,m.mTitle,m.mBody,m.mCatID,m.mFrom,m.mFromName,m.mTo,m.mToName,m.mState,m.mFromScore,m.mToScore,m.mDate,m.photoName,m.mFromTime,m.mToTime,m.msgReplay,uu.sex FROM message m  INNER JOIN user uu ON m.mFrom=uu.idUser WHERE m.mTo=? OR m.mFrom=?");
//$ps=$pdo->prepare("SELECT m.mId,m.mTitle,m.mBody,m.mCatID,m.mFrom,m.mFromName,m.mTo,m.mToName,m.mState,m.mFromScore,m.mToScore,m.mDate,m.photoName,m.mFromTime,m.mToTime,m.msgReplay FROM message m  INNER JOIN user uu ON m.mFrom=uu.idUser WHERE m.mTo=?");
//$ps=$pdo->prepare("SELECT m.mId,m.mTitle,m.mBody,m.mCatID,m.mFrom,m.mFromName,m.mTo,m.mToName,m.mState,m.mFromScore,m.mToScore,m.mDate,m.photoName,m.mFromTime,m.mToTime,m.msgReplay FROM message WHERE m.mTo=?");
$ps=$pdo->prepare("SELECT * FROM message WHERE mTo=? AND mDate> $theDate  
UNION ALL

SELECT * FROM message WHERE mFrom=? AND mState=1 
");

$ps->execute(array($idUser,$idUser));
$liste1=$ps->fetchAll(PDO::FETCH_ASSOC);   
}else{
	
//$ps=$pdo->prepare("SELECT m.mId,m.mTitle,m.mBody,m.mCatID,m.mFrom,m.mFromName,m.mTo,m.mToName,m.mState,m.mFromScore,m.mToScore,m.mDate,m.photoName,m.mFromTime,m.mToTime,m.msgReplay,uu.sex FROM message m  INNER JOIN user uu ON m.mFrom=uu.idUser WHERE m.mTo=? OR m.mFrom=?");
//$ps=$pdo->prepare("SELECT m.mId,m.mTitle,m.mBody,m.mCatID,m.mFrom,m.mFromName,m.mTo,m.mToName,m.mState,m.mFromScore,m.mToScore,m.mDate,m.photoName,m.mFromTime,m.mToTime,m.msgReplay FROM message m  INNER JOIN user uu ON m.mFrom=uu.idUser WHERE m.mTo=?");
//$ps=$pdo->prepare("SELECT m.mId,m.mTitle,m.mBody,m.mCatID,m.mFrom,m.mFromName,m.mTo,m.mToName,m.mState,m.mFromScore,m.mToScore,m.mDate,m.photoName,m.mFromTime,m.mToTime,m.msgReplay FROM message WHERE m.mTo=?");
$ps=$pdo->prepare("SELECT * FROM message WHERE mTo=? AND mDate> $theDate  
UNION ALL

SELECT * FROM message WHERE mFrom=? AND mState=1 
");

$ps->execute(array($idUser,$idUser));
$liste1=$ps->fetchAll(PDO::FETCH_ASSOC);   	
} 
 /*
$ps1=$pdo->prepare("SELECT * FROM message WHERE mFrom=? AND mDate> $theDate");
$ps1->execute(array($idUser));
$liste11=$ps1->fetchAll(PDO::FETCH_ASSOC);  

*/
/*pour resoudre e problem des accesnt pour Json_encode
 * 
 */


     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
echo (json_encode($liste1));
//echo (json_encode($liste11));

    
	

        ?>
	
		
		