<?php get_header(); ?>
<body>
<div id="wrapper">
    <div id="header">
        <h1><a name="toc-3"></a><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php bloginfo('description'); ?>
    </div>
    <div id="container">
        <h2><?php _e( '404 Page Not Found', 'Sunblog' ); ?></h2>
        <div class="entry">
            <p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'Sunblog' ); ?></p>
            <?php get_search_form(); ?>
        </div><!-- .entry-content -->
        <script type="text/javascript">
            // focus on search field after it has loaded
            document.getElementById('s') && document.getElementById('s').focus();
        </script>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div>
</body>
</html>