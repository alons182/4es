<?php
/*
  
 Template Name: Page Contact
     
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 4es
 */

get_header(); ?>
 	<div class="main page-contact">
		
			<div class="page-contact-container">
				<div class="page-contact-form">
					<?php while ( have_posts() ) : the_post(); ?>
					<?php the_title( '<h1 class="page-contact-form-title">', '</h1>' ); ?>
					<?php the_content(); ?>


				<?php endwhile; // End of the loop. ?>
				</div>
				<div class="page-contact-info" style="background-image:url('<?php echo get_template_directory_uri();  ?>/img/contact.jpg');">
					<h3 class="page-contact-info-title">Información Adicional</h3>
					<p>
					Tel: (506) 2441-1111 <br />
					Email: info@4es.com <br />
					San Antonio del Tejar Alajuela, Costa Rica, del Almacén Fiscal El Coco, 500 mts Norte.</p>
				</div>

			</div>
		
	</div>


<?php get_footer(); ?>
