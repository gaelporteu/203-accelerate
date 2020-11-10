<?php
/**
 * The template for displaying the archive case studies page.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
        <?php query_posts('order=ASC&post_type=case_studies'); ?>
            <?php while ( have_posts() ) : the_post(); 
                $image_1 = get_field('image_1');
                $size = "full";
                $services = get_field('services');
            ?>

            <article class="case-study sidebar">
    			<aside class="case-study-sidebar">
        			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        			<h5><a href="<?php the_permalink(); ?>"><?php echo $services; ?></a></h5>

					<p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>

					<p><strong><a href="<?php the_permalink(); ?>">View Project ></a></strong></p>
    			</aside>
    
    			<div class="case-study-images">
                    <a href="<?php the_permalink(); ?>">
					<?php if($image_1) {
						echo wp_get_attachment_image( $image_1, $size );
					} ?>
                    </a>
		    	</div>
			</article>
		<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
