<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';  

admin ();  

var_dump($_REQUEST);

$s_date = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['s_date'])));
$week = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['week'])));
$s_time = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['s_time'])));
$u_text = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['u_text'])));
$u_color_text = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['u_color_text'])));
$s_text = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['s_text'])));
$color_text = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['color_text'])));
$priest1 = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest1'])));
$priest2 = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest2'])));
$priest3 = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest3'])));
$priest4 = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['priest4'])));



if (isset($_FILES['image'])) {
	$errors = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
	$expensions = array("jpeg", "jpg", "png");

			if ($file_size > 19097152) {
				$errors[] = 'Файл должен быть не более 2мб';
			}

			if (empty($errors) == true) {
				$upload_dir = 'uploads/icons/';
				$name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; 
				$mov = move_uploaded_file($_FILES['image']['tmp_name'],$name_img);
					
			} else {
				print $errors;
			}
		}


$insert_sql = sprintf("INSERT INTO raspisanie (s_date, week, s_time, u_text, u_color_text, s_text, color_text, priest1, priest2, priest3, priest4) 
	VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
   mysqli_real_escape_string($link, $s_date),
   mysqli_real_escape_string($link, $week),
   mysqli_real_escape_string($link, $s_time),
   mysqli_real_escape_string($link, $u_text),
   mysqli_real_escape_string($link, $u_color_text),
   mysqli_real_escape_string($link, $s_text),
   mysqli_real_escape_string($link, $color_text),
   mysqli_real_escape_string($link, $priest1),
   mysqli_real_escape_string($link, $priest2),
   mysqli_real_escape_string($link, $priest3),
   mysqli_real_escape_string($link, $priest4),
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