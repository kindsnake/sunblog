<?php 

//特色图像
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 150, true); // 图片宽度与高度
add_theme_support( 'html5', array(/***添加主题对html5支持***/
                   'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );
//自定义logo
add_theme_support( 'custom-logo', array(
        'height'      => 248,
        'width'       => 248,
        'flex-height' => true,
    ) );

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
//定义数字型页面导航
function szx_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
    echo '</ul>' . "\n";
 
}
//截取摘要长度-中文
function sunblob_extract_excerpt($text, $lenth=160) {
    $text = mb_substr($text, 0, $lenth);
    return $text;
}





//提取摘要长度
add_filter('the_excerpt', 'sunblob_extract_excerpt');
//WordPress 恢复链接管理功能
add_filter('pre_option_link_manager_enabled', '__return_true');
//自定义搜索框
add_filter( 'get_search_form', 'my_search_form' );


