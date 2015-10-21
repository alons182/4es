<?php
/*
  
 Template Name: Page About
     
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 4es
 */

get_header(); ?>
 	<div class="main page-about">
				<?php the_title( '<h1 class="page-about-title">', '</h1>' ); ?>
				<?php the_excerpt(); ?>
				<?php get_template_part( 'template-parts/logos'); ?>
			<div class="page-about-container">
				
				<div class="page-about-info">
					<?php while ( have_posts() ) : the_post(); ?>
					
					<?php the_content(); ?>


				<?php endwhile; // End of the loop. ?>
				</div>
				<div class="page-about-img" style="background-image:url('<?php echo get_template_directory_uri();  ?>/img/about.jpg');">
					
				</div>

			</div>
		
	</div>


<?php get_footer(); ?>
