<?php while (have_posts()) : the_post(); ?>

<h2><?php the_field('sub_heading'); ?></h2>

	<?php //echo do_shortcode('[gallery link="file" columns="3"]'); ?>
	


	<!-- pintame la galeria con acf -->
<?php 
 
$images = get_field('image');
 
if( $images ): ?>
    <ul class="gallery">
        <?php foreach( $images as $image ): ?>
            <li>
            	<a href="<?php echo $image['url']; ?>">
            		<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>
            	</a>
               <small><?php echo $image['caption']; ?></small>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>




	<?php the_content(); ?>

  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>

