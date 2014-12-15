<h1>Dream pictures</h1>
<h2><?php the_field('sub_heading'); ?></h2>

<?php 
$exclude_ids = array( 842, 859, 850, 4, 132, 857, 848, 840, 823, 815, 836, 855, 844, 822, 814 );
$loop1 = new WP_Query( 
    array( 
        'post_type' => 'page',
        //'post__in' => $include_ids, 
        'post__not_in' => $exclude_ids, 
        // 'category_name' => 'energyfruits', 
        // 'post__not_in' => array ($post->ID), 
        'orderby' => 'name',
        // 'post_type' => array( 'post', 'page', 'movie' ),
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