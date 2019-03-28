<script type="text/javascript"> 
function ShareToVk() {  
tltl = document.title  
width = 550  
height = 268  
w_top = (window.screen.height - height)/2  
w_left = (window.screen.width - width)/2  
window.open('http://vk.com/share.php?url='+document.location.href+'&tltl='+tltl+'&cmg=1', 'shareSite','width=550px,height=268px,resizable=yes,scrollbars=yes,left='+w_left+',top='+w_top);}  
} 
</script>
    <main>
      <div class="col-sm-0 col-lg-2">
       <?php get_sidebar (); ?>
     </div>
     <section class="container m-auto">
      <!-- блок что нового? -->
      <div>
        <div class="page_title mb-5 text-center"><h2><?=$title?></h2></div>
      </div>
      <div class="row m-auto">
        <div class="content m-auto">
          <div class="row m-auto">

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

          <div class="repost pt-3">
            <ul class="list-unstyled list-inline ml-5">
              <b class="mr-5 text-success">Поделиться:</b>
              <li class="list-inline-item text-success pr-2 repost_hover"><i class="fab fa-odnoklassniki pr-1"></i> <?=$repost_ok?></li>
              <a href=""><li class="list-inline-item text-success pr-2 repost_hover"><i class="fab fa-facebook-f pr-1"> </i> <?=$repost_fb?></li></a>
              <a href="javascript://" onclick="ShareToVk()"><li class="list-inline-item text-success repost_hover"><i class="fab fa-vk pr-1"></i> <?=$repost_vk?></li></a>
            </ul>
          </div>

          <!-- Card footer -->
          <div class="text-center pt-3">
            <ul class="list-unstyled list-inline ml-5">
              <li class="list-inline-item pr-2 grey-text"><i class="fas fa-pen-alt pr-1"></i><?=$author?></li>
              <li class="list-inline-item pr-2 grey-text"><i class="far fa-clock pr-1"></i><?=$date?></li>
              <li class="list-inline-item grey-text pr-2"><i class="far fa-eye pr-1"></i><?=$views?></li>
            </ul>
          </div>
        </div>    
      </div>
    </div>

    
  </section>
</main>






