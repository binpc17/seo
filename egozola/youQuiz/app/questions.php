<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

require_once ("./conn2.php");
$theDate=$_GET['theDate'];
$ps=$pdo->prepare("SELECT * FROM questions WHERE dateCreated >$theDate");
$ps->execute();


//echo  $ss;
     $liste=$ps->fetchAll(PDO::FETCH_ASSOC);
	/*
	 if( sizeof( $liste,0)<1){
	echo "Notin Boss";
	 }else{
		 
	 }
	 */
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 

        ?>