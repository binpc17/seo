<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

$contryCD=$_GET['contryCD'];
$countryN=$_GET['countryN'];
$version=$_GET['version'];

$list="N";

echo (json_encode($list,JSON_UNESCAPED_UNICODE)); ///Working 
        ?>