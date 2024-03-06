<?php
global $wp_query;
$author = $wp_query->get_queried_object();
?>
<?php
var_dump($author);

echo '</br>'; ?>
<div class="image-cover ed_detail_head invers" style="background:#f4f5f7;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12">
                <div class="viewer_detail_wraps">
                    <div class="viewer_detail_thumb">
                        <?php echo get_avatar($author->user_email, '150')
                        ?> <div class="viewer_status">

                            <?php
                            switch ($author->roles[0]) {
                                case 'administrator':
                                    echo 'مدیر';
                                    break;
                                case 'editor':
                                    echo  'ویرایشگر';
                                    break;
                                case 'author':
                                    echo  'نویسنده';
                                    break;
                            }

                            ?>
                        </div>
                    </div>
                    <div class="caption">
                        <div class="viewer_package_status">6سال عضویت</div>
                        <div class="viewer_header">
                            <h4> <?php echo $author->display_name ?></h4>
                            <span class="viewer_location">گرافیست، کرج</span>
                            <ul class="mt-2">
                                <li><strong>112</strong> نکات درسی</li>
                                <li><strong>87</strong> ویدئو آموزشی</li>
                                <li><strong>120</strong> دوره</li>
                            </ul>
                        </div>
                        <div class="viewer_header">
                            <ul class="badge_info">
                                <li class="started"><i class="ti-rocket"></i></li>
                                <li class="medium"><i class="ti-cup"></i></li>
                                <li class="platinum"><i class="ti-thumb-up"></i></li>
                                <li class="elite unlock"><i class="ti-medall"></i></li>
                                <li class="power unlock"><i class="ti-crown"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>