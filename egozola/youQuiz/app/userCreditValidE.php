<?php
require_once ("./conn2.php");
$idUser=$_GET['idUser'];
$credit=$_GET['credit'];
$theCredit=$_GET['theCredit'];

$theDate=$_GET['theDate'];
$theId=$_GET['theId'];

//echo($theCatD);

$ps=$pdo->prepare("UPDATE  user SET credit=?,theCredit=?  WHERE idUser=?");
$ps->execute(array($credit,$theCredit,$idUser));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
   
$ps1=$pdo->prepare("UPDATE  usercredit SET creditDate=? WHERE id=?");
$ps1->execute(array($theDate,$theId));
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