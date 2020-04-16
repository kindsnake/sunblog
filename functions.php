<?php 
//调用后台侧栏widget
if (function_exists('register_sidebar'))
    register_sidebar();

//自定义搜索框
function my_search_form( $form ) {
    $form = '<form class="form-inline my-2 my-lg-0" role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <input type="text" class="form-control mr-sm-2"  value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" class="btn btn-outline-info my-2 my-sm-0" value="'. esc_attr__('Search') .'" />
    </form>';
    return $form;
}

//自定义菜单
register_nav_menus( array(
    'main-menu' => __( '导航菜单' ),
    'top-menu' => __( '顶部菜单' ),
    'footer-menu' => __( '底部菜单' )
) );


//WordPress 恢复链接管理功能
add_filter('pre_option_link_manager_enabled', '__return_true');
//
add_filter( 'get_search_form', 'my_search_form' );