<?php
require_once ("./connJS.php");
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
      $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
  if($lang!==''){
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (1,'Craigs','MAP',' $lang','$mob',8,'ZOLA',NOW())");
    $ps->execute();
	$botUrl="https://egozola.com/GooglePlay.php?hl=fr&apId=old";
  }
 }else{
	 $mob="Web";
	 $botUrl="https://egozola.com";
 }
 	?>
<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
  <title>GPS: Find my current location address right now | eGoZola</title>
  <meta name="description" content="✓ GPS, Get my local address, Track and find my current location right now with eGoZola app for free"/>
  <meta name="keywords" content="my current location, location address right now, GPS"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is an application, a communication network and unified business tools facilitation between Employer - Employee, Jober - Dealer, Buyer - Seller, Customer - Server, Lessor - Landlord, Customer - Technician and much more ... deals"/>
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

<div class="row" style="font-family: Calibri;margin-top: 50px">
  <div  class="col-md-2" >
  </div>
  <div class="col-md-7" >
	          <div style="text-align: center">
		   <a href="<?php echo $botUrl?>" >
            <strong style="color: black">Hey! Download our Best free Find my current location address Andoid app</strong> <strong style="color: darkgreen"> Click here↓↓</strong> <br>			
            <img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola"> </a>
          </div>
		  
    <div style="margin-left: 20px;margin-top: 12px">
 <h4 style="color:darkgreen;text-align: center;"> <strong> What are you looking for?</strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Please choose a category↓↓ </strong></div> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
      <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
        <div class="col-xs-6" style="border-right: 1px solid #ccc">
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/JS.png"  width="45px" height="45px" class="img-rounded"  alt="GPS app, Get my location right now "><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
        Jobs Offers & Services  </label>
          </a>
        </div>
        <div class="col-xs-6" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/7.png"  width="45px" height="45px" class="img-rounded" alt="GPS, my current location address"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong> Product for sale  </strong></label> 
          </a>
        </div>
      </div>
      <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
        <div class="col-xs-6" style="border-right: 1px solid #ccc" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/HS.png"  width="45px" height="45px" class="img-rounded" alt="my current location address"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              House & Apartement </label> 
          </a>
        </div>
        <div class="col-xs-6" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/auto.png"  width="45px" height="45px" class="img-rounded" alt="Car & Motorbike"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Car & Motorbike </label> 
          </a>
        </div>
      </div>
      <div style="text-align: center"> <a href="<?php echo $botUrl?>" style="color: black"><strong>Download & instal our Tools <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
      <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="col-xs-6" style="border-right: 1px solid #ccc" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/weather.png"  width="45px" height="45px" class="img-rounded" alt="Get Weather now"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Get Weather now
            </label>
          </a>
        </div>
        <div class="col-xs-6">
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="/assets/lamp.png"  width="45px" height="45px" class="img-rounded" alt="Debts Inventory "><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Debts Inventory </label> 
          </a>
        </div>
      </div>

      <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
        <div class="col-xs-6" style="border-right: 1px solid #ccc" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/money.png"  width="45px" height="45px" class="img-rounded" alt="Incomes & Expenses Manager "><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong> Incomes & Expenses Manager </strong></label>  
          </a>
        </div>
        <div class="col-xs-6" >
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/shop.png"  width="45px" height="45px" class="img-rounded" alt="Stock & sale inventory"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong> Stock & sale inventory </strong></label> 
          </a>
        </div>

      </div>
      <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
        <div class="col-xs-6" style="border-right: 1px solid #ccc">
          <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/location.png"  width="45px" height="45px" class="img-rounded" alt="Maps & My location"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
                 Maps & My location </label> 
          </a>
        </div>
      </div>
      <div style="margin-top: 30px"></div>
           <a href="https://wa.me/243999209870?text=Google_eGoZola%20%3A%20Get%20help_en"><div style="text-align: right"> Email: <strong> hello@egozola.com </strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
      <div style="margin-top: 10px"></div>
      <a href="<?php echo $botUrl?>" >
        <div style="text-align: right">
  Download our Best free Find my current location address Andoid app<strong style="color: darkgreen"> Click here ici  ↓↓</strong> <br>
          <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
        </div>
      </a>
      <div style="text-align: right">
        <div class="form-group">
          <select>
            <option> </option>
            </select>
        </div>
      </div>
	  
	  <div style="text-align:center"> <h1> GPS, Find my current location address right now</h1> </div> 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Get my position address, Track and find my current location right now on the maps,
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Using GPS data, find in realtime my current location address quickly 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Get my location right now with a satelite vieu on my smart phone for free
<br><span class="glyphicon glyphicon-tags"> </span> ✓ It's free and easy with eGoZola App get my current local address using realtime GPS data. Get it now  <a href="<?php echo $botUrl?>" style="color: black"> <strong> Download, Click here ↓↓ </strong> </a>
      <div style="margin-top: 10px"></div>
      <a href="<?php echo $botUrl?>" >
        <div style="text-align: right">
       Download our free Andoid app<strong style="color: darkgreen"> Click here ici  ↓↓</strong> <br>
          <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
        </div>
      </a>
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