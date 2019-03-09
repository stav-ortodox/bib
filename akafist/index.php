<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
get_header_doc ('', 'Акафист');
admin ();
get_menu ();?>
<link rel="stylesheet" href="style.css">
<div class="akafist-icon">
<img class="img-thumbnail ml-4" src="https://azbyka.ru/days/assets/img/saints/815/p19053a77557n1ab31s5r12jmsul3.jpg" alt="">
</div>
<?table_reestr_comp('Акафист священномученику Власию, епископу Севастийскому');

?>


<div class="copyright text-center">
    <span>Издательский центр храма св. Великомученика и Целителя Пантелеимона</span> <br>
    <small>Ставрополь 2019 г.</small>
</div>


<h3>Список распечатанных акафистов</h3>
<ul>
	<li>Акафист священномученику Власию, епископу Севастийскому 1 экз.</li>
</ul>