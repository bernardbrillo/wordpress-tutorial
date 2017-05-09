<?php
/*
Template Name: Our Services
*/
get_header();?>

<div class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title();?></h1>
                    <?php
                    edit_post_link();
                    the_content();
                endwhile;?>


                <ul>
                    <?php $recent = new WP_Query("cat=1&showposts=3&order=DESC" . $paged); while($recent->have_posts()) : $recent->the_post();?>
                        <li>
                                <?php the_post_thumbnail('large');?>

                                <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                <p>
                                    <?php edit_post_link(); ?>
                                    <?php  the_content(); ?>
                                </p>

                        </li>
                    <?php endwhile; ?>
                </ul>
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

