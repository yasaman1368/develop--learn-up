<?php
class PostExcerpt
{
    public static function yas_post_excerpt()
    {
        $excerpt = get_the_excerpt();
        return mb_substr($excerpt, 0, 100) . ' ' . '...';
    }
}
