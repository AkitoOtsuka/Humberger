<?php
add_theme_support('title-tag');

//トップページのタイトルにディスクリプションを表示しない
function my_document_title_parts($title) {
    if(is_home()) {
        $title['tagline'] = '';
    }
    return $title;
}

register_nav_menus( array(
    'categorymenu' => 'CategoryMenu',
    'footermenu' => 'FooterMenu',
));

add_filter('document_title_parts', 'my_document_title_parts');

function add_files() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400&family=Roboto:wght@700&display=swap' );
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
    wp_enqueue_style('ress', 'https://unpkg.com/ress/dist/ress.min.css' );
    wp_enqueue_style('hamberger-style', get_template_directory_uri() . '/css/style.css', array('ress') , filemtime(get_theme_file_path('/css/style.css')));
    wp_enqueue_script('hamburger-script', get_template_directory_uri() . '/scripts/script.js', array('jquery'), '20210326', true );
}
add_action('wp_enqueue_scripts', 'add_files');

add_theme_support('post-thumbnails');

add_editor_style(); //テーマチェック 対応
function add_gutenberg_editor_style() {
    wp_enqueue_style('block-editor-style', get_theme_file_uri('/css/editor-style.css'));
}
add_action('enqueue_block_editor_assets', 'add_gutenberg_editor_style');

// テーマチェック 対応
add_theme_support('automatic-feed-links');

add_theme_support('custom-header'); 

add_theme_support('wp-block-styles');
function remove_block_library_style() {
	wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'remove_block_library_style');

add_theme_support('custom-background');
 
add_theme_support('responsive-embeds');

add_theme_support('align-wide');

add_theme_support('custom-logo');

add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

add_action('init', function() {
    register_block_style(
        'core/paragraph',
        [
            'name' => 'black-bg',
            'label' => '黒背景',
            'inline_style' => '.is-style-black-bg { 
                background: #000;
                color: #fff;
            }',
        ]
    );
});

add_action('admin_init', function() {
    $pattern = [
      'title' => 'my-button',
      'content' => '<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"my-button"} --><div class="wp-block-button my-button"><a class="wp-block-button__link">オリジナルボタン</a></div><!-- /wp:button --></div><!-- /wp:buttons -->',
    ];
    register_block_pattern($pattern['title'], $pattern);
});  