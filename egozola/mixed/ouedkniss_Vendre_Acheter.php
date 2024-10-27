<?php
require_once ("./connJS.php");
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
     $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
 if($lang!==''){ 
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (213,'Algeria','SHOP',' $lang','$mob',1,'ZOLA',NOW())");
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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
  <title>Ouedkniss Vente privée, Acheter ou Vendre en ligne en Algérie, Alger, Oran mes produits & services ✓|eGoZola</title>
  <meta name="description" content="✓ Publier tes produits sur Ouedkniss, acheter ou Vendre en ligne en Algérie, Alger, Oran, Constantine? Trouvez un Client ✓ Vente privée & Achat en ligne à en Algérie, Alger, Oran, Constantine ✓"/>
   <meta name="keywords" content="Ouedkniss Vente privée, Vendre en ligne en Algérie, Publier mes produits"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
 <meta property="og:title" content="✓ Emploi, Business, Vendre, Acheter ou Location des Prodtuis & Services">
  <meta property="og:description" content="eGoZola est une plateforme,un outil et un réseaux unifié de facilitation des affaires (Emploi,vente, achat, location, Service),des services et d’emplois en temps réel de manière géolocalisée✓✓">
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="https://egozola.com/APK/cover.PNG">
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
       <div style="text-align: right">
      <a href="https://egozola.com/pubStab/ADD">
        <button  class="btn btn-primary" style="background-color: darkblue;color:white;border-radius: 15px" >    <span class="glyphicon glyphicon-plus"></span>Publier, vendre un produit </button></a>
    </div>
    <div style="margin-left: 20px;margin-top: 12px">
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/JS.png"  style="width:45px;height:45px" class="img-rounded"  alt="Achat, vente privée en ligne à Alger"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Offres d'Emploi & Services</label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="Acheter & vendre en ligne en Algérie"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Produit à Vendre</strong></label> 
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/HS.png"  style="width:45px;height:45px" class="img-rounded" alt="Acheter & Vendre en ligne à Alger, Constantine, Oran"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Maison & Appartement</label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/auto.png"  style="width:45px;height:45px" class="img-rounded" alt="Vendre en ligne & petit annonce à Alger, Oran"><br>
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
              <img src="./assets/weather.png"  style="width:45px;height:45px" class="img-rounded" alt="Vente en ligne à Alger & Oran"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Consulter la Météo <!--{{'HM_WEB' | translate}} -->
              </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="/assets/lamp.png"  style="width:45px;height:45px" class="img-rounded" alt="vente en ligne à Alger">><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Gérer mes Dettes </label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Vente privée et vente en ligne à Alger"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Gérer mes Dépenses & Revenues</strong></label>  <!--{{'T_EXT' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/shop.png"  style="width:45px;height:45px" class="img-rounded" alt="Vente privée et vente en ligne à Alger">> <br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Gérer mes Vente & Stock</strong></label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/location.png"  style="width:45px;height:45px" class="img-rounded" alt="Publier mon annonce en à Alger, Constantine & Oran"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
               Localiser mon adrees </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Google_FR_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Obtenir de l'aide</strong> <br> Email: <strong> hello@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="<?php echo $botUrl?>" >
          <div style="text-align: right">
               Télécharger notre application mobile gratuite <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
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
  <div style="text-align:center"> <h1>Ouedkniss Vente privée ou acheter mes produits à Alger, Oran</h1> </div> 
 <br>  <span class="glyphicon glyphicon-tags"> </span> ✓ site web Ouedkniss d'achat & vente privée à Alger, Oran, Constantine et partout en Algérie.
  <br> <span class="glyphicon glyphicon-tags"> </span>  ✓ Publier gratuitement ton annonce, tes produits à vendre, gagner de l'argent et trouvez un partenaire d'affaire avec eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>  ✓ Trouvez rapidement un client, un preneur pour tes services, véhicule, voiture et produits à vendre à Alger, Oran, Constantine.
 <br>  <span class="glyphicon glyphicon-tags"> </span> ✓ Retrouvez des offres d’affaires, vente privée en ligne de véhicules, voiture, téléphone, ordinateur et autres produits facilement partout en Algérie.
 <br>   <span class="glyphicon glyphicon-tags"> </span>  ✓ eGoZola, le meilleur outil et centre de facilitations des affaires & d’emplois, location et vente privée des produit et services sur Ouedkniss à Alger. 
<br><span class="glyphicon glyphicon-tags"> </span> Télécharger et utiliser notre application gratuitement sans internet<a href="<?php echo $botUrl?>" style="clolor:black"> <strong> Cliquer ici↓↓ </strong> </a>. 
  <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> Que cherchez-vous?</strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Choisissez une catégorie S'il vous plaît↓↓ </strong></div> 
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="ouedkniss_JobAlertList.php?level=10" style="color: black">
              <img src="./assets/JS.png"  style="width:45px;height:45px" class="img-rounded"  alt="Achat, vente en ligne en Algérie"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
               Offres d'Emploi & Services </label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="ouedkniss_forSaleList.php?level=10" style="color: black">
              <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="Achat, vente en ligne à Alger"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Produit à Vendre</strong></label> 
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/HS.png"  style="width:45px;height:45px" class="img-rounded" alt="Acheter & Vendre à Alger, Constantine, Oran"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Maison & Appartement</label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/auto.png"  style="width:45px;height:45px" class="img-rounded" alt="Vendre & petit annonce à Alger, Oran"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Véhicule & Moto </label> 
            </a>
          </div>
        </div>
        <div style="text-align: center"> <a href="<?php echo $botUrl?>" style="color: black"><strong>Télécharger & installer nos Outils  <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black" alt="Achat, vente en ligne privée à Alger">
              <img src="./assets/weather.png"  style="width:45px;height:45px" class="img-rounded" alt="Vente en ligne à Alger & Oran"><br>
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
              <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Vente privée et vente en ligne à Alger"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Gérer mes Dépenses & Revenues</strong></label>  <!--{{'T_EXT' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/shop.png"  style="width:45px;height:45px" class="img-rounded" lt="Achat et vente en ligne à Oran"> <br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                <strong>Gérer mes Vente & Stock</strong></label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/location.png"  style="width:45px;height:45px" class="img-rounded" alt="Vendre en ligne à Alger, Constantine & Oran"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Localiser mon adrees </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
        </div>
        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Google_FR_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Obtenir de l'aide</strong> <br> Email: <strong> hello@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="<?php echo $botUrl?>" >
          <div style="text-align: right">
      Télécharger notre application mobile gratuite <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
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
