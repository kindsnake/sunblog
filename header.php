<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?>-<?php bloginfo('description'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>;" type="text/css" media="screen" />
</head>
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