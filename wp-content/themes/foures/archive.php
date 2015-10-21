<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 4es
 */

get_header(); ?>
	
	<div class="main page-blog">
		
			<div class="page-blog-container">
				<div class="page-blog-header">
					
					<?php the_archive_title( '<h1 class="page-blog-header-title">', '</h1>' ); ?>
					<?php get_sidebar(); ?>
				</div>
				<div class="page-blog-content">
					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>

			</div>
		
	</div>

	

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>
