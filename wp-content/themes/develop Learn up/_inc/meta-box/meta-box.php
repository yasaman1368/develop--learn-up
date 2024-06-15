<?php
function yas_more_setting_post()
{
    add_meta_box('yas_more_setting_post', ' تنظیمات بیشتر', 'yas_more_setting_html_callback', '', 'normal', 'high');
}

function yas_more_setting_html_callback($post)
{
    wp_nonce_field('post_level_nonce', 'post_level_nonces');
    wp_nonce_field('post_cat_nonce', 'post_cat_nonces');
    wp_nonce_field('post_video_nonce', 'post_video_nonces');
?>
    <!-- box level -->
    <label for="post_level">سطح مقاله</label>
    <select name="post_level" id="post_level" style="display: block;">
        <option value="1" <?php echo selected(get_post_meta(get_the_ID(), '_post_level', true), 1) ?>>مقدماتی</option>
        <option value="2" <?php echo selected(get_post_meta(get_the_ID(), '_post_level', true), 2) ?>>متوسط</option>
        <option value="3" <?php echo selected(get_post_meta(get_the_ID(), '_post_level', true), 3) ?>>پیشرفته</option>
    </select>
    <!-- box cat -->
    <label for="post_level" style="display: block;">دسته بندی</label>
    <?php
    wp_dropdown_categories(
        [
            'name' => 'post_cat',
            'selected' => get_post_meta($post->ID, '_post_cat', true),
            'show_option_all' => 'گزینه مورد نظر را انتخاب کنید',
            'show_count' => 1,
            'value_field' => 'slug'
        ]
    );
    ?>

    <!-- box file -->
    <h5>فایل ضمیمه</h5>
    <input type="checkbox" name="post_video" id="post_video" <?php
                                                                $value = get_post_meta(get_the_ID(), '_post_video', true);
                                                                if ($value === 'on') {
                                                                    echo 'Checked';
                                                                } else {
                                                                    echo 'Unchecked';
                                                                }
                                                                ?>>

    <label for="post_video"> ویدیو</label>
<?php
}
function save_meta_box($post_id)
{
    $post_video_nonce = $_POST['post_video_nonces'];
    $post_cat_nonce = $_POST['post_cat_nonces'];
    $post_level_nonce = $_POST['post_level_nonces'];
    if (!wp_verify_nonce($post_level_nonce, 'post_level_nonce') && !wp_verify_nonce($post_cat_nonce, 'post_cat_nonce') && !wp_verify_nonce($post_video_nonce, 'post_video_nonce')) {
        return $post_id;
    };
    if (
        defined('DOING_AUTOSAVE') && DOING_AUTOSAVE
    ) {

        return $post_id;
    }
    if (!current_user_can('edit_post', $post_id)) {

        return $post_id;
    };

    if (!empty($_POST['post_level']) && !empty($_POST['post_cat'])) {
        // && !empty($_POST['post_video']
        $post_level = sanitize_text_field($_POST['post_level']);
        $post_cat = sanitize_text_field($_POST['post_cat']);
        $post_video = sanitize_text_field($_POST['post_video']);
        update_post_meta($post_id, '_post_level', $post_level);
        update_post_meta($post_id, '_post_cat', $post_cat);
        update_post_meta($post_id, '_post_video', $post_video);
    }
}
add_action('save_post', 'save_meta_box');
add_action('add_meta_boxes', 'yas_more_setting_post')
?>