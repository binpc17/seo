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
 }else{
	 $mob="Web";
 }
 
  if($lang!==''){
	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (225,'eduCa','JS1',' $lang','$mob',1,'JS',NOW())");
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
  <title>Educarriere ci: Emploi ci, travail & Offre d'Emploi jeune à Abidjan, Cote d’ivoire |eGoZola</title>
  <meta name="description" content="✓ Postulez aux d’offres emploi jeune educarriere.ci et recrutement à Abidjan et à Yamoussoukro sur educarriere ci eGoZola"/>
  <meta name="keywords" content="Cherche Emploi, Educarriere ci, Educarriere.ci, Emploi jeune, Emploi ci"/>
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
    <h4 style="margin-left: 15px;margin-top: 30px">Bienvenue sur eGoZola Educarriere<span class="glyphicon glyphicon-hand-right"></span></h4>
    <div style="text-align: right">
      <a href="https://egozola.com/pubStab/ADD">
        <button  class="btn btn-primary" style="background-color: darkblue;color:white;border-radius: 15px" >    <span class="glyphicon glyphicon-plus"></span>Publier, vendre un produit </button></a>
    </div>
    <div style="margin-left: 20px;margin-top: 12px">
        <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
       <h4 style="color:darkgreen;text-align: center;"> <strong> Offre Emploi & Affaires disponnible</strong></h4> 
             <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px"></div>       
	<?php   
$ps=$pdoJS->prepare("SELECT idJobS,sizeV,jobTitle,town,dateExp,urlJS,userN FROM jobservice  WHERE countryCD=225 AND dateExp >= (select UNIX_TIMESTAMP()) ORDER BY idJobS DESC LIMIT 0,10");
$ps->execute();
$liste=$ps->fetchAll(PDO::FETCH_ASSOC); 
//echo ">>".sizeof($liste,0);
           echo "<ul class='list-group'>";
       foreach ($liste as $subjectData) {
            echo "<li class='list-group-item'> <a href='{$subjectData['urlJS']}' target='_blank' style='color: black'> <strong>".$subjectData['jobTitle']."</strong><br> <span class='glyphicon glyphicon-user'></span> ".$subjectData['userN']."| <em> Vieu(".$subjectData['sizeV'].") <span class='glyphicon glyphicon-map-marker'></span> ".$subjectData['town']."</em>";
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
		   <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" >
          <div style="text-align: center">
            <strong>Pour plus de listes d'emplois, téléchargez notre application gratuite</strong> <strong style="color: darkgreen"> Cliquer ici↓↓</strong> <br>
            <img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">
          </div>
        </a>
		   <div style="margin-top: 10px"></div>
          <a href="https://wa.me/243999209870?text=Google_eGoZola%20%3A%20Get%20help_en"><div style="text-align: right"> Email: <strong> info@egozola.com</strong> <br> <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
   
 
	
 <div style="text-align:center"> <h1> Educarriere ci: Affaire et Emploi jeune à Abidjan</h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Educarriere ci: Trouve et Cherche travaile ou un emploi ci rapidement à Alger, Oran, Constantine et partout en Algérie. Sur eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Trouvez rapidement une offre d’affaire ou d'Emploi jeune à Abidjan, Yamoussoukro et partout en Cote d’ivoire avec eGoZola
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Avec eGoZola, Cherche travaile rapidement et retrouvez un emploi jeune sur Educarriere ci
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Vendez tes services ou ton savoir à Abidjan, Yamoussoukro, Cote d'ivoire. Gagnez confidentiellement ton argent et développez rapidement ton réseau d’affaire et du Bisness.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Publier ton annonce, vendez ton savoir et tes services et gagnez de l'argent. Retrouvez des partenaires d'affaire avec l'application eGoZola
  <br> <span class="glyphicon glyphicon-tags"> </span>✓ Retrouvez la personne, le travail ou l'affaire qu’il vous faut ou un service à domicile sur Educarriere.ci à Abidjan, Yamoussoukro. 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Télecharger eGoZola et retrouvez des offres d'emploi ci et d'affaire autour de moi et bien plus encore. <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="clolor:black"> Télécharger l'application <strong>Cliquer ici↓↓ </strong> </a>.
    
       <div style="margin-top: 30px"></div>
   						<br><p></p>
			        <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
          <div style="text-align: center">
<strong style="color: black">Hey! Découvrez et Obtenez toutes les offres d'Emploi <?php echo date("Y"); ?> et des Business dans ton téléphone et bien plus encore, téléchargez notre application gratuite </strong> <strong style="color: darkgreen"> Cliquer ici ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
		<br><p></p>
 
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