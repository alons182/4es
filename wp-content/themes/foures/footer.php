<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 4es
 */

?>

	<footer class="footer">
            <div class="footer-container">
                 <?php
					wp_nav_menu(
						 array(
						 	'theme_location' => 'secondary',
						 	'container'       => 'nav',
							'container_class' => 'footer-menu',
							'container_id'    => '',
							'menu_class'      => 'footer-menu-ul',
							'menu_id'         => '',
						 	 ) 

					);?>
                <div class="footer-copy">
                    <div class="footer-social">
                        <a href="#" class="footer-social-link"><i class="icon-facebook"></i></a>
                        <a href="#" class="footer-social-link"><i class="icon-google-plus"></i></a>
                        <a href="#" class="footer-social-link"><i class="icon-youtube"></i></a>
                    </div>
                    <p>
                        <span>Copyright © 2015 <a href="http://www.avtoz.com" target="_blank"><i class="icon-avotz"></i></a>. All Rights Reserved.</span>
                        <span>4es.com Inc. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</span>
                    </p>
                </div>
            </div>
        </footer>
        


        <?php wp_footer(); ?>
    </body>
</html>

