<?php
function garden_enqueue_styles() {
    // Подключаем основной стиль темы
    wp_enqueue_style('garden-style', get_stylesheet_uri());
    
    // Подключаем твой CSS
    wp_enqueue_style('garden-custom', get_template_directory_uri() . '/css/style.css', array(), '1.0');

    // Подключаем Bootstrap
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    // Подключаем Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'garden_enqueue_styles');

// Регистрируем меню
function garden_register_menus() {
    register_nav_menus(array(
        'main-menu' => 'main menu'
    ));
}
add_action('after_setup_theme', 'garden_register_menus');

// Добавляем поддержку кастомных классов к ссылкам и li
function add_additional_class_on_li($classes, $item, $args) {
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_a($atts, $item, $args) {
    if (isset($args->link_class)) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
