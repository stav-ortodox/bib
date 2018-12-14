<?php 
session_start(); 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php'; 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php'; 

admin ();


$id = $_REQUEST['id'];
$name = trim($_REQUEST['name']);
$name_type = trim($_REQUEST['name_type']);
$characterics = trim($_REQUEST['characterics']);
$place = trim($_REQUEST['place']);
$of_face = trim($_REQUEST['of_face']);
$sost = trim($_REQUEST['sost']);
$image = $_REQUEST['image'];
var_dump($image);
if ($name== null) $name = '';
if ($name_type == null) $name_type = '';
if ($characterics == null) $characterics = '';
if ($place == null) $place = '';
if ($of_face == null) $of_face = '';
if ($sost == null) $sost = '';
if ($image == null) $image = '';

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
                $upload_dir = 'uploads/';
                $image = $upload_dir.date('YmdHis').rand(100,1000).'.jpg'; 
                $mov = move_uploaded_file($_FILES['image']['tmp_name'],$image);
       
            } else {
                print $errors;
            }
        }
var_dump($image);
$query ="UPDATE reestr_comps SET 
         name='$name',
         name_type='$name_type',
         characterics='$characterics',
         place='$place',
         of_face='$of_face',
         sost='$sost',
         image='$image'
       WHERE id='$id'";
    $result = mysqli_query($link, $query) or die ("Ошибка " . mysqli_error($link)); 
 
    if($result)
       echo "<script>window.location.href = history.go(-2);
    </script>";?>