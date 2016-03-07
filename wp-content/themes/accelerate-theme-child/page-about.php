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
			<div class='about-hero'>
			<p class="paragraph-class">
				<?php the_content(); ?>
			</p>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div>
</section>

<section class="aboutservices">
	<div class="ourservices">
		<p class="ourservices">
			<h2>Our Services</h2>
			<h4>We take Pride in our clients and the content we create for them.<br>
			Here's a brief overview of our services.</h4>
		</p>
	</div>
	<div class="content-strategy">
	</div>
	<div class="influencer-mapping">
	</div>
	<div class="social-media-strategy">
	</div>
	<div class="design-and-development">
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
