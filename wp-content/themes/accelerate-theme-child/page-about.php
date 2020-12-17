<?php
/**
 * The template for displaying about us page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.1
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>				
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="about-us">
		<div class="site-content">
			<div class="heading">
				<?php while ( have_posts() ) : the_post(); 
					$heading = get_field("heading");
					$ourservices = get_field("our_services");
				?>
					<h4><?php echo $heading ?></h4>
					<p><?php echo $ourservices ?></p>
				<?php endwhile; // end of the loop ?>
			</div> 
			<ul class="about-us">
				<?php while ( have_posts() ) : the_post(); 
					$size = "medium";
					$image_1 = get_field("image_1");
					$subhead_1 = get_field("subhead_1");
					$services_1 = get_field("services_1");
					$image_2 = get_field("image_2");
					$subhead_2 = get_field("subhead_2");
					$services_2 = get_field("services_2");
					$image_3 = get_field("image_3");
					$subhead_3 = get_field("subhead_3");
					$services_3 = get_field("services_3");
					$image_4 = get_field("image_4");
					$subhead_4 = get_field("subhead_4");
					$services_4 = get_field("services_4");
				?>
				<li class="individual-services animate__animated animate__slideInRight">
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>
					<div>
						<h3><?php echo $subhead_1 ?></h3>
						<p><?php echo $services_1 ?></p>
					</div>	
				</li>
				<li class="individual-services animate__animated animate__slideInLeft">
					<figure>
						<?php echo wp_get_attachment_image($image_2, $size); ?>
					</figure>
					<div>
						<h3><?php echo $subhead_2 ?></h3>
						<p><?php echo $services_2 ?></p>
					</div>	
				</li>
				<li class="individual-services animate__animated animate__slideInRight">
					<figure>
						<?php echo wp_get_attachment_image($image_3, $size); ?>
					</figure>
					<div>
						<h3><?php echo $subhead_3 ?></h3>
						<p><?php echo $services_3 ?></p>
					</div>	
				</li>
				<li class="individual-services animate__animated animate__slideInLeft">
					<figure>
						<?php echo wp_get_attachment_image($image_4, $size); ?>
					</figure>
					<div>
						<h3><?php echo $subhead_4 ?></h3>
						<p><?php echo $services_4 ?></p>
					</div>	
				</li>
       		
				<?php endwhile; // end of the loop ?> 
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>
		</div>
	</section>	

	<div class="contact-us">
        <h2>Interested in working with us?</h2>
	    <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
	</div>

<?php get_footer(); ?>