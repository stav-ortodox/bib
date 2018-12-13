<?php 
session_start(); 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 

admin ();


$id = $_REQUEST['id'];
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

if ($listov == null) $listov = '';
if ($fond == null) $fond = '';
if ($opis == null) $opis = '';
if ($delo == null) $delo = '';
if ($nach == null) $nach = '';
if ($okonch == null) $okonch = '';
if ($naimen == null) $naimen = '';
if ($prim == null) $prim = '';
if ($tom == null) $tom = '';
if ($zakaz == null) $zakaz = '';
if ($poluch == null) $poluch = '';
if ($zakaz_cop == null) $zakaz_cop = '';
if ($poluch_cop == null) $poluch_cop = '';



$query ="UPDATE reestr_rgia SET 
         fond='$fond',
         opis='$opis',
         delo='$delo',
         nach='$nach',
         okonch='$okonch',
         naimen='$naimen',
         listov='$listov',
         prim='$prim',
         tom='$tom',
         zakaz='$zakaz',
         poluch='$poluch',
         zakaz_cop='$zakaz_cop',
         poluch_cop='$poluch_cop'
         

       WHERE id='$id'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
 
    if($result)
        header('Location: p_reestr_rgia.php');?>