<?php
require_once ("./conn2.php");
$idUser=$_GET['idUser'];
$credit=$_GET['credit'];
$theCredit=$_GET['theCredit'];
$theCatD=$_GET['theCat'];


//echo($theCatD);

$ps=$pdo->prepare("UPDATE  user SET credit=?,theCredit=?  WHERE idUser=?");
$ps->execute(array($credit,$theCredit,$idUser));


$ps1=$pdo->prepare("INSERT   INTO usercredit(idUser,catID,creditDate,forYou,fromId,userName) values $theCatD");

//$ps1=$pdo->prepare("INSERT   INTO usercredit(idUser,catID,creditDate,forYou,fromId,userName) values (66,4,12345678954,66,55,'BIN-PC')");


$ps1->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);

     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
echo (json_encode($liste));
    
        ?>