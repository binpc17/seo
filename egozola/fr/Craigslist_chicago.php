<?php
require_once ("./connJS.php");
	$level=$_GET['level'];
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
if($level>0){
    
}else{
   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
 }else{
	 $mob="Web";
 }
 
  if($lang!==''){
	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (1,'Craigs1','JS',' $lang','$mob',8,'JS',NOW())");
    $ps->execute( array());
  }    
}
	?>
<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Craigslist chicago: Find Business & jobs, Hot deals offers near me on eGoZola</title>
  <meta name="description" content="✓ Get or Do Business & Hot deals offers on Craigslist chicago. Post, sell or rent your product or service, jobs on our free eGoZola classified ads"/>
  <meta name="keywords" content="Craigslist chicago, Business, Hot deals"/>
  <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is a platform, a tool and a unified network for business facilitation (Buy, Sell, Rent & product or service exchanges), services and jobs in real time in a geolocated manner and much more ... deals"/>
  <meta property="og:url" content="https://www.craigslistchicago.website">
  <meta property="og:image" content="favicon.png">
  <meta property="og:site_name" content="eGoZola"/>
  <link rel="icon" type="image/x-icon" href="favicon.png">
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 <script></script>
</head>
<?php

if($level>0){
      echo "<script> var timer = null; function homeData(){ window.location = 'https://www.craigslistchicago.website/?level=10';} </script>";
      echo "<body style='background-color: whitesmoke' onload="."timer=setTimeout("."'homeData()'".",100000);>";
}else {
        echo "<body style='background-color: whitesmoke'>";
}
	?>
<!-- echo "<body style="background-color: whitesmoke" onload="timer = setTimeout('homeData()',10000);">";
 <img src="./app/img/logo.png" width="97px" height="42px" alt="eGoZola" class="img-responsive">-->
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
	        <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
          <div style="text-align: center">
         <strong>Hey! Get Our Free Best Business App, Download it now  </strong>  <strong style="color: darkgreen"> Click here ici ↓↓ </strong> <br>
            <img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
    <div style="margin-left: 10px;margin-top: 12px;margin-right: 10px;">
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
       <h4 style="color:darkgreen;text-align: center;"> <strong> What are you looking for?</strong></h4> 
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt="Craigslist chicago"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Job, Service & Business</label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="Hot deals offers"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Product for sale</strong></label> 
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/HS.png"  style="width:45px;height:45px" class="img-rounded" alt="jobs near me"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              House & Apartement</label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/auto.png"  style="width:45px;height:45px" class="img-rounded" alt="Craigslist chicago"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Car & Motorbike </label> 
            </a>
          </div>
        </div>
      <div style="text-align: center"> <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black"><strong> Download & install our Tools <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/weather.png"  style="width:45px;height:45px" class="img-rounded" alt="jobs near me"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Get weather now
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="/assets/lamp.png"  style="width:45px;height:45px" class="img-rounded" alt="classified ads"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Debts Inventory </label> 
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/money.png" style="width:45px;height:45px" class="img-rounded" alt="Hot deals offers"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong> Incomes & Expenses Manager  </strong></label>  
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/shop.png" style="width:45px;height:45px" class="img-rounded" alt="classified ads"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Stock & sale Manager</strong></label>
            </a>
          </div>

        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/location.png"  style="width:45px;height:45px" class="img-rounded" alt="jobs near me"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
            Map & My location address </label> 
            </a>
          </div>

        </div>

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Google_eGoZola%20%3A%20Get%20help_en"><div style="text-align: right"> Customer Support <br> Email: <strong> hello@egozola.com </strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old"  style="color: black">
          <div style="text-align: right">
   Get Our Free Best Business App, Download it now <strong style="color: darkgreen"> Click here ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job Alert eGoZola">
          </div>
        </a>
        <div style="text-align: right">
          <div class="form-group">
            <select>
              <option>✓ Jobs & Hot deals offers near me </option>
              </select>
          </div>
        </div>  
	<div style="text-align:center"> <h1> Craigslist chicago: Jobs & Business offers near me </h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ With Craigslist chicago app, you can easily Find and Share jobs & Business offers opportuinity around you by downloading and using eGoZola App for free
<br> <span class="glyphicon glyphicon-tags"> </span>✓ Quickly Get the right person you need for a deal or a home service around you. Just post your ad for free on our eGoZola platform.
<br> <span class="glyphicon glyphicon-tags"> </span>✓ Are you looking for making or doing business? Craigslist chicago app is the best place for you to Post and find Hot deals: Job & business, Rent, buy or Sell product and services for free and making money by selling your knowlegde to others		
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Buy, Rent or sell evrery things from houses, apartments for rent to product, services and car for sale near me. Get jobs & Hot deals offers now.  
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Get your GPS coordinate, find your position on the maps and a satelite view of your current location adress or of your house & apartement
  <br> <span class="glyphicon glyphicon-tags"> </span>✓ GET today and tomorrow weather report, find local weatherforecast without internet using our free tool integrated.
   <br> <span class="glyphicon glyphicon-tags"> </span> ✓Sell your knowledge or your services and make money on our platform classified ads, manage your daily inventory expenses
	<br> <span class="glyphicon glyphicon-tags"> </span>✓ Take contronl of your budget and track all your daily incomes & expenses every where in USA.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ It's faster and quick to do business on <strong>eGoZola Craigslist chicago </strong>. Buy, Sell or rent your product and easily get more new customer for free in a short time
	 <br> <span class="glyphicon glyphicon-tags"> </span> <strong>eGoZola</strong> is a classified ads platform, a tool and a unified network for business facilitation, services and jobs alert hunting near me in real time in a geolocated manner and much more. Avilable on Google Play. Get it now <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black"> <strong> Click here to download↓↓ </strong></a>
	  <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> What are you looking for?</strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Please choose a category↓↓ </strong></div> 
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
   <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/JS.png"  style="width:45px;height:45px" class="img-rounded"  alt="Business jobs near me"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Job, Service & Business</label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/7.png" style="width:45px;height:45px" class="img-rounded" alt="Product for sale"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Product for sale</strong></label> 
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/HS.png"  style="width:45px;height:45px" class="img-rounded" alt="House & Apartement"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              House & Apartement </label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/auto.png"  style="width:45px;height:45px" class="img-rounded" alt="Car & Motorbike"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Car & Motorbike </label> 
            </a>
          </div>
        </div>
      <div style="text-align: center"> <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black"><strong>Download & instal our Tools  <span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/weather.png"  style="width:45px;height:45px" class="img-rounded" alt="Get weather now"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">  Get weather now
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="/assets/lamp.png"  style="width:45px;height:45px" class="img-rounded" alt="Debts Inventory"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              Debts Inventory </label> 
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Incomes & Expenses Manager"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong> Incomes & Expenses Manager </strong></label>  <!--{{'T_EXT' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/shop.png"  style="width:45px;height:45px" class="img-rounded" alt="Stock & sale Manager"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Stock & sale Manager</strong></label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>

        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/location.png"  style="width:45px;height:45px" class="img-rounded" alt="Map & My location address"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
             Map & My location address </label> 
            </a>
          </div>

        </div>

        <div style="margin-top: 30px"></div>
          <a href="https://wa.me/243999209870?text=Google_eGoZola%20%3A%20Get%20help_en"><div style="text-align: right"> Email: <strong> hello@egozola.com </strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
        <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old"  style="color: black">
          <div style="text-align: right">
            Download our free Android app <strong style="color: darkgreen"> Click here ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
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
    <a href="https://egozola.com/whyeGoZola.html" style="color: white">Why use eGoZola</a>
    <p></p>
  </div>
  <span style="border-top: white 1px solid">
  Powered by © eGoZola   </span><br>
  Email: hello@egozola.com
</footer>
</div>
</body>
</html>
