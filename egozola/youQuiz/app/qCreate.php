<?php
require_once ("./conn2.php");
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");
header('Access-Control-Allow-Headers: X-Requested-With, content-type, access-control-allow-origin, access-control-allow-methods, access-control-allow-headers');

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);


$idUser=$request->idUser;
$name =$request->name;
$comment=$request->comment;
$category =$request->category;
$g1 =$request->g1;
$b1 =$request->b1;
$b2 =$request->b2;
$b3 =$request->b3;


//$b4 =$_GET['b4'];
$gg =1;
$bb =0;
/*
$date=;

$ps=$pdo->prepare("select UNIX_TIMESTAMP()");
$ps->execute();
*/


$ps=$pdo->prepare("INSERT INTO questionW(name,comment,idUser,category,dateW)
VALUES (?,?,?,?,UNIX_TIMESTAMP())");
$ps->execute(array($name,$comment,$idUser,$category));
$liste=$pdo->lastInsertId();
//echo $liste;

//$liste=12;

$ps1=$pdo->prepare("INSERT INTO  answertablew(name,questionID,action)
VALUES (?,?,?)");
$ps1->execute(array($g1,$liste,$gg));

$ps2=$pdo->prepare("INSERT INTO  answertablew(name,questionID,action)
VALUES (?,?,?)");
$ps2->execute(array($b1,$liste,$bb));



$ps3=$pdo->prepare("INSERT INTO  answertablew(name,questionID,action)
VALUES (?,?,?)");
$ps3->execute(array($b2,$liste,$bb));




$ps4=$pdo->prepare("INSERT INTO  answertablew(name,questionID,action)
VALUES (?,?,?)");
$ps4->execute(array($b3,$liste,$bb));


/*
if($b4 !='undefined'){	

$ps=$pdo->prepare("INSERT INTO  answertablew(name,questionID,action)
VALUES (?,?,?)");
$ps->execute(array($b4,$liste,$bb));
}

*/
echo ($liste);

    
        ?>