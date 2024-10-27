<?php
require_once ("./conn2.php");
require_once ("./connJS.php");

$lang=$_GET['level'];
if($lang>0){
  
}else{
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 
 	 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
  if($lang!==''){
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (213,'Algeria','JS',' $lang','$mob',2,'ZOLA',NOW())");
    $ps->execute();
	$botUrl="https://egozola.com/GooglePlay.php?hl=fr&apId=old";
  } 
 }else{
	 $mob="Web";
	 $botUrl="https://egozola.com";
 }
 
   
}
	?>
<!doctype html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ouedkniss travail & emploi alger <?php echo date("Y"); ?> |eGoZola</title>
  <meta name="description" content="✓ Découvrez, Postulez en ligne aux offres emploi <?php echo date("Y"); ?> et d'affaires Ouedkniss emploi alger <?php echo date("Y"); ?>, blida et oran sur eGoZola. Télécharger l'application"/>
  <meta name="keywords" content="Ouedkniss emploi alger, emploitic, Cherche travail"/>
  <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is a platform, a tool and a unified network for business facilitation (Buy, Sell, Rent & product or service exchanges), services and jobs in real time in a geolocated manner and much more ... deals"/>
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="favicon.png">
  <meta property="og:site_name" content="eGoZola" />
  <link rel="icon" type="image/x-icon" href="favicon.png">
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script></script>
</head>

<body style='background-color: whitesmoke'>
<!-- echo "<body style="background-color: whitesmoke" onload="timer = setTimeout('homeData()',10000);">";
 <img src="./app/img/logo.png" width="97px" height="42px" alt="eGoZola" class="img-responsive">-->

<div style="background-color: #5e5e5e;width: 100%;font-family: Calibri;margin-top:3px;margin-bottom: 3px;color: white;position:fixed;z-index:999;display: inline-block;overflow:auto;height: 25px;white-space: nowrap">
<a href="https://egozola.com" style="color: white;margin-left:2px">  eGoZola |</a> <span style="margin-left: 5px"></span> 
<a href="https://egozola.com/indexMsg.php" style="color: white"><span id="msgRs"> <span class="glyphicon glyphicon-envelope"></span> Message (0) 
 </span></a><span> | <a href="https://egozola.com/index.php" style="color: white"><span class="glyphicon glyphicon-search"></span> Rechercher </span></a> | <a href="https://egozola.com/APK/eGoZola.apk" style="color: white"><span class="glyphicon glyphicon-circle-arrow-down"></span> Télécharger</a> |  <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-usd"></span> Emplois</a> | <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-home"></span> Maisons</a> |  <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-plane"></span> Véhicules</a> | <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-shopping-cart"></span> A vendre </a> | <a href="https://egozola.com/profile.php" style="color: white"><span class="glyphicon glyphicon-user"></span> Profile </a>  
 </div>
<div class="row">
  <!--
  <img src="./assets/pubBar.jpg"  alt="eGoZola" class="img-responsive">
  --->
</div>

<div class="row" style="font-family: Calibri">
  <div  class="col-md-2" >
  </div>
  <div class="col-md-7" >
    <div style="height: 15px;width: 100%"></div>
          <div style="text-align: center;margin-top: 50px">
		   <a href="<?php echo $botUrl?>" >
    <strong style="color: black">Hey! Obtenez toutes les offres d'Emploi et d'Affaires au Maroc dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="Ouedkniss emploi alger"> 
			    </a>
          </div>
    <div style="margin-left: 20px;margin-top: 12px">
       <h4 style="color:darkgreen;text-align: center;"> <strong>Offres d'Emploi & Services</strong></h4> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>      
	<?php   
		$urlWS="https://www.egozola.com/stdView.php?type=dsp&id=".$subjectData['idJobS'];
		$urlWS=$botUrl;
$ps=$pdoJS->prepare("SELECT idJobS,sizeV,jobTitle,town,dateExp,urlJS,userN FROM jobservice WHERE dateExp >= (select UNIX_TIMESTAMP()) ORDER BY idJobS DESC LIMIT 0,10");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
//echo ">>".sizeof($liste,0) >> {$subjectData['urlJS']};
           echo "<ul class='list-group'>";
       foreach ($liste as $subjectData) {
            echo "<li class='list-group-item'> <a href='".$urlWS."' style='color: black'> <strong>".$subjectData['jobTitle']."</strong><br> <span class='glyphicon glyphicon-user'></span> ".$subjectData['userN']."| <em> Vieu(".$subjectData['sizeV'].") <span class='glyphicon glyphicon-map-marker'></span> ".$subjectData['town']."</em>";
			echo"</a> <span class='glyphicon glyphicon-menu-right' style='float: right'></span> </li>";
       }
echo "</ul>";

/**
$ps=$pdoJS->prepare("SELECT idJobS,P,sizeV,level,jobTitle,town,domId,dateExp,urlJS,userN FROM jobservice  WHERE idJobS>9 AND dateExp >= (select UNIX_TIMESTAMP()) LIMIT 0,15");
   foreach ($liste as $subjectData) {
            echo "<li class='list-group-item'> <a href='sujetDetails.php?idSujet={$subjectData['id']}' style='color: black'> <strong>".$subjectData['jobTitle']."</strong><br> <span class='glyphicon glyphicon-user'></span> ".$subjectData['userN']."| <em> Vieu(".$subjectData['sizeV'].") </span> </em> Déposé:".$subjectData['statusDep']."| FeuVert: "; if($subjectData['statusFeuVert']==0){echo'<button style="background-color: darkred;color: white">NO</button>';};if($subjectData['statusFeuVert']==1){echo'
                 <button style="background-color: darkgreen;color: white">YES</button>';}; echo"</a> <span class='glyphicon glyphicon-menu-right' style='float: right'></span> </li>";
       }
*/
?>

  
        <div style="margin-top: 30px"></div>
		  
          <div style="text-align: center">
		   <a href="<?php echo $botUrl?>" >
            <strong style="color: black"> Pour Obtenir toutes les Offres d'Emploi et d'Affaires dans ton téléphone dz, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="Ouedkniss emploi alger"> 
			    </a>
          </div>
    
		   <div style="margin-top: 10px"></div>
          <a href="https://wa.me/243999209870?text=Google_FR_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application"> <div style="text-align: right"> Email: <strong> hello@egozola.com</strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
     
     <div style="text-align:center"> <h1> Ouedkniss travail & emploi alger <?php echo date("Y"); ?> </h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Ouedkniss travail alger <?php echo date("Y"); ?>: Trouve et Cherche emploi ou une affaire rapidement en algérie, Oran, Constantine sur eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Avec eGoZola Ouedkniss travail: Retrouvez ou cherche emploi <?php echo date("Y"); ?> rapidement à alger, Oran, Constantine et partout en Algérie  
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Publier ton annonce, vendez ton savoir et tes services et gagnez de l'argent. Retrouvez des partenaires d'affaire avec l'application eGoZola
  <br> <span class="glyphicon glyphicon-tags"> </span>✓ Retrouvez la personne, le travail ou l'affaire qu’il vous faut ou un service à domicile sur eGozola Ouedkniss travail & emploi alger <?php echo date("Y"); ?> , blida et Oran. 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Télecharger eGoZola et retrouvez des offres d'emploi dz <?php echo date("Y"); ?> sur eGozola Ouedkniss travail et d'affaires autour de moi et bien plus encore. <a href="<?php echo $botUrl?>" style="clolor:black"> Télécharger l'application <strong>Cliquer ici↓↓ </strong> </a>.
   
        <div style="margin-top: 30px"></div>
		   <a href="<?php echo $botUrl?>" >
          <div style="text-align: center">
            <strong style="color: black"> Pour Obtenir toutes les Offres d'Emploi dans ton téléphone dz, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="Ouedkniss emploi alger">
          </div>
        </a>
    </div>
  </div>
      
  <div class="col-md-3" style="background-color: #2b542c;text-align: right" >
    <!--
    <div style="margin-top: 50px" >
   <img src="./assets/pub1.gif"  alt="eGoZola" >
  </div>
    <div style="background-color: red;height: 10px;width: 300px"></div>
    -->
  </div>
</div>
<div class="row" >
<footer style="background: #5e5e5e;color: white;text-align: center;font-family: Calibri">
  <div>
    <a href="policies.html" style="color: white"> Terms Of Service </a>, <a href="policies.html" style="color: white">Privacy policy</a>,
     <p></p>
  </div>
  <span style="border-top: white 1px solid">
  Powered by © eGoZola Ouedkniss</span><br>
  Email: hello@egozola.com
</footer>
</div>
</body>
</html>