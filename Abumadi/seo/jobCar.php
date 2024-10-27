<?php
require_once ("./connJS.php");
$cYear=date("Y");

 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 if($lang!==''){ 
 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (10,'jobCar','JS',' $lang','$mob',20,'Abuma',NOW())");
    $ps->execute( array());
 }else{
	 $mob="Web";
 }

 }
	?>
	
<!doctype html>
<html lang="en">
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
  <meta property="og:title" content="eGoZola: Emploi, Business, Acheter, louer ou Vendre en ligne"/>
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Looking for deal or part time careers near me? i'ts fast and easy</title>
  <meta name="description" content="✓ Find or Apply for deal, Business offer or part time careers near me with your smart phone. Get it now, download our free eGoZola careers near me app"/>
  <meta name="keywords" content="Cherche Emploi, part time careers near me, Emploi au cameroun"/>
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
		   <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
            <strong>To see more job and business offers, download our free app </strong> <strong style="color: darkgreen"> Click here↓↓</strong> <br>
		<img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">    </a>
          </div>
        <div style="background-color: #5e5e5e;height: 2px;width: 100%;margin-top: 10px"></div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> What are you looking for? </strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Please choose a category↓↓ </strong> </div> 
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt="jobs in cameroon douala"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px font-weight: normal;">
             Jobs, Service & Busness</label> <!--{{'JSH' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="jobs in cameroon douala"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Product for Sale </label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
            <img src="./assets/HS.png" style="width:45px;height:45px" class="img-rounded" alt="jobs in Yaoundé 2021"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
               House & Apartement </label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
            <img src="./assets/auto.png" style="width:45px;height:45px" class="img-rounded" alt="Véhicule & Moto"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Cars & Motorbike </label> <!--{{'P_AT' | translate}} -->
            </a>
          </div>
        </div>
      <div style="text-align: center"> <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black"><strong>Download & install our Tools<span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
            <img src="./assets/weather.png" style="width:45px;height:45px" class="img-rounded" alt="emploi jeune"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-style: normal">  Get weather now
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
            <img src="/assets/lamp.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dettes"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-style: normal; font-weight: normal">
              Manage my debts</label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
            <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dépenses & Revenues"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
             Manage my Expenses & Incomes </label>  
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
            <img src="./assets/shop.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Vente & Stock"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
            POS System & Manage my Stock </label> 
            </a>
          </div>
        </div>
		   <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
              <img src="./assets/search.png"  width="45px" height="45px" class="img-rounded" alt="Rechercher"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
                <strong> Search </strong> </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
         
                <div class="col-xs-6">
            <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
              <img src="./assets/post.png"  width="45px" height="45px" class="img-rounded" alt="Publier, vendre un produit"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
                Post Ads, Sell product</label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
          </div>

        <div style="margin-top: 30px"></div>
            <a href="https://wa.me/243999209870?text=EN_Google_%20I%27m%20not%20able%20to%20use%20eGoZola%2C%20Get%20help%20please">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Customer Support?</strong> <br> Email: <strong> info@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
          <div style="text-align: center">
          <strong>To see more job and business offers, download our free app </strong> <strong style="color: darkgreen"> Click here↓↓</strong> <br>
            <img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
<div style="text-align:center;margin-top: 10px"> <h1> Find deal, part time careers near me <?php echo $cYear ?></h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Get part time careers near me: Are you looking for new Jobs, deal or Business opportuinity near me? Try ou app eGoZola for free
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Quickly find a business or job offer, services and part time careers near me <?php echo $cYear ?> everywhere around you with your eGoZola app. Get it for free
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ With eGoZola, Cherche work quickly, find hot deal, services or part time careers near me and job opportunities everywhere you go with your phone
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Sell ​​your knowledge, your services or advertise everywhere in the world for free. Earn confidential money and quickly develop your business network and Busness.
    <br> <span class="glyphicon glyphicon-tags"> </span>✓ Download eGoZola and find job offers, part time careers near me <?php echo $cYear ?> and business around me and much more. <a href="https://egozola.com/GooglePlay.php?apID=old" style="clolor:black"> Get it now  <strong> Click here ↓↓ </strong> </a>.
			<br>
			<br>
<div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
   <a href="https://egozola.com/GooglePlay.php?apID=old" style="color: black">
          <div style="text-align: center">
          <strong>To see more job and business offers, download our free app </strong> <strong style="color: darkgreen"> Click here↓↓</strong> <br>
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
  Email: info@egozola.com
</footer>
  </div>
</body>
</html>