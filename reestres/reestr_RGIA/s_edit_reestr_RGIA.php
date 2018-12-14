<?php 
session_start(); 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 

admin ();


$id = $_REQUEST['id'];
$fond = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['fond'])));
numeric_test ($fond, 'фонд');
$opis = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['opis'])));
numeric_test ($opis, 'опись');
$delo = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['delo'])));
numeric_test ($delo, 'дело');
$nach = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['nach'])));
$okonch = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['okonch'])));
$naimen = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['naimen'])));
$listov = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['listov'])));
numeric_test ($listov, 'кол-во листов');
$prim = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['prim'])));
$tom = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['tom'])));
$zakaz = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['zakaz'])));
$poluch = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['poluch'])));
$zakaz_cop = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['zakaz_cop'])));
$poluch_cop = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['poluch_cop'])));


         
 $query = "UPDATE `reestr_rgia` SET 
   `fond` = '$fond',
   `opis` = '$opis',
   `delo` = '$delo',
   `nach` = '$nach',
   `okonch` = '$okonch',
   `naimen` = '$naimen', 
   `listov` = '$listov',
   `prim` = '$prim',
   `tom` = '$tom',
   `zakaz` = '$zakaz',
   `poluch` = '$poluch',
   `zakaz_cop` = '$zakaz_cop',
   `poluch_cop` = '$poluch_cop'


   WHERE `reestr_rgia`.`id` = $id";
   $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link));

   redirect ();

   ?>