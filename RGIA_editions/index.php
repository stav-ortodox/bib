<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';


get_header_doc ('Издания догументов РГИА', 'Издания догументов РГИА');
admin ();
get_menu ();
?>

