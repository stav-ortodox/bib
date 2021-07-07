<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';  

admin ();  


$name = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['name'])));
$desk = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['desk'])));
$type = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['type'])));
$zakaz = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['zakaz'])));
$izgotov = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['izgotov'])));
$dostav = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['dostav'])));




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


$insert_sql = sprintf("INSERT INTO reestr_icons (name, desk, type, zakaz, izgotov, dostav, image) 
	VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
   mysqli_real_escape_string($link, $name),
   mysqli_real_escape_string($link, $desk),
   mysqli_real_escape_string($link, $type),
   mysqli_real_escape_string($link, $zakaz),
   mysqli_real_escape_string($link, $izgotov),
   mysqli_real_escape_string($link, $dostav),
   mysqli_real_escape_string($link, $name_img),
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