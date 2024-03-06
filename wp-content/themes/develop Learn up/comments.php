<!-- Blog Comment -->
<?php // comment_form() 
?>

<div class="article_detail_wrapss single_article_wrap format-standard">

    <div class="comment-area">
        <?php if (comments_open()) : ?>
            <!-- modal comment -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">ثبت دیدگاه</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
                                <div class="alert alert-info">لطفا برای ثبت نظر وارد سایت شوید.</div>
                            <?php else : ?>
                                <?php $user = get_userdata(get_current_user_id()) ?>
                                <p><?php echo $user->display_name ?> عزیز شما مجاز به ارسال پیام هستید</p>
                                <form action="<?php echo site_url() . '/wp-comments-post.php' ?>" method="post">
                                    <div class="row">
                                        <?php if (!is_user_logged_in()) : ?>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="author" placeholder="نام کامل">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="email" placeholder="ایمیل معتبر">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="url" placeholder="وب سایت ">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">

                                                <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">ذخیره نام، ایمیل و وبسایت من در مرورگر برای زمانی که دوباره دیدگاهی می‌نویسم.</label></p>
                                            </div>
                                        <?php endif; ?>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <h6 id="replytext"></h6>
                                            <div class="form-group">
                                                <textarea id="reply" name="comment" class="form-control" cols="30" rows="6" placeholder="نظر خود را بنویسید..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="form-group">

                                            <input name="submit" type="submit" id="submit" class="btn search-btn " value="فرستادن دیدگاه">
                                            <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID()    ?>" id="comment_post_ID">
                                            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                            <?php if (is_user_logged_in()) : ?>
                                                <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="<?php echo wp_create_nonce() ?>">
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </form>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-box submit-form">
                <button class="btn btn-primary btn-block mb-3" data-toggle="modal" data-target="#exampleModalCenter"> ثبت دیدگاه</button>
                <div class="all-comments">
                    <?php if (get_comments_number() === 0) : ?>
                        <h3 class="comments-title">اولین نفری باشید که برای این مطلب دیدگاه می گذارید.</h3>
                    <?php else : ?>
                        <h3 class="comments-title"><?php echo get_comments_number() ?> دیدگاه</h3>
                    <?php endif ?>
                    <div class="comment-list">
                        <ul>

                        </ul>
                    </div>
                </div>

                <div class="comment-list">
                    <ul>

                        <?php
                        $args = [
                            'callback' => 'yas_theme_comment',
                            'style' => 'ul',
                            'avatar_size' => 70
                        ];
                        wp_list_comments($args) ?>
                    </ul>
                    <div class="comment-pagination">
                        <!-- pagination comment -->
                        <?php
                        paginate_comments_links(array(
                            'prev_text'  => 'قبلی',
                            'next_text' => 'بعدی'
                        ));
                        ?>
                    </div>
                </div>
                <div class="comment-box submit-form">
                    <h3 class="reply-title">ثبت دیدگاه</h3>
                    <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
                        <div class="alert alert-info">لطفا برای ثبت نظر وارد سایت شوید.</div>
                    <?php else : ?>
                        <div class="comment-form">
                            <?php $user = get_userdata(get_current_user_id()) ?>
                            <p><?php echo $user->display_name ?> عزیز شما مجاز به ارسال پیام هستید</p>
                            <form action="<?php echo site_url() . '/wp-comments-post.php' ?>" method="post">
                                <div class="row">
                                    <?php if (!is_user_logged_in()) : ?>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="author" placeholder="نام کامل">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="email" placeholder="ایمیل معتبر">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="url" placeholder="وب سایت ">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">

                                            <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">ذخیره نام، ایمیل و وبسایت من در مرورگر برای زمانی که دوباره دیدگاهی می‌نویسم.</label></p>
                                        </div>
                                    <?php endif; ?>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <h6 id="replytext"></h6>
                                        <div class="form-group">
                                            <textarea id="reply" name="comment" class="form-control" cols="30" rows="6" placeholder="نظر خود را بنویسید..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group">

                                        <input name="submit" type="submit" id="submit" class="btn search-btn " value="فرستادن دیدگاه">
                                        <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID()    ?>" id="comment_post_ID">
                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                        <?php if (is_user_logged_in()) : ?>
                                            <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="<?php echo wp_create_nonce() ?>">
                                        <?php endif ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        <?php else : ?>
            <div class="alert alert-info">ارسال دیدگاه برای این مطلب بسته شده است.</div>
        <?php endif ?>
    </div>

</div>