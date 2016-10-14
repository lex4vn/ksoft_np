<!DOCTYPE html>
<html <?php language_attributes(); ?>>              
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">                   
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <link rel="profile" href="http://gmpg.org/xfn/11">           
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">       
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/js/PIE_IE678.js"></script>
        <![endif]-->        
        <?php wp_head(); ?>
    </head>    
    <body <?php body_class(); ?>>
    <header id="page-header"  class="navbar navbar-default navbar-fixed-top">
        <div class="main-header">
                <div id="logo-image" class="thrillist-logo-wrap">
                    <?php if (get_header_image()) { ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php header_image(); ?>" width="217" height="70" alt="<?php bloginfo('name'); ?> <?php esc_html_e('Logo', 'news-mix-lite'); ?>">
                        </a>
                    <?php }else{ ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                        <?php if( get_bloginfo('description') ) : ?>
                            <div class="tagline"><?php bloginfo('description'); ?></div>
                        <?php endif; ?>
                    <?php }; ?>
                </div>

                <nav class="main-menu">
                    <?php
                    if (has_nav_menu('main-nav')) {
                        wp_nav_menu(array(
                            'theme_location' => 'main-nav',
                            'container' => '',
                            'menu_id' => 'main-menu',
                            'items_wrap' => '<ul id="%1$s" class="%2$s nav clearfix">%3$s</ul>',
                            'after' => '<span></span>'
                        ));

                        $mobile_menu_walker = new News_Mix_Lite_Mobile_Menu();
                        wp_nav_menu(array(
                            'theme_location' => 'main-nav',
                            'container' => 'div',
                            'container_id' => 'mobile-menu',
                            'menu_class' => 'mobile-menu',
                            'menu_id' => 'toggle-view-menu',
                            'items_wrap' => '<span>' . esc_html__('Menu', 'news-mix-lite') . '</span><ul id="%1$s">%3$s</ul>',
                            'walker' => $mobile_menu_walker
                        ));
                    }
                    ?>
                </nav><!--main-nav-->

                <div class="utility-nav-wrap">
                    <ul class="utility-nav clearfix">
                        <li class="utility-nav__search has-form">
                            <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                <div class="form-item nav-search-form-field" id="nav-search-form-field">
                                    <label for="search" class="visually-hidden">search</label>
                                    <input type="search" maxlength="128" name="query" id="nav-search-form-input" value="" class="form-text header-search-field" autocomplete="off" data-default="90" placeholder="<?php esc_html_e('Enter your search...', 'news-mix-lite'); ?>">
                                    <input type="submit" class="header-search-submit" value="🔍">
                                </div>
                            </form>
                        </li>
                    </ul><!--utility-nav-->
                </div><!--utility-nav-wrap-->
        </div><!--main-header-->

    </header><!--page-header-->
    <div id="wrapper">
            <div class="">
                <div class="">
                    <div id="main-content">