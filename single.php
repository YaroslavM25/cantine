<?php get_header(); ?>
<!-- Content -->
    <div class="blog-center-align blog-main">

        <!-- Blog Caption -->
        <div class="blog-single-caption">
            <a class="backblog" href="<?php echo home_url(); ?>/blog"><?php _e('&lt; Back to the Blog','aletheme'); ?></a>
        </div>

        <!-- Blog Content -->
        <div class="blog-single">

            <!-- Right Menu -->
            <div class="right-side">
                <?php get_sidebar(); ?>
            </div>

            <!-- Left Content -->
            <div class="left-side">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                <?php //echo get_the_post_thumbnail($post->ID,'post-minibox');  ::Another blogpost image?>

                <h3 class="caption"><?php the_title(); ?></h3>
                <div class="text">
                    <?php ale_part('posthead');?>
                    <?php ale_part('postfull');?>
                    <div class="cf"></div>
                    <?php ale_part('postfooter');?>
                </div>
                <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
                <?php endif; ?>
                <!-- Line -->
                <div class="blog-line"></div>
                <?php comments_template(); ?>
            </div>
        </div>

        <!-- Blog Line -->
        <div class="blog-line"></div>

        <!-- Blog Nav  -->
        <div class="blog-single-footer">
            <div class="prev-left"><?php if(get_previous_post_link()){ ?><span class="left"></span><?php } ?>
                <?php previous_post_link('%link'); ?> </div>
            <div class="next-right"><?php if(get_next_post_link()){ ?><span class="right"></span><?php } ?>
                <?php next_post_link('%link'); ?> </div>
        </div>

    </div>
<?php get_footer(); ?>