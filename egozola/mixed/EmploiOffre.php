<?php
require_once ("./connJS.php");
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
 <!-- 100K emploi jeune,
  10K offre d emploi -->
 <title>Educarrière offre d emploi ci à Abidjan, Cote d’ivoire |eGoZola</title>
  <meta name="description" content="✓ Retrouvez et Postulez aux d’offres Educarrière offre d emploi et recrutement à Abidjan en Cote d’ivoire. Télécharger notre application"/>
  <meta name="keywords" content="Cherche Emploi, Educarriere ci, Educarriere.ci, Emploi jeune, Educarriere Emploi"/>
  <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is an application, a communication network and unified business tools facilitation between Employer - Employee, Jober - Dealer, Buyer - Seller, Customer - Server, Lessor - Landlord, Customer - Technician and much more ... deals"/>
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="favicon.png">
  <meta property="og:site_name" content="eGoZola" />
  <link rel="icon" type="image/x-icon" href="favicon.png">
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
    <h4 style="margin-left: 15px">Bienvenue sur Educarrière offre d emploi<span class="glyphicon glyphicon-hand-right"></span></h4>

    <div style="margin-left: 20px">
      <div style="text-align: center">
		   <a href="<?php echo $botUrl?>" >
<strong style="color: black">Hey! Obtenez toutes les offres d'Emploi et d'Affaires dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
			
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">    </a>
          </div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Choisissez une catégorie S'il vous plaît↓↓ </strong></div> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt=" Emploi, Service & Affaires"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Emploi, Service & Affaires</label> <!--{{'JSH' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="emploi jeune"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Produit à Vendre</strong></label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/HS.png" style="width:45px;height:45px" class="img-rounded" alt="educarriere ci"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Maison & Apartement</label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
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
        <a href="<?php echo $botUrl?>" >
          <div style="text-align: right">
           <strong style="color: black"> Pour Obtenir toutes les Offres d'emploi dans ton téléphones et d'affaires, téléchargez notre application gratuite </strong>  <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
 <div style="text-align:center"> <h1> Educarrière offre d emploi ci à Abidjan</h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Educarrière offre d emploi: Trouve et Cherche travaile ou un emploi rapidement à Abidjan Cote d’ivoire sans vous déplacer
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Trouvez rapidement une offre d’affaire ou Educarrière offre d emploi à Abidjan et partout en Cote d’ivoire avec eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Avec eGoZola, Cherche travaile rapidement et retrouvez un travail sur Educarrière offre d emploi avec votre téléphone
    <br> <span class="glyphicon glyphicon-tags"> </span>✓ Télecharger eGoZola et retrouvez des offres d'emploi ci et d'affaire autour de moi et bien plus encore. <a href="<?php echo $botUrl?>" style="clolor:black"> Télécharger l'application <strong>Cliquer ici↓↓ </strong> </a>.

            <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> <!--{{'WALF' | translate}} -->
        <div style="text-align: center;color: darkgreen"><strong> Choisissez une catégorie S'il vous plaît↓↓ </strong></div> <!--{{'R_CAT' | translate}} {{'PLSE' | translate}} -->
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt="Service & Affaires<"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Emploi, Service & Affaires</label> <!--{{'JSH' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="Produit à Vendre"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Produit à Vendre</strong></label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/HS.png"  style="width:45px;height:45px" class="img-rounded" alt="Maison & Apartement"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Maison & Apartement</label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
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