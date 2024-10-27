<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("../conn2.php");

$info = $_GET["userId"];
//$info = "blaster";
if(!isset($_FILES['file']) || ($_FILES['file']['tmp_name'] == ''))
        echo "Please choose a file.";
    else {
        $uploadfile =  $_FILES['file']['name'];
        $uploadfilename = $_FILES['file']['tmp_name'];  
    }
$location = 'uploadedT/';
//rename($uploadfilename,$location . $uploadfile);

$file = $_FILES['file'];
list(,$type) = explode('/', $file['type']);
move_uploaded_file($file['tmp_name'], 'uploadedT/T'.$info.'.'.'jpg');

// then tryuin to update photoName in the DB

$phoneNumber=$info.'.'.$type;
$ps=$pdo->prepare("UPDATE  qteamData SET photoName=?  WHERE idTeam=?");

$ps->execute(array($phoneNumber,$info));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);   

echo ' Profile Updated Succesfull!..';

echo 'OriginalFile Name..:'+$uploadfilename+"AND OLD"+$uploadfilename;
/*
if(move_uploaded_file($uploadfilename, $location.$uploadfile)){
//if(move_uploaded_file($uploadfilename, $uploadfilename)){

echo 'File uploaded..';
} else {
echo 'Error to upload..';
}
*/
?>