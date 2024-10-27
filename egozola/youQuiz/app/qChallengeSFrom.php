<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

$mIdFrom=$_GET['mIdFrom'];
$mIdTo=$_GET['mIdTo'];

$mFromScore=$_GET['mFromScore'];
$mFromName=$_GET['mFromName'];
$mMessage=$_GET['mMessage'];

$catID=$_GET['mCatID'];
$mToName=$_GET['mToName'];
$photoName=$_GET['photoName'];
$mFromTime=$_GET['mFromTime'];

$title="qChallengner";
//***********************************************************************************************////

//$ps=$pdo->prepare("UPDATE  message SET mFromScore=? WHERE mId=?");

$ps=$pdo->prepare("INSERT INTO message(mTitle,mBody,mFrom,mFromName,mFromScore,mTo,mCatID,mToName,photoName,mFromTime)
VALUES (?,?,?,?,?,?,?,?,?,?)");

$ps->execute(array($title,$mMessage,$mIdFrom,$mFromName,$mFromScore,$mIdTo,$catID,$mToName,$photoName,$mFromTime));

$liste=$pdo->lastInsertId();


echo (json_encode($liste));

    
        ?>