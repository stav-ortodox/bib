<?php 

// функция добавления нового блока издания
function add_new_publishing_block ($block_name, $block_image, $block_hidden, $block_id, $block_description) {

	echo <<<EOD
		<div class="row col-lg-4 col-md-4 col-sm-6 col-xs-12 $block_hidden">
			<div class="prew-block"><a href="$block_id"><h3>$block_name</h3><hr><img src="$block_image" alt=""></a>	
			</div>
		</div>
EOD;
}


?>