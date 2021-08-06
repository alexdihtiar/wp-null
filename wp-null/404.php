<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 */

get_header();
?>

<h1 class="page-title">
  <?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?>
</h1>

<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?>
<?php get_search_form(); ?>


<?php
get_footer();
