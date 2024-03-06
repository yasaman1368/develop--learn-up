<div class="article_top_info">
    <ul class="article_middle_info">
        <li class="d-inline-flex"><span class="icons pr-2"><i class="ti-user"></i></span>
            <?php echo get_the_author() ?>
        </li>
        <li><a href="#"><span class="icons"><i class="ti-comment-alt"></i></span><?php echo get_comments_number()
                                                                                    ?> نظر ثبت شده</a></li>
        <li><span class="icons mr-2"><i class="ti-eye"></i></span><?php echo post_view::yas_get_post_view(get_the_ID())
                                                                    ?> بازدید</li>
        <li><span class="icons mr-2"><i class="ti-timer"></i></span> دقیقه <?php echo ReadStimateTime::yas_read_estimate_Time(get_the_content())
                                                                            ?></li>
        <?php // if (current_user_can('manage_options')) : 
        ?>
        <li><span class="icons mr-2"><i class="ti-search"></i></span> ورودی گوگل<?php echo GoogleReferer::yas_get_google_referer(get_the_ID())
                                                                                ?></li>
        <?php edit_post_link('ویرایش', '<li><span class="icons mr-2"><i class="ti-edit"></i>', '</span></li>', '', 'd-inline') ?>
        <?php // endif; 
        ?>

    </ul>
</div>