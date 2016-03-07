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

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
			<p class="paragraph-class">
				<?php the_content(); ?>
			</p>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div>
</section>
	
		<h3>Our Services</h3>
		<h4>We take Pride in our clients and the content we create for them.</h4>
		<h4>Here's a brief overview of our services.</h4>	
		<h3>Interested in working with us?</h3>
			<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
	</div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>
