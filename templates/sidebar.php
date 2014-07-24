<?php //dynamic_sidebar('sidebar-primary'); ?>
     <nav class="nav-main" role="navigation">
     	<?php
          if (has_nav_menu('general-menu')) :
            wp_nav_menu( array( 'theme_location' => 'general-menu' ) );
          endif;
     	?>
     </nav>


        <h3><?php _e('painting','annafont'); ?></h3>
        <?php wp_nav_menu( array( 'theme_location' => 'pintura-menu' ) ); ?>
        
        <h3><?php _e('other','annafont'); ?></h3>
        <?php wp_nav_menu( array( 'theme_location' => 'otros-menu' ) ); ?>

     <div id="social">
		<h3>
			<?php //_e('Find me at:','annafont'); ?>
		</h3>
		<a href="https://www.facebook.com/Anna.Font.Artista" target="_blank" class="icon-facebook"> Facebook</a> | 
		<a href="http://www.linkedin.com/pub/anna-font/35/bb/381" target="_blank" class="icon-linkedin"> Linkedin</a>
	</div>
	
	<?php if(is_front_page()) {?>
	<div class="idioma">
	<h3></h3>
		<?php do_action('icl_language_selector'); ?>
	</div>
	<?php } ?>
	</div>
	  
	  <!-- https://www.facebook.com/anna.f.pelao -->