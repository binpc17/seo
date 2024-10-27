<?php
require_once ("./conn2.php");

$sSart=$_GET['sStart'];
$sEnd=$_GET['sEnd'];
$langU =$_GET['langU'];

$ps=$pdo->prepare("SELECT * FROM genuisData WHERE langueU='$langU' AND dateInit < (SELECT UNIX_TIMESTAMP()) AND dateEnd > (SELECT UNIX_TIMESTAMP()) AND statusG=1 LIMIT $sSart,$sEnd");
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