<?php
require_once ("./conn2.php");

     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
$limitSize=$_GET['limitSize'];
$place=$_GET['place'];
$category=$_GET['category'];



//$ps=$pdo->prepare("SELECT idUser,score,scoreMax,userName,phoneNumber,sex,province,town FROM user  ORDER  BY  scoreMax DESC LIMIT 0,11");
if($limitSize ==10){
//echo"Xsize =10XX"; 
$ps=$pdo->prepare("SELECT uu.scoreMax,uu.userName,uu.sex,uu.town,uu.country,uu.photoName FROM  user uu WHERE uu.cCode='$place'  ORDER By uu.scoreMax DESC LIMIT 0,10");

} else if($limitSize ==50){
//echo "..SIZE =50";
$ps=$pdo->prepare("SELECT uu.scoreMax,uu.userName,uu.sex,uu.town,uu.country ,uu.photoName FROM  user uu WHERE uu.cCode='$place'  ORDER By uu.scoreMax DESC LIMIT 0,50");

} else if($limitSize ==100){
$ps=$pdo->prepare("SELECT uu.scoreMax,uu.userName,uu.sex,uu.town,uu.country,uu.photoName FROM  user uu  ORDER By uu.scoreMax DESC LIMIT 0,100");
//echo "..SIZE =100";
}
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);



echo (json_encode($liste));
    
        ?>