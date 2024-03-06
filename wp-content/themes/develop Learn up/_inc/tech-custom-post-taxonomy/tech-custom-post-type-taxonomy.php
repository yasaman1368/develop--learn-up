<?php

/**
 * Register a custom post type called "تکنولوژِی".
 *
 * @see get_post_type_labels() for label keys.
 */
function yas_register_tech_post_type()
{
    $labels = array(
        'name'                  => 'اخبار تکنولوژی',
        'singular_name'         => 'tech',
        'menu_name'             => 'اخبار تکنولوژی',
        'name_admin_bar'        => 'tech',
        'add_new'               => 'افزودن مطلب تکنولوژی جدید',
        'add_new_item'          =>  'اضافه کردن مطلب جدید',
        'new_item'              => 'مطلب جدید',
        'edit_item'             => 'ویرایش مطلب',
        'view_item'             => 'مشاهده',
        'all_items'             => 'همه مطالب تکنولوژی',
        'search_items'          => 'جستجو',
        'parent_item_colon'     => 'والد مطلب:',
        'not_found'             => 'مطلبی پیدا نشد.',
        'not_found_in_trash'    => 'مطلبی در زباله دان پیدا نشد.',
        'featured_image'        => 'تصویر شاخص',
        'set_featured_image'    =>  'انتخاب تصیور شاخص',
        'remove_featured_image' => 'حذف تصویر شاخص',
        'use_featured_image'    => 'استفاده به عنوان تصویر شاخص',
        'archives'              => 'آرشیو مطالب',
        'insert_into_item'      => 'افزودن به مطالب',
        'uploaded_to_this_item' => 'آپلود',
        'filter_items_list'     => 'فیلتر لیست مطالب',
        'items_list_navigation' => 'پیمایش لیست مطالب',
        'items_list'            => 'لیست مطالب'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'tech'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    );

    register_post_type('tech', $args);
}
function yas_register_tech_taxonomy()
{
    $labels = array(
        'name'              => 'دسته بندی ها',
        'singular_name'     => 'دسته بندی',
        'search_items'      => 'جستجوی دسته بندی ها',
        'all_items'         => 'همه دسته بندی ها',
        'parent_item'       => 'والد دسته بندی',
        'parent_item_colon' => 'والد دسته بندی',
        'edit_item'         => 'ویرایش دسته بندی',
        'update_item'       => 'بروزرسانی دسته بندی',
        'add_new_item'      => 'افزودن دسته بندی جدید',
        'new_item_name'     => 'نام دسته بندی جدید',
        'menu_name'         => 'دسته ها',
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'tech'),
    );
    register_taxonomy('tech-cat', 'tech', $args);
    unset($args);
    unset($labels);
    $labels = array(
        'name'              => 'برچسب ها',
        'singular_name'     => 'برچسب',
        'all_items'         => 'همه برچسب ها',
        'parent_item'       => 'والد برچسب',
        'parent_item_colon' => 'والد برچسب',
        'edit_item'         => 'ویایش برچسب',
        'update_item'       => 'بروزرسانی برچسب',
        'add_new_item'      => 'افزودن برچسب جدید',
        'new_item_name'     => 'نام برچسب جدید',
        'menu_name'         => 'برچسب ها',
    );

    $args = array(
        'hierarchical'          => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'tech-tag'),
    );

    register_taxonomy('tech-tag', 'tech', $args);
}
add_action('init', 'yas_register_tech_taxonomy');
add_action('init', 'yas_register_tech_post_type');
