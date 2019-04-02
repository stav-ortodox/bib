   <?php views_update('news', $_GET['id']);  ?> 
    <main>
      <div class="col-sm-0 col-lg-2">
       <?php get_sidebar (); ?>
     </div>
     <section class="container m-auto">
      <!-- блок что нового? -->
      <div>
        <div class="page_title text-center"><h2><?=$title?></h2></div>
      </div>
      <?php echo bread('/pages/p_big_news.php'); ?>
      <div class="row m-auto">
        <div class="content m-auto">
          <div class="row m-auto big_news">

          <!-- Card image -->
          <div class="view overlay big_news_img z-depth-2">
            <img class="img-fluid" src="<?=PATH.'images/news/'.$image?>" alt="Card image cap">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body bn_card-body">
            <!-- Text -->
            <p class="card-text"><?=$text?></p>
          </div>

         <div class="fotorama fotorama1 m-auto" 
             data-width="100%"
             data-ratio="800/600"
             data-minwidth="600"
             data-maxwidth="600"
             data-minheight="400"
             data-maxheight="400" 
             data-nav="thumbs" 
             data-allowfullscreen="native"
             data-transition="crossfade"
             data-autoplay="true">
             <?php  
              $query = ("SELECT path_image FROM path_image WHERE id_news = '$id'");
              $result = mysqli_query($link, $query);
              $row = mysqli_fetch_assoc($result);

              foreach ($result as $row) { 
                $image = $row['path_image']?>
                <img class="z-depth-2 card" src="<?=PATH.'images/news/'.$image?>" alt="">
              <?}?>
         </div>
          
          <!-- Card footer -->
          <div class="ull justify-content-center">
            <li class="list-inline-item pr-2 grey-text"><i class="fas fa-pen-alt pr-1"></i><?=$author?></li>
            <li class="list-inline-item pr-2 grey-text"><i class="far fa-clock pr-1"></i><?=$date?></li>
            <li class="list-inline-item grey-text pr-2"><i class="far fa-eye pr-1"></i><?=$views?></li>
            
            <br><br>
            <div class="justify-content-center">

              <div class="like">Понравилось? Поделитесь с друзьями!</div>
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/social-likes/dist/social-likes_classic.css">

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/social-likes/dist/social-likes.min.js"></script>

              <div class="social-likes" data-url="">
                <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
                <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
                <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
              </div>

            </div>
          </div>
        </div>    
      </div>
    </div>
  </section>
</main>





