<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sixteen
 */

get_header(); ?>

	<div id="primary" class="content-area">

			<div class="site-text">
			<p></p>

				Снимем для Вас оригинальный, профессиональный, музыкальный видеоклип. 
			Разработка сценария, раскадровок, монтаж, добавление 3D графики и спецэффектов, постпродакшн. 
			Воплотим любые Ваши фантазии, поможем минимизировать съемочный бюджет. А так же снимем
			Ваш концерт, шоу, возможна мультикамерная съемка (до 10-ти камер), профессиональная
			многоканальная запись звука с концерта, с последующим редактированием и сведением с 
			изображением. Выпуск музыкальных DVD. Изготовление трейлеров для нового альбома 
			(рекламный промо-ролик).</div>

		
     		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>
