<?php
require_once ("./connJS.php");
 $lang =explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] )[0];
 if($lang!==''){ 
 	   $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
	 	$ps=$pdoJS->prepare("INSERT INTO webUsers (contryCD,countryN,twn,lng,app,track,track2,dateCreated) VALUES (55,'expenseRep','JS',' $lang','$mob',200,'Abuma',NOW())");
    $ps->execute( array());
 }else{
	 $mob="Web";
 }

 }
 $dataJS="✓ Transforme gratis seu telefone no melhor app controle financeiro and comece a economizar seu dinheiro de graça usando app de controle financeiro com eGoZola. Gratuito Baixe e instale este aplicativo";
	?>
	
<!doctype html>
<html lang="pt">
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
 <meta name="viewport" content="width=device-width, initial-scale=1"/>

 <title>Obtenha Aplicativo para Controle de estoque e Vendas gratis para android </title>
  <meta name="description" content="✓ Transforme gratis seu telefone no melhor gratis aplicativo para controle de estoque e vendas e gerencie suas vendas ou compras usando eGoZola aplicativo controle de estoque. Gratuito Baixe e instale este aplicativo"/>
  <meta name="keywords" content="Cherche Emploi, retail job openings near me, Emploi au cameroun"/>
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
		   <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
    <strong>Para obter mais ofertas de emprego e negócios, faça o download livre aplicativo controle de estoque  </strong> <strong style="color: darkgreen"> Clique aqui↓↓</strong> <br>
		<img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="job alert eGoZola">    </a>
          </div>
        <div style="background-color: #5e5e5e;height: 2px;width: 100%;margin-top: 10px"></div>
        <h4 style="color:darkgreen;text-align: center;"> <strong> O que você está procurando? </strong></h4> 
        <div style="text-align: center;color: darkgreen"><strong> Por favor escolha uma categoria↓↓ </strong> </div> 
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt="jobs in cameroon douala"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px font-weight: normal;">
             Empregos, serviços & negócios</label> <!--{{'JSH' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="jobs in cameroon douala"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Produto à Venda </label> <!--{{'PSALE' | translate}} -->
            </a>
          </div>
        </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/HS.png" style="width:45px;height:45px" class="img-rounded" alt="jobs in Yaoundé <?php echo date("Y") ?>"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
               Casa e apartamento </label> <!--{{'HS_NAME' | translate}} -->
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/auto.png" style="width:45px;height:45px" class="img-rounded" alt="Véhicule & Moto"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Carros e motos </label> <!--{{'P_AT' | translate}} -->
            </a>
          </div>
        </div>
      <div style="text-align: center"> <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black"><strong>Baixe nossas ferramentas<span class="glyphicon glyphicon-download"></span> </strong>  </a> </div>
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div style="margin-bottom: 2px;background-color:slategray;color:white;height: 3px "></div>
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/weather.png" style="width:45px;height:45px" class="img-rounded" alt="emploi jeune"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-style: normal">  Obter clima agora
            </label>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="/assets/lamp.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dettes"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-style: normal; font-weight: normal">
             Gerenciar minhas dívidas</label> <!--{{'T_MGT' | translate}} -->
            </a>
          </div>
        </div>

        <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/money.png"  style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Dépenses & Revenues"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
           Minhas Despesas e Receitas </label>  
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
            <img src="./assets/shop.png" style="width:45px;height:45px" class="img-rounded" alt="Gérer mes Vente & Stock"> <br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
           Controle de Estoque e Loja</label>
		     
            </a>
          </div>
        </div>
		   <div class="row"  style="text-align: center;border-top: 1px solid #ccc">
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
              <img src="./assets/search.png"  width="45px" height="45px" class="img-rounded" alt="Rechercher"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px;font-weight: normal">
                <strong> Search </strong> </label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>     
                <div class="col-xs-6">
            <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black">
              <img src="./assets/post.png"  width="45px" height="45px" class="img-rounded" alt="Publier, vendre un produit"><br>
              <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
               Publicar anúncios</label> <!--{{'S_SMG' | translate}} -->
            </a>
          </div>
          </div>
        <div style="margin-top: 30px"></div>
    	    <div style="text-align:center"> <h1>Aplicativo para controle de Vendas</h1> </div> 
	  <br><span class="glyphicon glyphicon-play"> </span> ✓ Obtenha o melhor de gratis aplicativo para controle de estoque e vendas, acompanhe suas despesas diárias gratuitamente, 
<br><span class="glyphicon glyphicon-ok-sign"> </span> ✓ Assuma o controle de suas vendas diárias com nossa aplicativo para controle de estoque e vendas gratis. Coloque sua loja no telefone usando o nosso controle de estoque. Obtenha agora
<br><span class="glyphicon glyphicon-tags"> </span> ✓ Faça o download do eGoZola, o melhor completo gratuito aplicativo para controle de estoque e vendas, para registrar seu produto e vender.  <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="clolor:black"> Obtê-lo agora  <strong> Clique aqui ↓↓ </strong> </a>.
	<br>
			<br>
<div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>     
           <a href="https://wa.me/243999209870?text=PT_Google_Precisa%20de%20ajuda%2C%20eu%20n%C3%A3o%20sou%20capaz%20de%20usar%20este%20aplicativo%2C%20por%20favor">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Customer Support?</strong> <br> Email: <strong> info@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > WhatsApp <span class="glyphicon glyphicon-earphone" ></span> </button></div> </a>
        <div style="margin-top: 10px"></div>
          <div style="text-align: center">
  <a href="https://egozola.com/GooglePlay.php?apID=old&page=abu" style="color: black"><strong>Para obter mais ofertas de emprego e negócios, faça o download gratuito</strong> <strong style="color: darkgreen"> Clique aqui↓↓</strong> <br>
            <img src="assets/playStor.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">    </a>
          </div>
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
  <div class="hr1"></div>
  <strong style="color: darkgreen"> Compartilhe com seus amigos no: </strong>
  <div class="hr1"></div>   
<?php
$urlShare="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $urlData=urlencode($dataJS.'\n\n Clique aqui↓↓ '.$urlShare);
  $uLink=urlencode($urlShare);
  $uData=urlencode($dataJS);
  echo '<a href="whatsapp://send?'.$urlData.'" data-action="share/whatsapp/share"> <button style="margin-top: 2px;margin-left: 2px;border-radius: 9px;background-color: darkgreen;color: white"> <strong>WhatsApp</strong> </button> </a>';
  echo '<a href="https://www.facebook.com/sharer/sharer.php?u='.$uLink.'&t='.$uData.'"> <button  style="margin-top: 2px;margin-left: 2px;border-radius: 9px;background-color: darkblue;color: white">  <strong> facebook </strong></button> </a>';
  ?>    
  </div>  
<div class="row">
<footer style="background: #5e5e5e;color: white;text-align: center;font-family: Calibri">
<br>
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