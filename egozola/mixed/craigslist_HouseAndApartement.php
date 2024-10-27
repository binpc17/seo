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
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (1,'Craigs','HS1',' $lang','$mob',8,'ZOLA',NOW())");
   $ps->execute( array());
  }    
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Cheap Craigslist apartments for rent near me & homes rentals |eGoZola</title>
  <meta name="description" content="✓ Get Homes & places for rent near me or quickly. Find Cheap Craigslist apartments for rent around me in chicago, Boston, seattle in USA. Post your Ads for free✓"/>
  <meta name="keywords" content="Craigslist apartments, apartments for rent near me, homes rentals"/>
  <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is a platform, a tool and a unified network for business facilitation (Buy, Sell, Rent & product or service exchanges), services and jobs in real time in a geolocated manner and much more ... deals"/>
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="favicon.png">
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
	   <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
          <div style="text-align: center">
            <strong> Hey! Get and find more apartement & houses listing, download our free Android app </strong> <strong style="color: darkgreen"> Click here ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
          </div>
        </a>
    <div style="margin-left: 20px;margin-top: 12px">
       <h4 style="color:darkgreen;text-align: center;"> <strong> Apartement & House Avilable</strong></h4> 
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>     
	<?php   
$ps=$pdo->prepare("SELECT idHouse,sizeV,type,roomSize,hsTitle,price,currency,town,commune,photo1,countryCD FROM housedb WHERE idHouse>9 AND dateExp >= (select UNIX_TIMESTAMP()) ORDER BY idHouse DESC LIMIT 0,15");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
//echo ">>".sizeof($liste,0);

?>

    <table  style="width:100%">
	<?php   
	$urlImg="https://www.egozola.com/app/eGoZola/uploadImg/HS";
	$urlWS="https://www.egozola.com/hsView.php?";
	//href="'.$urlWS.'?id='.$subjectData["idHouse"].'&cod='.$subjectData["countryCD"].'&dsp=DSP"
	foreach ($liste as $subjectData) {
      echo '<tr style="height:115px;width: 100%" ><td>  <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" target="_blank" style="color: black"> '; 
      echo '<img src='.$urlImg.'/'.$subjectData["type"].'/'.$subjectData["photo1"].' width="133px" height="112px" class="img-rounded"> </a></td>';
       echo ' <td style="width: 100%"> <p style="width: 100%" >';
            echo '<span style="float: right;color: darkgreen;"> <span class="glyphicon glyphicon-map-marker"></span> '.$subjectData["town"].', <em>';if($subjectData["type"]=="SEL"){echo "For sale";}else{echo "For rent";}; echo'</em> <br></span>';
        echo '<a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" target="_blank" style="color: black">';
             echo '<label style=" overflow: hidden; max-height: 40px;margin-left: 12px">'.$subjectData["hsTitle"].'</label> <br>';
          echo '<span style="margin-left: 10px"><strong>'.$subjectData["price"].' '.$subjectData["currency"].'</strong> | <span class="glyphicon glyphicon-chevron-right" style="float: right;margin-right: 10px"></span> <br>';
            echo '| <span class="glyphicon glyphicon-eye-open"></span>('.$subjectData["sizeV"].')| Room: '.$subjectData["roomSize"].'</span> </span> </a>';
             echo '  </p><div style="display: block;height: 0px;border: 0;border-top: 1px solid #ccc;margin: 0.2em 0;width:100%"></div>  </td> </tr> ';
			   }
			   ?>
			   </table>
	  
<div style="height: 3px;border: 0;border-top: 1px;width:100%;background-color:#ccc"></div>
        <div style="margin-top: 30px"></div>
		   <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
          <div style="text-align: center">
            <strong> To Get and find more apartement & houses listing, download our free Android app </strong> <strong style="color: darkgreen"> Click here ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
          </div>
        </a>
		   <div style="margin-top: 10px"></div>
          <a href="https://wa.me/243999209870?text=Google_eGoZola%20%3A%20Get%20help_en"><div style="text-align: right"> Email: <strong> bienfait@egozola.com</strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
     <div style="text-align:center"> <h1>Craigslist Homes rentals & Cheap apartments for rent near me</h1></div>
<br> <span class="glyphicon glyphicon-tags"> </span>✓ Post or Find free craigslist Cheap apartments for rent near me in chicago, Boston, seattle and every where in USA on eGoZola
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Share or Rent your homes or apartments on our eGoZola free classified ads and Earn money in confident. Find easiely a customer in a day
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Find and Get quickly a wonrdefull homes or places for rent near me according to my bugdet capacity
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Discover or find cheapest home or apartments for rent in USA: Craigslist chicago and Boston.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Sell or rent your house or a places directly on eGoZola for free using your smartphone and begin making deals
<br><span class="glyphicon glyphicon-tags"> </span> ✓ eGoZola the best mobile free app for <strong> Craigslist Homes rentals & Cheap apartments for rent nearby</strong> , just post your Ads for free in one second
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Search from your smart phone and get your dream homes on Craigslist chicago and find Cheap apartments for rent near me with small bugdet.
 <br><span class="glyphicon glyphicon-tags"> </span> ✓ eGoZola, the best Business Tools and Business center for selling & rental facilitation. Get it now for free  <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black"> <strong> Download, Click here ↓↓ </strong> </a>

     <div style="height: 3px;border: 0;border-top: 1px;width:100%;background-color:#ccc"></div>
        <div style="margin-top: 30px"></div>
	   <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
          <div style="text-align: center">
            <strong> To Get and find more apartement & houses listing, download our free Android app </strong> <strong style="color: darkgreen"> Click here ici ↓↓ </strong> <br>
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
  Email: info@egozola.com 
</footer>
</div>
</body>
</html>
