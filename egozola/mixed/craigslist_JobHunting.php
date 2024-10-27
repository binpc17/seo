<?php
require_once ("./conn2.php");
require_once ("./connJS.php");

$lang=$_GET['level'];
if($lang>0){
      echo " <script>  </script>";
}else{
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 
 	 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
  if($lang!==''){
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (1,'Craigs','JS',' $lang','$mob',8,'ZOLA',NOW())");
    $ps->execute();
	$botUrl="https://egozola.com/GooglePlay.php?hl=fr&apId=old";
  } 
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title> Craigslist chicago: Find Business & jobs offers near me on USA eGoZola</title>
  <meta name="description" content="✓ Get or Do Business & Hot deals offers on Craigslist chicago. Post, sell or rent your product or service, jobs in USA on our free eGoZola"/>
   <meta name="keywords" content="Craigslist chicago, Business, Hot deals, Business, jobs, job hunting"/>
  <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is a platform, a tool and a unified network for business facilitation (Buy, Sell, Rent & product or service exchanges), services and jobs in real time in a geolocated manner and much more ... deals"/>
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="https://egozola.com/APK/cover.PNG">
  <meta property="og:site_name" content="eGoZola" />
  <link rel="icon" type="image/x-icon" href="favicon.png">
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script></script>
</head>

<?php

if($lang>0){
      echo "<script> var timer = null; function homeData(){ window.location = 'https://www.alertjob.website/JobAlertList.php?level=10';} </script>";
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
		   <a href="<?php echo $botUrl?>" style='color: black'>
          <div style="text-align: center">
            <strong> To Find and get more jobs listing, listing, download our free Android app </strong> <strong style="color: darkgreen"> Click here ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
          </div>
        </a>		
    <div style="margin-left: 20px;margin-top: 12px">
       <h4 style="color:darkgreen;text-align: center;"> <strong> Job list Avilable</strong></h4> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>     
	<?php   
		//$urlWS="https://www.egozola.com/jobService.php?type=dsp&id=".$subjectData['idJobS'];
		$urlWS=$botUrl;
$ps=$pdoJS->prepare("SELECT idJobS,sizeV,jobTitle,town,dateExp,urlJS,userN FROM jobservice  WHERE idJobS>9 AND dateExp >= (select UNIX_TIMESTAMP()) ORDER BY idJobS DESC LIMIT 0,8");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
//echo ">>".sizeof($liste,0);
           echo "<ul class='list-group'>";
       foreach ($liste as $subjectData) {
            echo "<li class='list-group-item'> <a href='".$urlWS."' style='color: black'> <strong>".$subjectData['jobTitle']."</strong><br> <span class='glyphicon glyphicon-user'></span> ".$subjectData['userN']."| <em> Vieu(".$subjectData['sizeV'].") </span> </em>";
			echo"</a> <span class='glyphicon glyphicon-menu-right' style='float: right'></span> </li>";
       }
echo "</ul>";

/**
$ps=$pdoJS->prepare("SELECT idJobS,P,sizeV,level,jobTitle,town,domId,dateExp,urlJS,userN FROM jobservice  WHERE idJobS>9 AND dateExp >= (select UNIX_TIMESTAMP()) LIMIT 0,15");
   foreach ($liste as $subjectData) {
            echo "<li class='list-group-item'> <a href='sujetDetails.php?idSujet={$subjectData['id']}' style='color: black'> <strong>".$subjectData['jobTitle']."</strong><br> <span class='glyphicon glyphicon-user'></span> ".$subjectData['userN']."| <em> Vieu(".$subjectData['sizeV'].") </span> </em> Déposé:".$subjectData['statusDep']."| FeuVert: "; if($subjectData['statusFeuVert']==0){echo'<button style="background-color: darkred;color: white">NO</button>';};if($subjectData['statusFeuVert']==1){echo'
                 <button style="background-color: darkgreen;color: white">YES</button>';}; echo"</a> <span class='glyphicon glyphicon-menu-right' style='float: right'></span> </li>";
       }
*/
?>

        <div style="margin-top: 30px"></div>
		   <a href="<?php echo $botUrl?>" >
          <div style="text-align: center">
            <strong> For more jobs listing, download our free Android app </strong> <strong style="color: darkgreen"> Click here ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
          </div>
        </a>
		   <div style="margin-top: 10px"></div>
          <a href="https://wa.me/243999209870?text=Google_eGoZola%20%3A%20Get%20help_en"><div style="text-align: right"> Email: <strong> hello@egozola.com</strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
     
     <div style="text-align:center"> <h1> Craigslist chicago: Jobs & Business offers near me </h1> </div> 
	<br> <span class="glyphicon glyphicon-tags"> </span>✓ With Craigslist chicago app, you can easily Find and Share jobs & Business offers opportuinity around you by downloading and using eGoZola App for free
	<br> <span class="glyphicon glyphicon-tags"> </span>✓ Quickly Get the right person you need for a deal or a home service around you. Just post your ad for free on our USA eGoZola platform.
	<br> <span class="glyphicon glyphicon-tags"> </span>✓ Are you looking for making or doing business? Craigslist chicago app is the best place for you to Post and find Hot deals: Job & business, Rental, buying or Selling product and services for free and making money by selling your knowlegde to others		
	<br> <span class="glyphicon glyphicon-tags"> </span>✓ Buy, Rent or sell evrery things from houses, apartments for rent to product, services and car for sale near me. Get jobs & Hot deals offers now.  
	<br> <span class="glyphicon glyphicon-tags"> </span>✓ Get your GPS coordinate, find your position on the maps and a satelite view of your current location adress or of your house & apartement in USA
	<br> <span class="glyphicon glyphicon-tags"> </span>✓ GET today and tomorrow weather report, find local weatherforecast without internet using our free tool integrated.
	<br> <span class="glyphicon glyphicon-tags"> </span> ✓Sell your knowledge or your services and make money on our platform classified ads, manage your daily inventory expenses
	<br> <span class="glyphicon glyphicon-tags"> </span>✓ Take contronl of your budget and track all your daily incomes & expenses every where in USA.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ It's faster and quick to do business on <strong>eGoZola Craigslist chicago </strong>. Buy, Sell or rent your product and easily get more new customer for free in a short time
	 <br> <span class="glyphicon glyphicon-tags"> </span> <strong>eGoZola</strong> is a classified ads platform, a tool and a unified network for business facilitation, services and jobs alert hunting near me in real time in a geolocated manner and much more. Avilable on Google Play. Get it now <a href="<?php echo $botUrl?>" style="color: black"> <strong> Click here to download↓↓ </strong></a>

	   <div style="margin-top: 30px"></div>
		   <a href="<?php echo $botUrl?>" >
          <div style="text-align: center">
            <strong> For more jobs listing, download our free Android app </strong> <strong style="color: darkgreen"> Click here ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
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
