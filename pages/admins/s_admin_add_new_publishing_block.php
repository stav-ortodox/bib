<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

$block_name = trim($_REQUEST['block_name']);
$block_description = trim($_REQUEST['block_description']);
$block_hidden = $_REQUEST['block_hidden'];


if (isset($_FILES['block_image'])) {
	$errors = array();
	$file_name = $_FILES['block_image']['name'];
	$file_size = $_FILES['block_image']['size'];
	$file_tmp = $_FILES['block_image']['tmp_name'];
	$file_type = $_FILES['block_image']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['block_image']['name'])));
	$expensions = array("jpeg", "jpg", "png");

			if ($file_size > 2097152) {
				$errors[] = 'Файл должен быть не более 2мб';
			}

			if (empty($errors) == true) {
				$upload_dir = '../../images/biblioteka/publishing_blocks/';
				$name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; 
				$mov = move_uploaded_file($file_tmp, $name_img);
					
			} else {
				$_SESSION['errors'] = $errors;
				header('Location: '.PATH.'pages/admins/s_admin_add_new_publishing_block.php');
		}
}


$insert_sql = sprintf("INSERT INTO publishing_blocks (block_name, block_image, block_description,
block_path, block_hidden)	VALUES ('%s', '%s', '%s', '%s', '%s')",
   mysqli_real_escape_string($link, $block_name),
   mysqli_real_escape_string($link, $name_img),
   mysqli_real_escape_string($link, $block_description),
   mysqli_real_escape_string($link, $block_path),
   mysqli_real_escape_string($link, $block_hidden),
   mysqli_insert_id($link));
		// Insert the user into the database
	mysqli_query($link, $insert_sql) or die(mysqli_error($link));
	$id = mysqli_insert_id($link);
	$block_path = '/pages/biblioteka/p_publishing_page.php?id='.$id;


  $query = "UPDATE publishing_blocks SET block_path = '$block_path' WHERE id='$id'";
 	$result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 


// Redirect the user to the page that displays user information
header('Location: '.PATH.'pages/p_biblioteka.php');
exit();
?>