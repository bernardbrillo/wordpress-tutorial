<?php get_header();?>

<div class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if ( have_posts() ) : ?>
                    <h1><?php printf( __( 'Search results for: "%s"'), get_search_query()); ?></h1>
                    <form role="search" action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get" class="controlit">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search" name="s" id="s">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" id="searchsubmit" alt="Search"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>

                    <ul>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php if ( is_search() ) : // Only display Excerpts for Search ?>
                                <li>
                                    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                    <p>
                                        <?php edit_post_link(); ?>
                                        <?php the_content(); ?>
                                    </p>
                                </li>
                            <?php endif; ?>
                        <?php endwhile;
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'base' ),
                            'next_text'          => __( 'Next page', 'base' ),
                        ) );
                        ?>

                    </ul>
                <?php else : ?>
                    <h1><?php printf( __( 'Search results for: "%s"'), get_search_query()); ?></h1>
                    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>

                    <form role="search" action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search" name="s" id="s">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" id="searchsubmit" alt="Search"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                <?php endif; ?>
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
