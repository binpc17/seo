<?php
require_once ("./conn2.php");

$sSart=$_GET['sStart'];
$sEnd=$_GET['sEnd'];
$langU =$_GET['langU'];

//$ps=$pdo->prepare("SELECT u.idGenuis,u.dateInit,u.name,u.sizeUser FROM genuisUser gu INNER JOIN genuisdata u ON gu.idGenuis=u.idGenuis WHERE gu.idUser='$idUser' AND u.langueU='$langU' AND u.dateInit >= (select UNIX_TIMESTAMP()) ORDER BY u.dateInit LIMIT $sSart,$sEnd");
//INNER JOIN  genuisUser gu ON gu.idGenuis=gd.idGenuis WHERE  gu.idUser=63 AND 

$ps=$pdo->prepare("SELECT * FROM genuisData gd  WHERE  gd.dateInit >= (select UNIX_TIMESTAMP()) ORDER BY gd.dateInit LIMIT $sSart,$sEnd");
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

header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 

        ?>