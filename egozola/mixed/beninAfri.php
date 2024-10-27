<?php
require_once ("./conn2.php");
require_once ("./connJS.php");

$lang=$_GET['level'];
if($lang>0){
      echo " <script>  </script>";
}else{
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0]; 
 	 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
  if($lang!==''){
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (226,'AFRI','JS',' $lang','$mob',4,'ZOLA',NOW())");
    $ps->execute();
	$botUrl="https://egozola.com/GooglePlay.php?hl=fr&apId=old";
  } 
 }else{
	 $mob="Web";
	 $botUrl="https://egozola.com";
 }
   
}
	?>
	<!-- SEO
	10K: onef burkina ,>>insd burkina recrutement (recrutement insd) , emploi burkina (celuici il ya beacoup)
	1K: ayeler emploi burkina
	onef emploi burkina <?php echo date("Y"); ?>
	 
	-->
	
<!doctype html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 <title>Africare benin Recrutement <?php echo date("Y"); ?> et Offres d'emploi |eGoZola</title>
  <meta name="description" content="✓ Postulez en ligne aux d’offres d'affaires et d'emploi sur eGoZola Africare benin recrutement <?php echo date("Y"); ?> sans vous déplacer au benin et Cotonou sur ton téléphone. Télécharger l'application"/>
   <meta name="keywords" content="onef burkina, insd burkina recrutement, Africare benin Recrutement <?php echo date("Y"); ?>"/>
  <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is a platform, a tool and a unified network for business facilitation (Buy, Sell, Rent & product or service exchanges), services and jobs in real time in a geolocated manner and much more ... deals"/>
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="https://egozola.com/favicon.png">
  <meta property="og:site_name" content="eGoZola" />
  <link rel="icon" type="image/x-icon" href="favicon.png">
    <script src="bootstrap/jquery-ui.css" ></script>
	<script></script>
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 
      <!-- Notification API Only IF User FROM DRC-->
     <?php
     $targt=$_COOKIE['cntry'];
			/// For olad OneSignale has 96 subscribe 'appId: "e6d62f7e-0f96-4ca5-9662-ae0c30b36298",'  
          echo '<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>';
          echo '<script>';
          echo 'window.OneSignal = window.OneSignal || [];';
          echo 'OneSignal.push(function() {';
            echo 'OneSignal.init({';
              echo 'appId: "3cb927ef-b522-449f-a73f-652ca3c1ddf5",';
              echo '});';
              echo ' });';
              echo '</script>';
  ?>
  
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
<div class="row" style="font-family: Calibri;margin-top: 50px">
  <div  class="col-md-2" >
  </div>
  <div class="col-md-7" >
    <div style="margin-left: 20px">
       <h4 style="color:darkgreen;text-align: center;"> <strong> Africare benin Recrutement & emploi disponnible</strong></h4> 	     
          <div style="text-align: center">
		   <a href="<?php echo $botUrl?>" style="color: black">
     <strong style="color: black">Hey! Obtenez toutes les offres d'Emploi et d'Affaires au Bénin dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>			
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="insd burkina Recrutement"> </a>
          </div>   
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px"></div>      
	<?php   
		//$urlWS="https://www.egozola.com/jobService.php?type=dsp&id=".$subjectData['idJobS'];
			$urlWS=$botUrl;
$ps=$pdoJS->prepare("SELECT idJobS,sizeV,jobTitle,town,dateExp,urlJS,userN FROM jobservice  WHERE countryCD=229 AND dateExp >= (select UNIX_TIMESTAMP()) ORDER BY idJobS DESC LIMIT 0,10");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
//echo ">>".sizeof($liste,0) >>> {$subjectData['urlJS']};
           echo "<ul class='list-group'>";
       foreach ($liste as $subjectData){
            echo "<li class='list-group-item'> <a href='".$urlWS."' target='_blank' style='color: black'> <strong>".$subjectData['jobTitle']."</strong><br> <span class='glyphicon glyphicon-user'></span> ".$subjectData['userN']."| <em> Vieu(".$subjectData['sizeV'].") <span class='glyphicon glyphicon-map-marker'></span> ".$subjectData['town']."</em>";
			echo"</a> <span class='glyphicon glyphicon-menu-right' style='float: right'></span> </li>";
       }
echo "</ul>";
?>
        <div style="margin-top: 30px"></div>
		   <a href="<?php echo $botUrl?>" style="color: black">
          <div style="text-align: center">
          <strong style="color: black"> Pour Obtenir toutes les Offres d'Emploi et d'Affaires dans ton téléphones, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
         <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="www ayeler com recrutement">
          </div>
        </a>
		   <div style="margin-top: 10px"></div>
           <a href="https://wa.me/243999209870?text=Bonjour_Google_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application"> <div style="text-align: right"> Email: <strong> hello@egozola.com</strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
  
 <div style="text-align:center"> <h1>Emploi et Africare benin Recrutement <?php echo date("Y"); ?></h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Africare benin Recrutement <?php echo date("Y"); ?>: Postulez! Cherchez une offre d'emploi ou d'affaire au benin sur eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Trouvez rapidement toutes le Recrutement, une offre d’affaire ou emploi sur eGoZola Africare benin Recrutement <?php echo date("Y"); ?> à Cotonou et partout au Benin
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Cherche travaile rapidement et retrouvez un emploi sur eGoZola.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Sur Africare benin Recrutement <?php echo date("Y"); ?>: vendez tes services ou ton savoir. Gagnez confidentiellement ton argent et développez rapidement ton réseau d’affaire et du Business.
  <br> <span class="glyphicon glyphicon-tags"> </span>✓ Retrouvez la personne, le travail ou l'affaire qu’il vous faut ou un service à domicile avec Africare benin Recrutement <?php echo date("Y"); ?> dans ton téléphone. 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Télecharger eGoZola et retrouvez des offres d'emploi et Africare benin Recrutement <?php echo date("Y"); ?> autour de moi à Cotonou et bien plus encore. <a href="<?php echo $botUrl?>" style="color:black"> <strong>Télécharger l'application Cliquer ici↓↓ </strong> </a>.
       						<br><p></p>
			        <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
          <div style="text-align: center">
<strong style="color: black">Hey! Découvrez et Obtenez toutes les offres d'Emploi <?php echo date("Y"); ?> et des Business dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
		<br><p></p>
       <div style="margin-top: 30px"></div>
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

<div class="row">
<footer style="background: #5e5e5e;color: white;text-align: center;font-family: Calibri">
  <div>
    <a href="policies.html" style="color: white"> Terms Of Service </a>, <a href="policies.html" style="color: white">Privacy policy</a>,
    <p></p>
  </div>
  <span style="border-top: white 1px solid">
  Powered by © eGoZola</span><br>
  Email: hello@egozola.com
</footer>
  </div>
</body>
</html>