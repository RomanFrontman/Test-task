<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roman
 */

get_header();
?>

	<main id="roman-content" class="roman-page">

		<?php get_template_part( 'template-parts/page-builder' ); ?>

	</main><!-- #main -->

<?php
get_footer();
