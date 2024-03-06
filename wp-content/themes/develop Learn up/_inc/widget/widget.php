<?php
function yas_register_sidebar()
{
    register_sidebar([
        'name' => 'yas_theme_learnup_sidebar_cats',
        'id' => 'sidebar-1',
        'description' => 'ساید سفارشی قالب  یاس',
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'afeter_widget' => '</li>',
        'before_title' => '<h4 class="title">',
        'after_title' => '</h4>'
    ]);
    register_sidebar([
        'name' => 'yas_theme_learnup_sidebar_hot_post',
        'id' => 'sidebar-2',
        'description' => 'ساید سفارشی قالب  یاس',
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'afeter_widget' => '</li>',
        'before_title' => '<h4 class="title">',
        'after_title' => '</h4>'
    ]);
}
add_action('widgets_init', 'yas_register_sidebar');
