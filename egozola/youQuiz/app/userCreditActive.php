<?php
     // il arrive de fois ou ou refuse au navigateur de recuperer une page apartir d'un site
// pour envoyer une requette vers un notre site -->> on autorise cela grace a  header(" Acces-Control-Allow-Origin: *") * cad de tote les machine; 
header("Access-Control-Allow-Origin: *"); 
header("Content-Type:application/json;  charset-utf-8");

require_once ("./conn2.php");

$idUser=$_GET['idUser'];
$dataCredit=$_GET['dataCredit'];
$sCredit=$_GET['sCredit'];
$credit=$_GET['credit'];




if($sCredit<1){//Sleeping
	//echo "Sleeping >100";
	
$ps1=$pdo->prepare("INSERT   INTO usercredit(idUser,catID,creditDate) values $dataCredit");
$ps1->execute();

$ps2=$pdo->prepare("UPDATE  user SET credit=? WHERE idUser=?");
$ps2->execute(array($credit,$idUser));
}

 if($sCredit>0){// No sleepin
	
//	echo "NotSleeping  ECHO <100";
				$ps=$pdo->prepare("SELECT phoneNumber,credit FROM user WHERE idUser=?");
				$ps->execute(array($idUser));
				$liste=$ps->fetchAll(PDO::FETCH_ASSOC);
     
$data=array();
foreach ($liste as $i => $v) {
    $fields=array();
    foreach ($v as $key => $value) {
         $fields[$key]=  utf8_encode($value);
    }
  $data[$i]=$fields;
  
}

echo (json_encode($liste));
	
}



    
        ?>