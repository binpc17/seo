<?php
require_once ("./conn2.php");

$limitSize=$_GET['limitSize'];
$place=$_GET['place'];
$category=$_GET['category'];



//$ps=$pdo->prepare("SELECT idUser,score,scoreMax,userName,phoneNumber,sex,province,town FROM user  ORDER  BY  scoreMax DESC LIMIT 0,11");
if($limitSize ==10){
//echo"Xsize =10XX"; 
$ps=$pdo->prepare("SELECT  mm.score,mm.category,uu.userName,uu.sex,uu.town, uu.province,uu.country ,uu.photoName,uu.dateCreated  FROM  scorechallenge mm  INNER JOIN user uu ON mm.idUser=uu.idUser WHERE uu.province='$place' AND mm.category='$category' ORDER By mm.score DESC LIMIT 0,11");

} else if($limitSize ==50){
//echo "..SIZE =50";
$ps=$pdo->prepare("SELECT  mm.score,mm.category,uu.userName,uu.sex,uu.town, uu.province,uu.country ,uu.photoName,uu.dateCreated  FROM  scorechallenge mm  INNER JOIN user uu ON mm.idUser=uu.idUser WHERE uu.province='$place' AND mm.category='$category' ORDER By mm.score DESC LIMIT 0,51");

} else if($limitSize ==100){
$ps=$pdo->prepare("SELECT  mm.score,mm.category,uu.userName,uu.sex,uu.town, uu.province,uu.country ,uu.photoName,uu.dateCreated  FROM  scorechallenge mm  INNER JOIN user uu ON mm.idUser=uu.idUser WHERE uu.province='$place' AND mm.category='$category' ORDER By mm.score DESC LIMIT 0,101");
//echo "..SIZE =100";
}
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