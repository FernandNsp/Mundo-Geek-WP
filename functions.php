<?php 
   // Encurtar para the_fild()
   function get_field($key, $page_id = 0){
      $id = $page_id !== 0 ? $page_id : get_the_ID();
      return get_post_meta($id, $key, true);
   }

   function the_field($key, $page_id = 0){
      echo get_field($key, $page_id);
   }  
   
   // -------------- HOME --------------
   add_action('cmb2_admin_init', 'cmb2_fields_home');
   function cmb2_fields_home(){
      $cmb = new_cmb2_box([
         'id' => 'home_box',
         'title' => 'Adicionar Noticias',
         'object_types' => ['page'],
         'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
         ],
      ]);

      // Repeat news home
      // coluna 1
      $newshome = $cmb->add_field([
         'name' => 'Noticias - Coluna 1',
         'id' => 'news-home',
         'type' => 'group',
         'repeatable' => true,
         'options' => [
            'group_title' => 'Noticia {#}',
            'add_button' => 'Adicionar Noticias',
            'remove_button' => 'Remover',
            'sortable' => true,
         ],
      ]);

      $cmb->add_group_field($newshome, [
         'name' => 'Titulo',
         'id' => 'title',
         'type' => 'text',
      ]);

      $cmb->add_group_field($newshome, [
         'name' => 'Descrição',
         'id' => 'description',
         'type' => 'textarea_small',
      ]);

      $cmb->add_group_field($newshome, [
         'name' => 'Imagem',
         'desc' => '(189px X 138px)',
         'id' => 'imagem',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);

      // coluna 2 home
      $newshomeCol = $cmb->add_field([
         'name' => 'Noticias - Coluna 2',
         'id' => 'news-homecol',
         'type' => 'group',
         'repeatable' => true,
         'options' => [
            'group_title' => 'Noticia {#}',
            'add_button' => 'Adicionar Noticia',
            'remove_button' => 'Remover',
            'sortable' => true,
         ],
      ]);

      $cmb->add_group_field($newshomeCol, [
         'name' => 'Titulo',
         'id' => 'title',
         'type' => 'text',
      ]);

      $cmb->add_group_field($newshomeCol, [
         'name' => 'Descrição',
         'id' => 'description',
         'type' => 'textarea_small',
      ]);

      $cmb->add_group_field($newshomeCol, [
         'name' => 'Imagem',
         'desc' => '(189px X 138px)',
         'id' => 'imagem',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);   
   }

   // -------------- Slider / Carousel --------------
   add_action('cmb2_admin_init', 'cmb2_fields_slider');
   function cmb2_fields_slider(){
      $cmb = new_cmb2_box([
         'id' => 'slider_box',
         'title' => 'Adicionar Carrossel',
         'object_types' => ['page'],
         'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
         ],
      ]);

      // Slider intro
      $intro_slider = $cmb->add_field([
         'name' => 'Titulo Introdução',
         'id' => 'title-intro',
         'type' => 'text',
      ]);

      $intro_slider = $cmb->add_field([
         'name' => 'Descrição Introdução',
         'desc' => '(285 caracteres)',
         'id' => 'desc-intro',
         'type' => 'textarea_small',
      ]);

      $intro_slider = $cmb->add_field([
         'name' => 'Descrição Responsiva',
         'desc' => '(175 caracteres)',
         'id' => 'resp-intro',
         'type' => 'textarea_small',
      ]);

      // Slider group
      $slider = $cmb->add_field([
         'name' => 'Maximo 3 sliders',
         'id' => 'slider-home',
         'type' => 'group',
         'repeatable' => true,
         'options' => [
            'group_title' => 'Slider {#}',
            'add_button' => 'Adicionar slider',
            'remove_button' => 'Remover',
            'sortable' => true,
         ],
      ]);

      $cmb->add_group_field($slider, [
         'name' => 'Titulo',
         'id' => 'title-slider',
         'type' => 'text',
      ]);

      $cmb->add_group_field($slider, [
         'name' => 'Subtitulo',
         'id' => 'subtitle',
         'type' => 'text',
      ]);

      $cmb->add_group_field($slider, [
         'name' => 'Descrição Slider',
         'desc' => '(395 caracteres)',
         'id' => 'desc',
         'type' => 'textarea_small',
      ]);

      $cmb->add_group_field($slider, [
         'name' => 'Descrição Responsiva',
         'desc' => '(185 caracteres)',
         'id' => 'desc-resp',
         'type' => 'textarea_small',
      ]);

      $cmb->add_group_field($slider, [
         'name' => 'Imagem',
         'desc' => '(315px X 265px)',
         'id' => 'img-slider',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);

   }

   // -------------- Cards --------------
   add_action('cmb2_admin_init', 'cmb2_fields_cards');
   function cmb2_fields_cards(){
      $cmb = new_cmb2_box([
         'id' => 'card_box',
         'title' => 'Adicionar Comic Books',
         'object_types' => ['page'],
         'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
         ],
      ]);

      $cardhome = $cmb->add_field([
         'name' => 'Maximo 4 comics',
         'id' => 'card-home',
         'type' => 'group',
         'repeatable' => true,
         'options' => [
            'group_title' => 'Comic {#}',
            'add_button' => 'Adicionar Hq',
            'remove_button' => 'Remover',
            'sortable' => true,
         ],
      ]);

      $cmb->add_group_field($cardhome, [
         'name' => 'Titulo',
         'id' => 'title',
         'type' => 'text',
      ]);

      $cmb->add_group_field($cardhome, [
         'name' => 'Descrição',
         'id' => 'description',
         'type' => 'textarea_small',
      ]);

      $cmb->add_group_field($cardhome, [
         'name' => 'Imagem',
         'id' => 'img-card',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);
   }

   // -------------- News Letter --------------
   add_action('cmb2_admin_init', 'cmb2_fields_letter');
   function cmb2_fields_letter(){
      $cmb = new_cmb2_box([
         'id' => 'letter_box',
         'title' => 'NewsLetter',
         'object_types' => ['page'],
         'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
         ],
      ]);

      // Titulo 
      $letter = $cmb->add_field([
         'name' => 'Titulo',
         'id' => 'let-title',
         'type' => 'text',
      ]);

      // Descricao curta
      $letter = $cmb->add_field([
         'name' => 'Descrição',
         'id' => 'let-desc',
         'type' => 'text',
      ]);
   }

   // -------------- BLOG NEWS --------------
   add_action('cmb2_admin_init', 'cmb2_fields_news');
   function cmb2_fields_news(){
      $cmb = new_cmb2_box([
         'id' => 'new_box',
         'title' => 'Adicionar Noticias',
         'object_types' => ['page'],
         'show_on' => [
            'key' => 'page-template',
            'value' => 'page-noticias.php',
         ],
      ]);

      // coluna 1
      $news = $cmb->add_field([
         'name' => 'Noticias - Coluna 1',
         'id' => 'whith_news',
         'type' => 'group',
         'repeatable' => true,
         'options' => [
            'group_title' => 'Noticia {#}',
            'add_button' => 'Adicionar noticia',
            'remove_button' => 'Remover',
            'sortable' => true,
         ],
      ]);

      $cmb->add_group_field($news, [
         'name' => 'Categoria (Filmes, Séries)',
         'id' => 'category',
         'type' => 'text',
      ]);

      $cmb->add_group_field($news, [
         'name' => 'Titulo',
         'id' => 'title',
         'type' => 'text',
      ]);

      $cmb->add_group_field($news, [
         'name' => 'Descrição',
         'id' => 'description',
         'type' => 'textarea_small',
      ]);

      $cmb->add_group_field($news, [
         'name' => 'Imagem',
         'desc' => '(189px X 138px)',
         'id' => 'imagem',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);

      // coluna 2
      $newsCol = $cmb->add_field([
         'name' => 'Noticias - Coluna 2',
         'id' => 'col_news',
         'type' => 'group',
         'repeatable' => true,
         'options' => [
            'group_title' => 'Noticia {#}',
            'add_button' => 'Adicionar noticia',
            'remove_button' => 'Remover',
            'sortable' => true,
         ],
      ]);

      $cmb->add_group_field($newsCol, [
         'name' => 'Categoria (Filmes, Séries)',
         'id' => 'category',
         'type' => 'text',
      ]);

      $cmb->add_group_field($newsCol, [
         'name' => 'Titulo',
         'id' => 'title',
         'type' => 'text',
      ]);

      $cmb->add_group_field($newsCol, [
         'name' => 'Descrição',
         'id' => 'description',
         'type' => 'textarea_small',
      ]);

      $cmb->add_group_field($newsCol, [
         'name' => 'Imagem',
         'desc' => '(189px X 138px)',
         'id' => 'imagem',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);
   }

   // -------------- Footer --------------
   add_action('cmb2_admin_init', 'cmb2_fields_footer');
   function cmb2_fields_footer(){
      $cmb = new_cmb2_box([
         'id' => 'footer_box',
         'title' => 'Contato - Redes sociais',
         'object_types' => ['page'],
         'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
         ],
      ]);

      // SOBRE 
      $contato = $cmb->add_field([
         'name' => 'Sobre',
         'id' => 'sobre',
         'type' => 'textarea_small',
      ]);

      // CONTATO
      $contato = $cmb->add_field([
         'name' => 'Telefone',
         'id' => 'telefone',
         'type' => 'text',
      ]);

      $contato = $cmb->add_field([
         'name' => 'E-mail',
         'id' => 'email',
         'type' => 'text',
      ]);

      $cmb->add_field([
         'name' => 'Endereço',
         'id' => 'endereco',
         'type' => 'text',
      ]);
      
      // REDES SOCIAIS
      $cmb->add_field([
         'name' => 'Facebook',
         'id' => 'face',
         'type' => 'text',
      ]);

      $cmb->add_field([
         'name' => 'Instagram',
         'id' => 'insta',
         'type' => 'text',
      ]);

      $cmb->add_field([
         'name' => 'Twitter',
         'id' => 'twit',
         'type' => 'text',
      ]);
   }

   // Funções para Limpar o Header
   remove_action('wp_head', 'rsd_link');
   remove_action('wp_head', 'wlwmanifest_link');
   remove_action('wp_head', 'start_post_rel_link', 10, 0 );
   remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
   remove_action('wp_head', 'feed_links_extra', 3);
   remove_action('wp_head', 'wp_generator');
   remove_action('wp_head', 'print_emoji_detection_script', 7);
   remove_action('admin_print_scripts', 'print_emoji_detection_script');
   remove_action('wp_print_styles', 'print_emoji_styles');
   remove_action('admin_print_styles', 'print_emoji_styles');
?>