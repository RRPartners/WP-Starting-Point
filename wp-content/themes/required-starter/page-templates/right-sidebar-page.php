<?php
/**
 * Template Name: Right Sidebar Page Template
 * Description: A Page Template with a sidebar on the right side
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.2.0
 */

get_header(); ?>

	<!-- Row for main content area -->
	<div id="content" class="row">

		<div id="main" class="nine columns mainSection" role="main">

				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

			<div class="post-box">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						/**
						 * Seriously I never used comments on a page, what for?
						 */
						//comments_template( '', true );
					?>

				<?php endwhile; // end of the loop. ?>

			</div>
		</div><!-- /#main -->

		<aside id="sidebar" class="three columns" role="complementary">
			<div class="sidebar-box">
				<?php get_sidebar('right'); ?>
			</div>
		</aside><!-- /#sidebar -->

	</div><!-- End Content row -->

<?php get_footer(); ?>