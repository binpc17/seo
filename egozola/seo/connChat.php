<?php
  try {
    $strConnection='mysql:host=localhost;dbname=egozlylo_zolachat';
   $pdo2= new PDO($strConnection,'egozlylo_egozola','egozola1422',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

} catch (Exception $exc) {
   $msg='ERREUR PDO dans'.$exc->getMessage();
   die($msg);
}

 ?>