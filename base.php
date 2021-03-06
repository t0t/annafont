<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <div id="site-wrapper"><!-- the wrapper para que funcione el responsive menu-->
    <div id="site-canvas">
      <?php
          do_action('get_header');
          get_template_part('templates/header');
        ?>
      
        <div class="container" role="document">
          <div class="content">
            <?php if ( is_page( array( 836, 822, 844, 850, 842, 4, 848, 840, 823 ) ) ) { ?>
              <main class="main-estrecho <?php echo roots_main_class(); ?>" role="main">
            <? } else { ?>
              <main class="main <?php echo roots_main_class(); ?>" role="main">
            <? } ?>

              <?php include roots_template_path(); ?>
            </main><!-- /.main -->
      
            <?php if (roots_display_sidebar()) : ?>
              <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
                <?php include roots_sidebar_path(); ?>
              </aside><!-- /.sidebar -->
            <?php endif; ?>
          </div><!-- /.content -->
          
        </div><!-- /.wrap -->
      
        <?php get_template_part('templates/footer'); ?>
        <?php edit_post_link(); ?>
      </div> <!-- site canvas -->
  </div><!-- site wrapper -->

</body>
</html>