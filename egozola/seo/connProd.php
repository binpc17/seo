<?php
 $mHost="business158.web-hosting.com";
  try {
    $strConnection='mysql:host=localhost;dbname=egozlylo_prodlocal';
   $pdo3= new PDO($strConnection,'egozlylo_zolashop','egozola1422',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

} catch (Exception $exc) {
   $msg='ERREUR PDO dans'.$exc->getMessage();
   die($msg);
}

  ?>