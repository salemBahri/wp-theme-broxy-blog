<?php get_header() ?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Main Wrapper
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="main-wrapper pd-b-100">
    <!-- Blog Items -->
    <div class="blog-single-page">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <article class="post single-post single-post-one">
                    <div class="container">
                        <div class="post-thumbnail-area">
                            

                            <figure class="thumb-wrap">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('', ['alt' => get_the_title()]); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post/single/one/single1.jpg" alt="Default Image">
                                    <?php endif; ?>
                                </a>
                            </figure>

                            <div class="entry-header-outer">
                                <div class="entry-header">
                                    <div class="entry-category">
                                        <?php the_category(','); ?>
                                    </div>
                                    <!--./ entry-category -->
                                    <h3 class="entry-title"><?php the_title(); ?></h3>
                                    <!--./ entry-title -->
                                    <div class="entry-meta-content">
                                        <div class="entry-author">
                                            By <a href="#"><?php the_author_posts_link(); ?>
                                        </div>
                                        <!--./ entry-date -->
                                        <div class="entry-date">
                                            On <span><?php the_date(); ?></span>
                                        </div>
                                        <!--./ entry-date -->
                                    </div>
                                    <!--./ entry-meta-content -->
                                </div><!-- /.entry-header-outer -->
                            </div>
                        </div>

                        <div class="post-details">
                            <div class="social-network">
                                <ul class="social-share">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul><!-- /.social-share -->
                            </div>
                            <?php the_content(); ?>
                        </div><!--  /.post-details -->
                        <div class="entry-footer">
                            <div class="entry-tag">
                                <strong>Tag: </strong>
                                <?php the_tags(',', ' ', ''); ?>
                            </div>

                            <!--/.entry-tag-->
                        </div>
                    </div>
                </article><!-- /.post -->
            <?php endwhile; ?>
        <?php else: ?>
            <p>No posts found.</p>
        <?php endif; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <!--~~~~~ Start Author Info ~~~~~-->
                    <div class="author-info">
                        <div id="author-img">
                            <figure class="at-img">
                                <?php
                                $author_id = get_the_author_meta('ID'); // Get the author ID
                                $author_avatar = get_avatar_url($author_id, ['size' => '150']); // Get the author's Gravatar image URL
                                ?>
                                <img src="<?php echo esc_url($author_avatar); ?>" alt="<?php echo esc_attr(get_the_author()); ?>">
                            </figure>
                        </div><!-- / author-img -->







                        <div id="author-details">
                            <h3 class="author-name"><?php the_author_posts_link(); ?></h3>
                            <div class="authors-bio">
                                <p>
                                    <?php
                                    $author_bio = get_the_author_meta('description'); // Get the author's bio
                                    echo esc_html($author_bio); // Output the bio safely
                                    ?>
                                </p>
                            </div>
                        </div><!-- /author-details -->
                    </div>
                    <!--~./ end author info ~-->
                </div>
            </div>

            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
							Start Related Posts Block
					~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="related-posts-block">
                <div class="row">
                    <div class="col-12">
                        <h3 class="related-title">Related Posts</h3>
                    </div>
                </div>
                <div class="row">
                    <!--~~~~~ Start Post ~~~~~-->
                    <?php
                    $current_categories = wp_get_post_categories(get_the_ID()); // التصنيفات المرتبطة بالمقال الحالي

                    $args = array(
                        'posts_per_page' => 3, // عدد المقالات المطلوب
                        'category__in'   => $current_categories, // جلب المقالات التي تنتمي لنفس التصنيفات
                        'post__not_in'   => array(get_the_ID()), // استثناء المقال الحالي
                    );

                    $related_query = new WP_Query($args);

                    if ($related_query->have_posts()):
                        while ($related_query->have_posts()): $related_query->the_post();
                    ?>
                            <div class="col-lg-4 col-md-6">
                                <article class="post post-grid-style post-grid-style-two">
                                    <div class="entry-thumb">
                                        <figure class="thumb-wrap">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                                                <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
                                                <?php endif; ?>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="content-entry-wrap">
                                        <div class="entry-category">
                                            <?php the_category(' '); ?>
                                        </div>
                                        <h3 class="entry-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                    </div>
                                    <div class="entry-user">
                                        <div class="thumb">
                                            <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="Author Image" />
                                        </div>
                                        <div class="info">
                                            <div class="author-name">
                                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                    <?php the_author(); ?>
                                                </a>
                                            </div>
                                            <div class="entry-date"><?php echo get_the_date(); ?></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
            <!--~./End related posts block ~-->


        </div>
    </div><!--  /.blog-latest-items -->
</div>
<!--~./ end main wrapper ~-->

<?php get_footer() ?>