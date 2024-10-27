<?php
require_once ("./connJS.php");
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

$contryCD=$_GET['contryCD'];
$countryN=$_GET['countryN'];
$twn=$_GET['twn'];
$lng=$_GET['lng'];
$version=$_GET['version'];
$track=$_GET['track'];
$track2=$_GET['track2'];
				$ps=$pdoJS->prepare("INSERT INTO newGame (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (?,?,?,?,?,?,?,NOW())");
				$ps->execute( array($contryCD,$countryN,$twn,$lng,$version,$track,$track2));
$list="N";
echo (json_encode($list,JSON_UNESCAPED_UNICODE)); ///Working 
        ?>