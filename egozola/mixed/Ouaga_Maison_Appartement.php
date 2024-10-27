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
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (213,'Algeria','HS1',' $lang','$mob',1,'ZOLA',NOW())");
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
<title> Ouedkniss Vente & Location appartement, Maison et terrain à Ouagadougou</title>  
  <meta name="description" content="Reherche un appartement, une maison à louer ou à vendre à Ouagadougou? Faire louer ta maison au Burkina Faso? Publier ta maisons gratuitement✓"/>
  <meta name="keywords" content="Ouedkniss Vente, Location appartement, Location Maison et terrain à Ouagadougou"/>
 <meta name="viewport" content="width=device-width, initial-scale=1"/> 
 <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is a platform, a tool and a unified network for business facilitation (Buy, Sell, Rent & product or service exchanges), services and jobs in real time in a geolocated manner and much more ... deals"/>
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="favicon.png">
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
<?php
if($lang>0){
      echo "<script> var timer = null; function homeData(){ window.location = 'https://www.alertjob.website/JobAlertList.php?level=10';} </script>";
      echo "<body style='background-color: whitesmoke' onload="."timer=setTimeout("."'homeData()'".",100000);>";
}else {
        echo "<body style='background-color: whitesmoke'>";
}
	?>
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
    <div style="height: 15px;width: 100%"></div>
		   <a href="<?php echo $botUrl?>" >
          <div style="text-align: center">
<strong style="color: black">Hey! Obtenez toutes les offres d'Emploi et d'Affaires au Burkina faso dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong>  <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
          </div>
        </a>
    <div style="margin-left: 20px;margin-top: 12px">
       <h4 style="color:darkgreen;text-align: center;"> <strong> Appartement & Maison disponnible</strong></h4> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>     
	<?php   
$ps=$pdo->prepare("SELECT idHouse,sizeV,type,roomSize,hsTitle,price,currency,town,commune,photo1 FROM housedb WHERE countryCD=229 AND dateExp >= (select UNIX_TIMESTAMP()) ORDER BY idHouse DESC LIMIT 0,15");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
//echo ">>".sizeof($liste,0);

?>

    <table  style="width:100%">
	<?php   
	/* '.$urlWS.'/'.$subjectData["idHouse"].'/HS/'.$subjectData["type"].'/DSP*/
	$urlImg="https://www.egozola.com/app/eGoZola/uploadImg/HS";
$urlWS=$botUrl;
	foreach ($liste as $subjectData) {
      echo '<tr style="height:115px;width: 100%" ><td>  <a href="'.$botUrl.'" style="color: black"> '; 
      echo '<img src='.$urlImg.'/'.$subjectData["type"].'/'.$subjectData["photo1"].' width="133px" height="112px" class="img-rounded"> </a></td>';
       echo ' <td style="width: 100%"> <p style="width: 100%" >';
            echo '<span style="float: right;color: darkgreen;"> <span class="glyphicon glyphicon-map-marker"></span> '.$subjectData["town"].', <em>';if($subjectData["type"]=="SEL"){echo "For sale";}else{echo "For rent";}; echo'</em> <br></span>';
        echo '<a href="'.$botUrl.'" style="color: black">';
             echo '<label style=" overflow: hidden; max-height: 40px;margin-left: 12px">'.$subjectData["hsTitle"].'</label> <br>';
          echo '<span style="margin-left: 10px"><strong>'.$subjectData["price"].' '.$subjectData["currency"].'</strong> | <span class="glyphicon glyphicon-chevron-right" style="float: right;margin-right: 10px"></span> <br>';
            echo '| <span class="glyphicon glyphicon-eye-open"></span>('.$subjectData["sizeV"].')| Room: '.$subjectData["roomSize"].'</span> </span> </a>';
             echo '  </p><div style="display: block;height: 0px;border: 0;border-top: 1px solid #ccc;margin: 0.2em 0;width:100%"></div>  </td> </tr> ';
			   }
			   ?>
			   </table>
	  
<div style="height: 3px;border: 0;border-top: 1px;width:100%;background-color:#ccc"></div>
        <div style="margin-top: 30px"></div>
		   <a href="<?php echo $botUrl?>" >
          <div style="text-align: center">
       <strong style="color: black"> Pour  voir plus d'appartments & maison, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
          </div>
        </a>
		   <div style="margin-top: 10px"></div>
     <a href="https://wa.me/243999209870?text=Bonjour_Google_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> Email: <strong> hello@egozola.com</strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
     
     <div style="text-align:center"> <h1>Ouedkniss vente et Location appartement, terrain et Maison à Ouagadougou </h1> </div> 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Site web de vente & location appartement à Ouagadougou  et partout au Burkina faso .
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Recherchez-vous un locateur? Publier gratuitement ton appartement ou terrain à vendre ou à faire louer à Ouagadougou  sur eGoZola. Faites des affires et gagner des clients et de l'argent
<br><span class="glyphicon glyphicon-tags"> </span> ✓ eGoZola, le meilleur outil et centre de facilitations des affaires sur ouedkniss location appartement Ouagadougou , des maisons et terrain à vendre ou à louer en algérie. Publier ton annonce gratuitement et ton vœux sera exaucer en quelques minutes. 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Trouvez facilement une vente privées d'appartement, une maison à louer ou un terrain a vendre à moins chère rapidement et facilement à Ouagadougou ou au Burkina faso sur eGoZola ouedkniss. Télécharger et utiliser notre application gratuitement <a href="<?php echo $botUrl?>" style="clolor:black"> <strong> Cliquer ici↓↓ </strong> </a>.  

<div style="height: 3px;border: 0;border-top: 1px;width:100%;background-color:#ccc"></div>
        <div style="margin-top: 30px"></div>
		   <a href="<?php echo $botUrl?>" >
          <div style="text-align: center">
       <strong style="color: black"> Pour  voir plus d'appartments & maison, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
          </div>
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
