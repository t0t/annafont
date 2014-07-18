<footer id="my-footer" class="content-info footer" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    
	<p class="copyright">
	Anna Font &reg; - Copyright &copy; <?php echo date('Y'); ?>.
	</p>

    	<small><a href="http://sergiofores.net" target="_blank"><i class="icon-logo"></i></a></small>
	<small>Admin Area: <?php wp_loginout(); ?></small>
  </div>
</footer>

<?php wp_footer(); ?>
