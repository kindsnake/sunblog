<div class="sidebar">
    <ul>
        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
            <li id="search">
                <h2><?php _e('Search'); ?></h2>
                <div class="sidebar-search-box">
                    <?php get_search_form(); ?>
                </div>
            </li>
                <li class="widget widget_calendar">
                    <h2><?php _e('Calendar'); ?></h2>
                    <div id="calendar_wrap" class="calendar_wrap">
                        <?php get_calendar(); ?>
                    </div>
                </li>
            </li>
            <?php wp_list_pages(array(
                'title_li' => '<h2>'.__('Pages').'</h2>',
                'depth'=> 3
            )); ?>
            <?php wp_list_categories(array(
                'orderby' => 'name',
                'show_count' => true,
                'title_li' => '<h2>'.__('Categories').'</h2>',
                'hierarchical' => false
            )); ?>
            <li>
                <h2><?php _e('Archives'); ?></h2>
                <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>
            </li>
            <?php wp_list_bookmarks(array(
                'orderby' => 'name',
                'title_li' => __('Bookmarks')
            )); ?>
            <li>
                <h2><?php _e('Meta'); ?></h2>
                <ul>
                    <li><?php wp_loginout( home_url() ); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </li>
        <?php endif; ?>
    </ul>
</div>