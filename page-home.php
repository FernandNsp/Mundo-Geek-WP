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
                        <h1 class="titulo"><span class="text-M">M</span>undo Geek</h1>
                     
                        <p class="my-5 text d-none d-md-flex">Trazemos as melhore e mais relevantes noticias da atualidade sobre os quadrinhos, filmes, séries e atores desta enorme cultura geek. Saiba sobre os acontecimentos de The Last Of Us, Star Wars, Spider-Man e uma enorme variedade de assuntos! Vem pro vale, há sempre espaço para você.</p>
                        
                        <p class="d-sm-flex d-md-none d-lg-none">
                           Trazemos as melhore e mais relevantes noticias da atualidade sobre os quadrinhos, filmes, séries e atores desta enorme cultura geek. Vem pro vale, há sempre espaço para você! 
                        </p>
                     </div>
                  </div>

                  <!-- Primeiro Slider -->
                  <div class="carousel-item the-last">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slider/slider-thelast-hq.png" alt="The Last Of Us" class="d-none d-md-block img-slider slider-last">

                     <div class="carousel-caption d-md-block">
                        <h3>The Last of us <span class="subtitle-span">American Dreams</span></h3>
                        <p class="d-none d-lg-flex">DEZENOVE ANOS ATRÁS, um surto de um fungo parasita matou a maioria da população mundial. Em umas das poucas zonas de quarentena restantes, Ellie, treze anos, começa sua nova vida como uma das alunas de uma escola militar, onde uma amizade com a colega Riley a levará ao seu primeiro passeio do lado de fora. Ellie e Riley logo se confrontam com os violentos Vaga-Lumes.</p>

                        <p class="p-sm d-md-flex d-lg-none">
                           The last of us: Ellie, treze anos, começa sua nova vida como uma das alunas de uma escola militar, onde uma amizade com a colega Riley a levará ao seu primeiro passeio do lado de fora.
                        </p>
                     </div>
                  </div>

                  <!-- Segundo Slider -->
                  <div class="carousel-item spider">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slider/slider-spider-hq.png" alt="The Last Of Us" class="mx-2 img-slider d-none d-md-block">
                     
                     <div class="carousel-caption d-md-block">
                        <h3>Miles Morales<span class="subtitle-span">Spider-Man</span></h3>
                        <p class="d-none d-lg-flex">Miles Morales é um personagem presente nos quadrinhos da Marvel Comics, que apareceu pela primeira vez em Ultimate Fallout #4, após a morte de Peter Parker. Um adolescente negro com ascendência hispânica, Miles é o segundo Homem-Aranha a aparecer em Ultimate Marvel, e com uma continuação no Universo Marvel principal.</p>
                        
                        <p class="p-sm d-md-flex d-lg-none">
                           Spider-Man: Um adolescente negro com ascendência hispânica, Miles é o segundo Homem-Aranha a aparecer em Ultimate Marvel, e com uma continuação no Universo Marvel principal.
                        </p>
                     </div>
                  </div>

                  <!-- Terceiro Slider -->
                  <div class="carousel-item darth">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slider/slider-darth-hq.png" alt="Star Wars" class="mx-2 img-slider d-none d-md-flex">

                     <div class="carousel-caption d-md-block">
                        <h3 class="h3-sm">Star Wars – Império<span class="subtitle-span">Arco I: Traição</span></h3>
                        <p class="d-none d-lg-flex">O Imperador governa a galáxia com punho de ferro e de sua ditadura implacável dissidentes começam a aparecer. Não me refiro, porém, à Aliança Rebelde – essa sim já existe, mas não é o foco deste primeiro arco de Star Wars – Império. Similarmente ao que veríamos posteriormente em Darth Vader e a Prisão Fantasma, Traição nos conta a história de uma pequena insurgência dentro do próprio Império.</p>

                        <p class="p-sm d-md-flex d-lg-none">
                           Star-wars: O enredo é permeado pela tragédia pessoal de Anakin Skywalker, um jedi (do bem) que sucumbe ao Lado Sombrio da Força (do mal) se transformando no vilão Darth Vader, que é um dos líderes do Império Galático.
                        </p>
                     </div>
                  </div>
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

                  <!-- Primeiro  Card -->
                  <div class="col-md-6 col-sm-6 col-lg-3">
                     <img src="<?php the_field('img_card'); ?>" alt="The Yellow Kid" class="card-img-top card-img">

                     <div class="card-body zoom">
                        <h3 class="card-title">The Yellow Kid</h3>
                        <p class="card-text">Mickey Dugan, mais conhecido como The Yellow Kid, era o personagem principal de Hogan's Alley, uma das primeiras histórias em quadrinhos a ser impressa em cores.</p>
                     </div>
                  </div>

                  <!-- Segundo Card -->
                  <div class="col-md-6 col-sm-6 col-lg-3">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cards/hq-marvel.png" alt="Avengers" class="card-img-top card-img">

                     <div class="card-body zoom">
                        <h3 class="card-title">Avengers</h3>
                        <p class="card-text">A Marvel Comics é uma editora norte-americana de mídias relacionadas. Hoje a Marvel Comics é considerada a maior editora de histórias em quadrinhos do mundo.</p>
                     </div>
                  </div>

                  <!-- Terceiro  Card -->
                  <div class="col-md-6 col-sm-6 col-lg-3">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cards/hq-starwars.png" alt="Star Wars" class="card-img-top card-img">

                     <div class="card-body zoom">
                        <h3 class="card-title">Star Wars</h3>
                        <p class="card-text">O investimento no Universo Expandido de Star Wars ficou ainda maior. Séries, quadrinhos e, especialmente, livros da franquia que entraram para o cânone oficial.</p>
                     </div>
                  </div>

                  <!-- Quarto Card -->
                  <div class="col-md-6 col-sm-6 col-lg-3">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cards/hq-thelast.png" alt="The Last of Us - American Dreams" class="card-img-top card-img">

                     <div class="card-body zoom">
                        <h3 class="card-title">The Last Of Us</h3>
                        <p class="card-text">O quadrinho serve de prequela para The Last of Us, mostrando a jornada de Ellie e seu encontro com Riley Abel, devido a singularidade de seu nascimento.</p>
                     </div>
                  </div>
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
                           <li class="media news zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/cruella-new2.png" class="align-self-center mr-3" alt="Cruella">

                              <div class="media-body">
                                 <span class="sub-img fm">Filmes</span>

                                 <h5 class="mt-0 mb-1">Cruella terá uma Live-Action</h5>
                                 <span class="span">
                                    <p>Disney trazendo mais uma live-actions, mas dessa vez surpreende a todos com a noticia de quem ganhará um filme próprio, a cruel <strong>Cruella</strong>, que será interpretada por Emma Stone, ganhadora do óscar de melhor Atriz Coadjuvante em 2019...</p>
                                 </span>
                              </div>
                           </li>
                           
                           <li class="media news my-3 zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/mortal-kombat-new.png" class="align-self-center mr-3" alt="Mortal Kombat">

                              <div class="media-body">
                                 <span class="sub-img fm">Filmes</span>

                                 <h5 class="mt-0 mb-1">Lançamento - Mortal Kombat</h5>
                                 <span class="span">
                                    <p>Está <strong>CONFIRMADO</strong>, a estréia do filme Mortal Kombat está marcada para 15 de abril aqui no Brasil. O streaming será exclusivo na HBO Max. 
                                    </p>

                                    <p>Os atores escalados para este grande elenco assustou alguns fãs da saga, levando...</p>
                                 </span>
                              </div>
                           </li>

                           <li class="media news zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/godzila-kong-new.png" class="align-self-center mr-3" alt="Godzilla vs Kong">

                              <div class="media-body">
                                 <span class="sub-img fm">Filmes</span>

                                 <h5 class="mt-0 mb-1">Godzilla vs Kong ganha novo trailer</h5>          
                                 <span class="span">
                                    <p>O anúncio feito pelas redes oficiais do filme, revela uma batalha travada entre o Godzilla e o King Kong. O filme já tem sua data marcada no Brasil, seu lançamento ocorrerá em 25 de março nos cinemas...
                                    </p>
                                 </span>
                              </div>
                           </li>
                        </ul>
                     </div>

                     <!-- SEGUNDA COLUNA -->
                     <div class="second-col col-lg-6 d-none d-lg-flex">
                        <ul class="list-unstyled">
                           <li class="media news zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/Rectangle 752.png" class="align-self-center mr-3" alt="Pedro Pascal">

                              <div class="media-body">
                                 <span class="sub-img bg-">Séries</span>

                                 <h5 class="mt-0 mb-1">Pedro Pascal como Joel?</h5>
                                 <span class="span">
                                    <p>O anúncio feito pelo Deadline, confirmou o ator Pedro Pascal, conhecido pelas atuações em The Mandalorian da Disney e Kingsman, sendo Joel. Juntamente com ele, a atriz Bella Ramsey, que atuou como Lyanna Mormont em GOT, interpretrará a Ellie...</p>
                                 </span>
                              </div>
                           </li>
                           
                           <li class="media news my-3 zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/constantine-new.png" class="align-self-center mr-3" alt="...">

                              <div class="media-body">
                                 <span class="sub-img">Séries</span>

                                 <h5 class="mt-0 mb-1">Constantine ganhará série na HBO Max</h5>
                                 <span class="span">
                                    <p>Constantine ganhará uma série de TV na HBO Max. O projeto, segundo a Variety, está em estágios iniciais de desenvolvimento, e deve ter conexões com um vindoura série da Liga da Justiça Sombria...
                                    </p>
                                 </span>
                              </div>
                           </li>

                           <li class="media news zoom">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/falcao-soldado-new.png" class="align-self-center mr-3" alt="...">

                              <div class="media-body">
                                 <span class="sub-img">Séries</span>

                                 <h5 class="mt-0 mb-1">Falcão e Soldado Invernal</h5>
                                 <span class="span">
                                    <p>A YAW Channel divulgou uma nova versão do trailer onde mostra que o seriado terá uma classificação indicativa de 14 anos, devido à "intensa violência" e linguagem presente na série.
                                    A série será lançada no Disney+, em 19 de março...
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
                        <h2 class="main-subtitle">Notícias Geek</h2>
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

         <!-- NEWSLATTER -->
         <div class="container">
            <div class="row">
               <div class="col-md-12 news-latter">
                  <h3 class="text-center">Notícias quentinhas para você!</h3>
                  <p class="text-center">Agora o Mundo Geek envia semanalmente as melhores noticias sobre suas séries, filmes, jogos e animes favoritos na sua caixa postal. Faça sua inscrição abaixo!</p>
                  
                  <form action="" class="forms">
                     <input type="email" name="email" id="email-input" placeholder="E-mail" class="form-control">
                     <input type="submit" value="Enviar" class="btn">
                  </form>
               </div>
            </div>
         </div>
      </main>
<?php get_footer(); ?>