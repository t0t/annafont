<header class="banner container" role="banner">

	<a href="#" class="toggle-nav btn btn--slidemenu">
		<i class="icon-collapse"> Menu</i>
	</a>

	<a class="brand" href="<?php echo home_url('/') ?>">
  		<h1><?php bloginfo('name'); ?></h1>
  		<img src="<? bloginfo('template_directory'); ?>/assets/img/logo.png" alt="">
	</a>

</header>

<div id="site-menu">
	<nav>
		<ul>
			<?php wp_nav_menu( array( 'theme_location' => 'general-menu' ) ); ?>
 		</ul>
 		
 		<ul>
			<li><?php _e('Painting','annafont'); ?></li>
			<?php wp_nav_menu( array( 'theme_location' => 'pintura-menu' ) ); ?>
 		</ul>
 		
 		<ul>
			<li><?php _e('Other','annafont'); ?></li>
			<?php wp_nav_menu( array( 'theme_location' => 'otros-menu' ) ); ?>
 		</ul>
		<small> <?php _e('Find me at:','annafont'); ?> </small>
		<ul>
		<li><a href="https://www.facebook.com/Anna.Font.Artista" target="_blank" class="icon-facebook"> Facebook</a></li>
		<li><a href="http://www.linkedin.com/pub/anna-font/35/bb/381" target="_blank" class="icon-linkedin"> Linkedin</a></li>
		</ul>
	</nav>
	
	<?php if(is_front_page()) {?>
	<div class="idioma">
	<h3></h3>
		<?php do_action('icl_language_selector'); ?>
	</div>
	<?php } ?>
</div>