<div class="container">
    <div class=" mb-5">
        تعداد مطالب یافت شده <span class="badge badge-light " style="font-weight: bold;"> <?php echo $wp_query->found_posts ?></span>
    </div>
    <div class="row">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();

        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="education_block_grid">

                        <div class="education_block_thumb">
                            <?php echo yas_post_thumbnail() ?>


                            <?php if (!empty(get_post_meta(get_the_ID(), '_post_level'))) :
                            ?>
                                <div class="topic_cat bg-warning text-white"><?php echo get_the_category_by_ID(get_post_meta(get_the_ID(), '_post_cat', true))
                                                                                ?></div>
                            <?php endif
                            ?>

                        </div>
                        <div class="education_block_body">
                            <h4 class="bl-title"><a href="<?php the_permalink() ?>"> <?php echo  get_the_title() ?></a></h4>
                            <p><?php echo PostExcerpt::yas_post_excerpt() ?></p>
                        </div>

                        <div class="education_block_footer">
                            <div class="education_block_author">
                                <div class="path-img"><a href="<?php the_permalink() ?>"><?php echo get_avatar(get_the_author_meta('email'), '35') ?></a></div>
                                <h5><a href="<?php the_permalink() ?>"> <?php echo get_the_author() ?> </a></h5>
                            </div>
                            <span class="education_block_time "> <?php
                                                                    if (!empty(get_post_meta(get_the_ID(), '_post_level'))) {
                                                                        switch (get_post_meta(get_the_ID(), '_post_level', true)) {
                                                                            case '1':
                                                                                echo 'سطح : مقدماتی';

                                                                                break;
                                                                            case '2':
                                                                                # code...
                                                                                echo 'سطح : متوسط';
                                                                                break;
                                                                            case '3':
                                                                                echo 'سطح : پیشرفته';
                                                                                # code...
                                                                                break;
                                                                        }
                                                                    }

                                                                    ?> </span>
                        </div>

                    </div>
                </div>
            <?php endwhile ?>


        <?php endif ?>
    </div>
    <div class="comment-pagination">

        <?php the_posts_pagination() ?>
    </div>

    <?php wp_reset_postdata() ?>

</div>