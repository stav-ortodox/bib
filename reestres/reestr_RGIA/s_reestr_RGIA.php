<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';  

admin (); 


$id = $_REQUEST['id'];
$fond = trim(htmlentities($_REQUEST['fond']));
numeric_test ($fond, 'фонд');
$opis = trim(htmlentities($_REQUEST['opis']));
numeric_test ($opis, 'опись');
$delo = trim(htmlentities($_REQUEST['delo']));
numeric_test ($delo, 'дело');
$nach = trim(htmlentities($_REQUEST['nach']));
$okonch = trim(htmlentities($_REQUEST['okonch']));
$naimen = trim(htmlentities($_REQUEST['naimen']));
$listov = trim(htmlentities($_REQUEST['listov']));
numeric_test ($listov, 'кол-во листов');
$prim = trim(htmlentities($_REQUEST['prim']));
$tom = trim(htmlentities($_REQUEST['tom']));
$zakaz = trim(htmlentities($_REQUEST['zakaz']));
$poluch = trim(htmlentities($_REQUEST['poluch']));
$zakaz_cop = trim(htmlentities($_REQUEST['zakaz_cop']));
$poluch_cop = trim(htmlentities($_REQUEST['poluch_cop']));


 

$insert_sql = sprintf("INSERT INTO reestr_rgia (fond, opis, delo, nach, okonch, naimen, listov, prim, tom, zakaz, poluch, zakaz_cop, poluch_cop) 
	VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
   mysqli_real_escape_string($link, $fond),
   mysqli_real_escape_string($link, $opis),
   mysqli_real_escape_string($link, $delo),
   mysqli_real_escape_string($link, $nach),
   mysqli_real_escape_string($link, $okonch),
   mysqli_real_escape_string($link, $naimen),
   mysqli_real_escape_string($link, $listov),
   mysqli_real_escape_string($link, $prim),
   mysqli_real_escape_string($link, $tom),
   mysqli_real_escape_string($link, $zakaz),
   mysqli_real_escape_string($link, $poluch),
   mysqli_real_escape_string($link, $zakaz_cop),
   mysqli_real_escape_string($link, $poluch_cop),
   mysqli_insert_id($link));


mysqli_query($link, $insert_sql)
  or die(mysqli_error($link));

redirect ();
exit();
?>