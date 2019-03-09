<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
// require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
// require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

// echo "<pre>";
// var_dump($_REQUEST);
// echo "</pre>";

$block_name_sel = htmlentities(mysqli_real_escape_string($link, $_REQUEST['select_block']));
$pub_name = trim(htmlentities(mysqli_real_escape_string($link, $_REQUEST['pub_name'])));
$pub_description = trim(htmlentities(mysqli_real_escape_string($link, $_REQUEST['pub_description'])));
$pub_hidden = (int)($_REQUEST['pub_hidden']);
// $block_id = 111;



if (isset($_FILES['pub_image'])) {
	$errors = array();
	$file_name = $_FILES['pub_image']['name'];
	$file_size = $_FILES['pub_image']['size'];
	$file_tmp = $_FILES['pub_image']['tmp_name'];
	$file_type = $_FILES['pub_image']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['pub_image']['name'])));
	$expensions = array("jpeg", "jpg", "png");

			if ($file_size > 2097152) {
				$errors[] = 'Файл должен быть не более 2 мб';
			}

			if (empty($errors) == true) {
				$upload_dir = '../../images/biblioteka/publishing_blocks/';
				$name_img = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
				$mov = move_uploaded_file($_FILES['pub_image']['tmp_name'],$name_img);
					
			} else {
				print $errors;
			}
}


if (isset($_FILES['pub_file'])) {
	$errors_file = array();
	$file_name_file = $_FILES['pub_file']['name'];
	$file_size_file = $_FILES['pub_file']['size'];
	$file_tmp_file = $_FILES['pub_file']['tmp_name'];
	$file_type_file = $_FILES['pub_file']['type'];
	$file_ext_file = strtolower(end(explode('.', $_FILES['pub_file']['name'])));
	$expensions_file = array("jpeg", "jpg", "png");

			if ($file_size_file > 2097152) {
				$errors_file[] = 'Файл должен быть не более 2 мб';
			}

			if (empty($errors) == true) {
				$upload_file_dir = '../../images/biblioteka/publishing_files/';
				$name_file = $upload_file_dir.date('YmdHis').rand(100,1000).'.jpg'; // 
				$mov_file = move_uploaded_file($_FILES['pub_file']['tmp_name'],$name_file);
					
			} else {
				print $errors_file;
			}
}
echo "<pre>";
var_dump($block_name_sel);
echo "</pre>";

$insert_sql = sprintf("INSERT INTO publishing_post (select_block, pub_name, pub_description, pub_image, pub_file, pub_hidden) 
	VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
		mysqli_real_escape_string($link, $block_name_sel),
		mysqli_real_escape_string($link, $pub_name),
		mysqli_real_escape_string($link, $pub_description),
		mysqli_real_escape_string($link, $name_img),
		mysqli_real_escape_string($link, $name_file),
		mysqli_real_escape_string($link, $pub_hidden),
		mysqli_insert_id($link));

// Insert the user into the database
mysqli_query($link, $insert_sql)
  or die(mysqli_connect_error($link)); 

$id = mysqli_insert_id($link);

$sql = htmlspecialchars("SELECT id FROM publishing_blocks WHERE block_name = '$block_name_sel'");
$result = mysqli_query($link, $sql) or die ("Ошибка " . mysqli_error($link));
		if($result && mysqli_num_rows($result)>0) {
			$row = mysqli_fetch_row($result); // получаем первую строку
			$new_block_id = (int)$row[0];
			mysqli_free_result($result);
		}



$query =sprintf("INSERT INTO publishing_post (block_id) WHERE id='$id' VALUES ('%s')",
mysqli_real_escape_string($link, $block_id));


$result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
               // echo "загруженa переменная ".$new_block_id."";
   

// Redirect the user to the page that displays user information
header("Location: /pages/biblioteka/p_publishing_page.php?id=$new_block_id");

exit('!');




?>