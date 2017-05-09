<?php get_header();?>

<div class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title();?></h1>
                    <?php
                    edit_post_link();
                    the_content();
                    comments_template();
                endwhile;?>
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
