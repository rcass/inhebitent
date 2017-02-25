<?php
/**
 * 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			  <header class="page-header">
			  
                        <?php 
							add_filter('get_the_archive_title', 'product_archive_title');
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>

                        <?php  //shop stuff on front page
                            $arg = array( 'taxonomy' => 'product_type', 'hide_empty' => true);
                            $terms = get_terms( $arg );
                        ?>

                        <div class="product-list-style">
                            <ul>
                                <?php foreach ( $terms as $term ) : ?>
                                    <li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>

                            <?php
                                the_archive_description( '<div e="taxonomy-description">', '</div>' );
                            ?>
                        </div><!-- .product-list-style -->
                </header><!-- .page-header --> 

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
p