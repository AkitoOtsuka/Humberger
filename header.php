<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="l-wrapper">
        <div class="l-container">
            <header class="l-header">
                <div class="p-header-inner">
                    <button class="c-menu-btn p-header-inner__menu-btn js-menu">Menu</button>
                    <div class="p-header-inner__block">
                        <?php if ( is_home() ): ?>
                            <h1 class="c-site-title p-header-inner__site-title"><a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></h1>
                        <?php else: ?>
                            <p class="c-site-title p-header-inner__site-title"><a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></p>
                        <?php endif; ?>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </header>