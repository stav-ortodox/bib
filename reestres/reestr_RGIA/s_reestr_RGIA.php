<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';  

admin (); 


$fond = trim($_REQUEST['fond']);
$opis = trim($_REQUEST['opis']);
$delo = trim($_REQUEST['delo']);
$nach = trim($_REQUEST['nach']);
$okonch = trim($_REQUEST['okonch']);
$naimen = trim($_REQUEST['naimen']);
$listov = trim($_REQUEST['listov']);
$prim = trim($_REQUEST['prim']);
$tom = trim($_REQUEST['tom']);
$zakaz = trim($_REQUEST['zakaz']);
$poluch = trim($_REQUEST['poluch']);
$zakaz_cop = trim($_REQUEST['zakaz_cop']);
$poluch_cop = trim($_REQUEST['poluch_cop']);


 

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

echo "<script>window.location.href = history.go(-2);
    </script>";
exit();
?>