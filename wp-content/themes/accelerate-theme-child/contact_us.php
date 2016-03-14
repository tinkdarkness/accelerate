<?php
/**
 * The template for displaying Contact Us Page
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		
		<?php while ( have_posts() ) : the_post(); 
			$name = get_field('name');
			$email = get_field('email');
			$your_message = get_field('your message');?>
			
					<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>