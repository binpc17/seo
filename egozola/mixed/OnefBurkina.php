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
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (226,'eduCa','JS',' $lang','$mob',2,'ZOLA',NOW())");
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
	onef emploi burkina 2021
	-->
	
<!doctype html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Onef burkina offre d'emploi 2021 & Recrutement en ligne |eGoZola</title>
  <meta name="description" content="✓ Postulez en ligne aux offres emploi sur Onef burkina offre d'emploi 2021 et recrutement sans vous déplacer à Ouagadougou sur ton téléphone"/>
   <meta name="keywords" content="onef burkina, insd burkina recrutement, recrutement insd"/>
  <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is a platform, a tool and a unified network for business facilitation (Buy, Sell, Rent & product or service exchanges), services and jobs in real time in a geolocated manner and much more ... deals"/>
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="https://egozola.com/favicon.png">
  <meta property="og:site_name" content="eGoZola" />
  <link rel="icon" type="image/x-icon" href="favicon.png">
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script></script>
  <script src="https://egozola.com/callIPAPI.js"></script>
     <!-- Notification API Only IF User FROM DRC-->
     <?php
     $targt=$_COOKIE['cntry'];
      if($targt!=null){
      $country=explode('/',$targt)[0];
       if ($country =='226'){
          echo '<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>';
          echo '<script>';
          echo 'window.OneSignal = window.OneSignal || [];';
          echo 'OneSignal.push(function() {';
            echo 'OneSignal.init({';
              echo 'appId: "3cb927ef-b522-449f-a73f-652ca3c1ddf5",';
              echo '});';
              echo ' });';
              echo '</script>';
          //echo $country."<<<>>>".$targt;
                  
        } 
      }
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
	          <div style="text-align: center">
		   <a href="<?php echo $botUrl?>" >
<strong style="color: black">Hey! Obtenez toutes les offres d'Emploi et d'Affaires au Burkina faso dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>			
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola"> </a>
          </div>		  
       <h4 style="color:darkgreen;text-align: center;"> <strong> Offres d'Emploi <?php echo date("Y"); ?> & Services disponnible</strong></h4> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>	   
	<?php   
		//$urlWS="https://www.egozola.com/jobService.php?type=dsp&id=".$subjectData['idJobS'];
		$urlWS=$botUrl;
$ps=$pdoJS->prepare("SELECT idJobS,sizeV,jobTitle,town,dateExp,urlJS,userN FROM jobservice  WHERE countryCD=226 AND dateExp >= (select UNIX_TIMESTAMP()) ORDER BY idJobS DESC LIMIT 0,10");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
//echo ">>".sizeof($liste,0) >>> {$subjectData['urlJS']};
           echo "<ul class='list-group'>";
       foreach ($liste as $subjectData){
            echo "<li class='list-group-item'> <a href='".$urlWS."' style='color: black'> <strong>".$subjectData['jobTitle']."</strong><br> <span class='glyphicon glyphicon-user'></span> ".$subjectData['userN']."| <em> Vieu(".$subjectData['sizeV'].") <span class='glyphicon glyphicon-map-marker'></span> ".$subjectData['town']."</em>";
			echo"</a> <span class='glyphicon glyphicon-menu-right' style='float: right'></span> </li>";
       }
echo "</ul>";
?>
        <div style="margin-top: 30px"></div>
		   <a href="<?php echo $botUrl?>" >
          <div style="text-align: center">
          <strong style="color: black"> Pour Obtenir toutes les Offres d'emploi dans ton téléphone, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
         <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="Onef burkina offre d'emploi">
          </div>
        </a>
		   <div style="margin-top: 10px"></div>
            <a href="https://wa.me/243999209870?text=Bonjour_Google_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application"> <div style="text-align: right"> Email: <strong> hello@egozola.com</strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
  
 <div style="text-align:center"> <h1> Onef burkina offre d'emploi 2021</h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Onef burkina offre d'emploi 2021: Postulez! ou Cherchez un travail rapidement et facilement à Ouagadougou sur eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Trouvez rapidement une onef burkina offre d'emploi 2021 ou d’affaire en ligne sans vous déplacer.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Cherche travaile rapidement et retrouvez un emploi sur eGoZola.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Onef burkina offre d'emploi et recrutement: vendez tes services ou ton savoir. Gagnez confidentiellement ton argent et développez rapidement ton réseau d’affaire et du Business.
  <br> <span class="glyphicon glyphicon-tags"> </span>✓ Retrouvez la personne, le travail ou l'affaire qu’il vous faut ou un service à domicile sur eGoZola Onef burkina offre d'emploi. 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Télecharger eGoZola et retrouvez des offres d'emploi et recrutement en 2021 autour de moi à Ouagadougou et bien plus encore. <a href="<?php echo $botUrl?>" style="clolor:black"> Télécharger l'application <strong>Cliquer ici↓↓ </strong> </a>.
    
       <div style="margin-top: 30px"></div>
   						<br><p></p>
			        <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
          <div style="text-align: center">
<strong style="color: black">Hey! Découvrez et Obtenez toutes les offres d'Emploi <?php echo date("Y"); ?> et des Business dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
		<br><p></p>
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
  Powered by © eGoZola Educarriere </span><br>
  Email: hello@egozola.com
</footer>
  </div>
</body>
</html>