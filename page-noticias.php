<?php
// Template Name: Noticias
?>

<?php get_header(); ?>  
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <main>
         <!-- NEWS MEDIA -->
         <section id="news-main">
            <div class="back-star-new">
               <div class="container cont-news d-none d-md-flex">
                  <div class="row section">
                     <div class="col-md-12">
                        <h2 class="main-subtitle my-5 text-danger"><?php the_title(); ?></h2>
                     </div>

                     <!-- PRIMEIRA COLUNA -->
                     <div class="prim-col col col-md-12 col-lg-6 d-none d-md-flex">
                        <ul class="list-unstyled">

                           <?php 
                              $news = get_field('whith_news');
                              if(isset($news)) { foreach($news as $new){
                           ?>
                              <li class="media news my-1 zoom">
                                 <img src="<?php echo $new['imagem']; ?>" class="align-self-start mr-3 my-4" alt="">

                                 <div class="media-body">
                                    <span class="sub-img fm"><?php echo $new['category']; ?></span>

                                    <h5 class="mt-0 mb-1"><?php echo $new['title']; ?></h5>
                                    <span class="span"><?php echo $new['description']; ?></span>
                                 </div>
                              </li>
                           <?php } } ?>

                        </ul>
                     </div>

                     <!-- SEGUNDA COLUNA -->
                     <div class="second-col col-lg-6 d-none d-lg-flex">
                        <ul class="list-unstyled">
                           
                           <?php 
                              $newsCol = get_field('col_news');
                              if(isset($newsCol)) { foreach($newsCol as $newCol) {
                           ?>
                              <li class="media news my-1 zoom">
                                 <img src="<?php echo $newCol['imagem']; ?>" class="align-self-start mr-3 my-4" alt="">

                                 <div class="media-body">
                                    <span class="sub-img fm"><?php echo $newCol['category']; ?></span>

                                    <h5 class="mt-0 mb-1"><?php echo $newCol['title']; ?></h5>
                                    <span class="span"><?php echo $newCol['description']; ?></span>
                                 </div>
                              </li>
                           <?php } } ?>
                           
                        </ul>
                     </div>

                     <div class="row col-md-12 button">
                        <a href="#" target="_blank" rel="external" class="btn-news">Saiba mais</a>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-12"></div>
                  </div>
               </div>               
            </div>

         </section>
         
         <!-- NEWS SEM MEDIA -->
         <section id="news-main">
            <div class="back-star-new">
               <div class="container cont-news">
                  <div class="row section">
                     <div class="col-md-12">
                        <h2 class="main-subtitle my-5">Notícias Geek</h2>
                     </div>

                     <!-- PRIMEIRA COLUNA -->
                     <div class="col-sm-12 prim-col">
                        <ul class="list-unstyled">
                           
                           <?php 
                              $news = get_field('whith_news');
                              if(isset($news)) { foreach($news as $new){
                           ?>
                              <li class="my-2 sm-media text-center news">
                                 <img src="<?php echo $new['imagem']; ?>" class="align-self-start mr-3 mt-4" alt="">

                                 <div class="sm-body">
                                    <h5 class="mt-1 mb-2"><?php echo $new['title']; ?></h5>
                                    <span class="span"><?php echo $new['description']; ?></span>
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
         
         <div class="container">
            <div class="row">
               <h2 class="main-subtitle backs">Comentarios</h2>
            </div>

            <div class="row">
               <div class="col-md-6 d-sm-4">
                  <div class="media my-4">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/usuario.png" class="mr-3" alt="Usuario">
                     <div class="media-body">
                        <h5 class="mt-0 usuario-name">She ra</h5>
                        <p>Ameei as noticias, o conteúdo está incrivel... a escolha do Pedro foi ótima, morreno pra ter ele em mais um papel que adoro!</p>
                  
                        <div class="media mt-3">
                           <a class="mr-3" href="#">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/usuario.png" alt="Usuario">
                           </a>
                           <div class="media-body">
                           <h5 class="mt-0 usuario-name">Baião de três</h5>
                           <p>Eu quero mesmo é saber de King Kong, pau vai comer demaaais, bota o godz no chinelo meu parceiro. Magina um Pedro Pascoal gigante, um home daquele.</p>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
                  
                  <div class="col-md-6 d-sm-4">
                     <div class="media my-4">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/usuario.png" class="mr-3" alt="Usuario">
                        
                        <div class="media-body">
                           <h5 class="mt-0 usuario-name">She ra</h5>
                           <p>Ameei as noticias, o conteúdo está incrivel... a escolha do Pedro foi ótima, morreno pra ter ele em mais um papel que adoro!</p>
                     
                           <div class="media mt-3">
                              <a class="mr-3" href="#">
                                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/usuario.png" alt="Usuario">
                              </a>

                              <div class="media-body">
                                 <h5 class="mt-0 usuario-name">Baião de três</h5>
                                 <p>Eu quero mesmo é saber de King Kong, pau vai comer demaaais, bota o godz no chinelo meu parceiro. Magina um Pedro Pascoal gigante, um home daquele.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
   <?php endwhile; else: endif; ?>
<?php get_footer(); ?>