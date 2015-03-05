<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Assignment 4.2
 */

 get_header(); ?>
	

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			 <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hero.jpg" />
		
		<?php if ( have_posts() ) : while ( have_posts()): the_post() ?>
		<section>	
		<a href"<?php the_permalink(); ?>"><h1><?php the_title_attribute(); ?></h1>	
			<?php the_content(); ?>	
		</section>
			<?php /* Start the Loop */ ?>
			
			<?php endwhile; else: ?>
				<p><?php _e('sorry no content'); ?></p>
			<?php endif; ?>
			
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
