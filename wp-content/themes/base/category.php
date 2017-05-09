<?php
/*
Template Name: Category
*/
get_header();?>

<div class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Category: <?php single_tag_title(); ?></h1>
                <?php if ( have_posts() ) : ?>
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                        <h2><?php the_title();?></h2>
                    <?php
                    edit_post_link();
                    the_content();
                endwhile;

                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'base' ),
                    'next_text'          => __( 'Next page', 'base' ),
                ) );
                endif; ?>

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

