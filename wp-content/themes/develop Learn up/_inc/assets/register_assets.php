<?php
add_action('wp_enqueue_scripts', 'register_assets');
add_action('wp_enqueue_scripts', 'register_to_footer');
function register_to_footer()
{
    wp_dequeue_script('jquery');
    wp_dequeue_script('jquery-core');
    wp_dequeue_script('jquery-migrate');
    wp_enqueue_script('jquery', false, [], false, true);
    wp_enqueue_script('jquery-core', false, [], false, true);
    wp_enqueue_script('jquery-migrate', false, [], false, true);
    //ddd

}
function register_assets()
{
    //REGISTER style
    wp_register_style('main-style', get_stylesheet_directory_uri() . '/style.css', '', '1.0.0', '');
    wp_register_style('main-colors', get_stylesheet_directory_uri() . '/assets/css/colors.css', '', '1.0.0', '');
    wp_enqueue_style('main-style');
    wp_enqueue_style('main-colors');
    //REGISTER JS.
    wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', ['jquery'], '1.0.0', true);
    wp_register_script('boostrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], '5.4.1', true);
    wp_register_script('select2', get_template_directory_uri() . '/assets/js/select2.min.js', ['jquery'], '1.0.0', true);
    wp_register_script('slick', get_template_directory_uri() . '/assets/js/slick.js', ['jquery'], '1.0.0', true);
    wp_register_script('jq-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', ['jquery'], '1.0.0', true);
    wp_register_script('counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', ['jquery'], '1.0.0', true);
    wp_register_script('custom',  get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('front-ajax', get_template_directory_uri() . '/assets/js/front-ajax.js', ['jquery'], '', true);
    wp_localize_script('front-ajax', 'ajax', [
        '_nonce' => wp_create_nonce(),
        'ajaxurl' => admin_url('admin-ajax.php')
    ]);
    wp_enqueue_script('popper');
    wp_enqueue_script('boostrap');
    wp_enqueue_script('select2');
    wp_enqueue_script('slick');
    wp_enqueue_script('jq-counterup');
    wp_enqueue_script('counterup');
    wp_enqueue_script('custom');
}
