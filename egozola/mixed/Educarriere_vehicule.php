<?php
require_once ("./conn2.php");
require_once ("./connJS.php");

$lang=$_GET['level'];
if($lang>0){
      echo " <script>  </script>";
}else{
	
	 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
 }else{
	 $mob="Web";
 }
 
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
  if($lang!==''){
	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (225,'eduCa','AT1',' $lang','$mob',1,'AT',NOW())");
	$ps->execute( array());
  }    
}
	?>
<!doctype html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Locanto ci: Vendre en ligne & location voiture, auto ci ou véhicule à louer à Abidjan</title>
  <meta name="description" content="✓ Publier ton annonce: Locanto ci, Location voiture ou véhicule occasion à louer ou à Vendre en ligne auto ci à Abidjan, Yamoussoukro. Trouvez un Client rapidement"/>
  <meta name="keywords" content="Vente privée, location voiture, Locanto auto, voiture ou véhicule à Abidjan"/>
  <meta property="og:title" content="eGoZola: Jobs, Business, deals, Buy, Sell & Rent"/>
  <meta property="og:description" content="eGoZola is a platform, a tool and a unified network for business facilitation (Buy, Sell, Rent & product or service exchanges), services and jobs in real time in a geolocated manner and much more ... deals"/>
  <meta property="og:url" content="https://egozola.com/home">
  <meta property="og:image" content="favicon.png">
  <meta property="og:site_name" content="eGoZola" />
  <link rel="icon" type="image/x-icon" href="favicon.png">
 <link href="styles.ea6269d1f20a46bd8797.bundle.css" rel="stylesheet"/>
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


<div  style="margin-left: 15px;background-color: #5e5e5e;width: 100%;text-align: center;color: white;font-family: Calibri">
</div>
<div style="margin-top: 7px;margin-left: 15px;background-color: #5e5e5e;width: 100%;position: fixed;font-family: Calibri">
  <a href="https://egozola.com"> <img src="../assets/logo.PNG" style="border-radius: 7px;width:97px;height:42px" alt="site web mediacongo"></a>
  <span style="margin-left: 20px"></span>
  <span> <a  class="btn btn-primary" href="https://www.egozola.com/APP/eGoZola.apk"> Télécharger <span class="glyphicon glyphicon-download"></span> </a> </span>
</div>
<div style="height: 10px"></div>
<div class="row">
  <div style="height: 30px"></div>
  <!--
  <img src="./assets/pubBar.jpg"  alt="eGoZola" class="img-responsive">
  --->
</div>

<div class="row" style="font-family: Calibri">
  <div  class="col-md-2" >
  </div>
  <div class="col-md-7" >
    <div style="height: 15px;width: 100%"></div>
   <h4 style="margin-left: 15px;margin-top: 30px">Bienvenue sur eGoZola Locanto ci<span class="glyphicon glyphicon-hand-right"></span></h4>
    <div style="text-align: right">
      <a href="https://egozola.com/pubStab/ADD">
     <button  class="btn btn-primary" style="background-color: darkblue;color:white;border-radius: 15px"> <span class="glyphicon glyphicon-plus"></span>Publier, vendre un produit </button></a>
    </div>
    <div style="margin-left: 20px;margin-top: 12px">
	       <div style="text-align: center">
		  <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" >
         <strong>Pour voir plus des Véhicules et autres opportunités d'affaires, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="Locanto ci">
			 </a>
          </div>
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
       <h4 style="color:darkgreen;text-align: center;"> <strong> Véhicules disponnible</strong></h4> 
             <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px"></div>       
	<?php   
$ps=$pdo->prepare("SELECT idAuto,sizeV,type,autoTitle,price,currency,placeSize,year,town,photo1 FROM autodb  WHERE idAuto>9 AND dateExp >= (select UNIX_TIMESTAMP()) ORDER BY idAuto DESC LIMIT 0,10");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
//echo ">>".sizeof($liste,0);

?>
    <table  style="width:100%">
	<?php   
	$urlImg="https://www.egozola.com/app/eGoZola/uploadImg/AT";
	$urlWS="https://www.egozola.com/prodView";
	foreach ($liste as $subjectData) {
      echo '<tr style="height:115px;width: 100%" >  <td> <href="'.$urlWS.'/'.$subjectData["idAuto"].'/AT/'.$subjectData["type"].'/DSP">'; 
      echo '<img src='.$urlImg.'/'.$subjectData["type"].'/'.$subjectData["photo1"].' width="133px" height="112px" class="img-rounded"> </a></td>';
       echo ' <td style="width: 100%"> <p style="width: 100%" >';
            echo '<span style="float: right;color: darkgreen;"> <span class="glyphicon glyphicon-map-marker"></span> '.$subjectData["town"].', <em>';if($subjectData["type"]=="SEL"){echo "For sale";}else{echo "For rent";}; echo'</em> <br></span>';
        echo '<a href="'.$urlWS.'/'.$subjectData["idAuto"].'/AT/'.$subjectData["type"].'/DSP" target="_blank" style="color: black">';
             echo '<label style=" overflow: hidden; max-height: 40px;margin-left: 12px">'.$subjectData["autoTitle"].'</label> <br>';
          echo '<span style="margin-left: 10px"><strong>'.$subjectData["price"].' '.$subjectData["currency"].'</strong> | <em> <span class="glyphicon glyphicon-user"></span>: '.$subjectData["placeSize"].'</em> <span class="glyphicon glyphicon-chevron-right" style="float: right;margin-right: 10px"></span> <br>';
            echo '| <span class="glyphicon glyphicon-eye-open"></span>('.$subjectData["sizeV"].')| Year: '.$subjectData["year"].'</span> </span> </a>';
             echo '  </p><div style="display: block;height: 0px;border: 0;border-top: 1px solid #ccc;margin: 0.2em 0;width:100%"></div>  </td> </tr> ';
			   }
			   ?>
			   </table>
	  
<div style="height: 3px;border: 0;border-top: 1px;width:100%;background-color:#ccc"></div>
        <div style="margin-top: 30px"></div>
		   <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" >
          <div style="text-align: center">
    <strong>Pour voir plus des Véhicules et autres opportunités d'affaires, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
          </div>
        </a>
		   <div style="margin-top: 10px"></div>
          <a href="https://wa.me/243999209870?text=Google_eGoZola%20%3A%20Get%20help_en"><div style="text-align: right"> Email: <strong> info@egozola.com  </strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
     
		  <div style="text-align:center"> <h1> Locanto ci: Vente privée auto & Location véhicule occasion à Abidjan</h1></div>   
  <br><span class="glyphicon glyphicon-tags"> </span> ✓ Site web de vente privée, Locanto ci auto & location de voiture occasion à Abidjan, Yamoussoukro et partout en Cote d'ivoire.
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Publier gratuitement ton auto ci ou véhicule à vendre ou à faire louer à Abidjan sur eGoZaola. Faites des affires et gagner des clients et de l'argent
<br><span class="glyphicon glyphicon-tags"> </span> ✓ eGoZola, le meilleur outil et centre de facilitations des affaires sur Locanto ci voiture occasion, véhicule à vendre ou à louer en algérie. Publier ton annonce gratuitement et ton vœux sera exaucer en quelques minutes. 
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Locanto auto ci Trouvez facilement une vente privées de véhicule ou une location de voiture à louer ou à vendre à moins chère rapidement et facilement à Abidjan, Yamoussoukro ou en Cote d'ivoire sur eGoZola. Télécharger et utiliser notre application gratuitement <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="clolor:black"> <strong> Cliquer ici↓↓ </strong> </a>.  

<div style="height: 3px;border: 0;border-top: 1px;width:100%;background-color:#ccc"></div>
        <div style="margin-top: 30px"></div>
		   <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" >
          <div style="text-align: center">
    <strong>Pour voir plus des Véhicules et autres opportunités d'affaires, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
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
  Powered by © eGoZola Educarriere</span><br>
  Email: info@egozola.com
</footer>
</div>
</body>
</html>