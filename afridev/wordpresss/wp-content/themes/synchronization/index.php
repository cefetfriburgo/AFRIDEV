<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Synchronization
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

		the_posts_pagination(
                        array(
                            'mid_size'  => 4,
                            'prev_text' => '<i class="fa fa-angle-double-left" aria-hidden="true"></i>' . __(' Newer', 'synchronization'),
                            'next_text' => __('Older ', 'synchronization') . '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                        )
                    );           
                      
	?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();


else :

	get_template_part( 'template-parts/content', 'none' );
	return;

endif;