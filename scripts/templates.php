<?php  
// функция вывода шаблонов блоков изданий
function taplate_pb () { 

	$select_query = sprintf("SELECT * FROM publishing_blocks");
	$result = mysqli_query($link, $select_query);
	while ($row = mysqli_fetch_array($result)) {
					 // выводим данные
		if(strlen($row["block_description"])>"120") $str = "...<i class='fa fa-level-down' aria-hidden='true'></i>"; else $str = "";
			$descr_cut = mb_substr(strip_tags($row["block_description"]), 0, 120, 'utf-8');

		if ($_SESSION['id'] == 1) {  #Для админа
			$hidden = $row['block_hidden'];
			$edit = "<a href= /pages/biblioteka/p_edit_publisher_block.php?id=".$row["id"].">Редактировать</a>";
			$delete = "<a href= /pages/biblioteka/s_delete_publisher_block.php?id=".$row["id"].">Удалить блок</a>";
			
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
			$hidden = $row['block_hidden'];
			
		// Если новость длинная, то выводим троеточие...

			if ($hidden == 0) {
				$color = "display: none";}
				else {
					continue(1);
				}
			} 
?>

	<div class='col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center'>
		<div class='card pub-block'>
			<div class='no_error' style='".$color." ".$border."'><strong>".$no_error."</strong><br>".$edit."<br>".$delete."</div>
			<div class='view overlay'>

				<img class='card-img-top m-0 p-0' src=/"<?=$block_image?>" alt=''>
				<img class='card-img-top m-0 p-0' src=/".$row["pub_file"]." alt=''>

				<a href='/pages/biblioteka/p_opened_post.php?id=".$row["0"]."'>
					<div class='mask rgba-white-slight'></div>
				</a>
			</div>
			<div class='card-body'>
				<table class='pub-block-wrap' style='height: 150px;'>
					<tbody>
						<tr>
							<td class='align-top'><h4 class='card-title'>".$row["pub_name"]."<hr></h4></td>
						</tr> 
						<tr>
							<td class='align-bottom'><a href='/pages/biblioteka/p_opened_post.php?id=".$row["0"]."'><p class='card-text align-text-bottom'>".$row["pub_description"]."</p></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<? } }



?>