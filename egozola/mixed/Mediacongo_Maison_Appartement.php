<?php
require_once ("./connJS.php");
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
$uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
 if($lang!==''){ 
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (243,'MediaC','HS',' $lang','$mob',1,'ZOLA',NOW())");
    $ps->execute();
	$botUrl="https://egozola.com/GooglePlay.php?hl=fr&apId=old";
 }
 }else{
	 $mob="Web";
	 $botUrl="https://egozola.com";
 }
 

	?>
<!doctype html>
<!--
 1K maison à louer à kinshasa,
1K maison à louer à kinshasa 200$, 100$, 50$ 
maison à louer kinshasa
location maison kinshasa
-->
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
 <!-- 10K maison
  1K belle maison,la maison -->
  <title>Maison à louer & location maison kinshasa, Lubumbashi, RDC |eGoZola</title>
  <meta name="description" content="✓ Publier ton annonce: location maison kinshasa ou maison à louer kinshasa, Lubumbashi, Goma? Trouvez un locateur rapidelent"/>
   <meta name="keywords" content="Location appartement, Maison à louer, Maison à vendre à Kinshasa, Lubumbashi"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta property="og:title" content="✓ Emploi, Business, Vendre, Acheter ou Location des Prodtuis & Services">
  <meta property="og:description" content="eGoZola est une plateforme,un outil et un réseaux unifié de facilitation des affaires (Emploi,vente, achat, location, Service),des services et d’emplois en temps réel de manière géolocalisée✓✓">
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="https://egozola.com/APK/cover.PNG">
  <meta property="og:site_name" content="eGoZola" />
  <link rel="icon" type="image/x-icon" href="favicon.png">
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script></script>
  <script src="https://egozola.com/callIPAPI.js"></script>
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
<body style="background-color: whitesmoke">
<!-- <img src="./app/img/logo.png" width="97px" height="42px" alt="eGoZola" class="img-responsive">-->
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
	          <div style="text-align: center">
		   <a href="<?php echo $botUrl?>" >
        <strong style="color: black">Hey! Obtenez toutes les offres d'Emploi et d'Affaires en RDCongo dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>			
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola"> </a>
          </div>
    <div style="margin-left: 20px;margin-top: 12px">
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> <!--{{'WALF' | translate}} -->
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/JS.png"  style="width:45px;height:45px" class="img-rounded"  alt="Emploi, Service & Affaires"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
               Offres d'Emploi & Services  </label>
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="Location maison et appartement à Lubumbashi, Goma"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Produit à Vendre</strong></label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/HS.png"  style="width:45px;height:45px" class="img-rounded" alt="Vente de  Maison ou appartement"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Maison & Appartement</label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/auto.png"  style="width:45px;height:45px" class="img-rounded" alt="Location Maison et appartement à Kinshasa"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Véhicule & Moto </label> <!--{{'P_AT' | translate}} -->
            </a>
          </div>
        </div>
        <div style="text-align: center"> <a href="<?php echo $botUrl?>" style="color: black"><strong>Télécharger & installer nos Outils  <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px"></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/weather.png"  style="width:45px;height:45px" class="img-rounded" alt="Maison à vendre ou à louer à Kinshasa"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Consulter la Météo <!--{{'HM_WEB' | translate}} -->
              </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="/assets/lamp.png"  style="width:45px;height:45px" class="img-rounded"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Gérer mes Dettes </label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Maison à louer à Lubumbashi"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Gérer mes Dépenses & Revenues</strong></label>  <!--{{'T_EXT' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/shop.png"  style="width:45px;height:45px" class="img-rounded"> <br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Gérer mes Vente & Stock</strong></label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/location.png"  style="width:45px;height:45px" class="img-rounded" alt="Localiser mon adrees"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Localiser mon adrees  </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Bonjour_Google_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Obtenir de l'aide</strong> <br> Email: <strong> hello@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="<?php echo $botUrl?>" >
          <div style="text-align: right">
               Pour Obtenir toutes les Offres d'emploi et d'Affaire en RDCongo dans ton téléphone, téléchargez notre application mobile gratuite <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
        <div style="text-align: right">
          <div class="form-group">
            <select>
             <option>✓ maison à louer à kinshasa 200$, 100$, 50$ en RDC</option>
               </select>
          </div>
        </div>		
		
		<div style="text-align:center"> <h1>Vente et location maison kinshasa, terrain en RDC </h1> </div> 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Site web de vente & location maison kinshasa, Lubumbashi, Goma et partout en RDC.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Recherchez-vous un locateur? Publier gratuitement ton appartement ou terrain à vendre une location maison kinshasa à faire louer eGoZaola. Faites des affires et gagner des clients et de l'argent
<br><span class="glyphicon glyphicon-tags"> </span> ✓ eGoZola, le meilleur outil et centre de facilitations des affaires, location maison kinshasa et terrain à vendre ou à louer en République Démocratique du Congo, RDC. Publier ton annonce gratuitement et ton vœux sera exaucer en quelques minutes. 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Trouvez facilement une vente privées d'appartement, une maison à louer à kinshasa 200$, 100$, 50$ ou un terrain a vendre à moins chère rapidement et facilement à Lubumbashi, Goma sur eGoZola. Télécharger et utiliser notre application gratuitement <a href="<?php echo $botUrl?>" style="clolor:black"> <strong> Cliquer ici↓↓ </strong> </a>.  

<!--
 <div style="text-align:center"> <h1> Maisons, Appartements à vendre et à louer à Kinshasa, Lubumbashi</h1> </div> 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Application et site web de location & vente de maison, appartement à Kinshasa, Lubumbashi, Goma et partout en RDC.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Trouvez rapidement un appartement, une Maison à vendre à Kinshasa, Lubumbashi, Goma et partout en RDC.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Site d’achat, location appartement & vente privée de maison à Kinshasa, Lubumbashi, Goma et  en RDC.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Trouvez facilement un appartement ou une maison à lourer à Kinshasa, Lubumbashi, Goma et en RDC.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Retrouvez rapidement un terrain ou une parcelle à faire louer ou à vendre à Kinshasa, Lubumbashi, Goma et partout en RDC.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ eGoZola le bon coin de vente privées et location de maison, appartement à Kinshasa, Lubumbashi, Goma et en RDC. 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Publier ton annonce et faire louer ta maison à Kinshasa, Lubumbashi, Goma et en RDC, trouvez facilement un locateur en quelques jours.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Recherchez-vous un appartement ou une maison à vendre ou à louer à Kinshasa, Lubumbashi et Goma (RDC)? C’est facile et rapide sur eGoZola. Télécharger et utiliser notre application gratuitement.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Publier ton annonce sur eGoZola et vendez ta maison. Obtenez un client rapidement et faire louer ta maison à Kinshasa, Lubumbashi, Goma . Retrouvez facilement un locateur en quelques jours.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Recherchez-vous rapidement un locateur? Publier gratuitement ton appartement ou ta maison à faire louer à Kinshasa, Goma & Lubumbashi et en RDC.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Publier gratuitement ta maison, ton appartement ou ton terrain (parcelle) à vendre, à faire louer à Kinshasa, Lubumbashi, Goma et partout en RDC sur eGoZola. Gagnez confidentiellement ton argent et rapidement un locateur ou un preneur.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Site web de location d'appartement, louer, vendre une maison ou un appartement à Kinshasa, Lubumbashi, Goma et en RDC. 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Location appartement ou publier ton annonce sur eGoZola et vendez ta maison. Obtenez un client rapidement, faire louer ta maison à Kinshasa, Lubumbashi, Goma ( RDC). Et retrouvez facilement un locateur en quelques jours.
<br><span class="glyphicon glyphicon-tags"> </span> ✓  eGoZola, le meilleur outil d’affaires et centre de facilitations des affaires: achat, vente privée et location d’appartement et des maisons à Kinshasa, Goma et Lubumbashi. Publier ton annonce gratuitement et ton vœux sera exaucer en quelques minutes. 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Location mason et appartement à Kinshasa,RDC Publier ton annonce. Télécharger l'application eGoZola gratuitement 
-->
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
           <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Google_FR_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Obtenir de l'aide</strong> <br> Email: <strong> hello@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
	          <div style="text-align: center">
		   <a href="<?php echo $botUrl?>" >
            <strong style="color: black">Hey! Pour Obtenir toutes les Offres d'emploi et d'Affaire en RDCongo dans ton téléphone, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>			
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola"> </a>
          </div>
		  <br>
		  <br>
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
  Powered by © eGoZola Mediacongo</span><br>
  Email: hello@egozola.com
</footer>
</div>
</body>
</html>
