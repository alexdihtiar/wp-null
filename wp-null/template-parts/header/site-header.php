<?php
/**
 * Displays the site header.
 *
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
?>
<header id="masthead"  class="<?php echo esc_attr( $wrapper_classes ); ?>">
  <div class="site-header-layout" flex layout="row" layout-align="start space-between">
    <div class="site-header-branding" flex="none">
       <?php get_template_part( 'template-parts/header/site-branding' ); ?>
    </div>
    <div class="site-header-menu" flex="none">
       <?php get_template_part( 'template-parts/header/site-nav' ); ?>
    </div>
  </div>
</header>