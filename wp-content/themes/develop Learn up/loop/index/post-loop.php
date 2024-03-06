<?php

$args = ['posts_per_page' => 6];
$query_post = new WP_Query($args);
if ($query_post->have_posts()) {
    while ($query_post->have_posts()) {
        $query_post->the_post()
?>

        <div class="singles_items ">
            <div class="edu_cat">
                <div class="pic">
                    <?php
                    if (!empty(get_post_meta(get_the_ID(), '_post_level'))) {
                        switch (get_post_meta(get_the_ID(), '_post_level', true)) {
                            case '1':
                                echo '<div class="topic_level bg-info text-white">سطح : مقدماتی</div>';

                                break;
                            case '2':
                                # code...
                                echo '<div class="topic_level bg-warning text-white">سطح : متوسط</div>';
                                break;
                            case '3':
                                echo '<div class="topic_level bg-danger text-white">سطح : پیشرفته</div>';
                                # code...
                                break;
                        }
                    }

                    ?>


                    <!-- instead meta box you can use this solation to get catagory name -->
                    <!-- <div class="topic_cat bg-warning text-white"> <?php // echo get_the_category(get_the_ID())[0]->name  
                                                                        ?></div> -->

                    <?php if (!empty(get_post_meta(get_the_ID(), '_post_level'))) :
                    ?>
                        <div class="topic_cat bg-warning text-white"><?php echo get_the_category_by_ID(get_post_meta(get_the_ID(), '_post_cat', true))
                                                                        ?></div>
                    <?php endif
                    ?>


                    <a class="pic-main" href="<?php echo get_the_title() ?>">
                        <?php
                        echo yas_post_thumbnail()
                        ?>
                    </a>
                </div>
                <div class="edu_data singles_items_border_bottom">
                    <h4 class="title"><a href="<?php echo get_the_title() ?>"><?php echo get_the_title() ?></a></h4>
                    <ul class="meta d-flex mt-4">
                        <li class="d-flex align-items-center"></i> <?php the_author_posts_link() ?></li>

                        <!-- add video -->


                        <?php if (get_post_meta(get_the_ID(), '_post_video', true) === 'on') :
                        ?>
                            <li class="video d-flex align-items-center"><i class="ti-video-clapper"></i>ویدئو</li>
                        <?php endif ?>

                        <li class="video d-flex align-items-center"><i class="ti-eye"></i><?php echo  post_view::yas_get_post_view(get_the_ID()) ?></li>
                        <!-- برای نمایش تاریخ شمسی افزونه wp-parsidateنصب کردم -->
                        <li class="d-flex align-items-center"><i class="ti-calendar theme-cl"></i><?php echo get_the_date('j F ماه Y') ?></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php }
} else { ?>
    <div class="alert">
        پستی منتشر نشده است!!!!
    </div>
<?php } ?>
<?php $query_post->rewind_posts()
?>