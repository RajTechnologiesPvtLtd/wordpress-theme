<?php
add_action('wp_enqueue_scripts', 'RajtechnologiesWP_enqueue');

add_action('after_setup_theme', 'rajtechnologiesWP_after_setup_theme');

register_nav_menus(array(
  'header' => 'Custom Primary Menu',
));

function rajtechnologiesWP_after_setup_theme()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

function RajtechnologiesWP_enqueue()
{
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
}

function rajtechnologiesWP_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Footer 1',
        'id'            => 'footer_1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ttl">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => 'Footer 2',
        'id'            => 'footer_2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ttl">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => 'Footer 3',
        'id'            => 'footer_3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ttl">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => 'sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ttl">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'rajtechnologiesWP_widgets_init');
