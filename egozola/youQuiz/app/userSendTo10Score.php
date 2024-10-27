<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");
$idUser=$_GET['idUser'];
$category=$_GET['category'];
$theScore=$_GET['theScore'];


$ps1=$pdo->prepare("UPDATE  user SET scoreMax=? WHERE IN ('$idUser') ");
$ps1->execute(array($theScore));

$ps=$pdo->prepare("SELECT * FROM scorechallenge WHERE idUser IN ('$idUser') AND category IN('$category')");
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
echo (json_encode($liste));
    
        ?>