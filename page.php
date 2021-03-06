<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package mundialfutebolderua
 */

get_header(); ?>

<div class="altura-header is-mini-header"></div>
	<div id="content-pages">
		<div id="content" class="page-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #content-pages -->
	<?php if(!is_page('contato')):?>
	    <?php get_template_part('parts/contato-home');?>
	<?php endif;?>
<?php get_footer(); ?>
