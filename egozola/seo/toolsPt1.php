<?php
require_once ("./connJS.php");
 $uDev=is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"));   
 if($uDev>0){
	 $mob="Mob";
	$botUrl="https://egozola.com/GooglePlay.php?hl=fr&apId=old";
 }else{
	 $mob="Web";
	 $botUrl="https://egozola.com";
 }
?>	
<!doctype html>
<html lang="pt">
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <base href="/">
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
 <title>Obtenha o melhor Planilha financeira pessoal excel grátis download <?php echo date("Y"); ?> |eGoZola</title>
  <meta name="description" content="✓ Gerencie seu dinheiro de forma inteligente com nosso Planilha financeira pessoal excel grátis download <?php echo date("Y"); ?> complet. Baixe o aplicativo Planilha financeira pessoal excel grátis download gratuitamente e muito mais em qualquer lugar com seu telefone"/>
  <meta name="keywords" content="Cherche Emploi, Planilha financeira pessoal excel grátis download "/>
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
 </span></a><span> | <a href="https://egozola.com/index.php" style="color: white"><span class="glyphicon glyphicon-search"></span> Procurar </span></a> | <a href="https://egozola.com/APK/eGoZola.apk" style="color: white"><span class="glyphicon glyphicon-circle-arrow-down"></span> Baixar</a> |  <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-usd"></span> Empregos</a> | <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-home"></span> House</a> |  <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-plane"></span> Cars</a> | <a href="https://egozola.com/" style="color: white"><span class="glyphicon glyphicon-shopping-cart"></span> À venda </a> | <a href="https://egozola.com/profile.php" style="color: white"><span class="glyphicon glyphicon-user"></span> Profile </a>  
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
			        <a href="<?php echo $botUrl?>" style="color: black">
          <div style="text-align: center">
<strong style = "color: black"> Obtenha a melhor ferramenta para Planilha financeira pessoal excel grátis download, baixe nosso aplicativo gratuito agora </strong> <strong style = "color: darkgreen"> Clique aqui ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
        <h4 style="color:darkgreen;text-align: center;"> <strong> O que você está procurando?</strong></h4> 
        <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
          <div class="col-xs-6" style="border-right: 1px solid #ccc">
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/JS.png" style="width:45px;height:45px" class="img-rounded"  alt="Akwajobs 2021"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px font-weight: normal;">
             Emprego e Negócios</label> 
            </a>
          </div>
          <div class="col-xs-6" >
            <a href="<?php echo $botUrl?>" style="color: black">
            <img src="./assets/7.png"  style="width:45px;height:45px" class="img-rounded" alt="emploi jeune"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px; font-weight: normal">
              Produto à venda</label> 
            </a>
          </div>
        </div>
	       <div class="row"  style="text-align: center;border-top: 1px solid #ccc" >
		        <div class="col-xs-6" style="border-right: 1px solid #ccc" >
          <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="./assets/money.png"  width="45px" height="45px" class="img-rounded" alt="Gestionnaire de dépenses "><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
              <strong>Gerenciar minhas Despesas</strong></label> 
          </a>
        </div>.
		        <div class="col-xs-6">
          <a href="https://egozola.com/GooglePlay.php?hl=fr&apId=old" style="color: black">
            <img src="/assets/lamp.png"  width="45px" height="45px" class="img-rounded"><br>
            <label style=" overflow: hidden; max-height: 40px;margin-left: 10px">
             Gerenciar minha dívida</label> 
          </a>
        </div>
      </div>

      <div class="row"  style="border-top: 1px solid #ccc">

        <div style="margin-top: 30px"></div>
        <a href="https://wa.me/243999209870?text=Google_FR_%20%20Obtenir%20de%20l%27aide.%20Je%20n%27arrive%20pas%20%C3%A0%20t%C3%A9l%C3%A9charger%20l%27application">  <div style="text-align: right"> <strong> <span class="glyphicon glyphicon-envelope"></span>Customer Support?</strong> <br> Email: <strong> hello@egozola.com </strong> <br>  <button  style="background-color: darkgreen;color: white;border-radius: 10px;" > Message WhatsApp<em> <span class="glyphicon glyphicon-phone" ></span>    :</em> </button></div> </a>
        <div style="margin-top: 10px"></div>
 <div style="text-align:center;margin-top: 10px"> <h1>Obtenha o melhor Planilha financeira pessoal excel grátis download  <?php echo date("Y"); ?></h1> </div> 
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Planilha financeira pessoal excel grátis download de finanças: gerencie suas economias e seu dinheiro de maneira inteligente por meio do telefone
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Monitore regularmente todo o seu Planilha financeira pessoal excel grátis download <?php echo date("Y"); ?> em todos os lugares com o livre<strong> eGoZola </strong> app
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Com o aplicativo eGoZola, gaste menos e economize mais graças ao seu Planilha financeira pessoal excel grátis download com seu celular sem internet e grátis.
 <br> <span class="glyphicon glyphicon-tags"> </span>✓ Com o aplicativo eGoZola, gaste menos e economize mais graças ao seu Planilha financeira pessoal excel grátis download com seu celular sem internet e grátis.
    <br> <span class="glyphicon glyphicon-tags"> </span>✓ <strong>Baixe eGoZola e encontre todos os Planilha financeira pessoal excel grátis download <?php echo date("Y"); ?></strong> E muito mais. <a href="<?php echo $botUrl?>" style="clolor:black"> Baixe o aplicativo agora<strong style="color: darkgreen">Clique aqui ↓↓</strong> </a>.
		<br>
		<br>
            <div style="background-color: #5e5e5e;height: 2px;width: 100%"></div>
            <div style="margin-top: 10px"></div>
        <div style="margin-top: 10px"></div>
        <a href="<?php echo $botUrl?>" style="color: black">
          <div style="text-align: center">
<strong style = "color: black"> Para ver mais ofertas de empregos e negócios, baixe nosso aplicativo gratuito </strong> <strong style = "color: dark green"> Clique aqui ↓↓ </strong> <br>
            <img src="assets/playStore.png" style="border-radius: 7px;width:170px;height:42px" alt="eGoZola">
          </div>
        </a>
		
</div>
  </div>
  <div class="col-md-3">
    <!--<div style="text-align: center"> AD 1 </div>-->
<script>var vertical=0</script>
  </div>
</div>
</div>
<br>
<br>
<div class="row">
<footer style="background: #5e5e5e;color: white;text-align: center;font-family: Calibri">
  <div>
 <a href="https://egozola.com/policies.html" style="color: white">Privacy policy</a>,
    <p></p>
  </div>
  <span style="border-top: white 1px solid">
  Powered by © eGoZola</span><br>
  Email: hello@egozola.com
</footer>
  </div>
</body>
</html>