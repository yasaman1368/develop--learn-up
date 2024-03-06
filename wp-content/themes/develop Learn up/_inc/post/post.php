<?php
// default THUMBNAIL
function default_thumbnail(): string
{
    $thumbnail_dir = get_template_directory_uri() . '/assets/img/pexels-khats-cassim-7429322.jpg';
    return "<img class='img-responsive' src='$thumbnail_dir' alt='logo-learnup'>";
}
//get the  thumbnail
function yas_post_thumbnail()
{
    if (has_post_thumbnail()) {
        return get_the_post_thumbnail('', '', ['class' => 'img-responsive', 'alt' => get_the_title()]);
    } else {
        return default_thumbnail();
    }
}
