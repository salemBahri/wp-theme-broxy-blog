<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Blog And Magazine HTML5 Template" />
    <meta name="keywords"
        content="HTML5, Template, Design, blog, blogger, clean, flat, food, html, magazine, modern, news, personal, photographer, template, white  " />

    <!-- Titles
    ================================================== -->
    <title><?php bloginfo(("title"))?> | Created by Salem Bahri</title>


    <!-- Custom Font
	================================================== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@400;500;600;700;800&family=Barlow:wght@400;500;600;700&family=Roboto+Slab:wght@400;500;600;700;800&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body class="bg-white-smoke">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
			Start Preloader
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div><!-- /preloader-icon -->
        </div><!-- /preloader-inner -->
    </div><!-- /preloader -->

    <div class="site-content">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Site Header
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <header class="site-header default-header-style style-two intro-element">
            <div class="header-download-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="download-area-content">
                                <div class="download-text">Unlimited Wordpress Themes, Plugins & Video Downloads</div>
                                <button class="btn btn-default">Download Free</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-top-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                            <div class="site-branding text-center">
                                <a href="<?php echo home_url();?>">

                                    <?php
                                    // Get the logo from the Customizer
                                    $logo = get_theme_mod('logo');
                                    if ($logo) {
                                        echo '<img src="' . esc_url($logo) . '" alt="Site Logo" />';
                                    } else {
                                        // Default logo (fallback)
                                        echo '<img src="' . get_template_directory_uri() . '/assets/images/logo/logo5.png" alt="Default Logo" />';
                                    }
                                    ?>

                                </a>
                            </div><!-- /.site-branding -->
                        </div>
                        <div class="col-4">
                            <div class="header-right-area">
                                <div class="search-wrap">
                                    <div class="search-btn">
                                        <i class="fas fa-search fa-3x"></i>
                                    </div>
                                    <div class="search-form">
                                        <?php get_search_form();?>
                                    </div>
                                    
                                </div>
                                <!--~./ search-wrap ~-->


                                <div class="hamburger-menus">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div><!-- /.header-top-right-area -->
                        </div>
                    </div>
                </div>
            </div><!-- /.header-top-area -->

            <div class="navigation-area">
                <div class="site-navigation">
                    <nav class="navigation">
                        <div class="menu-wrapper">
                            <div class="menu-content">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => '', // The menu location to use
                                    'container' => false, // Don't wrap the menu in a div
                                    'menu_class' => 'mainmenu', // Add a class to the <ul> element
                                    'menu_id' => '', // You can specify an ID here
                                    'depth' => 2, // Set depth of the menu (for sub-menu)
                                    'fallback_cb' => false, // Don't show anything if no menu is set
                                ));
                                ?>
                            </div><!-- /.menu-content-->
                        </div><!-- /.menu-wrapper -->
                    </nav>
                </div><!-- /.site-navigation -->
            </div><!-- /.navigation-area -->


            <div class="mobile-sidebar-menu sidebar-menu">
                <div class="overlaybg"></div>
            </div>

            
        </header>
        <!--~~./ end site header ~~-->