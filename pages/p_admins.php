<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_biblioteka_functions.php';
admin ();
get_header_site ('Администрация', 'Электронная библиотека храма святого Великомученика и Целителя Пантелеимона <br> г. Ставрополь');
new_menu ();
page_title ('Страница администратора'); 
?>

<ul>
	<li><a href="/pages/admins/p_admin_add_new_publishing_block.php">Добавить новый блок издания</a></li>
	<li><a href="/pages/admins/p_admin_add_new_publishing_block.php">Добавить новое издание в существующий блок издания</a></li>
	<li><a href="/reestres/reestr_RGIA/p_reestr_RGIA.php">Реестр дел из РГИА</a></li>
	<li><a href="/reestres/reestr_comps/p_reestr_comps.php">Реестр техники</a></li>
</ul>













<?php 
get_footer ();
?>