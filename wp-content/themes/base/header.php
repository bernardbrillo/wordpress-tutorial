<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title><?php bloginfo('name'); ?>: <?php bloginfo('description');?></title>
    <meta name="description" content="
	     <?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_single() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_page() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }  ?>" >
    <meta name="keywords" content="" />
    <link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/images/" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--THIS IS YOUR WEBSITE's PRIMARY STYLESHEET-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

    <?php wp_head(); ?>
</head>
<body>

<div class="main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--MENU-->
                <nav id="main-navigation" class="hide-in-mobile">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse">
                                <?php /* Primary navigation */
                                wp_nav_menu( array(
                                        'menu' => 'Main Menu',
                                        'depth' => 2,
                                        'container' => false,
                                        'menu_class' => 'nav navbar-nav',
                                        //Process nav menu using our custom nav walker
                                        'walker' => new wp_bootstrap_navwalker())
                                );
                                ?>
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
                </nav><!--end MENU-->
            </div>
        </div><!--end ROW-->
    </div><!-- end CONTAINER-->
</div><!--end WRAPPER-->