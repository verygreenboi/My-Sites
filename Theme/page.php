<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<?php get_sidebar(); ?>

<div id="inner">
	<div id="slider">
		
	</div>
	
	<?php
	/* 
	 * Start of Loop
	 */?>
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<div id="juice">
	<article>
		<h2><?php the_title(); ?></h2>
		<p class="date-bubble">
			<span>By: <strong><?php the_author()?> </strong></span>
			|
			<span><?php echo get_the_date(); ?></span>
		</p>
		<div class="entry-content">
			
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
			<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

			<?php //comments_template( '', true ); ?>
			
		</div>
	</article>
	
	</div>
	
	<div id="mini-side">
		<h2>Recent Projects</h2>
	</div>
	
</div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>