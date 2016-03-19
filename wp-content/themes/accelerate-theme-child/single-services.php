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
	<div id="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero'>
			<p class="paragraph-class">
				<?php echo $the_content(); ?>
			</p>
			</div>
	<?php endwhile; // end of the loop. ?>
</div>
</section>

<section class="about-services">
	<div class="info">
		<p class="our-services-top">
			<center><h2>Our Services</h2>
			<h4>We take Pride in our clients and the content we create for them.<br>
			Here's a brief overview of our services.</h4></center>
		</p>
		</div>
	</section>
	
<section class="services-list">
	<article class="service">
			<?php while ( have_posts() ) : the_post(); 
				$size = "full";	
				$service_title = get_field('service_title');
				$service_description = get_field('service_description');
				$icon = get_field('icon'); ?>
	
				<center><h2><?php echo $service_title(); ?></h2></center>
				<h5><?php echo $service_description(); ?></h5>
				
			<div class="service_icon">
				<?php if($icon) { ?>
					<?php echo wp_get_attachment_image( $icon, $size ); ?>
				<?php } ?>
				</div>
			</article>
	<?php endwhile; // end of the loop. ?>
	<?php wp_reset_query(); // resets the altered query back to the original ?>
</section>
	


<?php get_footer(); ?>		







	

