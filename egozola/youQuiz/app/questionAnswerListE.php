<?php
require_once ("./conn2E.php");
header("Access-Control-Allow-Origin: *"); 

//$theDate=$_GET['theDate'];
$theCat=$_GET['catID'];

//$ps=$pdo->prepare("SELECT * FROM answerTable WHERE dateCreated >$theDate");
$ps=$pdo->prepare("SELECT * FROM answertable WHERE catID=$theCat");
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
header("Content-Type:application/json;  charset-utf-8");
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
  //  echo json_encode($liste, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
//echo(utf8_encode($liste, JSON_UNESCAPED_UNICODE) );
        ?>