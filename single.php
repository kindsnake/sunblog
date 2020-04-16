<?php
 /*
 Template Name: Single
 */
 ?>
<?php get_header(); ?>
    <div id="main-area">
        <div id="container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry">
                        <?php the_content(); ?>
                        <?php wp_link_pages('<strong>Pages:</strong>', '', 'number'); ?>
                        <p class="postmetadata">
                            <?php _e('Filed under: '); ?><?php the_category(',') ?><?php _e(' by '); ?><?php the_author(); ?>
                            <?php edit_post_link('Edit', ' | ', ''); ?>
                        </p>
                    </div>
                    <div class="navigation">
                        <?php previous_post_link('&laquo; %link') ?> <?php next_post_link('%link &raquo;') ?>
                    </div>
                    <div class="comments-template">
                        <?php comments_template(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php else: ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <h2><?php _e('Not Found.'); ?></h2>
                </div>
        <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
</div>
</body>
</html>