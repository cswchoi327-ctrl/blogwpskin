<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="outer-wrapper">
    <div id="header-wrap">
        <div class="container row" style="display:flex; justify-content:space-between; align-items:center;">
            <div class="header-logo">
                <h1>
                    <a href="<?php echo home_url(); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            </div>
            
            <div class="header-menu">
                <nav id="main-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'menu-list',
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </div>
    
    <div id="content-outer-wrapper">
        <div id="content-wrapper" class="row">
            <div class="container">
