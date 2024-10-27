<?php
require_once ("./connJS.php");
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
  $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));
 if($uDev>0){
	 $mob="Mob";
  if($lang!==''){
	 $ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (1,'Craigs','WT1',' $lang','$mob',8,'ZOLA',NOW())");
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
  <title> Get weather tomorrow hourly now | eGoZola</title>
  <meta name="description" content="✓ Check weather tomorrow hourly now without internet for free using your smartphone"/>
  <meta name="keywords" content="weather tomorrow, weather hourly, weathe now"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is a platform, a tool and a unified network for business facilitation (Buy, Sell, Rent & product or service exchanges), services and jobs in real time in a geolocated manner and much more ... deals"/>
  <meta property="og:url" content="https://www.craigslistchicago.website">
  <meta property="og:image" content="favicon.png">
  <meta property="og:site_name" content="eGoZola"/>
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
<div class="row" style="font-family: Calibri">
  <div  class="col-md-2" >
  </div>
  <div class="col-md-7" >
    <h4 style="margin-left: 15px;margin-top: 50px"> Welcome on Craigslist-Chicago <span class="glyphicon glyphicon-hand-right"></span></h4>
    <div style="text-align: right">
      <a href="https://egozola.com/pubStab/ADD">
        <button  class="btn btn-primary" style="background-color: darkblue;color:white;border-radius: 15px" >    <span class="glyphicon glyphicon-plus"></span> Post, Sell a product </button></a>
    </div>
    <div style="margin-left: 20px;margin-top: 12px">
      <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
       <h4 style="color:darkgreen;text-align: center;"> <strong> What are you looking for?</strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Please choose a category↓↓ </strong></div>  
      <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
      <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
      <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
        <div class="col-xs-6" style="border-right: 1px solid #ccc">
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/JS.png"  style="width:45px;height:45px" class="img-rounded"  alt="Service & Business"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
             JObs Offers & Services </label> 
          </a>
        </div>
        <div class="col-xs-6" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/7.png" style="width:45px;height:45px" class="img-rounded" alt="Product for sale"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Product for sale</strong></label> 
          </a>
        </div>
      </div>
      <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
        <div class="col-xs-6" style="border-right: 1px solid #ccc" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/HS.png" style="width:45px;height:45px" class="img-rounded" alt="House & Apartement"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              House & Apartement </label> 
          </a>
        </div>
        <div class="col-xs-6" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/auto.png"  style="width:45px;height:45px" class="img-rounded" alt="weather this week"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Car & Motorbike </label> 
          </a>
        </div>
      </div>
      <div style="text-align: center"> <a href="<?php echo $botUrl?>" style="color: black"><strong> Download & install our Tools <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
      <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="col-xs-6" style="border-right: 1px solid #ccc" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/weather.png" style="width:45px;height:45px" class="img-rounded" alt="local weather tomorrow "><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Get weather now 
            </label>
          </a>
        </div>
        <div class="col-xs-6">
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="/assets/lamp.png"  style="width:45px;height:45px" class="img-rounded" alt="weather tomorrow hourly"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
               Debts Inventory </label> <!--{{'T_MGT' | translate}} -->
          </a>
        </div>
      </div>

      <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
        <div class="col-xs-6" style="border-right: 1px solid #ccc" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/money.png"  style="width:45px;height:45px"class="img-rounded" alt="Income & Expenses Manager"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong> Income & Expenses Manager </strong></label> 
          </a>
        </div>
        <div class="col-xs-6" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/shop.png" style="width:45px;height:45px" class="img-rounded" alt="accuweather radar & 10 day weather hourly"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong> Stock & sale Manager </strong></label> 
          </a>
        </div>
      </div>
      <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
        <div class="col-xs-6" style="border-right: 1px solid #ccc">
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/location.png"  style="width:45px;height:45px" class="img-rounded" alt="accuweather radar"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                Map & My location address</label> 
          </a>
        </div>
      </div>
      <div style="margin-top: 30px"></div>
    <a href="https://wa.me/243999209870?text=Google_eGoZola%20%3A%20Get%20help_en"><div style="text-align: right"> Email: <strong> hello@egozola.com </strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
      <div style="margin-top: 10px"></div>
      <a href="<?php echo $botUrl?>" >
        <div style="text-align: right">
        Download our free Andoid app <strong style="color: darkgreen"> Click here ici  ↓↓ </strong> <br>
          <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola Weather now">
        </div>
      </a>
      <div style="text-align: right">
        <div class="form-group">
          <select>
                   </select>
        </div>
      </div>
  
<div style="text-align:center"> <h1> Get weather tomorrow hourly now</h1> </div> 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ In one click check weather tomorrow hourly now for free with eGoZola App
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Use your GPS and get accuweather radar hourly in real time using your smartphone
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Are you looking for an app for free weather tomorrow hourly? It's fast and easy with eGoZola App. Geti it now
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Find All in one from accuweather radar without internet access, it's simple and possible with eGoZola, avilable on Google Play  <a href="<?php echo $botUrl?>" style="color: black"> <strong> Download, Click here ↓↓ </strong> </a> 
 

      <div style="margin-top: 10px"></div>
      <a href="<?php echo $botUrl?>">
        <div style="text-align: right">
                Download our free Andoid app <strong style="color: darkgreen"> Click here ici  ↓↓ </strong> <br>
          <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola now">
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
  Powered by © eGoZola Craigslist-Chicago</span><br>
  Email: hello@egozola.com 
</footer>
</div>
</body>
</html>