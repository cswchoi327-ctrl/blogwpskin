<?php
function easypress_setup() {
    // 썸네일 지원
    add_theme_support('post-thumbnails');
    // 타이틀 태그 지원
    add_theme_support('title-tag');
    // 메뉴 등록
    register_nav_menus(array(
        'primary' => 'Main Menu',
        'footer' => 'Footer Menu'
    ));
}
add_action('after_setup_theme', 'easypress_setup');

function easypress_scripts() {
    // 스타일시트 로드
    wp_enqueue_style('main-style', get_stylesheet_uri());
    // 폰트어썸 로드
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css');
    // jQuery 로드
    wp_enqueue_script('jquery');
    
    // 사용자 정의 스크립트 (TOC, 팝업 등)
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'easypress_scripts');

// 요약문 길이 조절
function custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');
?>
