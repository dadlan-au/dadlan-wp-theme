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
  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3QL8GW9Z9F"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-3QL8GW9Z9F');
    </script>

  <!-- Event snippet for Page view conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-16586618453/CZPYCIm64rQZENXsjuU9'});
</script>


    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '392906460324366');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=392906460324366&ev=PageView&noscript=1"/></noscript>
    <!-- End Meta Pixel Code -->
  <meta name="facebook-domain-verification" content="afi2ckj4m7s0enctp26y8au2wvvjq9" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
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
