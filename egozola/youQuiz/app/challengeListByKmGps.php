<?php
require_once ("./conn2.php");


$longRef=$_GET['long']; 
$latRef=$_GET['lat']; 
$distance=$_GET['distance']; 
$idUser=$_GET['idUser']; 

$sSart=$_GET['sStart'];
$sEnd=$_GET['sEnd'];

//$lmt=$_GET['lmt']; 
$lmt=100;

// firts updating currente User Position
$ps1=$pdo->prepare("UPDATE user SET latutude='$latRef', longitude='$longRef' WHERE idUser='$idUser' ");
$ps1->execute();
$liste=$ps1->fetchAll(PDO::FETCH_ASSOC);

   


//$phoneNum=$_GET['userName'];
$ps=$pdo->prepare("
	
		SELECT userName,town,
       latutude, longitude, distance,sex,photoName,theCredit
  FROM (
 SELECT z.userName,
        z.town,
		z.sex,
		z.photoName,
		z.theCredit,
        z.latutude, z.longitude,
        p.radius,
        p.distance_unit
                 * DEGREES(ACOS(COS(RADIANS(p.latpoint))
                 * COS(RADIANS(z.latutude))
                 * COS(RADIANS(p.longpoint - z.longitude))
                 + SIN(RADIANS(p.latpoint))
                 * SIN(RADIANS(z.latutude)))) AS distance
  FROM user AS z
  JOIN (   /* these are the query parameters */
        SELECT  '$latRef'   AS latpoint, '$longRef'  AS longpoint,
                '$distance' AS radius,      111.045 AS distance_unit
    ) AS p ON 1=1
  WHERE z.latutude
     BETWEEN p.latpoint  - (p.radius / p.distance_unit)
         AND p.latpoint  + (p.radius / p.distance_unit)
    AND z.longitude
     BETWEEN p.longpoint - (p.radius / (p.distance_unit * COS(RADIANS(p.latpoint))))
         AND p.longpoint + (p.radius / (p.distance_unit * COS(RADIANS(p.latpoint))))
 ) AS d
 WHERE distance <= radius
 ORDER BY distance
 LIMIT  $sSart,$sEnd 
	
");

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