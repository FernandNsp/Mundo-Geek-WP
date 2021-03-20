<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php bloginfo('name'); ?></title>
      <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/spider.svg" type="image/x-icon">

      <!-- Fonte Roboto -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
      
      <!-- Fonte Anton -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
      
      <!-- Scripts -->
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

      <!-- Font Awesome -->
       <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>

      <!-- Parallax -->
      <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
      
      <!-- Header wordPress-->
      <?php wp_head(); ?>
      <!-- Fecha header wordPress-->
   </head>

   <body>
      <header>
         <div class="container" id="nav-container">
            <nav class="py-1 navbar navbar-expand-lg fixed-top">
               <a href="#" class="navbar-brand">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/logo-mg.svg" alt="Logo Star Wars" id="logo">
               </a>
               
               <button type="button" class="navbar-toggler navbar-dark" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               
               <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                  <ul class="list-unstyled navbar-nav">
                     <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="home-menu">Menus</a>

                        <div class="dropdown-menu">
                           <a href="/mundogeek/home/" class="dropdown-item text-dark">Home</a>

                           <a href="/mundogeek/blog-news/" class="dropdown-item text-dark">Blog News</a>
                        </div>
                     </li>                   

                     <li><a href="#" class="nav-item nav-link" id="comics-menu">Comics</a></li>

                     <li><a href="#" class="nav-item nav-link" id="news-menu">Notícias</a></li>

                     <li><a href="#" class="nav-item nav-link" id="contact-menu">Contato</a></li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>