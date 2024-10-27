<?php
require_once ("./conn2.php");
$idUser=$_GET['idUser'];
$catID=$_GET['catID'];




   
$ps1=$pdo->prepare("SELECT  uc.creditDate FROM uc.usercredit  INNER JOIN category cat ON cat.catID=uc.catID WHERE uc.idUser=? AND uc.catID=? AND cat.descCat=1");
$ps1->execute(array($idUser,$catID));
$liste=$ps1->fetchAll(PDO::FETCH_ASSOC);   	 
	 
	 
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