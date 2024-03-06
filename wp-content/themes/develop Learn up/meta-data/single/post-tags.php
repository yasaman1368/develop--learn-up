<div class="post-tags">
    <h4 class="pbm-title">تگ های پربازدید</h4>
    <?php $post_tags = get_the_tags() ?>
    <ul class="list">

        <?php if ($post_tags) : ?>
            <?php foreach ($post_tags as $tags) : ?>
                <?php $link_tag = get_tag_link($tags->term_id) ?>
                <li><a href="<?php echo $link_tag ?>"><?php echo $tags->name ?></a></li>

            <?php endforeach ?>
        <?php endif ?>
    </ul>