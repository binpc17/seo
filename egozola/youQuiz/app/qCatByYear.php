<?php
require_once ("./conn2.php");

$cat=$_GET['cat'];

$ps=$pdo->prepare("SELECT CatID,year,verState FROM category WHERE category=? AND descCat=0");
$ps->execute(array($cat));

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

//SELECT m.catID,m.category,m.year FROM category m  WHERE NOT EXISTS (SELECT CatID,category,year FROM usercreditbonus)
    
        ?>
		
		
		
		