<!DOCTYPE html>
<html lang="en">
    <head>
        <!--SEO Meta Tags-->
        <meta charset="utf-8" />
        <!-- SITE TITLE -->
        <title><?php bloginfo( 'name' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <?php wp_head() ?>
         <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
<style>
.bg-home {
  background: url(<?php echo get_theme_mod('hero_image', get_bloginfo('template_directory').'/images/slider3.jpg'); ?>);
  background-size: cover;
  background-color: #f0f0f0;
  position: relative;
}
</style>
    </head>


    <body  data-spy="scroll" data-target="#data-scroll">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner">Loading...</div></div></div>


        <!-- Navbar -->
        <div class="navbar navbar-custom sticky" role="navigation">
            <div class="container">
                <!-- Navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="ti-menu"></i>
                    </button>
                    <!-- LOGO -->
                    <a class="navbar-brand logo slider-color font-2" href="#">
                    <?php bloginfo( 'name' ); ?>
                    </a>
                </div>
                <!-- end navbar-header -->

                <!-- menu -->
                <!-- <div class="navbar-collapse collapse" id="data-scroll">
           <ul class="nav navbar-nav navbar-right slider-color">
                        <li class="active">
                            <a href="#home"><?php //echo get_theme_mod('menu_home', 'Home'); ?></a>
                        </li>
                        <li class="slider-color">
                            <a href="#about"><?php //echo get_theme_mod('menu_about', 'About'); ?></a>
                        </li>
                        <li class="slider-color">
                            <a href="#services"><?php //echo get_theme_mod('menu_services', 'Services'); ?></a>
                        </li>
                        <li class="slider-color">
                            <a href="#features"><?php //echo get_theme_mod('menu_features', 'Features'); ?></a>
                        </li>
                        <li class="slider-color">
                            <a href="#contact"><?php //echo get_theme_mod('menu_contact', 'Contact'); ?></a>
                        </li> </ul> -->
         
                        <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'data-scroll',
                            'menu_class'        => 'nav navbar-nav navbar-right slider-color',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker()
                            )
                        );
                    ?> 
                    
                </div>
                <!--/Menu -->
            </div>
            <!-- end container -->
        </div>