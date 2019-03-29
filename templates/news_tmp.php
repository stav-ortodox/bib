<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';
		$query = ("SELECT * FROM news");
		$result = mysqli_query($link, $query);
		
		foreach ($result as $row) {
		$id = $row['id'];
		$title = $row['title'];
		$text = $row['text'];
		$image = $row['image'];
		$date = $row['date'];
		$views = $row['views'];
		$repost_fb = $row['repost_fb'];
		$repost_vk = $row['repost_vk'];
		$repost_ok = $row['repost_ok'];

		if (strlen($text)>120) {
			$str = "..."; 
		} 
		else {
			$str = "";
		}
		$text = mb_substr(strip_tags($text), 0, 200, 'utf-8');
		?>
  <!-- Card image -->
  <div class="news card">
  <div class="view overlay news_img">
    <img class="img-fluid" src="<?=PATH.'images/news/'.$image?>" alt="Card image cap">
    <a href="<?=PATH?>pages/p_big_news.php?id=<?=$id?>">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Button -->
  <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"></a>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <a href="<?=PATH?>pages/p_big_news.php?id=<?=$id?>"><h4 class="card-title"><?=$title?></h4></a>
    <hr>
    <!-- Text -->
    <p class="card-text"><?=$text . $str?><a href="<?=PATH?>pages/p_big_news.php?id=<?=$id?>">подробнее</a></p>

  </div>

  <!-- Card footer -->
  <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
    <ul class="list-unstyled list-inline font-small">
      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i><?=$date?></li>
      <li class="list-inline-item white-text pr-2"><i class="far fa-eye pr-1"></i><?=$views?></li>
      <li class="list-inline-item white-text pr-2"><i class="fab fa-odnoklassniki pr-1"></i><?=$repost_ok?></li>
      <li class="list-inline-item white-text pr-2"><i class="fab fa-facebook-f pr-1"> </i><?=$repost_fb?></li>
      <li class="list-inline-item white-text "><i class="fab fa-vk pr-1"></i><?=$repost_vk?></li>
    </ul>
  </div>
  </div>
<?php } ?>

