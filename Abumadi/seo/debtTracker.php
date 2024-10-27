<?php
require_once ("./connJS.php");
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 if($lang!==''){ 
 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
 }else{
	 $mob="Web";
 }
	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (225,'eduCa','JS',' $lang','$mob',2,'Abuma',NOW())");
    $ps->execute( array());
 }
	?>
	
<!doctype html>
<html lang="fr">

<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
   <meta name="viewport" content="width=device-width, initial-scale=1"/>

 <title>GET Best Simple free Debt Tracker app for android & web browser</title>
  <meta name="description" content="✓ Transform your smartphone into a real Simple free best Debt Tracker app and start taking control of your money saving with an expense app integrated. Download eGoZola for Debt Tracker app, get it now"/>
  <meta name="keywords" content="Cherche Emploi, loan tracker app,Simple free Debt Tracker app for android"/>
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
  <div style="height: 15px"></div>
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
            <strong>To Get more job and business offers, download our Free Debt Tracker app</strong> <strong style="color: darkgreen"> Click here↓↓</strong> <br>
		<img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">    </a>
          </div>
        <div style="background-color: #5e5e5e;height: 2px;width: 100%;margin-top: 10px"></div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> What are you looking for? <strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Please choose a category↓↓ </strong> </div> 
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt="jobs in cameroon douala"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px font-weight: normal;">
             Jobs, Service & Busness</label> <!--{{'JSH' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="jobs in cameroon douala"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Product for Sale </label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com" style="color: black">
            <img src="./assets/HS.png" style="width:45px;height:45px" class="img-rounded" alt="jobs in Yaoundé <?php echo date("Y") ?>"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
               House & Apartement </label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com" style="color: black">
            <img src="./assets/auto.png" style="width:45px;height:45px" class="img-rounded" alt="Véhicule & Moto"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Cars & Motorbike </label> <!--{{'P_AT' | translate}} -->
            </a>
          </div>
        </div>
      <div style="text-align: center"> <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black"><strong>Download & install our Tools<span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/weather.png" style="width:45px;height:45px" class="img-rounded" alt="emploi jeune"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-style: normal">  Get weather now
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="/assets/lamp.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dettes"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-style: normal; font-weight: normal">
              Manage my debts</label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dépenses & Revenues"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
             Manage my Expenses & Budget </label>  
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/shop.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Vente & Stock"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
            POS System & Manage my Stock </label> 
            </a>
          </div>
        </div>
		   <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/pubStab/ADD" style="color: black">
              <img src="./assets/search.png"  width="45px" height="45px" class="img-rounded" alt="Rechercher"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
                <strong> Search </strong> </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
         
                <div class="col-xs-6">
            <a href="https://egozola.com/pubStab/ADD" style="color: black">
              <img src="./assets/post.png"  width="45px" height="45px" class="img-rounded" alt="Publier, vendre un produit"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
                Post Ads, Sell product</label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Recherche_Google_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Service Client</strong> <br> Email: <strong> info@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
          <div style="text-align: right">
            <strong>To Get more job and business offers, download our Free Debt Tracker app </strong> <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
  	    <div style="text-align:center"> <h1>Best free Debt Tracker app </h1> </div> 
	  <br><span class="glyphicon glyphicon-play"> </span> ✓ Get The Best free debt tracker app, track your debts, income and all your dailly expenses wiht our debt free report app. Download and get it for free
<br><span class="glyphicon glyphicon-ok-sign"> </span> ✓ Take control of your Business, with our Best free debt tracker app. Get it now and increase your income in real time, every where your profit Inventory.
<br><span class="glyphicon glyphicon-ok-sign"> </span> ✓ It's free and easy with eGoZola free debt tracker app, download free link all your account into one and track your dailly income and debts repport.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Download eGoZola the best complete simple mobile free debt tracker app for android with budgeting app and extra tools in real time. Get it now for free <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black"> <strong> Download, Click here ↓↓ </strong> </a>
		<br>
		<br>
            <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
      <h4 style="color:darkgreen;text-align: center;"> <strong> What are you looking for? <strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Please choose a category↓↓ </strong> </div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="JobAlertList.php?level=10" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt="jobs in Yaoundé <?php echo date("Y") ?>"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-style: normal">
              Jobs, Service & Busness</label> <!--{{'JSH' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="Produit à Vendre"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
             Product for Sale </label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com" style="color: black">
            <img src="./assets/HS.png"  style="width:45px;height:45px" class="img-rounded" alt="Maison & Apartement"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              House & Apartement</label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com" style="color: black">
            <img src="./assets/auto.png" style="width:45px;height:45px" class="img-rounded" alt="Véhicule & Moto"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Cars & Motorbike  </label> <!--{{'P_AT' | translate}} -->
            </a>
          </div>
        </div>
		</strong>
      <div style="text-align: center"> <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black"><strong>Download & install our Tools <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/weather.png" style="width:45px;height:45px" class="img-rounded" alt="Consulter la Météo"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">  Get weather now 
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="/assets/lamp.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dettes"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Manage my debts </label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dépenses"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
            Manage my Expenses & Budget</label>  <!--{{'T_EXT' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/shop.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Vente"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
           POS System & Manage my Stock </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>
		   <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/pubStab/ADD" style="color: black">
              <img src="./assets/search.png"  width="45px" height="45px" class="img-rounded" alt="Rechercher"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
                <strong> Search </strong> </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
         
                <div class="col-xs-6">
         <a href="https://egozola.com/pubStab/ADD" style="color: black">
              <img src="./assets/post.png"  width="45px" height="45px" class="img-rounded" alt="Publier, vendre un produit"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
                Post Ads, Sell product</label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Recherche_Google_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Obtenir de l'aide</strong> <br> Email: <strong> info@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
          <div style="text-align: right">
         <strong>To Get more job and business offers, download our Free Debt Tracker app </strong>  <strong style="color: darkgreen"> Click here ↓↓ </strong> <br>
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