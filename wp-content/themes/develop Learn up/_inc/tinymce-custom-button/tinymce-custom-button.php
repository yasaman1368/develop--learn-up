<?php
add_filter('mce_external_plugins', 'add_tinymce_custom_button');
add_filter('mce_buttons', 'register_custom_button_for_mce');
function add_tinymce_custom_button($array)
{
    $array['video_btn'] = get_template_directory_uri() . '/assets/js/tinymce-custom-buttons.js';
    $array['quote'] = get_template_directory_uri() . '/assets/js/tinymce-custom-buttons.js';
    return $array;
}
function register_custom_button_for_mce($buttons)
{
    array_push($buttons, 'video', 'quote');
    return $buttons;
}
