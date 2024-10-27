<?php
require_once ("./conn2.php");

$mId=$_GET['mId'];
/*
$ps=$pdo->prepare("DELETE FROM message WHERE mId IN ($mId)");
$ps->execute();
*/
$liste="V1";

   
/*pour resoudre e problem des accesnt pour Json_encode
 * 
 */

     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
echo (json_encode($liste));
    
        ?>