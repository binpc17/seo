<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
require_once ("./conn2.php");

$idGeuinis=$_GET['idGenuis'];
$timeEnd=$_GET['timeEnd'];

/* Load Server Time*/
$psT=$pdo->prepare("select UNIX_TIMESTAMP() As time"); 
$psT->execute();
$timeU=$psT->fetchColumn(0);

if($idGeuinis>0){

if($timeEnd >=$timeU){
    $ps=$pdo->prepare("SELECT gu.idUser,gu.scoreUser,gu.timeUser,gu.statusUser,gu.stageFaild,u.userName,u.country,u.sex FROM genuisUser gu INNER JOIN user u ON gu.idUser=u.idUser WHERE gu.idGenuis=? order by gu.scoreUser");
$ps->execute(array($idGeuinis));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}else{
$liste=0;
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working 
}
    
}else{
     $ps=$pdo->prepare("SELECT gu.idUser,gu.scoreUser,gu.timeUser,gu.statusUser,gu.stageFaild,u.userName,u.country,u.sex FROM genuisUser gu INNER JOIN user u ON gu.idUser=u.idUser WHERE gu.idGenuis=? order by gu.scoreUser");
$ps->execute(array($idGeuinis));
$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
echo (json_encode($liste,JSON_UNESCAPED_UNICODE)); ///Working    
}
     


        ?>