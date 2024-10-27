<?php
require_once ("./conn2.php");

$category=$_GET['category'];
$scoreMax=$_GET['scoreMax'];
$place=$_GET['place'];

//$ps=$pdo->prepare("SELECT count(DISTINCT score) AS rank FROM scorechallenge  WHERE score>=? ORDER BY score DESC");
$ps=$pdo->prepare("SELECT count(DISTINCT mm.score)  AS myRank FROM  scorechallenge mm  INNER JOIN user uu ON mm.idUser=uu.idUser WHERE uu.town='$place' AND  category='$category' AND mm.score>='$scoreMax' ORDER BY mm.score DESC ");
//$ps=$pdo->prepare("SELECT  mm.score,mm.category,uu.userName,uu.sex,uu.town, uu.province,uu.country ,uu.photoName,uu.dateCreated  FROM  scorechallenge mm  INNER JOIN user uu ON mm.idUser=uu.idUser WHERE uu.province='$place' AND mm.category='$category' ORDER By mm.score DESC LIMIT 0,11");

$ps->execute(array());
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