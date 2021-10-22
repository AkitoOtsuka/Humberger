<?php
add_theme_support('title-tag');

//トップページのタイトルにディスクリプションを表示しない
function my_document_title_parts($title) {
    if(is_home()) {
        $title['tagline'] = '';
    }
    return $title;
}

add_theme_support('menus');

add_filter('document_title_parts', 'my_document_title_parts');

function add_files() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400&family=Roboto:wght@700&display=swap' );
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
    wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css' );
    wp_enqueue_style('hamberger-style', get_template_directory_uri() . '/css/style.css', array('ress') );
    wp_enqueue_script('hamburger-script', get_template_directory_uri() . '/scripts/script.js', array('jquery'), '20210326', true );
}
add_action('wp_enqueue_scripts', 'add_files');

add_theme_support('post-thumbnails');

function add_gutenberg_editor_style() {
    wp_enqueue_style('block-editor-style', get_theme_file_uri('/css/editor-style.css'));
}
add_action('enqueue_block_editor_assets', 'add_gutenberg_editor_style');
