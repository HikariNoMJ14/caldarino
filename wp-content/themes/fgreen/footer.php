<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "body-content-wrapper" div and all content after.
 *
 * @subpackage fGreen
 * @author tishonator
 * @since fGreen 1.0.0
 *
 */
?>
			<a href="#" class="scrollup"></a>
			<footer id="footer-main">
			
				<div id="footer-content-wrapper">
				
					<?php get_sidebar( 'footer' ); ?>
					
					<nav id="footer-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'footer', ) ); ?>
					</nav>
				
					<div class="clear">
					</div><!-- .clear -->
					
					<div id="copyright">
					
						<p>
						 	<?php fgreen_show_copyright_text(); ?> <a href="<?php echo esc_url( 'https://tishonator.com/product/fgreen' ); ?>" title="<?php esc_attr_e( 'fgreen Theme', 'fgreen' ); ?>">
							<?php esc_html_e('fGreen Theme', 'fgreen'); ?></a> <?php esc_attr_e( 'powered by', 'fgreen' ); ?> <a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>" title="<?php esc_attr_e( 'WordPress', 'fgreen' ); ?>">
							<?php esc_html_e('WordPress', 'fgreen'); ?></a>
						</p>
						
					</div><!-- #copyright -->
					
				</div><!-- #footer-content-wrapper -->
				
			</footer><!-- #footer-main -->

		</div><!-- #body-content-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html>