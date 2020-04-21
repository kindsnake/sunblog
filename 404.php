<?php get_header(); ?>
    <div id="main-area">
        <div id="container">
            <div class="post">
                <h2><?php _e( '404 Page Not Found', 'Sunblog' ); ?></h2>
                <div class="entry">
                    <p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'Sunblog' ); ?></p>
                    <div class="search-box-404">
                        <?php get_search_form(); ?>
                    </div>
                    <p>&nbsp;</p>
                </div><!-- .entry-content -->
                <script type="text/javascript">
                    // focus on search field after it has loaded
                    document.getElementById('s') && document.getElementById('s').focus();
                </script>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
</div>
</body>
</html>