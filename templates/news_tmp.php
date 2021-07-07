<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/scripts/s_connect.php';

if ($_SERVER["SCRIPT_NAME"] == '/index.php') {
  $query = ("SELECT * FROM news ORDER BY id DESC LIMIT 6");
} elseif ($_SERVER["SCRIPT_NAME"] == '/pages/p_news.php'){
  $query = ("SELECT * FROM news ORDER BY id DESC");
} elseif ($_SERVER["SCRIPT_NAME"] == '/pages/p_taxonomy.php') {
  $id = $_GET['id'];
  $query = ("SELECT taxonomy FROM news WHERE id = $id");
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_assoc($result);
  $taxonomy = $row['taxonomy'];
  $query = ("SELECT * FROM news WHERE taxonomy = '$taxonomy' ORDER BY id DESC");
} 

$result = mysqli_query($link, $query);

foreach ($result as $row) {
  $id = $row['id'];
  $title = $row['title'];
  $text = $row['n_text'];
  $taxonomy = $row['taxonomy'];
  $image = $row['image'];
  $SelectDate = htmlspecialchars($row['date']);
  $date = date('d-m-Y', strtotime($SelectDate));
  $views = $row['views'];
  $repost_fb = $row['repost_fb'];
  $repost_vk = $row['repost_vk'];
  $repost_ok = $row['repost_ok'];

// вывод картинок слайдера
  $query = ("SELECT path_image FROM path_image WHERE id_news = '$id'");
  $result = mysqli_query($link, $query);

  if (strlen($text)>120) {
    $str = "..."; 
  } 
  else {
    $str = "";
  }
  $text = mb_substr(strip_tags($text), 0, 200, 'utf-8');
  ?>
  <!-- Card image -->
  <div class="card mb-5 w-100">
    <div class="d-flex flex-row mdb-color lighten-5">

      <div class="news_img">
       
        <a href="<?=PATH?>pages/p_big_news.php?id=<?=$id?>">
        <img class="" src="<?=PATH.'images/news/'.$image?>" alt="Card image cap">
        
        <div class="mask rgba-white-slight"> 
        
        </div>
        </a>
      </div>
      <div class="d-flex flex-column">
      <!-- Card content -->
      <div class="card-body mdb-color lighten-5">
        <!-- Title -->
        <a href="<?=PATH?>pages/p_big_news.php?id=<?=$id?>">
          <h5 class="card-title text-center"><?=$title . $str1?></h5>
        </a>
        <hr>
      </div>
    
      <div class="card-body pt-0 pb-0">
        <!-- Text -->
        <p class="card-text text-justify"><?=$text . $str?>
          <a href="<?=PATH?>pages/p_big_news.php?id=<?=$id?>">подробнее</a>
        </p>
      </div>
      </div>
    </div>
    
    <!-- Card footer -->
    <div class="d-flex column rounded-bottom mdb-color lighten-3 text-center pt-3">
      <ul class="list-unstyled list-inline font-small ml-4">
        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i><?=$date?></li>
        <li class="list-inline-item white-text pr-2"><i class="far fa-eye pr-1"></i><?=$views?></li>
        <li class="list-inline-item white-text pr-2"><i class="fab fa-odnoklassniki pr-1"></i><?=$repost_ok?></li>
        <li class="list-inline-item white-text pr-2"><i class="fab fa-facebook-f pr-1"> </i><?=$repost_fb?></li>
        <li class="list-inline-item white-text "><i class="fab fa-vk pr-1"></i><?=$repost_vk?></li>
      </ul>
      <?php btn_edit($id) ?>
    </div>

  </div>

<?php } ?>

