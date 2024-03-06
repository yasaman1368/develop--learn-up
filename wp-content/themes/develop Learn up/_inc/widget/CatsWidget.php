<?php
class CatsWidget extends WP_Widget
{
    function  __construct()
    {
        parent::__construct(false, 'دسته بندی مطالب');
    }
    //frontend
    function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        $variable =  wp_list_categories([
            'title_li' => '',
            'depth' => 1,
            'show_count' => 1,
            'orderby' => 'name',
            'order' => 'DECN',
            'echo' => false,

        ]);
        $variable = preg_replace('~\((\d+)\)(?=\s*+<)~', '<span class="cat-count">$1</span>', $variable);
        echo $variable;
        echo $args['after_widget'];
    }
    //backend
    function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : 'عنوان پیش فرض(عنوان ویجتخود را انتخاب کنید...)';
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">عنوان ویجت</label>
            <input class="widefat" id="<?php echo  esc_attr($this->get_field_id('title'));
                                        ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
<?php
    }
    function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';

        return $instance;
    }
}
function yas_register_widget()
{
    register_widget('CatsWidget');
}
add_action('widgets_init', 'yas_register_widget');
