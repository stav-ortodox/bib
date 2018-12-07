<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';  


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
$gotovnost = trim($_REQUEST['gotovnost']);



$insert_sql = sprintf("INSERT INTO reestr_rgia (fond, opis, delo, nach, okonch, naimen, listov, prim, tom, zakaz, poluch, zakaz_cop, poluch_cop, gotovnost) 
	VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
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
   mysqli_real_escape_string($link, $gotovnost),
   
   mysqli_insert_id($link));

// Insert the user into the database
mysqli_query($link, $insert_sql)
  or die(mysqli_connect_error($link));



// Redirect the user to the page that displays user information
header("Location: p_reestr_RGIA.php");
exit();
?>