<?php get_header();?>
<div class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if ( have_posts() ) : ?>
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();?>
                        <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                        <?php
                        edit_post_link();
                        the_post_thumbnail('small');//Get featured image
                        the_content();
                        //echo excerpt_baseexcerpt(50);
                        //the_excerpt();
                    endwhile;

                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'base' ),
                        'next_text'          => __( 'Next page', 'base' ),
                    ) );
                else :
                    echo "Say something";
                endif;
                ?>
            </div>
            <div class="col-md-4">
                <ul class="sidebar">
                    <?php if ( !function_exists('dynamic_sidebar')
                        || !dynamic_sidebar('Right Sidebar') ): ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div><!--end ROW-->
    </div><!-- end CONTAINER-->
</div>
<?php get_footer();?>
