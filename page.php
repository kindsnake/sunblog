<?php
 /**
 * Template Name: Page
 */
 ?>

<?php get_header(); ?>
    <div class="main-area">
        <div class="container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry">
                        <?php the_content(); ?>
                        <?php wp_link_pages('<strong>Pages:</strong>', '', 'number'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php else: ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <h2><span id="not-found"><?php _e('Not Found.'); ?></span></h2>
                </div>
        <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
