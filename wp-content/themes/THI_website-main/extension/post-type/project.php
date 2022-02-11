<?php
/*
*---------------------------------------------------------------------
* This file create and contains the template post_type meta elements
*---------------------------------------------------------------------
*/

add_action('init', 'THIWebsite_create_project', 10);

function THIWebsite_create_project() {

    /* Start post type template */
    $labels = array(   
        'name'                  =>  _x( 'Dự án', 'post type general name', 'THIWebsite' ),
        'singular_name'         =>  _x( 'Dự án', 'post type singular name', 'THIWebsite' ),
        'menu_name'             =>  _x( 'Dự án', 'admin menu', 'THIWebsite' ),
        'name_admin_bar'        =>  _x( 'Danh sách Dự án', 'add new on admin bar', 'THIWebsite' ),
        'add_new'               =>  _x( 'Thêm mới', 'Dự án', 'THIWebsite' ),
        'add_new_item'          =>  esc_html__( 'Thêm Dự án', 'THIWebsite' ),
        'edit_item'             =>  esc_html__( 'Sửa Dự án', 'THIWebsite' ),
        'new_item'              =>  esc_html__( 'Dự án mới', 'THIWebsite' ),
        'view_item'             =>  esc_html__( 'Xem dự án', 'THIWebsite' ),
        'all_items'             =>  esc_html__( 'Tất cả dự án', 'THIWebsite' ),
        'search_items'          =>  esc_html__( 'Tìm kiếm dự án', 'THIWebsite' ),
        'not_found'             =>  esc_html__( 'Không tìm thấy', 'THIWebsite' ),
        'not_found_in_trash'    =>  esc_html__( 'Không tìm thấy trong thùng rác', 'THIWebsite' ),
        'parent_item_colon'     =>  ''
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'menu_icon'          => 'dashicons-open-folder',
        'capability_type'    => 'post',
        'rewrite'            => array('slug' => 'du-an' ),
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type('THIWebsite_project', $args );
    /* End post type template */

    /* Start taxonomy */
    $taxonomy_labels = array(
        'name'              => _x( 'Danh mục dự án', 'taxonomy general name', 'THIWebsite' ),
        'singular_name'     => _x( 'Danh mục dự án', 'taxonomy singular name', 'THIWebsite' ),
        'search_items'      => __( 'Tìm kiếm danh mục', 'THIWebsite' ),
        'all_items'         => __( 'Tất cả danh mục', 'THIWebsite' ),
        'parent_item'       => __( 'Danh mục cha', 'THIWebsite' ),
        'parent_item_colon' => __( 'Danh mục cha:', 'THIWebsite' ),
        'edit_item'         => __( 'Sửa', 'THIWebsite' ),
        'update_item'       => __( 'Cập nhật', 'THIWebsite' ),
        'add_new_item'      => __( 'Thêm mới', 'THIWebsite' ),
        'new_item_name'     => __( 'Tên mới', 'THIWebsite' ),
        'menu_name'         => __( 'Danh mục', 'THIWebsite' ),
    );

    $taxonomy_args = array(

        'labels'            => $taxonomy_labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'danh-muc-du-an' ),
    );

    register_taxonomy( 'THIWebsite_project_cat', array( 'THIWebsite_project' ), $taxonomy_args );
    /* End taxonomy */

}