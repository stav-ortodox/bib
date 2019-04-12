<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

$id_pb = (int)$_REQUEST['id_pb'];
$pub_name = trim(htmlentities($_REQUEST['pub_name']));
$pub_description = trim(htmlentities($_REQUEST['pub_description']));
$pub_hidden = (int)($_REQUEST['pub_hidden']);


// получение имени блока издания
$query = ("SELECT block_name FROM publishing_blocks WHERE id = $id_pb");
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$name_pb = $row["block_name"]; 
$errors = array();

if (isset($_FILES['pub_image'])) {
	$file_name = $_FILES['pub_image']['name'];
	$file_size = $_FILES['pub_image']['size'];
	$file_tmp = $_FILES['pub_image']['tmp_name'];
	$file_type = $_FILES['pub_image']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['pub_image']['name'])));
	$expensions = array("jpeg", "jpg", "png");

			if ($file_size > 3097152) {
				$errors[] = 'Файл должен быть не более 3 мб';
			}

			if (empty($errors) == true) {
				$upload_dir = '../../images/biblioteka/publishing_posts/';
				$name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg';
				$mov = move_uploaded_file($file_tmp, $name_img);
					
			} else {
				echo "<pre>";
				var_dump($errors);
				echo "</pre>";
			}
}


if (isset($_FILES['pub_file'])) {
	$errors_file = array();
	$file_name_file = $_FILES['pub_file']['name'];
	$file_size_file = $_FILES['pub_file']['size'];
	$file_tmp_file = $_FILES['pub_file']['tmp_name'];
	$file_type_file = $_FILES['pub_file']['type'];
	$file_ext_file = strtolower(end(explode('.', $_FILES['pub_file']['name'])));
	$expensions_file = array("pdf");

			if ($file_size_file > 3097152) {
				$errors_file[] = 'Файл должен быть не более 3 мб';
			}

			if (empty($errors) == true) {
				$upload_file_dir = '../../images/biblioteka/publishing_files/';
				$name_file = $upload_file_dir.date('YmdHis').rand(100,1000).'.pdf'; 
				$mov_file = move_uploaded_file($file_tmp_file, $name_file);
					
			} else {
				echo "<pre>";
				var_dump($errors_file);
				echo "</pre>";
			}
}


$insert_sql = sprintf("INSERT INTO publishing_post (block_id, block_name, pub_name, pub_description, pub_image, pub_file, pub_hidden) 
	VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
		mysqli_real_escape_string($link, $id_pb),
		mysqli_real_escape_string($link, $name_pb),
		mysqli_real_escape_string($link, $pub_name),
		mysqli_real_escape_string($link, $pub_description),
		mysqli_real_escape_string($link, $name_img),
		mysqli_real_escape_string($link, $name_file),
		mysqli_real_escape_string($link, $pub_hidden),
		mysqli_insert_id($link));

// Insert the user into the database
mysqli_query($link, $insert_sql) or die(mysqli_connect_error($link));
$id = mysqli_insert_id($link);


header("Location: /pages/biblioteka/p_publishing_page.php?id=$id_pb");

exit('!');

?>