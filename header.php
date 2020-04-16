<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>
    <?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?>
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>;" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
<?php wp_head(); ?>
</head>
<?php flush(); ?>
<body>
<div id="wrapper">
    <div id="header-box">
        <div id="header">
            <div class="top-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'top-menu') ); ?>
            </div>
            <div id="title-box">
                <h1 id="title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <p id="sub-title"><?php bloginfo('description'); ?></p>
            </div>
            <div id="header-split-box"></div>
            <div id="header-search-box">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
    <div class="nav-box">
        <div class="nav">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </div>
    </div>