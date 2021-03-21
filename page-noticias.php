<?php
// Template Name: Noticias
?>

<?php get_header(); ?>  
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <main>
         <!-- NEWS MEDIA -->
         <section id="news-main">
            <div class="back-star">
               <div class="container cont-news d-none d-md-flex">
                  <div class="row section">
                     <div class="col-md-12">
                        <h2 class="main-subtitle my-5 text-danger"><?php the_title(); ?></h2>
                     </div>

                     <!-- PRIMEIRA COLUNA -->
                     <div class="prim-col col col-md-12 col-lg-6 d-none d-md-flex">
                        <ul class="list-unstyled">
                           <li class="media news my-1 zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/cruella-new2.png" class="align-self-start mr-3" alt="Cruella">

                              <div class="media-body">
                                 <span class="sub-img fm">Filmes</span>

                                 <h5 class="mt-0 mb-1">Cruella terá uma Live-Action</h5>
                                 <span class="span">
                                    <p><?php echo get_post_meta(get_the_ID(), 'messnews', true); ?></p>
                                 </span>
                              </div>
                           </li>
                           
                           <li class="media news my-2 zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/mortal-kombat-new.png" class="align-self-start mr-3" alt="Mortal Kombat">

                              <div class="media-body">
                                 <span class="sub-img fm">Filmes</span>

                                 <h5 class="mt-0 mb-1">Lançamento - Mortal Kombat</h5>
                                 <span class="span">
                                    <p><?php echo get_post_meta(get_the_ID(), 'messnews2', true); ?></p>
                                 </span>
                              </div>
                           </li>

                           <li class="media news zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/godzila-kong-new.png" class="align-self-start mr-3" alt="Godzilla vs Kong">

                              <div class="media-body">
                                 <span class="sub-img fm">Filmes</span>

                                 <h5 class="mt-0 mb-1">Godzilla vs Kong ganha novo trailer</h5>          
                                 <span class="span">
                                    <p><?php echo get_post_meta(get_the_ID(), 'messnews3', true); ?></p>
                                 </span>
                              </div>
                           </li>
                        </ul>
                     </div>

                     <!-- SEGUNDA COLUNA -->
                     <div class="second-col col-lg-6 d-none d-lg-flex">
                        <ul class="list-unstyled">
                           <li class="media news zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/Rectangle 752.png" class="align-self-start mr-3" alt="Pedro Pascal">

                              <div class="media-body">
                                 <span class="sub-img bg-">Séries</span>

                                 <h5 class="mt-0 mb-1">Pedro Pascal como Joel?</h5>
                                 <span class="span">
                                    <p><?php echo get_post_meta(get_the_ID(), 'messnews4', true); ?></p>
                                 </span>
                              </div>
                           </li>
                           
                           <li class="media news zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/constantine-new.png" class="align-self-start mr-3" alt="...">

                              <div class="media-body">
                                 <span class="sub-img">Séries</span>

                                 <h5 class="mt-0 mb-1">Constantine ganhará série na HBO Max</h5>
                                 <span class="span">
                                    <p><?php echo get_post_meta(get_the_ID(), 'messnews5', true); ?></p>
                                 </span>
                              </div>
                           </li>

                           <li class="media news zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/falcao-soldado-new.png" class="align-self-start mr-3" alt="...">

                              <div class="media-body">
                                 <span class="sub-img">Séries</span>

                                 <h5 class="mt-0 mb-1">Falcão e Soldado Invernal</h5>
                                 <span class="span">
                                    <p><?php echo get_post_meta(get_the_ID(), 'messnews6', true); ?></p>
                                 </span>
                              </div>
                           </li>
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
            <div class="back-star">
               <div class="container cont-news">
                  <div class="row section">
                     <div class="col-md-12">
                        <h2 class="main-subtitle my-5">Notícias Geek</h2>
                     </div>

                     <!-- PRIMEIRA COLUNA -->
                     <div class="col-sm-12 prim-col">
                        <ul class="list-unstyled">
                           <li class="my-2 sm-media text-center news zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/cruella-new2.png" class="cruela-img" alt="Cruella">

                              <div class="sm-body">
                                 <!-- <span class="sub-img fm">Filmes</span> -->

                                 <h5>Cruella terá uma Live-Action</h5>
                                 <span class="span">
                                    <p>Disney trazendo mais uma live-actions, mas dessa vez surpreende a todos com a noticia de quem ganhará um filme próprio, a cruel <strong>Cruella</strong>, que será interpretada por Emma Stone, ganhadora do óscar de melhor Atriz Coadjuvante em 2019...</p>
                                 </span>
                              </div>
                           </li>
                           
                           <hr class="my-3">

                           <li class="sm-media text-center news zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/mortal-kombat-new.png" class="align-self-center" alt="Mortal Kombat">

                              <div class="sm-body">
                                 <!-- <span class="sub-img fm">Filmes</span> -->

                                 <h5>Lançamento - Mortal Kombat</h5>
                                 <span class="span">
                                    <p>Está <strong>CONFIRMADO</strong>, a estréia do filme Mortal Kombat está marcada para 15 de abril aqui no Brasil. O streaming será exclusivo na HBO Max. 
                                    </p>

                                    <p>Os atores escalados para este grande elenco assustou alguns fãs da saga, levando...</p>
                                 </span>
                              </div>
                           </li>

                           <hr class="my-3">

                           <li class="sm-media text-center news zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/godzila-kong-new.png" class="align-self-center" alt="Godzilla vs Kong">

                              <div class="sm-body">
                                 <!-- <span class="sub-img fm">Filmes</span> -->

                                 <h5>Godzilla vs Kong ganha novo trailer</h5>          
                                 <span class="span">
                                    <p>O anúncio feito pelas redes oficiais do filme, revela uma batalha travada entre o Godzilla e o King Kong. O filme já tem sua data marcada no Brasil, seu lançamento ocorrerá em 25 de março nos cinemas...
                                    </p>
                                 </span>
                              </div>
                           </li>
                        </ul>
                     </div>

                     <div class="row col-md-12 button">
                        <a href="#" target="_blank" rel="external" class="btn-news">Saiba mais</a>
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