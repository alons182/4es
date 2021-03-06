<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package 4es
 */

get_header(); ?>

	<div class="main page-blog">
		
			<div class="page-blog-container">
				<div class="page-blog-header">
					<h1 class="page-blog-header-title screen-reader-text"><?php single_post_title(); ?></h1>
					<?php get_sidebar(); ?>
				</div>
				<div class="page-blog-content">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'single' ); ?>

						<?php /*the_post_navigation(); */?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // End of the loop. ?>

				</div>

			</div>
		
	</div>
	

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>
