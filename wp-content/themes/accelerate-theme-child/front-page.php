<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
	<!-- Skillcrush request to id all posts -->
	<pre><?php 
		// print_r($wp_query); exit; 
	?></pre>
	

	
	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<!-- WP#203 Adding Featured work section -->
	<section class="featured-work">
		<div class="site-content">
			<h4>Featured Work</h4>

			<ul class="homepage-featured-work">
				<?php query_posts('order=ASC&posts_per_page=3&post_type=case_studies'); ?>
					<?php while ( have_posts() ) : the_post(); 
						$image_1 = get_field("image_1");
						$size = "medium";
					?>
					<li class="individual-featured-work">
						<figure>
							<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?></a>
						</figure>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</li>
       		 
					<?php endwhile; // end of the loop ?> 
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>
		</div>
	</section>

	<!-- #WP 203 Our Services section advanced -->
	<section class="our-services">
		<div class="site-content">
			<h4>Our Services</h4>

			<ul class="front-about-us">
			<?php query_posts('pagename=about'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$size = "medium";
					$image_1 = get_field("image_1");
					$subhead_1 = get_field("subhead_1");
					$image_2 = get_field("image_2");
					$subhead_2 = get_field("subhead_2");
					$image_3 = get_field("image_3");
					$subhead_3 = get_field("subhead_3");
					$image_4 = get_field("image_4");
					$subhead_4 = get_field("subhead_4");
				?>
				<li class="individual-services">
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>
					<h3><?php echo $subhead_1 ?></h3>
				</li>
				<li class="individual-services">
					<figure>
						<?php echo wp_get_attachment_image($image_2, $size); ?>
					</figure>
					<h3><?php echo $subhead_2 ?></h3>
				</li>
				<li class="individual-services">
					<figure>
						<?php echo wp_get_attachment_image($image_3, $size); ?>
					</figure>
					<h3><?php echo $subhead_3 ?></h3>
				</li>
				<li class="individual-services">
					<figure>
						<?php echo wp_get_attachment_image($image_4, $size); ?>
					</figure>
					<h3><?php echo $subhead_4 ?></h3>
				</li>
       		
				<?php endwhile; // end of the loop ?> 
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>

		</div>
	</section>


	<!-- Skillcrush WP #203 class lessons -->
	<section class="recent-items">
 		<div class="site-content">
			<div class="blog-post">
				<h4>From the Blog</h4>
				<?php query_posts('posts_per_page=1'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<h3><?php the_title(); ?></h3>
       					<?php the_excerpt(); ?> 
					<?php endwhile; ?> 
				<?php wp_reset_query(); ?>
			</div>
			 <!-- Skillcrush WP #203 add twitter widget -->
			<div class="blog-post">
				<h4>Recent Tweet</h4>
				<h3>@GPorteu</h3>
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
					<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				<?php endif; ?>
				<p><strong><a class="read-more-link" href="#"><span>Follow Us</span> &rsaquo;</a></strong></p>
			</div>
 		</div>
	</section>

<?php get_footer(); ?>
