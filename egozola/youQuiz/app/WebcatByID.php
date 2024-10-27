<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$catID=$_GET['qID'];
$ps=$pdo->prepare("SELECT category,year,catID,verState FROM category WHERE catID=$catID");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working  
?>
		
		
		
		