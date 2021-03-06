<?php
 /*
 Template Name: Index
 */
 ?>
<?php get_header(); ?>
    <div class="main-area">
        <div class="container">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post-meta-data">
                            <p>
                                <span class="sub-meta"><?php _e(' 日期: '); ?><?php the_date('Y-m-d'); ?></span>
                                <span class="sub-meta"><?php _e(' 分类: '); ?><?php the_category(', '); ?></span>
                                <span class="sub-meta"><?php _e(' 作者: '); ?><?php the_author(); ?></span>
                                <span class="sub-meta"><?php _e(' 评论: '); ?><?php comments_popup_link('撰写评论 »', '1条评论 »', '% 条评论 »'); ?></span>
                            </p>
                        </div>
                        <div class="entry">
                            <div class="post_thumbnail">
                                <?php if ( has_post_thumbnail() ) { ?>
                                <?php the_post_thumbnail(); ?>
                                <?php } else {?>
                                <img src="<?php bloginfo('template_url'); ?>/img/default-thumbnail.jpg" />
                                <?php } ?>
                            </div>
                            <div class="index-post-list">
                                <?php the_excerpt(); ?>
                                <p class="read-more"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e('继续阅读'.'&raquo;'); ?></a></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <div class="page-navi">
                    <?php szx_numeric_posts_nav(); ?>
                </div>
                <?php else: ?>
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <h2><span id="not-found"><?php _e('Not Found.'); ?></span></h2>
                    </div>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
