<?php
class GoogleReferer
{
    public static function yas_set_google_referer(int $postId,  $url): void
    {
        if (stripos($url, 'http://google.com')) {
            $google_referer_key = '_google_referer_nums';
            $google_referer_nums = get_post_meta($postId, $google_referer_key, true);
            if (!metadata_exists('post', $postId, $google_referer_key)) {
                add_post_meta($postId, $google_referer_key, 1);
            }
            $google_referer_nums++;
            update_post_meta($postId, $google_referer_key, $google_referer_nums);
        }
    }
    public static function yas_get_google_referer(int $postId): string
    {
        $google_referer_key = '_google_referer_nums';
        if (!metadata_exists('post', $postId, $google_referer_key)) {
            return '0';
        }
        return     get_post_meta($postId, $google_referer_key, true);
    }
}
