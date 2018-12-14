<?php 
session_start(); 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 

admin ();

$redirect = "<script>window.location.href = history.go(-2);</script>";
$id = $_REQUEST['id'];
$fond = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['fond'])));
// if (is_int($fond) === false) {echo "в строку 'фонд' нужно вводить только числа! $redirect";} else {echo "в строку 'фонд' !";};
if ($fond == null) {$fond = '0';} else {$fond = $fond;};

$opis = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['opis'])));
if ($opis == null) {$opis = '0';} else {$opis = $opis;};
$delo = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['delo'])));
if ($delo == null) {$delo = '0';} else {$delo = $delo;};
$nach = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['nach'])));
$okonch = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['okonch'])));
$naimen = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['naimen'])));
$listov = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['listov'])));
if ($listov == null) {$listov = '0';} else {$listov = $listov;};
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

   echo $redirect;

   ?>