<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';  
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';

get_header_site ('Новости', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');



new_menu ();

// big_news();
        
get_footer ();?>