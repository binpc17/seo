<?php
require_once ("./conn2.php");

$idUser=$_GET['idUser'];
$theDate=$_GET['theDate'];

if($theDate=='null'){
	$theDate=1525065650;
//$ps=$pdo->prepare("SELECT m.id,m.catID,m.userName,m.fromId,m.datePaide,m.creditDate,cc.category,cc.year FROM userCredit m INNER JOIN category cc ON m.catID=cc.catID WHERE idUser=? AND forYou=1 AND m.datePaide > $theDate");
$ps=$pdo->prepare("SELECT m.id,m.catID,m.userName,m.fromId,m.datePaide,m.creditDate,cc.category,cc.year FROM userCredit m INNER JOIN category cc ON m.catID=cc.catID WHERE idUser=? AND forYou=1 AND m.datePaide > $theDate");

$ps->execute(array($idUser));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
}else{

//$ps=$pdo->prepare("SELECT m.id,m.catID,m.userName,m.fromId,m.datePaide,m.creditDate,cc.category,cc.year FROM userCredit m INNER JOIN category cc ON m.catID=cc.catID WHERE idUser=? AND forYou=1 AND m.datePaide > $theDate");
$ps=$pdo->prepare("SELECT m.id,m.catID,m.userName,m.fromId,m.datePaide,m.creditDate,cc.category,cc.year FROM userCredit m INNER JOIN category cc ON m.catID=cc.catID WHERE idUser=? AND forYou=1 AND m.datePaide > $theDate");

$ps->execute(array($idUser));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);     
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
	
		
		