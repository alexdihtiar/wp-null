<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php /* twentytwentyone_the_html_classes(); */ ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta content="yes" name="apple-mobile-web-app-capable">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site" flex layout="column" layout-align="start start">
  
<?php get_template_part( 'template-parts/header/site-header' ); ?>  
  
<div id="content" class="site-content" flex="noshrink">
  <main id="main" class="site-main" role="main">
    <div class="wrapper">