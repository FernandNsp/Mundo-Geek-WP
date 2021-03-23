<?php
// Template Name: Home
?>

<?php get_header(); ?>      
      <main>
         <!-- SLIDERS -->
         <section class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators m-0 p-0">
                  <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                  <li data-target="#mainSlider" data-slide-to="1"></li>
                  <li data-target="#mainSlider" data-slide-to="2"></li>
                  <li data-target="#mainSlider" data-slide-to="3"></li>
               </ol>          
               
               <div class="carousel-inner bg-back">
                  <div class="container slider">

                  <!-- INTRO Slider -->      
                  <div class="carousel-item millennium active">
                     <div class="carousel-caption d-md-block" id="introducao">
                        <h1 class="titulo"><?php the_field('title-intro'); ?></h1>
                     
                        <p class="my-5 text d-none d-md-flex"><?php the_field('desc-intro'); ?></p>
                        
                        <p class="d-sm-flex d-md-none d-lg-none"><?php the_field('resp-intro'); ?></p>
                     </div>
                  </div>

                  <!-- Sliders -->
                  <?php 
                     $slider = get_field('slider-home');
                     if(isset($slider)) { foreach($slider as $sliders){
                  ?>
                     <div class="carousel-item the-last">
                        <img src="<?php echo $sliders['img-slider']; ?>" alt="The Last Of Us" class="d-none d-md-block img-slider slider-last">

                        <div class="carousel-caption d-md-block">
                           <h3><?php echo $sliders['title-slider']; ?><span class="subtitle-span"><?php echo $sliders['subtitle']; ?></span></h3>

                           <p class="d-none d-lg-flex"><?php echo $sliders['desc']; ?></p>

                           <p class="p-sm d-md-flex d-lg-none"><?php echo $sliders['desc-resp']; ?></p>
                        </div>
                     </div>
                  <?php } } ?>
                  
               </div>
            </div>

            <!-- Seta prev -->
            <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>

            <!-- Seta next -->
            <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </section> 

         <!-- COMICS CARDS -->
         <section id="comics">
            <div class="container comics">
               <div class="row">
                  <div class="col-12">
                     <h2 class="main-subtitle comics-sm"><?php the_field('combooks'); ?></h2>
                  </div>

                  <!-- Cards -->
                  <?php 
                     $cardhome = get_field('card-home');
                     if(isset($cardhome)) { foreach($cardhome as $cardshome){
                  ?>
                     <div class="col-md-6 col-sm-6 col-lg-3 card-total">
                        <img src="<?php echo $cardshome['img-card']; ?>" class="card-img-top card-img" alt="">

                        <div class="card-body">
                           <h3 class="card-title"><?php echo $cardshome['title']; ?></h3>
                           <p class="card-text"><?php echo $cardshome['description']; ?></p>
                        </div>
                     </div>

                     <hr class="my-3">
                  <?php } } ?>

               </div>
            </div>
         </section>

         <!-- NEWS MEDIA -->
         <section id="news-main">
            <div class="back-star">
               <div class="container cont-news d-none d-md-flex">
                  <div class="row section">
                     <div class="col-md-12">
                        <h2 class="main-subtitle">Notícias Geek</h2>
                     </div>

                     <!-- PRIMEIRA COLUNA -->
                     <div class="prim-col col col-md-12 col-lg-6 d-none d-md-flex">
                        <ul class="list-unstyled">
                           
                           <?php 
                              $newshome = get_field('news-home');
                              if(isset($newshome)) { foreach($newshome as $newhome){
                           ?>
                              <li class="media news my-1 zoom">
                                 <img src="<?php echo $newhome['imagem']; ?>" class="align-self-start mr-3 mt-4" alt="">

                                 <div class="media-body">
                                    <h5 class="mt-3 mb-1"><?php echo $newhome['title']; ?></h5>
                                    <span class="span"><p><?php echo $newhome['description']; ?></p></span>
                                 </div>
                              </li>
                           <?php } } ?>
                                                      
                        </ul>
                     </div>

                     <!-- SEGUNDA COLUNA -->
                     <div class="second-col col-lg-6 d-none d-lg-flex">
                        <ul class="list-unstyled">
                           
                           <?php 
                              $newshomeCol = get_field('news-homecol');
                              if(isset($newshomeCol)) { foreach($newshomeCol as $newhomeCol){
                           ?>
                              <li class="media news my-1 zoom">
                                 <img src="<?php echo $newhomeCol['imagem']; ?>" class="align-self-start mr-3 mt-4" alt="">

                                 <div class="media-body">
                                    <h5 class="mt-3 mb-1"><?php echo $newhomeCol['title']; ?></h5>
                                    <span class="span"><p><?php echo $newhomeCol['description']; ?></p></span>
                                 </div>
                              </li>
                           <?php } } ?>
                           
                        </ul>
                     </div>

                     <div class="row col-md-12 button">
                        <a href="/mundogeek/blog-news/" target="_blank" rel="external" class="btn-news mb-3">Saiba mais</a>
                     </div>
                  </div>
               </div>               
            </div>

         </section>
         
         <!-- NEWS MEDIA RESPONSIVE -->
         <section id="news-main">
            <div class="back-star">
               <div class="container cont-news">
                  <div class="row section">
                     <div class="col-md-12">
                        <h2 class="main-subtitle">Notícias Geek</h2>
                     </div>

                     <!-- COLUNA -->
                     <div class="col-sm-12 prim-col">
                        <ul class="list-unstyled">

                           <?php 
                              $newshome = get_field('news-home');
                              if(isset($newshome)) { foreach($newshome as $newhome){
                           ?>
                              <li class="my-2 sm-media text-center news">
                                 <img src="<?php echo $newhome['imagem']; ?>" class="align-self-center mt-4" alt="">

                                 <div class="sm-body">
                                    <h5 class="mt-1 mb-2"><?php echo $newhome['title']; ?></h5>
                                    <span class="span"><p><?php echo $newhome['description']; ?></p></span>
                                 </div>
                              </li>

                              <hr class="my-3">
                           <?php } } ?>

                        </ul>
                     </div>

                     <div class="row col-md-12 button">
                        <a href="#" target="_blank" rel="external" class="btn-news mb-1">Saiba mais</a>
                     </div>
                  </div>
               </div>               
            </div>
         </section>

         <!-- NEWSLATTER -->
         <div class="container">
            <div class="row">
               <div class="col-md-12 news-latter">
                  <h3 class="text-center"><?php the_field('let-title'); ?></h3>
                  
                  <p class="text-center"><?php the_field('let-desc'); ?></p>
                  
                  <form action="" class="forms">
                     <input type="email" name="email" id="email-input" placeholder="E-mail" class="form-control">
                     <input type="submit" value="Enviar" class="btn">
                  </form>
               </div>
            </div>
         </div>
      </main>
<?php get_footer(); ?>