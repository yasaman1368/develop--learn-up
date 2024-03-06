<?php
class post_view
{
    public static function yas_set_post_view(int $postId): void
    {
        $view_nums_key = '_view_nums';
        $post_view = get_post_meta($postId, $view_nums_key, true);
        if (!metadata_exists('post', $postId, $view_nums_key)) {
            add_post_meta($postId, $view_nums_key, 1);
        }
        $post_view++;
        update_post_meta($postId, $view_nums_key, $post_view);
    }
    public static function yas_get_post_view(int $postId): string
    {
        $view_nums_key = '_view_nums';
        if (!metadata_exists('post', $postId, $view_nums_key)) {
            return '0';
        }
        return     get_post_meta($postId, $view_nums_key, true);
    }
}
