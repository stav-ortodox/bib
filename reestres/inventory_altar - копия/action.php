<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';  

admin (); 
$id = $_REQUEST['id'];
$name = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['name'])));
$count = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['count'])));
$position = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['position'])));
$desk = trim(htmlentities(mysqli_real_escape_string($link,$_REQUEST['desk'])));


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


$insert_sql = "INSERT INTO inventory_altar (name, count, image, position, desk)
	VALUES ('$name', '$count', '$name_img', '$position', '$desk')";
mysqli_query($link, $insert_sql)

or die(mysqli_error($link));
mysqli_insert_id($link);
  
// var_dump($_REQUEST);
// exit();

echo "
<script>
window.location.href = history.go(-2);
</script>";

// header("Location: p_reestr_comps.php");
exit();
?>