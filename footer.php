    <div id="footer-box">
        <div class="footer-menu">
    	   <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </div>
        <div id="footer">
            Copyright © 2011-<?php echo date('Y'); ?> <?php bloginfo('name'); ?>, All Rights Reserved. <br />
            Powered by Wordpress. 
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>