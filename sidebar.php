
            <div class="col-lg-3">
                <!-- Sidebar Items -->
                <div class="sidebar-items style-three style-three-two">
                    <!--~~~~~ Start About Me Widget ~~~~~-->
                    <aside class="widget bt-about-me-widget style-two">
                        <h4 class="widget-title">About Me</h4>

                        <?php if (is_active_sidebar('sidebaraboutme')):?>
                             <?php dynamic_sidebar('sidebaraboutme'); ?>
                        <?php endif; ?>

                    </aside>
                    <!--~./ end about me widget ~-->

                    <!--~~~~~ Start Categories Widget ~~~~~-->

                    <aside class="widget widget_categories">
								<h4 class="widget-title">
									Categories
								</h4>
								<!-- /.widget-title -->
								<div class="widget-content">
									<ul>
                                    <?php
                                // جلب جميع الفئات
                                $categories = get_categories();

                                foreach ($categories as $category) {
                                    // طباعة اسم الفئة وعدد المقالات فيها
                                    echo '<li><a>' . $category->name . '  <span class="count"> ' . $category->count . '</span></a></li>';
                                }
                            ?>

									</ul>
								</div>
								<!-- /.widget-content -->
							</aside>




                          



                    <!--~~~~~ Start Signup Widget ~~~~~-->
                    <!-- <aside class="widget tb-signup-widget">
                        <div class="widget-content">
                            <div class="signup-box">
                                <h2>Subscribe to Our Newsletter</h2>
                                <div class="signup-form-area">
                                    <form class="signup-form">
                                        <div class="form-group">
                                            <input id="sign-email" name="EMAIL" placeholder="Your Email Address"
                                                type="email">
                                            <button class="btn btn-default" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </aside> -->
                    <!--~./ End Signup Widget ~-->

                    <!--~~~~~ Start Post List Widget~~~~~-->



                    <aside class="widget widget-post-list">
                        <h4 class="widget-title">Recent Post</h4>
                        <!-- /.widget-title -->

                        <div class="widget-content">
                            <?php
                            $args = array(
                                'posts_per_page' => 4, // Number of posts to fetch
                                'post_status'    => 'publish', // Only get published posts
                                'orderby'        => 'date', // Order by date
                                'order'          => 'DESC' // Latest posts first
                            );

                            $last_posts = new WP_Query($args);

                            if ($last_posts->have_posts()) :
                                while ($last_posts->have_posts()) : $last_posts->the_post();
                                    ?>
                            <article class="post">
                                <div class="thumb-wrap">
                                    <a href="<?php the_permalink(); ?>">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                                                <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
                                                <?php endif; ?>
                                    </a>
                                </div>
                                <!--./ thumb-wrap -->
                                <div class="content-entry-wrap">
                                    <h3 class="entry-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <!--./ entry-title -->
                                    <div class="entry-meta-content">
                                        <div class="entry-date">
                                        <?php echo get_the_date(); ?>
                                        </div>
                                    </div>
                                    <!--./ entry-meta-content -->
                                </div>
                            </article>

                            <?php
                                endwhile;
                               
                            else :
                                echo '<p>No posts found.</p>';
                            endif;
                            ?>


                            <!--./ end post -->

                        </div>
                    </aside>












                    <!--~./ end post list widget ~-->

                    <!--~~~~~ Start Advertisement Widget ~~~~~-->
                    <!-- <aside class="widget widget_advertisement">
                        <div class="widget-content">
                            <a href="#"><img src="assets/images/widget/ads.jpg" alt="Advertisement" /></a>
                        </div>
                    </aside> -->
                    <!--~./ end Advertisement widget ~-->
                </div>
                <!--  /.sidebar-items -->
            </div>
            <!--~./ end sidebar ~ -->