<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
get_header_doc ('', 'Акафист');
table_reestr_comp('Акафист святой равноапостольной Нине, просветительнице Грузии');
admin ();
get_menu ();
?>
<link rel="stylesheet" href="style.css">
<div class="akafist-icon">
<img class="img-fluid img-thumbnail" src="images/d3257cbc93aac6f767d35207a1lo--kartiny-i-panno-nina-svyataya-ravnoapostolnaya-prosvetitelnit.jpg" alt="">
</div>
<div class="copyright text-center">
    <span>Издательский центр храма св. Великомученика и Целителя Пантелеимона</span> <br>
    <small>Ставрополь 2019 г.</small>
</div>