<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php
      global $page, $paged; 
      wp_title( '|', true, 'right' ); 
      bloginfo( 'name' ); 
      $site_description = get_bloginfo( 'description', 'display' ); 
        if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; 
        if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nakeme' ), max( $paged, $page ) ); 
    ?>
  </title>
  <meta name="description" content="<?php bloginfo('description' ); ?>">

  <link rel="apple-touch-icon" href="<?php bloginfo('template_url' ); ?>/library/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url' ); ?>/library/img/favicon.png">

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> - RSS" href="<?php bloginfo('rss2_url') ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name') ?> - Atom" href="<?php bloginfo('atom_url') ?>" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/skeleton.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/jquery.pwstabs-1.2.1.css">

  <link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/style.css">

  <?php wp_head(); ?>

</head>
<body>


<div id="header-color">
          <section class="container">
            <div class="five columns" id="logo">
              <a href="<?php echo home_url('/' ); ?>"><img class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt=""></a>
            </div>
            <nav class="offsey-by-one six columns">
              <ul id="menu-principal">
                <li><a href="<?php echo home_url('/quienes-somos' ); ?>">QUIÉNES SOMOS</a></li>
                <li><a href="<?php echo home_url('/nuestra-propuesta' ); ?>">NUESTRA PROPUESTA</a></li>
                <li><a href="<?php echo home_url('/portafolio' ); ?>">PORTAFOLIO</a></li>
                <li><a href="<?php echo home_url('/contacto' ); ?>">CONTACTO</a></li>
              </ul>
            </nav>

          </section>
        </div>