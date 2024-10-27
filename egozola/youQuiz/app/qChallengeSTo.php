<?php
require_once ("./conn2.php");

$mId=$_GET['mId'];
$mFromScore=$_GET['mToScore'];
$msgReplay=$_GET['msgReplay'];
$mToTime=$_GET['mToTime'];
//$mTo=$_GET['mTo'];
$mFrom=$_GET['mFrom'];

$ps=$pdo->prepare("UPDATE  message SET mToScore='$mFromScore',mState=1,msgReplay='$msgReplay', mToTime='$mToTime',mTo='$mFrom',mDate=UNIX_TIMESTAMP() WHERE mId='$mId'");

$ps->execute(array());

$liste=$ps->fetchAll(PDO::FETCH_ASSOC);


     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
echo (json_encode($liste));
    
        ?>