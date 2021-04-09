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
                    <h2 class="c-title__menu p-header-inner__menu js-menu">Menu</h2>
                    <div class="p-header-inner__block">
                        <h1 class="c-title__site p-header-inner__site-title"><a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a></h1>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </header>