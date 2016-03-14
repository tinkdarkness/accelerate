<?php
/**
 * The template for displaying the aboutpage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<p class="paragraph-class">
				<?php the_content(); ?>
			</p>
		<?php endwhile; // end of the loop. ?>
		<?php wp_reset_query(); // resets the altered query back to the original ?>
	</div>
</section>

<section class="about-services">
	<div class="site-content">
		<p class="our-services-top">
			<center><h2>Our Services</h2>
			<h4>We take Pride in our clients and the content we create for them.<br>
			Here's a brief overview of our services.</h4></center>
		</p>
		
	<ul class="services">
	<?php query_posts('posts_per_page=4&post_type=services'); ?>
		<?php while ( have_posts() ) : the_post(); 
			$size = "full";	
			$service = get_field('service_title');
			$service_description= get_field('service_description');
			$icon = get_field('icon');?>
		<li class="individual-service">
				<figure>
					<?php echo wp_get_attachment_image($icon, $size); ?>
				</figure>
			
			
			<h3><?php service_title(); ?></h3>
			<h4><?php service_description(); ?></h4>
			</li>
		
	<?php endwhile; // end of the loop. ?>
		<?php wp_reset_query(); // resets the altered query back to the original ?>
	</ul>
	</div>
	<div class="work-with-us">
		<p class="interested">
			<h3>Interested in working with us?</h3>
		</p>
			<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
	</div>
</section>
	</div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>
