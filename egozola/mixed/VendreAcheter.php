<?php
require_once ("./connJS.php");
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 if($lang!==''){ 
   $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (225,'eduCa','SEL',' $lang','$mob',1,'ZOLA',NOW())");
    $ps->execute();
	$botUrl="https://egozola.com/GooglePlay.php?hl=fr&apId=old";
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
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Locanto ci: Vente privée, Acheter ou Vendre en ligne à Abidjan, Yamoussoukro |eGoZola</title>
  <meta name="description" content="✓ Publier ton annonce: acheter ou Vendre en ligne tes produits à Abidjan, Yamoussoukro sur eGoZola Locanto ci. Trouvez un Client rapidement. Télécherger l’application gratuitement"/>
   <meta name="keywords" content="Vente privée, Locanto ci, Vendre en ligne à Abidjan,"/>
 <meta property="og:title" content="✓ Emploi, Business, Vendre, Acheter ou Location des Prodtuis & Services">
  <meta property="og:description" content="eGoZola est une plateforme,un outil et un réseaux unifié de facilitation des affaires (Emploi,vente, achat, location, Service),des services et d’emplois en temps réel de manière géolocalisée✓✓">
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="favicon.png">
  <meta property="og:site_name" content="eGoZola" />
  <link rel="icon" type="image/x-icon" href="favicon.png">
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script></script>

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

<div class="row" style="font-family: Calibri">
  <div  class="col-md-2" >
  </div>
  <div class="col-md-7" >
    <h4 style="margin-left: 15px;margin-top: 50px">Bienvenue sur eGoZola Locanto ci<span class="glyphicon glyphicon-hand-right"></span></h4>
    <div style="margin-left: 20px;margin-top: 12px">		   
          <div style="text-align: center">
		  <a href="<?php echo $botUrl?>" >
         <strong style="color: black"> Hey! Obtenez plus des produits et autres opportunités d'affaires, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="Locanto ci">
			   </a>
          </div>     
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/JS.png"  style="width:45px;height:45px" class="img-rounded"  alt="Service & Affaires"><br>
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
            <a href="carList.php?level=10" style="color: black">
              <img src="./assets/auto.png"  style="width:45px;height:45px" class="img-rounded" alt="Véhicule & Moto"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Véhicule & Moto </label> <!--{{'P_AT' | translate}} -->
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
              <img src="/assets/lamp.png"  style="width:45px;height:45px" class="img-rounded" alt="Locanto ci"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Gérer mes Dettes </label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Locanto ci Vente privée à Abidjan"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Gérer mes Dépenses & Revenues</strong></label>  <!--{{'T_EXT' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/shop.png"  style="width:45px;height:45px" class="img-rounded" alt="Locanto ci Vente privée à Abidjan"> <br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Gérer mes Vente & Stock</strong></label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/location.png"  style="width:45px;height:45px" class="img-rounded" alt="Publier mon annonce en à Abidjan & Yamoussoukro"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
               Localiser mon adrees </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Bonjour_Google_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Obtenir de l'aide</strong> <br> Email: <strong> hello@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="<?php echo $botUrl?>" >
          <div style="text-align: right">
               <strong style="color: black"> Pour  voir plus des produits et autres opportunités d'affaires, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
        <div style="text-align: right">
          <div class="form-group">
            <select>
              <option> eGoZola</option>
            </select>
          </div>
        </div>

	<div style="text-align:center"> <h1>Locanto ci Vente privée ou acheter mes produits à Abidjan, Yamoussoukro</h1> </div> 
 <br>  <span class="glyphicon glyphicon-tags"> </span> ✓ site web Locanto ci d'achat & vente privée à Abidjan, Yamoussoukro et partout en Cote d'ivoire.
  <br> <span class="glyphicon glyphicon-tags"> </span>  ✓ Publier gratuitement ton annonce, tes produits à vendre, gagner de l'argent et trouvez un partenaire d'affaire avec eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>  ✓ Sur Locanto ci, trouvez rapidement un client, un preneur pour tes services, véhicule, voiture et produits à Abidjan, Yamoussoukro.
 <br>  <span class="glyphicon glyphicon-tags"> </span> ✓ Retrouvez des offres d’affaires, vente privée en ligne de véhicules, voiture, téléphone, ordinateur et autres produits facilement partout en Cote d'ivoire.
 <br>   <span class="glyphicon glyphicon-tags"> </span>  ✓ eGoZola Locanto, le meilleur outil et centre de facilitations des affaires & d’emplois, location et vente privée des produit et services sur Locanto ci à Abidjan. 
<br><span class="glyphicon glyphicon-tags"> </span> Télécharger et utiliser notre application gratuitement sans internet <a href="<?php echo $botUrl?>" style="clolor:black"> <strong> Cliquer ici↓↓ </strong> </a>. 
<br><br> 

  <div style="text-align:center;margin-top: 10px"> <h1> Vendre en ligne ou acheter mes produits à Abidjan, Yamoussoukro</h1> </div> 
 <br>  <span class="glyphicon glyphicon-tags"> </span> ✓ site web Locanto ci d'achat & vente privée à Abidjan, Yamoussoukro et en Cote d'ivoire.
 <br> <span class="glyphicon glyphicon-tags"> </span>  ✓ Trouvez rapidement un client, un preneur pour tes services, véhicule, voiture et produits à Abidjan, Yamoussoukro et partout en Cote d'ivoire.
 <br>  <span class="glyphicon glyphicon-tags"> </span> ✓ Trouvez rapidement des offres d’affaires, vente privée en ligne de véhicules, voiture, téléphone, ordinateur et autres produits  facilement, acheter ou vendre à Abidjan, Yamoussoukro et partout en Cote d'ivoire.
 <br>  <span class="glyphicon glyphicon-tags"> </span> ✓ Retrouvez rapidement un client, un preneur qu’il vous faut pour tes services, produits à vendre enligne à Abidjan, Yamoussoukro et en Cote d'ivoire. Publier gratuitement ton annonce sur eGoZola.
 <br>  <span class="glyphicon glyphicon-tags"> </span>  ✓ Site d’achat, location & vente en ligne privée à Abidjan, Yamoussoukro et partout en Cote d'ivoire.
 <br> <span class="glyphicon glyphicon-tags"> </span>  ✓ Publier ton annonce, publier  tes produits à vendre et obtenez rapidement des clients en quelques minutes, vendre des produits à Abidjan, Yamoussoukro
 <br>  <span class="glyphicon glyphicon-tags"> </span>  ✓ Locanto ci Vente en ligne et vente privée à Abidjan, Yamoussoukro et partout en Cote d'ivoire. Publier ton annonce gratuitement.
 <br>  <span class="glyphicon glyphicon-tags"> </span> ✓ Avez-vous besoin d’un client ou d’un preneur? Publier ta demande et tes produits sur eGoZola. Location et vente privée en ligne à Abidjan, Yamoussoukro et partout en Cote d'ivoire. 
 <br>  <span class="glyphicon glyphicon-tags"> </span> ✓ eGoZola le bon coin de vente privée, vente en ligne et des affaires à Abidjan, Yamoussoukro. 
 <br>  <span class="glyphicon glyphicon-tags"> </span>  ✓ Logicielle et Application androïde pour louer ou vendre des produits à Abidjan, Yamoussoukro et partout en Cote d'ivoire. 
 <br>  <span class="glyphicon glyphicon-tags"> </span>  ✓ Recherchez-vous rapidement un produit, un téléphone ou un ordinateur à vendre à Abidjan & Yamoussoukro? 
 <br>   <span class="glyphicon glyphicon-tags"> </span> ✓  Utiliser, vendre en ligne ou publier gratuitement des produit ou ton annonce à Abidjan & Yamoussoukro 
 <br>   <span class="glyphicon glyphicon-tags"> </span> ✓ Site de location et vente privée en ligne  à Abidjan, Yamoussoukro et partout en Cote d'ivoire.
 <br>   <span class="glyphicon glyphicon-tags"> </span> ✓ Locanto ci publier gratuitement tes services, tes offres d’affaires et vendez tes produit sur eGoZola, Trouver rapidement un un partenaire à Abidjan, Yamoussoukro et partout en Cote d'ivoire.
 <br>   <span class="glyphicon glyphicon-tags"> </span> ✓ Vendez en ligne tes produits et service annonce à Abidjan & Yamoussoukro et partout en Cote d'ivoire. Gagnez confidentiellement ton argent et  développez rapidement  ton réseau d’affaire et du Bisness.
 <br>   <span class="glyphicon glyphicon-tags"> </span>  ✓ eGoZola Locanto ci , le meilleur outil d’affaires et centre de facilitations des affaires & d’emplois, inventaire des dépenses & revenus, achat, location  et vente privée des produit et services à Abidjan et Yamoussoukro. Publier ton annonce gratuitement  et ton vœux sera exaucer en quelques minutes. 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ vente privée en ligne à Abidjan, Publier ton annonce. Télécharger l'application eGoZola gratuitement 

 
 <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Choisissez une catégorie S'il vous plaît↓↓ </strong></div> 
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/JS.png"  style="width:45px;height:45px" class="img-rounded"  alt="Emploi, Service"><br>
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
                Maison & Appartement </label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="carList.php?level=10" style="color: black">
              <img src="./assets/auto.png"  style="width:45px;height:45px" class="img-rounded" alt="Véhicule & Moto"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Véhicule & Moto </label> 
            </a>
          </div>
        </div>
        <div style="text-align: center"> <a href="<?php echo $botUrl?>" style="color: black"><strong>Télécharger & installer nos Outils  <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black" >
              <img src="./assets/weather.png"  style="width:45px;height:45px" class="img-rounded" alt="Consulter la Météo"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Consulter la Météo 
              </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="/assets/lamp.png"  style="width:45px;height:45px" class="img-rounded" class="img-rounded" alt="Gérer mes Dettes"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Gérer mes Dettes </label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dépenses"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Gérer mes Dépenses & Revenues</strong></label>  <!--{{'T_EXT' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/shop.png"  style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Vente"> <br>
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
                Localiser mon adrees </label> <!--{{'S_SMG' | translate}} -->
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

<div class="row">
<footer style="background: #5e5e5e;color: white;text-align: center;font-family: Calibri">
  <div>
    <a href="policies.html" style="color: white"> Terms Of Service </a>, <a href="policies.html" style="color: white">Privacy policy</a>,
    <p></p>
  </div>
  <span style="border-top: white 1px solid">
  Powered by © eGoZola Locanto</span><br>
  Email: hello@egozola.com
</footer>
  </div>
</body>
</html>
