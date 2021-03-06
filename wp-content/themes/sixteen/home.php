<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sixteen
 */

get_header(); ?>

	<div id="primary-home" class="content-area">
		<h2 id="page-title"><?php _e("Recent Posts", 'sixteen') ?></h2>
			<main id="main" class="site-main" role="main">
	
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php if ( of_get_option('facebook',true) != 1 ) : /* Verify any Default Value */
					 		get_template_part( 'content', 'home' );
					 else :
					 		get_template_part('defaults/content', 'default');
					 endif; ?>
	
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>
	
				<?php endwhile; // end of the loop. ?>
				
				<?php sixteen_pagination(); ?>
			</main><!-- #main -->
	</div><!-- #primary-home-->

<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>
