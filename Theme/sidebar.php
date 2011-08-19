<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

	<aside>
		<section class="search">
			<div class="box">
				<h2>Search</h2>
				<?php get_search_form(); ?>
			</div>
		</section>
		
		<section class="widget">
			<div class="box">
				<h2>Subscribe</h2>
				
				<p><a href="<?php bloginfo('rss2_url'); ?>">Rss Feed</a></p>
				<p><a href="#">Email Subscription</a></p>
			</div>
		</section>
		
		<section class="widget">
			<div class="box">
				<h2>Recent Blog entries</h2>
			</div>
		</section>
		
		<section class="widget">
			<div class="box">
				<h2>Twitter Feeds</h2>
			</div>
		</section>
		
		<section class="party-logo widget">
			
		</section>
		
	</aside>

			<ul class="xoxo">


	
			<li>
				<?php get_search_form(); ?>
			</li>

			<li>
				<h3><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li>
				<h3><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>

<?php endif; ?>