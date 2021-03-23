      <footer>
         <!-- CONTACT -->
         <section id="contact">
            <div class="container footer">
               <div class="row">
                  <div class="col-md-4 contact-box">
                     <?php 
                        $contato = get_page_by_title('Home')->ID;
                     ?>

                     <h4><span class="text-M">S</span>obre</h4>
                     
                     <ul class="list-unstyled">
                        <p class="text-light"><?php the_field('sobre', $contato); ?></p>
                     </ul>
                  </div>

                  <div class="col-md-4 contact-box">
                     <h4><span class="text-M">C</span>ontato</h4>

                     <ul class="list-unstyled">
                        <li>- <?php the_field('telefone', $contato); ?></li>
                        <li>- <?php the_field('email', $contato); ?></li>
                        <li>- <?php the_field('endereco', $contato); ?></li>
                     </ul>
                  </div>

                  <div class="col-md-4 contact-box contact-redes">
                     <h4><span class="text-M">R</span>edes sociais</h4>
                     
                     <ul class="list-unstyled">
                        <li><a href="<?php the_field('face', $contato); ?>" target="_blank" rel="external"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/facebook.svg" alt="Facebook">
                        </a></li>

                        <li><a href="<?php the_field('insta', $contato); ?>" target="_blank" rel="external"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/instagram.svg" alt="Instagram">
                        </a></li>

                        <li><a href="<?php the_field('twit', $contato); ?> target="_blank" rel="external"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/media/twitter.svg" alt="Twitter">
                        </a></li>
                     </ul>
                  </div>              
               </div>
            </div>
         </section>

         <!-- COPYRIGHT -->
         <section id="copy-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>Desenvolvido por <a href="https://www.instagram.com/_fernandasene" target="_blank" rel="external">Fernanda Sene</a> &copy; 2021</p>
                  </div>
               </div>
            </div>
         </section>
      </footer>

      <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/scripts.js"></script>

      <!-- Footer wordPress-->
      <?php wp_footer(); ?>
      <!-- Fecha footer wordPress-->
   </body>
</html>