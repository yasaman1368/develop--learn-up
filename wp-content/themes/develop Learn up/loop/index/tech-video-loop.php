<?php
add_action('wp_ajax_nopriv_video', 'video');
add_action('wp_ajax_video', 'video');
function video()
{
    if (!wp_verify_nonce($_POST['nonce'])) {
        die('access denied!!!');
    }
    $args = [
        'post_type' => ['tech'],
        'showposts' => 3,
        'tax_query' => array(
            array(
                'taxonomy' => 'tech',
                'field'    => 'slug',
                'terms'    => array('video')
            )
        )
    ];
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
        $output_html = '';
        while ($the_query->have_posts()) : $the_query->the_post();


            $output_html .= '
                         <!-- Single Article -->
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="articles_grid_style">
                    <div class="articles_grid_thumb">
                        <a href="' . get_the_permalink() . '">' . yas_post_thumbnail() . '</a>
                    </div>

                    <div class="articles_grid_caption">
                        <h4>' . get_the_title() . ' </h4>
                        <div class="articles_grid_author">
                            <div class="articles_grid_author_img"> <span class="img">' . get_avatar(get_the_author_meta('email'), '40') . '</span>
                            </div>
                            <h4> ' . get_the_author() . ' </h4>
                        </div>
                    </div>
                </div>
            </div>';



        endwhile;
    endif;

    wp_reset_postdata();
    wp_send_json(['content' => $output_html, 'success' => true], 200);
}
