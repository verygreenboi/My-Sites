<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

</div>

<footer>
					<div class="container clearfix">
						<div class="grid">
							<ul>
								<strong>Recent Projects</strong>
								<li><a href="#">Transformer</a></li>
							</ul>
						</div>
						
						<div class="grid">
							<strong>Blog</strong>
							<li><a href="#">Recent Articles</a></li>
						</div>
						
						<div class="grid">
							<strong>Contact</strong>
							<li>08033403490</li>
						</div>
						
					</div>
					
					<div class="container clearfix">
						<div class="senator">
							<strong>Hon. Sultan Adegbayibi Adeniji Adele II</strong>
							&copy; Hon Sultan. All rights reserved.
						</div>
					</div>
					
				</footer>
			</div>
		</div>
		
		<?php
		/* Always have wp_footer() just before the closing </body>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to reference JavaScript files.
		 */
		
		wp_footer();
		?>

	</body>
	
</html>