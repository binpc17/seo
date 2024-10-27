<?php
  try {
    $strConnection='mysql:host=localhost;dbname=ionic_2016';
    $pdo= new PDO($strConnection,'root','');
} catch (Exception $exc) {
   $msg='ERREUR PDO dans'.$exc->getMessage();
   die($msg);
}

