<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

get_header();
?>

	<header class="page-header>
		<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'dfdf' ); ?></h1>
	</header><!-- .page-header -->

	<div class="error-404 not-found">
		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'dfdl' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->

<?php
get_footer();
