<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="//ajax.googleapis.com" rel="dns-prefetch">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- MODERNIZR -->
    <script src="<?php bloginfo('template_url');?>/assets/components/modernizr/modernizr-2.8.3.min.js"></script>

    <!-- ADAPTIVE IMAGES -->
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>

    <!-- Main Stylesheet -->
    <link href="<?php bloginfo('template_url');?>/assets/css/style.min.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.6/slick.css"/>
    
    <!-- Google Fonts: Dosis - Extra-Light, Medium & Semi-Bold -->
    <link href='https://fonts.googleapis.com/css?family=Dosis:200,500,600' rel='stylesheet' type='text/css'>

    <!-- Lightbox: Featherlight -->
    <link href="//cdn.rawgit.com/noelboss/featherlight/master/release/featherlight.min.css" type="text/css" rel="stylesheet" title="Featherlight Styles" />
    <link href="//cdn.rawgit.com/noelboss/featherlight/master/release/featherlight.gallery.min.css" type="text/css" rel="stylesheet" title="Featherlight Gallery Styles" />

    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
    
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>


  <!-- BANNERS -->
  <!-- <div class="shade">
    <div class="banner">
      <a href="#" class="close-banner">x</a>
      <img src="<?php // bloginfo('template_url');?>/assets/images/banners/banner-movelpar--1.jpg" alt="">
    </div>
  </div> -->


  <header class="header" role="banner" id="header">

    <div class="js-anchor">
      <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>#hero" data-panel="hero">
        <img id="logo5" src="<?php bloginfo('template_url');?>/assets/images/logos/logo_rosa-roxo-marrom.svg" height="75" alt="<?php bloginfo('title');?>"/>
        <img id="logo4" src="<?php bloginfo('template_url');?>/assets/images/logos/logo_azul-bege-vermelho.svg" height="75" alt="<?php bloginfo('title');?>"/>
        <img id="logo3" src="<?php bloginfo('template_url');?>/assets/images/logos/logo_amarelo-verde-vermelho.svg" height="75" alt="<?php bloginfo('title');?>"/>
        <img id="logo2" src="<?php bloginfo('template_url');?>/assets/images/logos/logo_azul-amarelo-verde.svg" height="75" alt="<?php bloginfo('title');?>"/>
        <img id="logo1" src="<?php bloginfo('template_url');?>/assets/images/logos/logo_marrom-verde-amarelo.svg" height="75" alt="<?php bloginfo('title');?>"/>
      </a>
    </div>

    <nav class="nav nav--main" id="nav--main" role="navigation">
      <?php
        $walker = new data_type_walker();

        $menuParameters = array (
          'menu'            => 'main-nav',
          'menu_class'      => 'main-menu',
          'container'       => false,
          'depth'           => 2,
          'walker'          => $walker
        );
        wp_nav_menu($menuParameters);
      ?>
    </nav>


    <div class="sec-line">

      <?php get_search_form(); ?>

      <nav class="nav nav--sec" id="nav--sec" role="navigation">
        <?php
          $walker = new data_type_walker();

          $menuParameters = array (
            'menu'            => 'sec-nav',
            'menu_class'      => 'sec-menu',
            'container'       => false,
            'depth'           => 1,
            'walker'          => $walker
          );
          wp_nav_menu($menuParameters);
        ?>
      </nav>
    <a href="#" class="face"><img src="/wp-content/themes/casamob/assets/images/ico-face.png" /></a>
    </div>
  </header>