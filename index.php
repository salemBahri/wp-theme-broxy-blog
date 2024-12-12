<!-- <?php get_header() ?>
<!--~~~ Sticky Header ~~~-->
<div id="sticky-header" class="active"></div>
<!--~./ end sticky header ~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Frontpage Slider Posts
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="frontpage-slider-posts">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel frontpage-slider-one style-one carousel-rectangle carousel-nav-center mrb-30">
                <?php $args=array('posts_per_page'=>3); ?>
                        <?php $the_query=new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
                            <!--~~~~~ Start Post ~~~~~-->
                            <article class="post hentry post-slider-four slider-four-one">
                                <div class="entry-thumb">
                                    <figure class="thumb-wrap">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('custom-size1', ['alt' => get_the_title()]); ?>
                                            <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
                                            <?php endif; ?>
                                        </a>

                                    </figure>
                                    <!--./ thumb-wrap -->
                                </div>
                                <!--./ entry-thumb -->
                                <div class="content-entry-wrap">
                                    <h3 class="entry-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <!--./ entry-title -->
                                    <div class="entry-meta-content">
                                        <div class="entry-author">
                                            By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                                        </div>
                                        <!--./ entry-date -->
                                        <div class="entry-date">
                                            On <span><?php echo get_the_date(); ?></span>
                                        </div>
                                        <!--./ entry-date -->
                                    </div>
                                    <!--./ entry-meta-content -->
                                    <div class="entry-content">
                                        <div class="entry-summary">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                        <div class="read-more-share">
                                            <div class="read-more-wrap">
                                                <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                                            </div>
                                            <!-- <div class="share-post">
                                                Share
                                                <ul class="social-share">
                                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!--./ entry-content -->
                                </div>
                                <!--./ content-entry-wrap -->
                            </article>
                            <!--~./ end post ~-->
                        <?php endwhile; ?>
                        <?php wp_reset_postdata() ?>
                    <?php else: ?>
                        <p>No posts found.</p>
                    <?php endif; ?>
                </div>
                <!--/#frontpage-slide -->
            </div>
        </div>
    </div>
</div>

<!--~./End frontpage slider posts ~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
      Start Features Block
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="features-block mrb-45">
    <div class="container">
        <div class="row feature-list feature-list-two">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="feature-item style-three font-barlow bg-opal d-flex justify-content-center align-items-center" style="height: 100%;">
                <h3 class="text-center text-success">Now I have <?php echo wp_count_posts()->publish; ?> Posts</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!--~./ end features block ~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Main Wrapper
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="main-wrapper mrb-80">
    <div class="container">
        <div class="row justify-content-between gutters-50">
            <div class="col-lg-9 main-wrapper-content">
                <!--~~~~~ Start Site Main ~~~~~-->
                <main class="site-main">
                    <div class="row gutters-50">





                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>

                        <!--~~~~~ Start Post ~~~~~-->
                        <div class="col-lg-6 col-md-6">
                            <article class="post hentry post-grid text-center style-five">
                                <div class="entry-thumb">
                                    <figure class="thumb-wrap">
                                    <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('custom-size2', ['alt' => get_the_title()]); ?>
                                            <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
                                            <?php endif; ?>
                                        </a>
                                    </figure>

                                    <!--./ thumb-wrap -->
                                </div>
                                <!--./ entry-thumb -->
                                <div class="content-entry-wrap">
                                    <div class="entry-category">
                                    <?php the_category(' '); ?>
                                    </div>
                                    <!--./ entry-category -->
                                    <h3 class="entry-title">
                                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <!--./ entry-title -->
                                    <div class="entry-meta-content">
                                        <div class="entry-author">
                                            By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                                        </div>
                                        <!--./ entry-date -->
                                        <div class="entry-date">
                                            On <span><?php echo get_the_date(); ?></span>
                                        </div>
                                        <!--./ entry-date -->
                                    </div>
                                    <!--./ entry-meta-content -->
                                    <div class="entry-summary">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                                <!--./ content-entry-wrap -->
                            </article>
                        </div>
                        <!--~./ end post ~-->
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p>No posts found.</p>
                    <?php endif; ?>



                    </div>
                </main>
                <!--~./ end site main ~-->

                <!--~~~~~ Start Paging Navigation ~~~~~-->
                <!-- <nav class="navigation paging-navigation style-one pd-t-15">
                    <ul class="nav-links">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#" class="page-numbers">2</a></li>
                        <li><a href="#" class="page-numbers">3</a></li>
                        <li class="nav-next">
                            <a href="#"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </nav> -->
                <?php get_template_part('pagination'); ?>



                <!--~./ end paging navigation ~-->
            </div>

            <?php get_sidebar()?>

        </div>
    </div>
</div>
<!--~./ end main wrapper ~-->
<?php get_footer() ?> 