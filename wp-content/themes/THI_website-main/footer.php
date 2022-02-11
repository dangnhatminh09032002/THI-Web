</div><!--End Sticky Footer-->

<footer class="site-footer">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
            <div class="logo">
               <a href="<?php echo esc_url( get_home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">
                  <?php
                        if ( !empty( $THIWebsite_opt_logo_image_id ) ) :
                           echo wp_get_attachment_image( $THIWebsite_opt_logo_image_id, 'full' );
                        else :
                           echo'<img class="logo-default" src="'.esc_url( get_theme_file_uri( '/assets/images/logo.png' ) ).'" alt="'.get_bloginfo('title').'" />';
                        endif;
                  ?>
               </a>
            </div>
            <div class="description">
               <p>Our mission is to help unleash the full potential.</p>
            </div>
            <div class="link-icons">
               <a class="light-text" href="#" target="_blank">
                  <i class="fab fa-facebook-f"></i></i>
               </a>
               <a class="light-text" href="#" target="_blank">
                  <i class="fab fa-linkedin-in"></i></i>
               </a>
               <a class="light-text" href="#" target="_blank">
                  <i class="fab fa-twitter"></i></i>
               </a>

               <!-- <?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>

               <div class="site-footer__sidebar">
                  <?php dynamic_sidebar( 'sidebar-footer' ); ?>
               </div>

               <?php endif; ?>

               <?php if ( get_theme_mod( 'facebook' ) ): ?>
                  <a class="light-text" href="<?php echo get_theme_mod( 'facebook' ); ?>" target="_blank">
                     <i class="fab fa-facebook-f"></i></i>
                  </a>
               <?php endif; ?>
               <?php if ( get_theme_mod( 'linkedin' ) ): ?>
                  <a class="light-text" href="<?php echo get_theme_mod( 'linkedin' ); ?>" target="_blank">
                     <i class="fab fa-linkedin"></i></i>
                  </a>
               <?php endif; ?>
               <?php if ( get_theme_mod( 'twitter' ) ): ?>
                  <a class="light-text" href="<?php echo get_theme_mod( 'twitter' ); ?>" target="_blank">
                     <i class="fab fa-twitter"></i></i>
                  </a>
               <?php endif; ?> -->
            </div>
         </div>
         <div class="col-md-7 site-footer__col-right">
            <div class="site-footer__right">
                  <div class="copyright">
                     <?php esc_html_e('Copyright 2021 THi VC', 'THI_website'); ?>
                  </div>

                  <nav class="menu-footer">
                     <?php

                     if ( has_nav_menu( 'footer-menu' ) ) :

                        wp_nav_menu( array(
                              'theme_location'    => 'footer-menu',
                              'menu_class'        => 'menu-footer',
                              'container'         =>  false,
                        ));

                     else:

                        ?>

                        <ul class="main-menu">
                           <li><a href="#">Contact Us</a></li>
                           <li><a href="#">Privacy policy</a></li>
                           <?php
                           // TODO: If admin
                           if ( has_nav_menu('footer-menu') ) :

                           ?>
                              <li>
                                 <a href="<?php echo get_admin_url().'/nav-menus.php'; ?>">
                                    <?php esc_html_e( 'ADD TO MENU','THIWebsite' ); ?>
                                 </a>
                              </li>
                           <?php endif;?>
                        </ul>

                     <?php endif;?>
                  </nav>
            </div>
         </div>
      </div>      
   </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
