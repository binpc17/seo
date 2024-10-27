<?php
require_once ("./connJS.php");
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 if($lang!==''){ 
 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (226,'burkReche','JS',' $lang','$mob',112,'Abuma',NOW())");
    $ps->execute( array());
 }
 }
	?>
	
<!doctype html>
<html lang="fr">
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
   <meta name="viewport" content="width=device-width, initial-scale=1"/>

 <title>Recherche d'emploi au burkina faso ouagadougou ou petits travaux?</title>
  <meta name="description" content="✓ Retrouvez et Postulez aux d’offres d'emploi au burkina <?php echo date("Y") ?> et recrutement à ouagadougou. Découvrez des emploi et petits travaux autour de vous partout au Burkina. Télécharger notre application mobile"/>
  <meta name="keywords" content="Cherche Emploi, Recherche d'emploi au burkina faso ouagadougou, Emploi au cameroun"/>
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <script data-ad-client="ca-pub-1612848014504606" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-color: whitesmoke">
<!-- <img src="./app/img/logo.png" width="97px" height="42px" alt="eGoZola" class="img-responsive">-->
<header>
</header>
<div  style="margin-left: 15px;background-color: #5e5e5e;width: 100%;text-align: center;color: white;font-family: Calibri">
</div>
<div style="margin-left: 15px;background-color: #5e5e5e;width: 100%;font-family: Calibri">
  <a href="https://egozola.com"> <img src="../assets/logo.PNG" style="border-radius: 7px;width:97px;height:42px" alt="eGoZola"></a>
  <span style="margin-left: 20px"></span>
  <span> <a class="btn btn-primary" href="https://egozola.com/APK/eGoZola.apk"> <span class="glyphicon glyphicon-download"></span> </a> </span>
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
    <div style="height: 5px;width: 100%"></div>
    <div style="margin-left: 20px;margin-top: 12px">
	 <div style="text-align: center">
		   <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <strong>Pour voir plus des offres d'emplois et d'affaires, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
		<img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">    </a>
          </div>
        <div style="background-color: #5e5e5e;height: 2px;width: 100%;margin-top: 10px"></div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Choisissez une catégorie S'il vous plaît↓↓ </strong> </div> 
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt="Akwajobs <?php echo date("Y") ?>"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px font-weight: normal;">
              Emploi, Service & Affaires</label> <!--{{'JSH' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="emploi jeune"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Produit à Vendre</label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/HS.png" style="width:45px;height:45px" class="img-rounded" alt="Akwajobs <?php echo date("Y") ?>"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Maison & Apartement</label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/auto.png" style="width:45px;height:45px" class="img-rounded" alt="Véhicule & Moto"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Véhicule & Moto </label> <!--{{'P_AT' | translate}} -->
            </a>
          </div>
        </div>
      <div style="text-align: center"> <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black"><strong>Télécharger & installer nos Outils  <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/weather.png" style="width:45px;height:45px" class="img-rounded" alt="emploi jeune"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-style: normal">  Consulter la Météo <!--{{'HM_WEB' | translate}} -->
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="/assets/lamp.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dettes"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-style: normal; font-weight: normal">
              Gérer mes Dettes </label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dépenses & Revenues"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
             Gérer mes Dépenses & Revenues</label>  
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/shop.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Vente & Stock"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
             Gérer mon Stock & Système POS</label> 
            </a>
          </div>
        </div>
		   <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu"style="color: black">
              <img src="./assets/search.png"  width="45px" height="45px" class="img-rounded" alt="Rechercher"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
                <strong> Rechercher </strong> </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
         
                <div class="col-xs-6">
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
              <img src="./assets/post.png"  width="45px" height="45px" class="img-rounded" alt="Publier, vendre un produit"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
                Publier, vendre un produit</label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
          </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Recherche_Google_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Service Client?</strong> <br> Email: <strong> info@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
          <div style="text-align: center">
            <strong>Pour voir plus des offres d'emplois et d'affaires, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
		
 <div style="text-align:center;margin-top: 10px"> <h1> Offre d'emploi au burkina <?php echo date("Y") ?></h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Offre d'emploi au burkina faso: Trouve et Cherche travaile, petit travaux ou un emploi rapidement à ouagadougou et partout au Burkina faso sans vous déplacer
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Trouvez rapidement une offre d’affaire ou Offre d'emploi au burkina <?php echo date("Y") ?> à ouagadougou avec l'application eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Avec eGoZola, Cherche travaile rapidement et retrouvez un travail ou Offre d'emploi au burkina faso <?php echo date("Y") ?> avec votre téléphone
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Vendez ton savoir faire, tes services ou annonce à ouagadougou et partout au burkina faso. Gagnez confidentiellement ton argent et développez rapidement ton réseau d’affaire et du Busness.
<br> <span class="glyphicon glyphicon-tags"> </span>✓ Télecharger eGoZola et retrouvez des Offres d'emploi au burkina faso <?php echo date("Y") ?> et d'affaire autour de moi et bien plus encore. <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="clolor:black"> Télécharger l'application <strong>Cliquer ici↓↓ </strong> </a>.

		<br>
		<br>
            <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
            <div style="margin-top: 10px"></div>
        <div style="margin-top: 10px"></div>
        <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
          <div style="text-align: center">
         <strong>Pour voir plus des offres d'emplois et d'affaires, téléchargez notre application gratuite </strong>  <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
	</div>
  </div>
  <div class="col-md-3">
    <!--
    <div style="margin-top: 50px" >
   <img src="./assets/pub1.gif"  alt="eGoZola" >
  </div>
    <div style="background-color: red;height: 10px;width: 300px"></div>
    -->
  </div>
</div>
<br>
<br>
<div class="row">
<footer style="background: #5e5e5e;color: white;text-align: center;font-family: Calibri">
  <div>
    <a href="https://egozola.com/policies.html" style="color: white"> Terms Of Service </a>, <a href="https://egozola.com/policies.html" style="color: white">Privacy policy</a>,
    <p></p>
  </div>
  <span style="border-top: white 1px solid">
  Powered by © eGoZola</span><br>
  Email: info@egozola.com
</footer>
  </div>
</body>
</html>