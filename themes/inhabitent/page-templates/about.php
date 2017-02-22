/**
* Template Name: About Page
*
* @package Inhabitent Theme
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h2>Our Team</h2>
			<?php echo CFS()->get( 'about_our_theme' ); ?>
			<?php echo CFS()->get( 'about_our_story' ); ?>
			<?php echo CFS()->get( 'banner_image_upload' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
