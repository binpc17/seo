<?php
require_once ("./connJS.php");
$sMsg=0;
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 if($lang!==''){ 
 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (225,'eduCa','JS',' $lang','$mob',2,'ZOLA',NOW())");
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
  <title>www.educarriere.ci offre d'emploi <?php echo date("Y"); ?> et Business en ligne à Abidjan Cote d'Ivoire</title>
  <meta name="description" content="Découvrez en ligne, postulez aux d’offres emplois et d'affaires www.educarriere.ci offre d'emploi <?php echo date("Y"); ?> autours de vous. Vendez tes services ou ton savoir et gangez confidentiellement de l'argent"/>
  <meta name="keywords" content="eGoZola Web, Mediacongo, ayeler, locanto"/>
  <meta property="og:title" content="eGoZola Web: Emploi, Business, Vente, Achat & Location des Services et Prodtuis en ligne entre particulier"/>
  <meta property="og:description" content="Découvrez, postulez aux d’offres emplois et d'affaires autours de vous. Vendez tes services ou ton savoir et gangez confidentiellement de l'argent"/>
  <meta property="og:url" content="https://web.egozola.com">
  <meta property="og:image" content="https://egozola.com/APK/cover.png">
  <meta property="og:site_name" content="eGoZola.com" />
  <link rel="icon" type="image/x-icon" href="favicon.ico">
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script></script>
   <link href="style.css" rel="stylesheet" type="text/css"/>   
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
<strong style="color: black">Hey! Obtenez toutes les offres d'Emploi et d'Affaires en Côte d'ivoire dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>			
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="insd burkina Recrutement"> </a>
          </div> 
    <div style="margin-left: 20px">
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> <!--{{'WALF' | translate}} -->
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/JS.png"  width="45px" height="45px" class="img-rounded"  alt="Emploi, Service"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
               Offres d'Emploi & Services  </label> <!--{{'JSH' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/7.png"  width="45px" height="45px" class="img-rounded" alt="Produit à Vendre"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Produit à Vendre</strong></label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/HS.png"  width="45px" height="45px" class="img-rounded" alt="Maison & Appartement"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
                Maison & Appartement</label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/auto.png"  width="45px" height="45px" class="img-rounded" alt="Véhicule & Moto"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
                Véhicule & Moto </label> <!--{{'P_AT' | translate}} -->
            </a>
          </div>
        </div>
        <div style="text-align: center"> <a href="<?php echo $botUrl?>" style="color: black"><strong>Télécharger & installer nos Outils  <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/weather.png"  width="45px" height="45px" class="img-rounded" alt="Consulter la Météo"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Consulter la Météo <!--{{'HM_WEB' | translate}} -->
              </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="/assets/lamp.png"  width="45px" height="45px" class="img-rounded"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
                Gérer mes Dettes </label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/money.png"  width="45px" height="45px" class="img-rounded" alt="mes Dépenses & Revenues"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
                Gérer mes Dépenses & Revenues </label>  <!--{{'T_EXT' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/shop.png"  width="45px" height="45px" class="img-rounded"> <br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
               Gérer mon Stock & Système POS </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/location.png"  width="45px" height="45px" class="img-rounded" alt="Offre Emploi à Ouagadougou"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
                Localiser mon adress & GPS </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
                <div class="col-xs-6">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/post.png"  width="45px" height="45px" class="img-rounded" alt="Offre Emploi à Ouagadougou"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Publier, vendre un produit</label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
        </div>
        <div style="margin-top: 30px"></div>
         <a href="https://wa.me/243999209870?text=Bonjour_Google_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span> Service Client?</strong> <br> Email: <strong style="color: darkgreen"> service@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="<?php echo $botUrl?>" >
          <div style="text-align: right">
             <strong> Pour Obtenir toutes les Offres d'Emploi et d'Affaires dans ton téléphone, téléchargez notre application gratuite</strong><strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
		  </div>
			<div style="text-align:center"> <h1> www.educarriere.ci emploi <?php echo date("Y"); ?></h1> </div> 
				<p>	</p>			

<strong>www.educarriere.ci offre d'emploi <?php echo date("Y"); ?> </strong> est une plateforme, un outil et un réseaux unifié de facilitation d'emploi ci et des affaires (vendre, acheter, louer & échanges des produits, inventaire des dépenses & revenus quotidien, gestionnaire de budget et dettes), des services et emploi en temps réel de manière géolocalisée
eGoZola est une application,un outil, un réseau de communication et de facilitation unifiée des affaires entre Employeur-Employé, Jobber-Dealer, Preneur-Vendeur, Client-Serveur, Bailleur-Locateur, Bricoleur – Dépanneur, Client-Technicien  et  bien plus encore…
<p></p>
<br> <span class="glyphicon glyphicon-ok-circle"> </span>● <strong> Outils des Affaires: </strong>
<br> ✓ 1) Partage ou retrouvez des offres emploi ci, des affaires ou services disponible le plus proche de vous sur www.educarriere.ci offre d'emploi <?php echo date("Y"); ?> 
<br> ✓2) Publier ton annonce, vendez ton savoir et tes services et gagnez de l'argent.
<br> ✓3) Faire louver ou vendre tes services ou tes produits, téléphone, ordinateur et retrouvez un rapidement un client ou un partenaire d’affaire www.educarriere.ci emploi <?php echo date("Y"); ?>
<br> ✓6) Gérer vos dépenses (dettes, boutique) sans internet
<br> ✓7) Acceder à tout les petit annonces www.educarriere.ci offre d'emploi <?php echo date("Y"); ?>, leboncoin, locanto et avito en Algérié ou en France, Abidjan ci en cote d'ivoire, Burkinafaso, en RDC Kinshasa congo et au Maroc 
<br> ✓8) Retrovez des offres emploi mediacongo, emploi ci jeune ou emploitic.
<p></p>
<br> <span class="glyphicon glyphicon-tags"></span> •Avez-vous besoins d’aider? Ou recherchez-vous quelque chose ou une personne? 
<br> <span class="glyphicon glyphicon-tags"></span> •Voulez-vous demander, vendre, offrir ou partager des offres d'emploi, petit service payant ou gratuit? 
   <p></p>      
 <strong> <span class="glyphicon glyphicon-time">  </span> C’est facile et rapide sur eGoZola </strong>      
          <div style="text-align: right">
   						<br><p></p>
			        <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
          <div style="text-align: center">
<strong style="color: black">Hey! Découvrez et Obtenez toutes les offres d'Emploi <?php echo date("Y"); ?> et des Business dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
		<br><p></p>
          </div>    
<br>
<br>		  
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
<?php 
require_once ("./footer.php");
?>
</body>
</html>
