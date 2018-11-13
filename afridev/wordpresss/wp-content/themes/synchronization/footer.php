<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Synchronization
 */

?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__wrap">
                        <div class="site-info">
                              <?php  /* translators: %s: WordPress */ ?>
				<div><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'synchronization' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'synchronization' ), 'WordPress' ); ?></a></div>
				<?php  /* translators: 1: theme name, 2: author  */ ?>
                                <div><?php printf( esc_html__( 'Theme: %1$s by %2$s', 'synchronization' ), 'synchronization', '<a href="http://jenrohrig.com" rel="designer">Jen Rohrig</a>' ); ?></div>
			</div><!-- .site-info -->
		</div><!-- .site-footer__wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
