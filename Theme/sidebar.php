<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>


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
