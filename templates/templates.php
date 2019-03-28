<!-- шаблон единицы издания -->

<div class='col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center mb-5'>
	<div class='card pub-block'>
		<div class='no_error' style='<?= $color . $border ?>'><strong><?=$no_error?></strong><br><?=$edit?><br><?=$delete?></div>
		<table class='pub-block-wrap card-title-color'>
			<tbody>
				<tr>
					<td><h4 class='card-title-my'><?=$block_name?></h4></td>
				</tr> 
			</tbody>
		</table>
		<div class='view overlay'>

			<img class='img-fluid m-0 p-0' src=/<?=$image_pp?> alt=''>
			<img class='img-fluid m-0 p-0' src=/<?=$image_pf?> alt=''>

			<a href='/pages/biblioteka/p_opened_post.php?id=<?=$id_pp?>'>
				<div class='mask rgba-stylish-light'></div>
			</a>
		</div>
		<div class='card-body card-title-color'>
			
			<table class='pub-block-wrap'>
				<tbody>
					<tr>
						<p class="text-center m-0"><b><?=$name_pp?></b></p><hr>
						<td class='align-bottom'><a href='/pages/biblioteka/p_opened_post.php?id=<?=$id_pp?>'><p class='card-text card-text-my align-text-bottom'><?=$descr_cut . $str?></p></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
