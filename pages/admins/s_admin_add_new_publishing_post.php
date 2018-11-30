<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';


$block_name_sel = $_REQUEST['select_block'];
$pub_name = trim($_REQUEST['pub_name']);
$pub_description = trim($_REQUEST['pub_description']);
$pub_hidden = ($_REQUEST['pub_hidden']);
$block_id = 111;




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



 // var_dump($_GET);
// echo "<br>";
// var_dump($block_id);
// echo "<br>";
// var_dump($pub_name);
// echo "<br>";
// var_dump($pub_description);
// echo "<br>";
// var_dump($name_img);
// echo "<br>";
// var_dump($name_file);
// echo "<br>";
// var_dump($pub_hidden);
// echo "<br>";
// var_dump($_FILES['pub_image']);
// echo "<br>";
// var_dump($_FILES['pub_file']);
// echo "<br>";


$insert_sql = sprintf("INSERT INTO publishing_post (select_block, block_id,  pub_name, pub_description, pub_image, pub_file, pub_hidden) 
	VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
			mysqli_real_escape_string($link, $block_name_sel),
			mysqli_real_escape_string($link, $block_id),
   mysqli_real_escape_string($link, $pub_name),
   mysqli_real_escape_string($link, $pub_description),
   mysqli_real_escape_string($link, $name_img),
   mysqli_real_escape_string($link, $name_file),
   mysqli_real_escape_string($link, $pub_hidden),
   mysqli_insert_id($link));

// Insert the user into the database
mysqli_query($link, $insert_sql)
  or die(mysqli_connect_error($link)); 



$id = (mysqli_insert_id($link));



$sql = "SELECT id FROM publishing_blocks WHERE block_name='$block_name_sel'";
            $result = mysqli_query($link, $sql) or die ("Ошибка " . mysqli_error($link));
             while($object = mysqli_fetch_object($result))
$new_block_id = $object->id;

$query ="UPDATE publishing_post SET 
            block_id='$new_block_id'

            WHERE id='$id'";
            $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
               // echo "загруженa переменная ".$new_block_id."";
   

// Redirect the user to the page that displays user information
header("Location: /pages/biblioteka/p_publishing_page.php?id=$new_block_id");

exit();




?>