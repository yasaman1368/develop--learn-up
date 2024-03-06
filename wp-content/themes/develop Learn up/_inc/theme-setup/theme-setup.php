<?php
function theme_setup()
{
    add_filter('show_admin_bar', '__return_false');
    register_nav_menu('top nav', 'منوی اصلی بالای سایت');
    require_once get_template_directory() . '/class/nav-walker/class-wp-bootstrap-navwalker.php';
    date_default_timezone_set("Asia/Tehran");
}
add_action('after_setup_theme', 'theme_setup');
