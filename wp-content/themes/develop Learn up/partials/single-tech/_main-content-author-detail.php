<!-- Author Detail -->
<div class="article_detail_wrapss single_article_wrap format-standard">

    <div class="article_posts_thumb">
        <span class="img"><?php echo get_avatar(get_the_author_meta('email')) ?></span>
        <h3 class="pa-name"><?php echo get_the_author_meta('display_name') ?> </h3>
        <ul class="social-links">
            <?php if (get_the_author_meta('facebook')) : ?>
                <li><a href="<?php echo get_the_author_meta('facebook') ?>"><i class="fab fa-facebook-f"></i></a></li>
            <?php endif ?>
            <?php if (get_the_author_meta('twitter')) : ?>
                <li><a href="<?php echo get_the_author_meta('twitter') ?>"><i class="fab fa-twitter"></i></a></li>
            <?php endif ?>
            <!-- در وردپرس فیلدهایی برای ادرس دهی شبکه های اجتماعی  نبود ...که باید با پلاگین اضافه شود -->
            <li><a href="#"><i class="fab fa-behance"></i></a></li>
            <li><a href="<?php echo get_the_author_meta('youtube') ?>"><i class="fab fa-youtube"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
        <p class="pa-text"><?php echo get_the_author_meta('description') ?></p>
    </div>

</div>