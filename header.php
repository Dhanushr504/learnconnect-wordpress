<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site-wrapper">

<header class="site-header">
    <div class="site-title"><?php bloginfo('name'); ?></div>
    <nav class="nav-menu">
        <nav class="nav-menu">
    <?php
    if ( is_user_logged_in() ) {
        wp_nav_menu([
            'menu' => 'Logged In Menu'
        ]);
    } else {
        wp_nav_menu([
            'menu' => 'Logged Out Menu'
        ]);
    }
    ?>
</nav>

    </nav>
</header>

