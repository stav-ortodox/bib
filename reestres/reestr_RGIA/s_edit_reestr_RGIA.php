<?php 



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
$gotovnost = trim($_REQUEST['gotovnost']);


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
         poluch_cop='$poluch_cop',
         gotovnost='$gotovnost'

       WHERE id='$id'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
        header('Location: p_reestr_rgia.php');?>