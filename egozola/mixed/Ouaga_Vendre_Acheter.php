<?php
require_once ("./conn2.php");
require_once ("./connJS.php");

$lang=$_GET['level'];
if($lang>0){
      echo " <script>  </script>";
}else{
	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile")); 
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];	   
 if($uDev>0){
	 $mob="Mob";
  if($lang!==''){
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (213,'Algeria','SHOP1',' $lang','$mob',1,'ZOLA',NOW())");
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
 <title>locanto Vente privée, Acheter ou Vendre en ligne à Ouagadougou, au burkina mes produits & services |eGoZola</title>
  <meta name="description" content="✓ Publier tes produits sur locanto, acheter ou Vendre en ligne au Burkina faso, à Ouagadougou? Trouvez un Client ✓ Vente privée & Achat en ligne à Ouagadougou✓"/>
   <meta name="keywords" content="locanto Vente privée, Vendre en ligne en Algérie, Publier mes produits"/>
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

<div class="row" style="font-family: Calibri">
  <div  class="col-md-2" >
  </div>
  <div class="col-md-7" >
    <div style="height: 15px;width: 100%"></div>
   <h4 style="margin-left: 15px;margin-top: 50px">Bienvenue sur eGoZola Ouedkniss<span class="glyphicon glyphicon-hand-right"></span></h4>
    <div style="text-align: right">
      <a href="https://egozola.com/pubStab/ADD">
      <button  class="btn btn-primary" style="background-color: darkblue;color:white;border-radius: 15px" >    <span class="glyphicon glyphicon-plus"></span>Publier, vendre un produit </button></a>
    </div>
    <div style="margin-left: 20px;margin-top: 12px">
       <h4 style="color:darkgreen;text-align: center;"> <strong> Produit à vendre disponnible</strong></h4> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>     
	<?php   
$ps=$pdo->prepare("SELECT idProd,sizeV,codeName,titleProd,price,currency,town,category,status,photo1 FROM productsphn WHERE idProd>9 AND dateExp >= (select UNIX_TIMESTAMP()) ORDER BY idProd DESC LIMIT 0,10");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
//echo ">>".sizeof($liste,0);

?>

    <table  style="width:100%">
	<?php   
	/* '.$urlWS.'/'.$subjectData["idProd"].'/PT/'.$subjectData["category"].'/DSP*/
	$urlImg="https://www.egozola.com/app/eGoZola/uploadImg/PT";
	//$urlWS="https://www.egozola.com/stdView.php?id=".$subjectData["idProd"].'&cod='.$subjectData["codeName"].'&dsp=DSP';
		$urlWS=$botUrl;
	foreach ($liste as $subjectData) {
      echo '<tr style="height:115px;width: 100%" ><td> <a href="'.$urlWS.'" style="color: black">'; 
      echo '<img src='.$urlImg.'/'.$subjectData["category"].'/'.$subjectData["photo1"].' width="133px" height="112px" class="img-rounded"> </a></td>';
       echo ' <td style="width: 100%"> <p style="width: 100%" >';
            echo '<span style="float: right;color: darkgreen;"> <span class="glyphicon glyphicon-map-marker"></span> '.$subjectData["town"].'<br></span>';
        echo '<a href="'.$urlWS.'" style="color: black">';
             echo '<label style=" overflow: hidden; max-height: 40px;margin-left: 12px">'.$subjectData["titleProd"].'</label> <br>';
          echo '<span style="margin-left: 10px"><strong>'.$subjectData["price"].' '.$subjectData["currency"].'</strong> | <span class="glyphicon glyphicon-chevron-right" style="float: right;margin-right: 10px"></span> <br>';
            echo '| <span class="glyphicon glyphicon-eye-open"></span>('.$subjectData["sizeV"].')| '.$subjectData["status"].'</span> </span> </a>';
             echo '  </p><div style="display: block;height: 0px;border: 0;border-top: 1px solid #ccc;margin: 0.2em 0;width:100%"></div>  </td> </tr> ';
			   }
			   ?>
			   </table>
	  
<div style="height: 3px;border: 0;border-top: 1px;width:100%;background-color:#ccc"></div>
        <div style="margin-top: 30px"></div>
		   <a href="<?php echo $botUrl?>" >
          <div style="text-align: center">
         <strong style="color: black"> Pour  plus de listes des produits, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
          </div>
        </a>
		   <div style="margin-top: 10px"></div>
        <a href="https://wa.me/243999209870?text=Google_FR_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> Email: <strong> hello@egozola.com </strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
     
     <div style="text-align:center"> <h1>Locanto Vente privée ou acheter mes produits à Ouagadougou</h1> </div> 
 <br>  <span class="glyphicon glyphicon-tags"> </span> ✓ site web Ouedkniss d'achat & vente privée à Ouagadougou et partout au Burkina faso.
  <br> <span class="glyphicon glyphicon-tags"> </span>  ✓ Publier gratuitement ton annonce, tes produits à vendre, gagner de l'argent et trouvez un partenaire d'affaire avec eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>  ✓ Trouvez rapidement un client, un preneur pour tes services, véhicule, voiture et produits à vendre à Ouagadougou.
 <br>  <span class="glyphicon glyphicon-tags"> </span> ✓ Retrouvez des offres d’affaires, vente privée en ligne de véhicules, voiture, téléphone, ordinateur et autres produits facilement partout au Burkina faso.
 <br>   <span class="glyphicon glyphicon-tags"> </span>  ✓ eGoZola, le meilleur outil et centre de facilitations des affaires & d’emplois, location et vente privée des produit et services sur Locanto au Burkina faso. 
<br><span class="glyphicon glyphicon-tags"> </span> Télécharger et utiliser notre application gratuitement sans internet<a href="<?php echo $botUrl?>" style="clolor:black"> <strong> Cliquer ici↓↓ </strong> </a>. 
  <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
  
        <div style="margin-top: 30px"></div>
		   <a href="<?php echo $botUrl?>" >
          <div style="text-align: center">
            <strong style="color: black"> Pour Obtenir toutes les Offres d'emploi dans ton téléphone, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
          </div>
        </a>
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
 </div> 
<div class="row" >
<footer style="background: #5e5e5e;color: white;text-align: center;font-family: Calibri">
  <div>
    <a href="policies.html" style="color: white"> Terms Of Service </a>, <a href="policies.html" style="color: white">Privacy policy</a>,
     <p></p>
  </div>
  <span style="border-top: white 1px solid">
  Powered by © eGoZola Mediacongo</span><br>
  Email: hello@egozola.com
</footer>
</div>
</body>
</html>