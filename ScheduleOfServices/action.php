<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';  

$s_time = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['time'])));
$u_text = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['u_text'])));
$s_text = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['text'])));
$color_text = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['color-text'])));
$slugashiy = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest1'])));
$soslugashiy = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest2'])));
$pomogaushiy = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest3'])));
$otdihaushiy = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest4'])));


$insert_sql = sprintf("INSERT INTO raspisanie (s_time, u_text, s_text, color_text, slugashiy, soslugashiy, pomogaushiy, otdihaushiy) 
	VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
   mysqli_real_escape_string($link, $s_time),
   mysqli_real_escape_string($link, $u_text),
   mysqli_real_escape_string($link, $s_text),
   mysqli_real_escape_string($link, $color_text),
   mysqli_real_escape_string($link, $slugashiy),
   mysqli_real_escape_string($link, $soslugashiy),
   mysqli_real_escape_string($link, $pomogaushiy),
   mysqli_real_escape_string($link, $otdihaushiy),
   mysqli_insert_id($link));

// Insert the user into the database
mysqli_query($link, $insert_sql)
  or die(mysqli_error($link));


echo "
<script>
window.location.href = history.go(-2);
</script>";

// header("Location: p_reestr_comps.php");
exit();

?>