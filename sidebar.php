<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div id="secondary" class="widget-area" role="complementary">
<h2 style="text-align:right;font-size:22px;margin-bottom:15px;border-bottom:2px solid #cccccc;">Gilla oss på Facebook</h2>
<div class="fb-like-box" data-href="https://www.facebook.com/inspirimeblog" data-width="250" data-height="400" data-show-faces="true" data-stream="true" data-border-color="#ffffff" data-header="false"></div>
</div>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
<h2 style="text-align:right;font-size:22px;margin-bottom:15px;border-bottom:2px solid #cccccc;">Prenumerera</h2>
<?php get_epicwin_box(); ?></div>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>

	<div id="secondary" class="widget-area" role="complementary">
	<h2 style="text-align:right;font-size:22px;margin-bottom:15px;border-bottom:2px solid #cccccc;">RSS</h2>
	        <a href="<?php echo esc_url( home_url( '/' ) ); ?>feed/" style="float:right;">
        	        <img src="<?php echo esc_url( get_site_option( 'siteurl' ) ); ?>imgs/200px-Generic_Feed-icon.svg.png" style="width:36px;height:auto;" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> RSS" />
             	</a>
	</div>

