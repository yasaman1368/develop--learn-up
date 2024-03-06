<?php
function yas_theme_comment($comment, $args)
{

?>
    <li id="comment-<?php echo $comment->comment_ID; ?>" <?php comment_class('article_comments_wrap') ?>>
        <article>
            <div class="article_comments_thumb">
                <?php echo get_avatar($comment->comment_author_email, $args['avatar_size'], '', $comment->comment_author, ['class' => 'circle']) ?>
            </div>
            <div class="comment-details">
                <div class="comment-meta">

                    <div class="comment-left-meta">
                        <h4 class="author-name">
                            <?php
                            echo $comment->comment_author
                            ?>
                            <?php

                            $user_data = get_userdata($comment->user_id);

                            if (isset($user_data->roles[0]) && $user_data->roles[0] === 'administrator') :
                            ?>
                                <span class="selected"><i class="fas fa-bookmark"></i></span>

                            <?php endif
                            ?>


                        </h4>
                        <div class="comment-date"><?php echo get_comment_date('j F, Y') ?></div>
                        <div class="comment-reply">
                            <?php if (is_user_logged_in()) : ?>
                                <a href="#" class="reply" data-toggle="modal" data-target="#exampleModalCenter" data-comment-id="<?php echo $comment->comment_ID ?>" data-comment-author="<?php echo $comment->comment_author ?>">پاسخ</a>

                            <?php endif ?>
                            <?php if (current_user_can('manage_options')) {
                                edit_comment_link('<i class="fal fa fa-edit text-warning"></i>');
                            }
                            ?>
                        </div>
                    </div>
                    <div class="comment-text">
                        <?php if ($comment->comment_approved) : ?>
                            <p><?php echo $comment->comment_content ?></p>
                        <?php else : ?>
                            <div class="alert alert-info">پیام شما ثبت شد پس از تایید مدیر نمایش داده خواهد شد.</div>
                        <?php endif ?>


                    </div>
                </div>
        </article>

    </li>
<?php
}
