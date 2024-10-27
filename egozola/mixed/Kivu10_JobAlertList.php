<?php
require_once ("./connJS.php");
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 
        $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
 if($lang!==''){ 
	 $ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (243,'Kivu10','JS',' $lang','$mob',4,'ZOLA',NOW())");
    $ps->execute();
	$botUrl="https://egozola.com/GooglePlay.php?hl=fr&apId=old";
 }
 }else{
	 $mob="Web";
	 $botUrl="https://egozola.com";
 }

	?>
<!doctype html>
<html lang="fr">
<head>
<!-- 
1M: mediacongo,
10K emploi en rdc, emploi rdc, mediacongo emploi, offre d'emploi
Mediacongo Offre d'Emploi rdc à Kinshasa, Goma, Lubumbashi |eGoZola  mediacongo.net -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kivu10.net: Offres d'Emploi <?php echo date("Y"); ?> RDC à Goma, Lubumbashi, Kinshasa |eGoZola</title>
  <meta name="description" content="✓ Postulez aux offres d'emploi, affaire et recrutement Kivu10 en RDC à Goma, Lubumbashi, Kinshasa. Trouvez un travail rapidement sur eGoZola kivu10 offre d'emploi"/>
  <meta name="keywords" content="mediacongo emploi rdc, offre d'emploi, radiookapi, kivu10"/>
   <meta property="og:title" content="✓ Emploi, Business, Vendre, Acheter ou Location des Prodtuis & Services">
  <meta property="og:description" content="eGoZola est une plateforme,un outil et un réseaux unifié de facilitation des affaires (Emploi,vente, achat, location, Service),des services et d’emplois en temps réel de manière géolocalisée✓✓">
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" href="favicon.png">
  <meta property="og:site_name" content="eGoZola"/>
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
		   <a href="<?php echo $botUrl?>" style="color: black">
 <strong style="color: black">Hey! Obtenez toutes les offres d'Emploi et d'Affaires en RDCongo dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>			
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="insd burkina Recrutement"> </a>
          </div> 
		  
    <div style="margin-left: 12px;margin-right: 12px">
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Choisissez une catégorie S'il vous plaît↓↓ </strong></div> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/JS.png"  style="width:45px;height:45px" class="img-rounded"  alt="Kivu10"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
       Offres d'Emploi & Services  </label>
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="Produit à Vendre"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Produit à Vendre</strong></label> 
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/HS.png"  style="width:45px;height:45px" class="img-rounded" alt="Maison & Appartement"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Maison & Appartement</label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/auto.png"  style="width:45px;height:45px" class="img-rounded" alt="Kivu10"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Véhicule & Moto </label> 
            </a>
          </div>
        </div>
      <div style="text-align: center"> <a href="<?php echo $botUrl?>" style="color: black"><strong>Télécharger & installer nos Outils  <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/weather.png"  style="width:45px;height:45px" class="img-rounded" alt="Consulter la Météo"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Consulter la Météo 
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="/assets/lamp.png"  style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dettes"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Gérer mes Dettes </label> 
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Kivu10.net"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Gérer mes Dépenses & Revenues</strong></label>  
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/shop.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Vente"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Gérer mes Vente & Stock</strong></label> 
            </a>
          </div>

        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/location.png"  style="width:45px;height:45px" class="img-rounded" alt="Localiser mon adrees"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Localiser mon adrees </label> 
            </a>
          </div>

        </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Google_FR_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Obtenir de l'aide</strong> <br> Email: <strong> hello@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="<?php echo $botUrl?>" >
          <div style="text-align: right">
    Pour Obtenir toutes les Offres d'emploi dans ton téléphone kivu10 offre d'emploi en RDC et bien plus encore <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
        <div style="text-align: right">
          <div class="form-group">
            <select>
              <option></option>
            </select>
          </div>
        </div> 
  <div style="text-align:center"> <h1> Kivu10 Offres d'Emploi <?php echo date("Y"); ?> et d'affaires RDC</h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Kivu10 RDC: Trouve et Cherche un Emploi ou une affaire rapidement à Kinshasa, Goma, Lubumbashi et partout en RDC. Sur eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Trouvez rapidement une offre d’affaire ou de travail sur www kivu10.net <?php echo date("Y"); ?> offres emploi avec eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Retrouvez la personne, le travail ou l'affaire qu’il vous faut ou un service à domicile sur kivu10.net offre d'emploi <?php echo date("Y"); ?> à Goma, Kinshasa et à Lubumbashi. 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Télecharger eGoZola et retrouvez des offres d'emploi et d'affaire autour de moi et bien plus encore. <a href="<?php echo $botUrl?>" style="clolor:black"> Télécharger l'application <strong>Cliquer ici↓↓ </strong> </a>.

<!--   
	<div style="text-align:center"> <h1> Site de recherche d'emploi et d'affaire sur mediacongo emploi </h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Trouvez rapidement un travail, un emploi ou une offre d’affaires à Kinshasa, Lubumbashi, Goma et partout en RDC. Sur mediacongo Emploi
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Trouvez rapidement une offre d’affaire, sur mediacongo emploi ou kivu10 à Kinshasa, Lubumbashi, Goma et partout en RDC avec eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Avec eGoZola, Retrouvez rapidement un emploi sur mediacongo ou kivu10, la personne qu’il vous faut pour faire un travail ou un service à domicile à Kinshasa, Lubumbashi,  Goma et partout en RDC. Publier gratuitement ton annonce sur eGoZola.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Publier ton annonce, publier vendez tes services et obtenez rapidement des clients, vendez tes services à Kinshasa,  Lubumbashi, Goma et partout en RDC, trouvez facilement un emploi, une affaire directement sur mediacongo avec eGoZola, un travail ou un service en quelques jours.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Application et site de rechercher d’emploi mediacongo avec kivu10, travail et affaires à Kinshasa, Lubumbashi, Goma et partout en RDC
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Site de partage et de rechercher d’emploi à partir de mediacongo emploi sur eGoZola, travail et affaires & vente privée de véhicule à Kinshasa,  Lubumbashi, Goma et partout en RDC
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Application androïde pour rechercher un emploi sur mediacongo emploi ou une affaire avec eGoZola disponnible à Kinshasa, Lubumbashi, Goma et partout en RDC 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Avez-vous besoin d’aide? Recherchez-vous un service ou un emploi?  Publier ta demande et obtenez rapidement  une réponse, un service, une offre d’affaire ou d’emploi kivu10, mediacongo à Kinshasa, Lubumbashi, Goma et partout en RDC
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Recherchez-vous rapidement un emploi sur kivu10 et mediacongo emploi ou une affaire à Kinshasa, Goma & Lubumbashi et partout en RDC? Utiliser ou  publier gratuitement  ta demande ou tes services sur eGoZola et ton veux sera exaucer.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Recherchez-vous un travail ou un emploi à Kinshasa, Lubumbashi et Goma (RDC)?  C’est facile et rapide sur eGoZola, mediacongo. Télécharger et utiliser gratuitement notre application.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Publier gratuitement tes services, tes offres d’affaires ou d’emploi sur eGoZola, Trouver facilement et rapidement un client (un partenaire) à Kinshasa, Lubumbashi, Goma et partout en RDC. 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Vendez tes services  annonce à  Kinshasa, Goma & Lubumbashi et partout en RDC. Gagnez confidentiellement ton argent et développez rapidement ton réseau d’affaire et du Bisness.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ eGoZola, le  meilleur outil d’affaires et centre de facilitations des affaires & d’emplois mediacongo et kivu10, inventaire des dépenses & revenus,  achat, location  et vente privée des produit et services à Kinshasa, Goma et Lubumbashi. Publier ton annonce gratuitement et ton vœux sera exaucer en quelques minutes. 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Recherche emploi ou travail? sur mediacongo, kivu10 ✓à Kinshasa, Goma, Lubumbashi (RDC)| Télecharger eGoZola et retrouvez des offres d'affaires et emploi sur mediacongo emploi ou kivu10 dans ton téléphone
  <br> <span class="glyphicon glyphicon-tags"> </span>✓ Postulez aux offres d'emploi sur mediacongo emploi recrutement ✓à Kinshasa, Goma, Lubumbashi (RDC) directement sur eGoZola
  <br> <span class="glyphicon glyphicon-tags"> </span>✓ Retrouvez des offres d’emploi mediacongo ou sur kivu10 à Kinshasa, Lubumbashi travail ou affaire autour de moi
       -->
	 <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> <!--{{'WALF' | translate}} -->
        <div style="text-align: center;color: darkgreen"><strong> Choisissez une catégorie S'il vous plaît↓↓ </strong></div> <!--{{'R_CAT' | translate}} {{'PLSE' | translate}} -->
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/JS.png"  style="width:45px;height:45px" class="img-rounded"  alt="Service & Affaires"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Emploi, Service & Affaires</label> <!--{{'JSH' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/7.png" style="width:45px;height:45px" class="img-rounded" alt="Produit à Vendre"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Produit à Vendre</strong></label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/HS.png"  style="width:45px;height:45px" class="img-rounded" alt="Maison & Appartement"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
             Maison & Appartement</label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/auto.png" style="width:45px;height:45px" class="img-rounded" alt="Véhicule & Moto"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Véhicule & Moto </label> 
            </a>
          </div>
        </div>
      <div style="text-align: center"> <a href="<?php echo $botUrl?>" style="color: black"><strong>Télécharger & installer nos Outils  <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/weather.png"  style="width:45px;height:45px" class="img-rounded" alt="Consulter la Météo"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Consulter la Météo
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="/assets/lamp.png"  style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dettes"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Gérer mes Dettes </label> 
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/money.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dépenses"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Gérer mes Dépenses & Revenues</strong></label>  
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/shop.png"  style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Vente"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Gérer mes Vente & Stock</strong></label> 
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/location.png"  style="width:45px;height:45px" class="img-rounded" alt="Localiser mon adrees"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Localiser mon adrees </label> 
            </a>
          </div>

        </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Google_FR_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Obtenir de l'aide</strong> <br> Email: <strong> hello@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
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

<div class="row" >
<footer style="background: #5e5e5e;color: white;text-align: center;font-family: Calibri">
  <div>
    <a href="policies.html" style="color: white"> Terms Of Service </a>, <a href="policies.html" style="color: white">Privacy policy</a>,
     <p></p>
  </div>
  <span style="border-top: white 1px solid">
  Powered by © eGoZola Kivu10</span><br>
  Email: hello@egozola.com
</footer>
</div>
</body>
</html>