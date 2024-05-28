<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DadLAN
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dadlan' ); ?></a>

  <header>
    <div class="logo-nav-container">
      <a href="/" class="logo"><img src="/wp-content/themes/dadlan/assets/images/GreenLogo.png" width="100" height="100" alt="DadLAN Logo"></a>
      <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle " aria-controls="primary-menu" aria-expanded="false">Menu</button>
<div>
<?php
$menuParams = array(
            'container' => false,
            'echo' => false,
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
);
echo strip_tags(wp_nav_menu($menuParams), '<a>');
        ?>
</div>
      </nav>
    </div>
  </header>
