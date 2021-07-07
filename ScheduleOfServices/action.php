<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';   

$s_date = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['s_date'])));
$s_time = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['s_time'])));
$u_text = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['u_text'])));
$s_text = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['text'])));
$color_text = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['color-text'])));
$slugashiy = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest1'])));
$soslugashiy = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest2'])));
$pomogaushiy = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest3'])));
$otdihaushiy = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest4'])));
$id_day = rand();


$insert_sql = sprintf("INSERT INTO raspisanie (id_day, s_date, s_time, u_text, s_text, color_text, slugashiy, soslugashiy, pomogaushiy, otdihaushiy) 
	VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
	mysqli_real_escape_string($link, $id_day),
	mysqli_real_escape_string($link, $s_date),
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



if (isset($_REQUEST['plus'])) {
 	

	echo "
		<script>
		window.location.href = history.go(-1);
		</script>";
			
		}
 


echo "
<script>
window.location.href = history.go(-2);
</script>";



?>