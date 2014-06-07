<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

    <div id="wrapper" class="body_wrapper backgour-wapper">
        <div style="height: 20px;"></div>
        <div class="wrapper">
            <div style="padding: 15px 20px;" class="wrapper">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
            </div>
			</div><!-- #wrapper -->
		</div><!-- #wrapper -->

<?php get_footer(); ?>