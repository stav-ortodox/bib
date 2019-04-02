<?php
$uploaddir = './uploads/'; 
$file = $uploaddir . basename($_FILES['uploadfile']['name']); 
 
$ext = substr($_FILES['uploadfile']['name'],strpos($_FILES['uploadfile']['name'],'.'),strlen($_FILES['uploadfile']['name'])-1); 
$filetypes = array('.bmp','.jpg','.png','.jpeg','.gif','.BMP','.JPG','.PNG','.JPEG','.GIF');
 
if(!in_array($ext,$filetypes)){
	echo "<p>Данный формат файлов не поддерживается</p>";}
else{ 
	if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) { 
	  echo "success"; 
	} else {
		echo "error";
	}
}
 

?>