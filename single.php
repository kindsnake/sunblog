<?php
 /*
 Template Name: Single
 */
 ?>
<?php get_header(); ?>
    <div class="main-area">
        <div class="container">
            <div class="page-header">
                <p class="archive-title"><b><?php _e(' 位置：'); ?></b><?php the_category( ' » ', 'multiple' ); ?></p>
            </div>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta-data">
                        <p>
                            <span class="sub-meta"><?php _e(' 日期: '); ?><?php the_date('Y-m-d'); ?></span>
                            <span class="sub-meta"><?php _e(' 分类: '); ?><?php the_category(','); ?></span>
                            <span class="sub-meta"><?php _e(' 作者: '); ?><?php the_author(); ?></span>
                            <span class="sub-meta"><?php _e(' 评论: '); ?><?php comments_popup_link('撰写评论 »', '1条评论 »', '% 条评论 »'); ?></span>
                        </p>
                    </div>
                    <div class="entry">
                        <?php the_content(); ?>
                        <?php wp_link_pages('<strong>Pages:</strong>', '', 'number'); ?>
                    </div>
                    <div class="post-navi-single">
                        <span class="previous_post"><?php previous_post_link('&laquo; %link') ?></span>
                        <span class="next_post"><?php next_post_link('%link &raquo;') ?></span>
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