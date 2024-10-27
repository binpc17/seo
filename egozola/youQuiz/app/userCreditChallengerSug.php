<?php
require_once ("./conn2.php");

$idChallange=$_GET['idUserChallange'];
$category=$_GET['category'];

$ps=$pdo->prepare("SELECT m.catID, m.category,m.year,m.verState,uc.creditDate FROM category m  INNER JOIN usercredit uc ON uc.catID=m.catID WHERE m.category=$category AND uc.idUser=$idChallange");
//$ps=$pdo->prepare("SELECT m.catID, m.category,m.year,m.verState FROM category m  WHERE m.category=$category");

//$ps=$pdo->prepare("SELECT m.catID, m.category,m.year FROM category WHERE m.category='$category'");

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