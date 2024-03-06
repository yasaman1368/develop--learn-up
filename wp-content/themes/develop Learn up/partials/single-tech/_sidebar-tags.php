<!-- Tags Cloud -->
<div class="single_widgets widget_tags">
    <h4 class="title">تگ</h4>
    <?php if (function_exists('wp_tag_cloud')) : ?>

        <ul>
            <?php $tags = wp_tag_cloud('smallest=8&largest=14&format=array');
            foreach ($tags as $tag)  echo '<li>' . $tag . '</li>'; ?>

        </ul>

    <?php else :
    ?>
        <div class="alert wrning-alert">no tags here</div>
    <?php endif ?>

</div>