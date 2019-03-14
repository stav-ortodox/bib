<?php  
// функция вывода шаблонов блоков изданий
function taplate_pb () { 

	global $link;
	$query = sprintf("SELECT * FROM publishing_blocks");
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result)) {

		// echo "<pre>";
		// 	 var_dump($row);
		// echo "</pre>";
			
			$id_pb = $row["id"];
			$name_pb = $row["block_name"];
			$descr_pb = $row["block_description"];
			$image_pb = $row["block_image"];
			$hidden = $row['block_hidden'];

		// выводим данные

		if (strlen($descr_pb)>170) {
			$str = "..."; 
		} 
		else {
			$str = "";
		}
		$descr_cut = mb_substr(strip_tags($descr_pb), 0, 120, 'utf-8');


		if ($_SESSION['id'] == 1) {  #Для админа
			
			$edit = "<a href= /pages/biblioteka/p_edit_publisher_block.php?id=".$id_pb.">Редактировать</a>";
			$delete = "<a href= /pages/biblioteka/s_delete_publisher_block.php?id=".$id_pb.">Удалить блок</a>";
			
			if ($hidden == 0) {
				$no_error = 'блок открыт';
				$color = "color: green;";
				$border = "border: solid 1px green;";
			}
			if ($hidden == 1) {
				$no_error = 'блок скрыт';
				$color = "color: red;";
				$border = "border: solid 1px #E47F50;";
			}
		}
		if ($_SESSION['id'] == null or $_SESSION['id'] > 1) {
			

			if ($hidden == 0) {
				$color = "display: none";}
				else {
					continue(1);
				}
			} 
	?>

	<div class='col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center'>
		<div class='card pub-block'>
			<div class='no_error' style='<?= $color . $border ?>'><strong><?=$no_error?></strong><br><?=$edit?><br><?=$delete?></div>
			<table class='pub-block-wrap' style='height: 150px;'>
				<tbody>
					<tr>
						<td class=''><h4 class='card-title'><?=$name_pb?><hr></h4></td>
					</tr> 
				</tbody>
			</table>
			<div class='image_pb'>
				<a href='/pages/biblioteka/p_publishing_page.php?id=<?=$id_pb?>'>
					<img class='img-fluid' src='/<?=$image_pb?>' alt=''>
				</a>
			</div>
			<div class='card-body'>
				<table class='pub-block-wrap' style='height: 150px;'>
					<tbody>
						<hr>
						<tr>
							<td class=''><a href='/pages/biblioteka/p_publishing_page.php?id=<?=$id_pb?>'><p class='card-text align-text-bottom'><?=$descr_cut . $str?></p></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<? } }



?>