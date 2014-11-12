<h1>Dream pictures</h1>
<h2><?php the_field('sub_heading'); ?></h2>

<?php 
$exclude_ids = array( 859, 850, 842, 789, 384, 132, 4 );
$loop1 = new WP_Query( 
    array( 
        'post_type' => 'page',
        'post__not_in' => $exclude_ids, 
        // 'category_name' => 'energyfruits', 
        // 'post__not_in' => array ($post->ID), 
        // 'orderby' => 'date',
        'order' => 'desc'
        // 'posts_per_page' => 20,
        )
);?>



<ul class="gallery">
	<?php while ($loop1->have_posts()) : $loop1->the_post(); ?>

            <li class="gallery__item">
            	<a href="<?php the_permalink(); ?>">
            		<?php the_post_thumbnail('thumbnail'); ?>
            	</a>
               <small><?php the_title(); ?></small>
            </li>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</ul>





<?php if(is_front_page()) {?>
	<!-- Idiomas -->
	<aside class="idioma">
	<h3>Idioma</h3>
		<?php do_action('icl_language_selector'); ?>
	</aside>
<?php } ?>
