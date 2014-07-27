<?php while (have_posts()) : the_post(); ?>

<h2><?php the_field('sub_heading'); ?></h2>

	<?php //echo do_shortcode('[gallery link="file" columns="3"]'); ?>

	<?php the_content(); ?>

  <?php //wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>

<?php endwhile; ?>