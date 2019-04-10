<?php 
header('Content-Type: application/json; charset=utf-8');
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/translit.php';
$response = array();
$response['status'] = 'bad';



if(!empty($_FILES['file']['tmp_name'])){

	for($key = 0; $key < count($_FILES['file']['tmp_name']); $key++) {
		$upload_path = __DIR__ . "/upload/";
		$user_filename = $_FILES['file']['name'][$key];
		$userfile_basename = pathinfo($user_filename, PATHINFO_FILENAME);
		$userfile_extension = pathinfo($user_filename, PATHINFO_EXTENSION);

		$server_filename = $userfile_basename . "." . $userfile_extension;
		$server_filepath = $upload_path . $server_filename;


		$i = 0;
		while (file_exists($server_filepath)) {
		    $i++;
		    $server_filepath = $upload_path . $userfile_basename . "($i)." . $userfile_extension;
		}
		if (copy($_FILES['file']['tmp_name'][$key], $server_filepath)) {
			$response['status'] = 'ok';
			$response['files'][] = $server_filename;
		}
	}
}

echo json_encode($response);

?>

