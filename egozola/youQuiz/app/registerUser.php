<?php
// il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$userName=$_GET['userName'];
$passWord =$_GET['passWord'];
$phoneNumber =$_GET['phoneNumber'];
$sex =$_GET['sex'];
$deviceModel =$_GET['deviceModel'];
$credit =1;
$country =$_GET['country'];
$photoName=$sex.".jpg";
$theme=$_GET['theme'];
$cCode=$_GET['cCode'];

$ps1=$pdo->prepare("SELECT * FROM user WHERE phoneNumber='$phoneNumber'");
$ps1->execute();
//echo  $ss;
     $liste2=$ps1->fetchAll(PDO::FETCH_ASSOC);
//echo "size--".sizeof( $liste2,0);
	 if( sizeof( $liste2,0)<1){		 	 
		 $ps=$pdo->prepare("INSERT INTO user (userName,passWord,phoneNumber,sex,deviceModel,credit,country,photoName,theme,cCode)
VALUES (?,?,?,?,?,?,?,?,?,?)");
$ps->execute( array($userName,$passWord,$phoneNumber,$sex,$deviceModel,$credit,$country,$photoName,$theme,$cCode));
$liste=$pdo->lastInsertId();
echo (json_encode($liste));
	 }	 
	 if(sizeof( $liste2,0)>0){
		  $liste=0;		
		  echo (json_encode($liste2,JSON_UNESCAPED_UNICODE)); ///Working 
	 } 

    
        ?>