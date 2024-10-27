<?php
 $mHost="business158.web-hosting.com";
  $emailUserName ="services@egozola.com";
  $emailUserNameInfo ="info@egozola.com";
  $emailUserNameHello ="hello@egozola.com";
  $pwdS ="services1422@";
  $pwdInf ="infoEgozola1422";
  $pwdHello ="bincos4444";
  $uHomeF="/home/egozlylo/public_html/app/eGoZola/uploadImg/";
  try {
    $strConnection='mysql:host=localhost;dbname=egozlylo_zolashop';
   $pdo= new PDO($strConnection,'egozlylo_egozola','egozola1422',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

} catch (Exception $exc) {
   $msg='ERREUR PDO dans'.$exc->getMessage();
   die($msg);
}

  ?>