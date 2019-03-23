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


/**************************************************************************************************************/
// функция вывода шаблона единицы издания (publishing post)
function template_pp () { 
	global $link; 
	$select_query = sprintf("SELECT publishing_post.*, publishing_blocks.id FROM publishing_post, publishing_blocks WHERE publishing_post.block_id = publishing_blocks.id");

	$id_page = $_REQUEST['id'];
	$query_id_page = sprintf("SELECT * FROM	publishing_blocks WHERE id = $id_page");
	$result = mysqli_query($link, $query_id_page) or die ("Ошибка " . mysqli_error($link));

	    //если в запросе более нуля строк
	    if($result && mysqli_num_rows($result)>0) 
	    {
	        $row = mysqli_fetch_row($result); // получаем первую строку
	        $name_page = $row[1];
	        $block_image = $row[2];
	        $block_description = $row[3];
	        $block_hidden = $row[4];
		
	        mysqli_free_result($result);
	}?>

	<div class="row">

		<? $result = mysqli_query($link, $select_query);
				while ($row = mysqli_fetch_array($result)) {
	 			// выводим данные
					// echo "<pre>";
					// 	 var_dump($row);
					// echo "</pre>";
					// exit();
				if ($_SESSION['id'] == 1) {  #Для админа

					$hidden = $row['pub_hidden'];
					$edit = "<a href= /pages/admins/p_edit_publisher_post.php?id=".$row["id"].">Редактировать</a>";
					$delete = "<a href= /pages/admins/s_delete_publisher_post.php?id=".$row["id"].">Удалить единицу</a>";

					if ($hidden == 0) {
						$no_error = 'файл открыт';
						$color = "color: green";
						$border = "border: solid 1px green;";
					}

					if ($hidden == 1) {
						$no_error = 'файл скрыт';
						$color = "color: red";
						$border = "border: solid 1px #E47F50;";
					}
				}

				if ($_SESSION['id'] == null or $_SESSION['id'] > 1) {
					$hidden = $row['pub_hidden'];

					if ($hidden == 0) {
						$color = "display: none";
					}
					else {
						continue(1);
					}
				}

				if ($_GET['id'] == $row["block_id"]) { ?>
					
					<div class='col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center'>
						<div class='card pub-block'>
							<div class='no_error' style='<?= $color . $border ?>'><strong><?=$no_error?></strong><br><?=$edit?><br><?=$delete?></div>
							<table class='pub-block-wrap card-title-color'>
									<tbody>
										<tr>
											<td><h4 class='card-title-my'><?=$row["pub_name"]?></h4></td>
										</tr> 
									</tbody>
								</table>
							<div class='view overlay'>

								<img class='img-fluid m-0 p-0' src=/<?=$row["pub_image"]?> alt=''>
								<img class='img-fluid m-0 p-0' src=/<?=$row["pub_file"]?> alt=''>

								<a href='/pages/biblioteka/p_opened_post.php?id=<?=$row["0"]?>'>
									<div class='mask rgba-white-slight'></div>
								</a>
							</div>
							<div class='card-body'>
								<br>
								<table class='pub-block-wrap'>
									<tbody>
										<tr>
											<td class='align-bottom'><a href='/pages/biblioteka/p_opened_post.php?id=<?=$row["id"]?>'><p class='card-text align-text-bottom'><?=$row["pub_description"]?></p></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						</div> <?}}?>
					</div>
<?}

?>