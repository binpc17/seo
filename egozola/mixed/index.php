<?php
require_once ("./connJS.php");
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 if($lang!==''){ 
  $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (225,'eduCa','JS',' $lang','$mob',1,'ZOLA',NOW())");
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
 <!-- 100K emploi jeune,
  10K offre d emploi -->
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
   <title>Educarriere ci: Emploi ci & Offre d'Emploi jeune recrutement à Abidjan, Cote d’ivoire |eGoZola</title>
  <meta name="description" content="✓ Postulez aux d’offres emploi jeune educarriere.ci et recrutement à Abidjan et à Yamoussoukro sur educarriere ci eGoZola"/>
  <meta name="keywords" content="Emploi ci, educarriere.ci, emploi jeune, educarriere ci emploi, travail"/>
  <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is an application, a communication network and unified business tools facilitation between Employer - Employee, Jober - Dealer, Buyer - Seller, Customer - Server, Lessor - Landlord, Customer - Technician and much more ... deals"/>
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="favicon.png">
  <meta property="og:site_name" content="eGoZola" />
  <link rel="icon" type="image/x-icon" href="favicon.png">
    <script src="bootstrap/jquery-ui.css" ></script>
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script></script>
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
    <h4 style="margin-left:15px">Bienvenue sur eGoZola Educarriere ci<span class="glyphicon glyphicon-hand-right"></span></h4>
	      <div style="text-align: center">
		   <a href="<?php echo $botUrl?>" >
<strong style="color: black">Hey! Obtenez toutes les offres d'Emploi et d'Affaires en Côte d'ivoire dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong>
			<strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
		<img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">    </a>
          </div>	
    <div style="margin-left: 20px;margin-top: 12px">
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt=" Emploi, Service & Affaires"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
             Offres d'Emploi & Services  </label>
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="emploi jeune"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Produit à Vendre</strong></label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/HS.png" style="width:45px;height:45px" class="img-rounded" alt="educarriere ci"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Maison & Apartement</label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/auto.png" style="width:45px;height:45px" class="img-rounded" alt="emploi jeune"><br>
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
            <img src="./assets/weather.png" style="width:45px;height:45px" class="img-rounded" alt="emploi jeune"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Consulter la Météo <!--{{'HM_WEB' | translate}} -->
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="/assets/lamp.png" style="width:45px;height:45px" class="img-rounded" alt="educarriere.ci"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Gérer mes Dettes </label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="educarriere.ci"><br>
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
            <img src="./assets/location.png"  style="width:45px;height:45px" class="img-rounded" alt=" Localiser mon adrees"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Localiser mon adrees  </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Google_FR_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Obtenir de l'aide</strong> <br> Email: <strong> hello@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
	          <div style="text-align: center">
		   <a href="<?php echo $botUrl?>" >
            <strong style="color: black"> Pour Obtenir toutes les Offres d'emploi et d'Affaire dans ton téléphone, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>			
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola"> </a>
          </div>
        <div style="text-align: right">
          <div class="form-group">
            <select>
              <option>eGoZola</option>
              </select>
          </div>
        </div>
  

 <div style="text-align:center"> <h1> Educarriere ci: Affaire et Emploi jeune à Abidjan</h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Educarriere ci: recrutement et Cherche travaile ou un emploi ci rapidement à Abidjan, Alger, Oran, Constantine et partout en Algérie. Sur eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Trouvez rapidement une offre d’affaire ou d'Emploi jeune à Abidjan, Yamoussoukro et partout en Cote d’ivoire avec eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Avec eGoZola, Cherche travaile rapidement et retrouvez un emploi jeune sur Educarriere ci recrutement
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Vendez tes services ou ton savoir à Yamoussoukro, Cote d'ivoire. Gagnez confidentiellement ton argent et développez rapidement ton réseau d’affaire et du Bisness.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Publier ton annonce, vendez ton savoir et tes services et gagnez de l'argent. Retrouvez des partenaires d'affaire avec l'application eGoZola
  <br> <span class="glyphicon glyphicon-tags"> </span>✓ Retrouvez la personne, le travail ou l'affaire qu’il vous faut ou un service à domicile sur Educarriere.ci à Abidjan, Yamoussoukro. 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Télecharger eGoZola et retrouvez des offres d'emploi ci recrutement et des affaires autour de moi et bien plus encore. <a href="<?php echo $botUrl?>" style="clolor:black"> Télécharger l'application <strong>Cliquer ici↓↓ </strong> </a>.

                                            <h1> POURQUOI UTILISER eGoZola Educarriere emploi: </h1>

● <strong> OUTILS DES AFFAIRES: </strong> <br>

<br> <span class="glyphicon glyphicon-tags"> </span> 1) Partage ou retrouvez des offres emploi ci, des affaires ou services disponible le plus proche de vous
<br> <span class="glyphicon glyphicon-tags"> </span> 2) Publier ton annonce, vendez ton savoir et tes services et gagnez de l'argent.
<br> <span class="glyphicon glyphicon-tags"> </span> 3) Faire louver ou vendre tes services ou tes produits, téléphone, ordinateur et retrouvez un rapidement un client ou un partenaire d’affaire
<br> <span class="glyphicon glyphicon-tags"> </span> 2) Chercher ou faire louer un véhicule, une maison, un studio ou appartement à louer
<br> <span class="glyphicon glyphicon-tags"> </span> 4) Publier des produits immobilier, studio à louer ou une vente de voiture occasion
<br> <span class="glyphicon glyphicon-tags"> </span> 5) Faire louer ton appartement meublé, location voiture ou location maison
<br> <span class="glyphicon glyphicon-tags"> </span> 6) Localiser mon adresse, consulter la météo et meteociel ou la prevision météo demain
<br> <span class="glyphicon glyphicon-tags"> </span> 7) Gérer vos dépenses (dettes, boutique) sans internet
<br> <span class="glyphicon glyphicon-tags"> </span> 8) Acceder à tout les petit annonces ouedkniss app, leboncoin, locanto et avito en Algérié ou en France, Abidjan ci en cote d'ivoire, Bourkinafaso, en RDC Kinshasa congo et au Maroc 
<br> <span class="glyphicon glyphicon-tags"> </span> 9) Retrovez des offres educarriere emploi ci jeune et postules rapidement ou emploitic et menara dream job

<br> <strong> •Avez-vous besoins d’aider? Ou recherchez-vous quelque chose ou une personne? </strong> 
<br> <strong> •Voulez-vous demander, vendre, offrir ou partager des offres d'emploi, petit service payant ou gratuit?</strong> 
         
<br> C’est facile et rapide sur eGoZola Educarriere

<br> <span class="glyphicon glyphicon-tags"> </span> <strong>• NOTIFICATION: </strong> 
<br> Personnaliser vos notifications découvrez les dernier articles, affaires, emploi, dream jobs alert, services, produits, voiture, maison ou appartement à vendre ( vente ) ou à louer et publications de vos comptes officiels favoris

<br> <span class="glyphicon glyphicon-tags"> </span> <strong>• MESSAGE: </strong> 
Discuter en privée avec un vendeur, un client

<br> <span class="glyphicon glyphicon-tags"> </span> <strong>• Météo SANS INTERNET: </strong> 
eGoZola Educarriere sauvegarde automatiquement la météo pour vous, consultez la météo pour 15 jours

<br> <span class="glyphicon glyphicon-tags"> </span> <strong>• PRODUITS, SERVICES, MAISON, VEHICULE SANS INTERNET: </strong> 
<br> Enregistrez dans votre téléphone avito ou locanto, vos produits à vendre, en vente ou affaire & educarriere emploi préferés sans internet

<br> <span class="glyphicon glyphicon-tags"> </span> <strong>• RECHERCHE: </strong> 
<br> Grâce à notre filtre ouedkniss leboncoin simplifié et optimisé

<br> <span class="glyphicon glyphicon-tags"> </span> <strong>• CARTE: </strong> 
<br> GPS, vision par satellite en temps réel, localiser mon adresse, ma maison ou appartement, voiture, offres d'emploi et affaires

<br> <span class="glyphicon glyphicon-tags"> </span> <strong>• AUTRES: </strong> 
<br> rétrouvez tout avec eGoZola Educarriere de la vente privée ouedkniss et avito à locanto, d'educarriere emploi, senjob ou dream menara job, malibaara, malipages, akwajobs à leboncoin immobilier et emploi sur mediacongo, emploitic & kivu10 et en bonus un gestionnaire des dépenses et de budget quotidien

<br> <span class="glyphicon glyphicon-tags"> </span> • Retrouvez ou créer rapidement une boutique en ligne, développez vos location & vente privée des produits, maison, voiture ou appartement et meuble à vendre ou à louer mediacongo et l'inventaire de dépenses

<br> <span class="glyphicon glyphicon-tags"> </span> • Gérer mon Budget, mes facture et ma boutique gratuitement, POS de stock, inventaire de dette et dépenses. Générer automatiquement vos facture proforma et facture gratuite, inventaire des dépenses & revenus quotidien, inventaire de vente & stock. Gestionnaire de dépsense et inventaire budget du quotidien, maison et voiture à vendre ou à louer

<br> <span class="glyphicon glyphicon-tags"> </span> <strong>• ET PLUS: </strong> 
<br>  Accéder à tous vos application, ouedkniss, locanto, avito ou leboncoin sur mediacongo météo et partout à travers le monde et sur votre ordinateur!
<br> <span class="glyphicon glyphicon-tags"> </span> • Application gestionnaire des dépenses & Budget quotidien, facture proforma gratuit et locanto educarriere dream menara job sous leboncoin
<br> 
eGoZola Educarriere est disponnible en GPS emploitic, en France, RDC, Kinshasa, Congo, Algérié, au Maroc, à Abidjan, Cameroun au Burkina Faso et en cote d'ivoire
 <div style="margin-top: 30px"></div>
<br> <strong>Sythèses:</strong> 
<br> <span class="glyphicon glyphicon-tags"> </span> ✓ Trouvez rapidement un travail, un emploi ci, educarriere ci ou une offre d’affaires à Abidjan, Cote d'ivoire.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Découvrez rapidement une offre d’affaire, emploi jeune, emploi ci ou educarriere ci et de services à Abidjan, Yamoussoukro, Cote d'ivoire.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Retrouvez rapidement la personne qu’il vous faut pour faire un travail ou un service à domicile à Abidjan, Yamoussoukro, Cote d'ivoire. Publier gratuitement ton annonce sur eGoZola.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Publier ton annonce, publier tes services et obtenez rapidement des clients, vendez tes services à Abidjan, Yamoussoukro, Cote d'ivoire. Trouvez facilement une educarriere.ci emploi ou un service en quelques minutes.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Application de rechercher d’emploi jeune educarriere ci, travail et affaires à Abidjan, Yamoussoukro, Cote d'ivoire.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Site de partage et de rechercher d’emploi ci,educarriere.ci et emploi jeune, travail et affaires & vente privée de véhicule à Abidjan, Yamoussoukro, Cote d'ivoire.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Retrouvez des offres d'emploi educarriere ci, emploi jeune dans votre téléphone Télécharger gratuitement l'application eGoZola. 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Avez-vous besoin d’aide? Recherchez-vous un service ou un emploi ci, emploi jeune?  Publier ta demande et obtenez rapidement  une réponse, une offre d’affaire ou une educarriere.ci emploi à Abidjan, Yamoussoukro, Cote d'ivoire.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Recherchez-vous un emploi educarriere.ci ou une affaire à Abidjan, Yamoussoukro, Cote d'ivoire?  Publier gratuitement ta demande ou tes services sur eGoZola et ton veux sera exaucer.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Recherchez-vous un travail ou un emploi ci ou educarriere ci à Abidjan, Yamoussoukro, Cote d'ivoire? C’est facile et rapide sur eGoZola. Télécharger et utiliser gratuitement notre application.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Publier gratuitement tes services, tes offres d’affaires ou d’emploi sur eGoZola, Trouver facilement et rapidement un client (un partenaire) à Abidjan, Yamoussoukro, Cote d'ivoire. 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Vendez tes services annonce à Abidjan, Yamoussoukro, Cote d'ivoire. Gagnez confidentiellement ton argent et  développez rapidement ton réseau d’affaire et du Bisness (emploi educarriere.ci, emploi jeune, emploi ci ).
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ eGoZola, le meilleur outil d’affaires et centre de facilitations des affaires & d’emploi educarriere ci, emploi jeune et emploi ci, location  et vente privée des produit et services à Abidjan, Yamoussoukro, Cote d'ivoire, publier ton annonce gratuitement. 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Recherche emploi ci ou travail educarriere ci, emploi jeune à Abidjan, Yamoussoukro, Cote d'ivoire |eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Postulez aux offres d'emploi educarriere ci ou educarriere.ci à Adbidjan, Cote d'ivoire. Télécharger eGoZola
  <br> <span class="glyphicon glyphicon-tags"> </span>✓ Découvrez des emploi educarriere ci emploi jeune à Abidjan, Yamoussoukro, Cote d'ivoire directement sur eGoZola
  <br> <span class="glyphicon glyphicon-tags"> </span>✓ Retrouvez des offres d’emploi ci sur educarriere.ci, emploi jeune dans ton téléphone.

            <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> <!--{{'WALF' | translate}} -->
        <div style="text-align: center;color: darkgreen"><strong> Choisissez une catégorie S'il vous plaît↓↓ </strong></div> <!--{{'R_CAT' | translate}} {{'PLSE' | translate}} -->
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt="Service & Affaires<"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Emploi, Service & Affaires</label> <!--{{'JSH' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="Produit à Vendre"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Produit à Vendre</strong></label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/HS.png"  style="width:45px;height:45px" class="img-rounded" alt="Maison & Apartement"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Maison & Apartement</label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/auto.png" style="width:45px;height:45px" class="img-rounded" alt="Véhicule & Moto"><br>
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
            <img src="./assets/weather.png" style="width:45px;height:45px" class="img-rounded" alt="Consulter la Météo"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Consulter la Météo 
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="/assets/lamp.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dettes"><br>
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
            <img src="./assets/shop.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Vente"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Gérer mes Vente & Stock</strong></label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/location.png" style="width:45px;height:45px" class="img-rounded" alt="Localiser mon adrees"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Localiser mon adrees  </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Google_FR_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Obtenir de l'aide</strong> <br> Email: <strong> hello@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="<?php echo $botUrl?>" >
          <div style="text-align: right">
                <strong style="color: black"> Pour Obtenir toutes les Offres d'emploi dans ton téléphones et autres opportunités d'affaires, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
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
