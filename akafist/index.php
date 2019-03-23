<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_functions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_app_config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
echo '<br>';
get_header_doc ('', 'Акафист');
admin ();
get_menu ();?>
<link rel="stylesheet" href="style.css">
<div class="akafist-icon">
<img class="img-thumbnail ml-4" src="http://bib/akafist/images/p1bblr685q1hjr1rv3q0k14od16794.jpg" alt="">
</div>
<?table_reestr_comp('Акафист святым сорока мученикам Севастийским');

?>

<br><br><br>
<div class="copyright text-center">
    <span>Издательский центр храма св. Великомученика и Целителя Пантелеимона</span> <br>
    <small>Ставрополь 2019 г.</small>
</div>

<?php akafist('http://bib/akafist/') ?>

<br><br><br><br>
<h3>Список распечатанных акафистов</h3>
<ul>
	<li>Акафист священномученику Власию, епископу Севастийскому 1 экз.</li>
	<li>Акафист святым сорока мученикам Севастийским 3 экз. 22/03/19</li>
</ul>