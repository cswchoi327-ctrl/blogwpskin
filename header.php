<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="outer-wrapper">
    <header id="header-wrap">
        <div class="container header-inner">
            <div class="header-logo">
                <h1>
                    <a href="<?php echo home_url(); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            </div>
            
            <button id="mobile-menu-btn" aria-label="Menu">
                <i class="fas fa-bars"></i>
            </button>

            <nav id="main-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'menu-list',
                    'fallback_cb' => false 
                ));
                ?>
            </nav>
        </div>
    </header>
    
    <div id="content-outer-wrapper">
        <div id="content-wrapper" class="row">
            <div class="container">
