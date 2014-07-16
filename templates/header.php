<header id="my-header" class="banner container" role="banner">

	<?php if (is_front_page()) { ?>
	<div class="idioma-mobiles">
    		<?php do_action('icl_language_selector'); ?>
    	</div>
	<?php } ?>

	<button id="my-button" href="#">Menu</button>

	<a class="brand" href="<?php echo home_url('/') ?>">
  		<h1><?php bloginfo('name'); ?></h1>
  		<img src="<? bloginfo('template_directory'); ?>/assets/img/logo.png" alt="">
	</a>

</header>

<nav id="my-menu">
	<div class="mm-panel">
		
		<ul class="mm-list">
			<?php wp_nav_menu( array( 'theme_location' => 'general-menu' ) ); ?>
 		</ul>
 		<small><?php _e('painting','annafont'); ?></small>
 		<ul class="mm-list">
			<?php wp_nav_menu( array( 'theme_location' => 'pintura-menu' ) ); ?>
 		</ul>
 		<small><?php _e('other','annafont'); ?></small>
 		<ul class="mm-list">
			<?php wp_nav_menu( array( 'theme_location' => 'otros-menu' ) ); ?>
 		</ul>
		<small> <?php _e('Find me at:','annafont'); ?> </small>
		<ul>
		<li><a href="https://www.facebook.com/Anna.Font.Artista" target="_blank" class="icon-facebook"> Facebook</a></li>
		<li><a href="http://www.linkedin.com/pub/anna-font/35/bb/381" target="_blank" class="icon-linkedin"> Linkedin</a></li>
		</ul>

	</div>
	
</nav>