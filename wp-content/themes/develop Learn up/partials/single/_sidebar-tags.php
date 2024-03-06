<!-- Tags Cloud -->
<div class="single_widgets widget_tags">
    <h4 class="title">تگ</h4>
    <?php if (function_exists('wp_tag_cloud') && isset($tags)) : ?>

        <ul>
            <?php $tags = wp_tag_cloud('smallest=8&largest=14&format=array');
            foreach ($tags as $tag)  echo '<li>' . $tag . '</li>'; ?>

        </ul>

    <?php else :
    ?>
        <div class="alert alert-warning">برچسپی وجود ندارد
            <!DOCTYPE html>
        </div>
    <?php endif ?>

</div>