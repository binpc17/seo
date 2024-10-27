<?php
require_once ("./connJS.php");
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 if($lang!==''){ 
 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (10,'adCarPhil','JS',' $lang','$mob',65,'ZOLA',NOW())");
    $ps->execute();
	$botUrl="https://egozola.com/GooglePlay.php?hl=fr&apId=old";
 }else{
	 $mob="Web";
	 $botUrl="https://egozola.com";
 }

 }
	?>
	
<!doctype html>
<html lang="en">

<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
 <meta name="viewport" content="width=device-width, initial-scale=1"/>
 
 <title>Looking for Rent or Car for Sale Ayosdito? i'ts fast and easy |eGoZola</title>
  <meta name="description" content="✓ Find or Make deal, Business offer or post free car for sale ayosdito ads online <?php echo date("Y"); ?>, sell your services or your product for free with your smart phone. Get it now, download our free eGoZola app"/>
  <meta name="keywords" content="Cherche Emploi,post free classified ads in usa, Emploi au cameroun"/> 
 <meta property="og:title" content="eGoZola: Emploi, Business, Acheter, louer ou Vendre en ligne"/>
  <meta property="og:description" content="eGoZola est une plateforme, un outil et un réseaux unifié de facilitation des affaires, des Services et d'emploi <?php echo date("Y"); ?> (vente ou location) en temps réel de manière géolocalisée et bien plus encore"/>
  <meta property="og:url" content="https://egozola.com">
  <meta property="og:image" content="favicon.png">
  <meta property="og:site_name" content="eGoZola" />
  <link rel="icon" type="image/x-icon" href="favicon.png">  
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="style.css" rel="stylesheet" type="text/css"/>
<script></script>
</head>
<body style="background-color: whitesmoke">
<!-- <img src="./app/img/logo.png" width="97px" height="42px" alt="eGoZola" class="img-responsive">-->
<div style="background-color: #5e5e5e;width: 100%;font-family: Calibri;margin-top:3px;margin-bottom: 3px;color: white;position:fixed;z-index:999;display: inline-block;overflow:auto;height: 25px;white-space: nowrap">
<a href="https://egozola.com" style="color: white;margin-left:2px">  eGoZola |</a> <span style="margin-left: 5px"></span> 
<a href="https://egozola.com/indexMsg.php" style="color: white"><span id="msgRs"> <span class="glyphicon glyphicon-envelope"></span> Message (0) 
 </span></a><span> | <a href="https://egozola.com/index.php" style="color: white"><span class="glyphicon glyphicon-search"></span> Search </span></a> | <a href="https://egozola.com/APK/eGoZola.apk" style="color: white"><span class="glyphicon glyphicon-circle-arrow-down"></span> Download</a> |  <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-usd"></span> Jobs</a> | <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-home"></span> House</a> |  <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-plane"></span> Cars</a> | <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-shopping-cart"></span> For Sale </a> | <a href="https://egozola.com/profile.php" style="color: white"><span class="glyphicon glyphicon-user"></span> Profile </a>  
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
    <div style="margin-left: 20px">
		 <div style="text-align: center">
		   <a href="<?php echo $botUrl?>" style="color: black">
            <strong>To see more job and business offers, download our free app </strong> <strong style="color: darkgreen"> Click here↓↓</strong> <br>
		<img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">    </a>
          </div>
        <div style="background-color: #5e5e5e;height: 2px;width: 100%;margin-top: 10px"></div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> What are you looking for? </strong></h4> 
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt="jobs in cameroon douala"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px font-weight: normal;">
              Jobs Offers & Services</label>
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="jobs in cameroon douala"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Product for Sale </label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/HS.png" style="width:45px;height:45px" class="img-rounded" alt="jobs in Yaoundé 2021"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
               House & Apartement </label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/auto.png" style="width:45px;height:45px" class="img-rounded" alt="Véhicule & Moto"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Cars & Motorbike </label> <!--{{'P_AT' | translate}} -->
            </a>
          </div>
        </div>
      <div style="text-align: center"> <a href="<?php echo $botUrl?>" style="color: black"><strong>Download & install our Tools<span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/weather.png" style="width:45px;height:45px" class="img-rounded" alt="emploi jeune"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-style: normal">  Get weather now
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="/assets/lamp.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dettes"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-style: normal; font-weight: normal">
              Manage my debts</label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dépenses & Revenues"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
             Manage my Expenses & Incomes </label>  
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/shop.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Vente & Stock"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
            POS System & Manage my Stock </label> 
            </a>
          </div>
        </div>
		   <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/search.png"  width="45px" height="45px" class="img-rounded" alt="Rechercher"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
                <strong> Search </strong> </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
         
                <div class="col-xs-6">
            <a href="<?php echo $botUrl?>" style="color: black">
              <img src="./assets/post.png"  width="45px" height="45px" class="img-rounded" alt="Publier, vendre un produit"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
                Post Ads, Sell product</label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
          </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=EN_Google_%20I%27m%20not%20able%20to%20use%20eGoZola%2C%20Get%20help%20please">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Customer Support?</strong> <br> Email: <strong> hello@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > WhatsApp <span class="glyphicon glyphicon-earphone" ></span> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="<?php echo $botUrl?>" style="color: black">
          <div style="text-align: center">
      <strong>To Get more business offers, download our Free Classified App </strong> <strong style="color: darkgreen"> Click here ↓↓ </strong> <br>
            <img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
 <div style="text-align:center;margin-top: 10px"> <h1> Find car for sale ayosdito <?php echo date("Y"); ?></h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Get or Post for free car for sale ayosdito: Are you looking for new deal or Business opportuinity near me? Try ou app eGoZola for free
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Post or Quickly find a business or hot deal, services and Free car for sale ayosdito online advertising  near me <?php echo date("Y"); ?> everywhere around you with your eGoZola app. Get it for free
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ With eGoZola it's easy to find hot deal, services or car for sale ayosdito near me and everywhere you go with your phone
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Sell ​​your knowledge, your services or advertising online everywhere in the world for free. Earn confidential money and quickly develop your business network and Busness.
    <br> <span class="glyphicon glyphicon-tags"> </span>✓ Download eGoZola and find best deal, post free car for sale ayosdito near me <?php echo date("Y"); ?> and business around me and much more. <a href="<?php echo $botUrl?>" style="clolor:black"> Get it now  <strong> Click here ↓↓ </strong> </a>.
			<br>
			<br>
<div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
   <a href="<?php echo $botUrl?>" style="color: black">
          <div style="text-align: center">
   <strong>To Get more business offers, download our Free Classified App </strong> <strong style="color: darkgreen"> Click here ↓↓ </strong> <br>
            <img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
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
<div class="row">
<footer style="background: #5e5e5e;color: white;text-align: center;font-family: Calibri">
<br>
  <div>
    <a href="https://egozola.com/policies.html" style="color: white"> Terms Of Service </a>, <a href="https://egozola.com/policies.html" style="color: white">Privacy policy</a>,
    <p></p>
  </div>
  <span style="border-top: white 1px solid">
  Powered by © eGoZola</span><br>
  Email: hello@egozola.com
</footer>
  </div>
</body>
</html>