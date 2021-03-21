<?php 
   function get_field($key, $page_id = 0){
      $id = $page_id !== 0 ? $page_id : get_the_ID();
      return get_post_meta($id, $key, true);
   }

   function the_field($key, $page_id = 0){
      echo get_field($key, $page_id);
   }
   
   add_action('cmb2_admin_init', 'cmb2_fields_home');
   function cmb2_fields_home(){
      $cmb = new_cmb2_box([
         'id' => 'home_box',
         'title' => 'Home',
         'object_types' => ['page'],
         'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
         ],
      ]);

      // Mudar subtitulo
      $cmb->add_field([
         'name' => 'Subtitulo Cards',
         'id' => 'combooks',
         'type' => 'text',
      ]);

      // Mudar imagem
      $cmb->add_field([
         'name' => 'Imagem Card',
         'id' => 'img_card',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);
   }

   // Repeat news
   add_action('cmb2_admin_init', 'cmb2_fields_news');
   function cmb2_fields_news(){
      $cmb = new_cmb2_box([
         'id' => 'new_box',
         'title' => 'Atualizar Noticias',
         'object_types' => ['page'],
         'show_on' => [
            'key' => 'page-template',
            'value' => 'page-noticias.php',
         ],
      ]);

      $news = $cmb->add_field([
         'name' => 'Lista de Noticias',
         'id' => 'whith_news',
         'type' => 'group',
         'repeatable' => true,
         'options' => [
            'group_title' => 'Noticia {#}',
            'add_button' => 'Adicionar Noticia',
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
         'type' => 'wysiwyg',
      ]);

      $cmb->add_group_field($news, [
         'name' => 'Imagem',
         'id' => 'imagem',
         'type' => 'file',
         'options' => [
            'url' => false,
         ],
      ]);
   }
   
?>