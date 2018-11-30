<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';  


$name = trim($_REQUEST['name']);
$name_type = trim($_REQUEST['name_type']);
$characterics = trim($_REQUEST['characterics']);
$place = trim($_REQUEST['place']);
$of_face = trim($_REQUEST['of_face']);
$sost = trim($_REQUEST['sost']);



if (isset($_FILES['image'])) {
	$errors = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
	$expensions = array("jpeg", "jpg", "png");

			if ($file_size > 2097152) {
				$errors[] = 'Файл должен быть не более 2мб';
			}

			if (empty($errors) == true) {
				$upload_dir = '../uploads/reestr_comp/';
				$name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
				$mov = move_uploaded_file($_FILES['image']['tmp_name'],$name_img);
					
			} else {
				print $errors;
			}
}




$insert_sql = sprintf("INSERT INTO reestr_comps (name, name_type, characterics, place, of_face, sost, image) 
	VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
   mysqli_real_escape_string($link, $name),
   mysqli_real_escape_string($link, $name_type),
   mysqli_real_escape_string($link, $characterics),
   mysqli_real_escape_string($link, $place),
   mysqli_real_escape_string($link, $of_face),
   mysqli_real_escape_string($link, $sost),
   mysqli_real_escape_string($link, $name_img),
   mysqli_insert_id($link));

// Insert the user into the database
mysqli_query($link, $insert_sql)
  or die(mysqli_connect_error($link));



// Redirect the user to the page that displays user information
header("Location: ../pages/p_reestr_comp.php");
exit();
?>