<?php
include_once '_inc/theme-setup/theme-setup.php';
include_once '_inc/assets/register_assets.php';
include_once '_inc/post/post.php';
include_once '_inc/meta-box/meta-box.php';
include_once '_inc/shortcode/shortcode.php';
include_once '_inc/tinymce-custom-button/tinymce-custom-button.php';
include_once 'helper-class/post-view.php';
include_once 'helper-class/read-stimate-time.php';
include_once 'helper-class/googleReferer.php';
include_once 'helper-class/TimeModify.php';
include_once 'helper-class/PostExcerpt.php';
include_once '_inc/widget/widget.php';
include_once '_inc/widget/CatsWidget.php';
include_once '_inc/widget/HotPstWidget.php';
include_once '_inc/comment-theme/comment-theme.php';
include_once '_inc/tech-custom-post-taxonomy/tech-custom-post-type-taxonomy.php';
include_once 'class/breadcrumb/breadcrumb.php';
include_once 'loop/index/tech-popular-loop.php';
include_once 'loop/index/tech-hot-loop.php';
include_once 'loop/index/tech-video-loop.php';
include_once 'loop/index/tech-new-loop.php';
add_action('after_setup_theme', 'theme_setup_f');
function theme_setup_f()
{
    add_theme_support('post-thumbnails');
    add_image_size('mysize', 200, 200, ['center', 'center']);
}
