<?php


$args = [
    'showposts' => 3,
    'post_type' => 'tech'
];
$query_post = new WP_Query($args);
if ($query_post->have_posts()) :
    while ($query_post->have_posts()) :
        $query_post->the_post()
?>




        <!-- Single Article -->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="articles_grid_style">
                <div class="articles_grid_thumb">
                    <a href="<?php the_permalink(); ?>"> <?php
                                                            echo yas_post_thumbnail()
                                                            ?></a>
                </div>

                <div class="articles_grid_caption">
                    <h4><?php echo get_the_title()
                        ?> </h4>
                    <div class="articles_grid_author">
                        <div class="articles_grid_author_img"> <span class="img"><?php echo get_avatar(get_the_author_meta('email'), '40')
                                                                                    ?></span>
                        </div>
                        <h4> <?php echo get_the_author()
                                ?> </h4>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile ?>
    <?php wp_reset_postdata()
    ?>
<?php else : ?>
    <div class="alert">
        پستی منتشر نشده است!!!!
    </div>
<?php endif ?>