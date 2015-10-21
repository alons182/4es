<?php
/*
  
 Template Name: Page Home
     
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package 4es
 */

get_header(); ?>

	<section class="banner">
            <div class="frame">
                <ul class="slidee">
                    <li class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
                    
                        <div class="banner-slide-info">
                            <span class="banner-slide-subtitle">Lorem ipsum dolor sit amet</span>
                            <h1 class="banner-slide-title">
                                    Lorem ipsum
                            </h1>
                            <div class="banner-slide-buttons">
                               <a href="#" class="btn"><span>Ir al sitio</span> <i class="icon-arrow-right"></i></a>
                                <a href="<?php echo esc_url( home_url( '/noticias' ) ); ?>" class="btn"><span>Ver noticias</span> <i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    
                    </li>
                    <li class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner2.jpg');">
                        
                        <div class="banner-slide-info">
                            <span class="banner-slide-subtitle">Lorem ipsum dolor sit amet</span>
                            <h1 class="banner-slide-title">
                                    Lorem 
                            </h1>
                            <div class="banner-slide-buttons">
                                <a href="#" class="btn"><span>Ir al sitio</span> <i class="icon-arrow-right"></i></a>
                                <a href="<?php echo esc_url( home_url( '/noticias' ) ); ?>" class="btn"><span>Ver noticias</span> <i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>            
                
                    
            </div>
            <a href="#" class="prev"><i class="icon-angle-left"></i></a>
            <a href="#" class="next"><i class="icon-angle-right"></i></a>
            <div class="loader">Loading...</div>
          
        </section>
	
	

	   <?php get_template_part( 'template-parts/logos'); ?>

        <section class="latestNews">
            <div class="latestNews-container">
                <header class="latestNews-header">
                    <h2 class="latestNews-header-title">Ultimas Noticias</h2>
                    <a href="<?php echo esc_url( home_url( '/noticias' ) ); ?>" class="btn latestNews-header-link">Ver todas las noticias</a>
                </header>
               
                <div class="latestNews-slider">
                    <ul class="slidee">

                         <?php rewind_posts(); ?>
			              <?php query_posts( 'post_type=post&posts_per_page=5' ); ?>
			                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			                        <li>
			                            <div class="latestNews-slider-box">
			                             
			                               <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
												the_post_thumbnail('news-home-thumb');
											} 
											?>
			                               
			                                    <a href="<?php the_permalink(); ?>" class="latestNews-slider-box-link">
			                                        <span class="latestNews-slider-box-icon"><i class="icon-arrow-right"></i></span>
			                                    </a>
			                                <footer class="latestNews-slider-box-info">
			                                    <a href="<?php the_permalink(); ?>" class="latestNews-slider-box-title"><?php the_title(); ?></a>
			                                    <small class="latestNews-slider-box-category">
														<?php 
															$categories = get_the_category();
														 
															if ( ! empty( $categories ) ) {
																 /*echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';*/
																echo esc_html( $categories[0]->name );
															}
			                                   			 ?>
			                                    </small>
			                                </footer>
			                            </div>
			                        </li>
			        
			                    <?php endwhile; ?>
			                    <!-- post navigation -->
			                  
			                <?php endif; ?>
                    </ul>
                
                </div>
                <div id="scrollbar" class="scrollbar">
                    <div class="handle"></div>
                </div>
            </div>
        </section>
       
            <div class="other-info">
                <article class="other-info-item">
                    <i class="icon icon-neuter"></i>
                    <h6 class="other-info-item-title">
                        Lorem ipsum dolor sit amet
                    </h6>
                    <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </article>
                <article class="other-info-item">
                    <i class="icon icon-neuter"></i>
                    <h6 class="other-info-item-title">
                        Lorem ipsum dolor sit amet
                    </h6>
                    <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </article>
                <article class="other-info-item">
                    <i class="icon icon-neuter"></i>
                    <h6 class="other-info-item-title">
                        Lorem ipsum dolor sit amet
                    </h6>
                    <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </article>
                <article class="other-info-item">
                    <i class="icon icon-neuter"></i>
                    <h6 class="other-info-item-title">
                        Lorem ipsum dolor sit amet
                    </h6>
                    <p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </article>
            </div>
        


<?php get_footer(); ?>
