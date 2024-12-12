<!--~./ Start Site Footer
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class="site-footer mrt-30">
    <div class="container-1290">
        <div class="row">
            <div class="col-12">
                <div class="custom-container-content bg-black pd-t-80">
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
									Start Footer Widget Area
								~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div class="footer-widget-area">
                        <div class="row">
                            <!--~~~~~ Start Widget Location ~~~~~-->
                            <div class="col-lg-4 col-md-6">
                                <aside class="widget bt-location-widget" >
                                <h2 class="widget-title">About Me</h2>
                                <?php if (is_active_sidebar('footer1')):?>
                                         <?php dynamic_sidebar('footer1'); ?>
                                    <?php endif; ?>
                                </aside>
                            </div>
                            <!--~./ end location widget ~-->

                            <!--~~~~~ Start Widget Links ~~~~~-->
                            <div class="col-lg-4 col-md-6">
                                <aside class="widget widget_links">
                                    <h2 class="widget-title">Quick Links</h2>
                                    <?php if (is_active_sidebar('footer2')):?>
                                         <?php dynamic_sidebar('footer2'); ?>
                                    <?php endif; ?>
                                </aside>
                            </div>
                            <!--~./ end links widget ~-->
                            <!--~~~~~ Start Widget Links ~~~~~-->
                            <div class="col-lg-2 col-md-6">
                                <aside class="widget widget_links">
                                    <h2 class="widget-title">Categories</h2>
                                    <?php if (is_active_sidebar('footer3')):?>
                                         <?php dynamic_sidebar('footer3'); ?>
                                    <?php endif; ?>
                                    </div>
                                </aside>
                            </div>
                            <!--~./ end links widget ~-->
                        </div>
                    </div>
                    <!--~./ end footer widgets area ~-->

                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
									Start Footer Bottom Area
							~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div class="footer-bottom-area">
                        <div class="footer-bottom-content">
                            <div class="copyright-text text-center">
                                <p>
                                    Copyright - <?php echo date("Y")?> BROXY theme by
                                    <a href="https://github.com/salemBahri" target="_blank">Salem Bahri</a>
                                </p>
                            </div>
                            <!--~./ end copyright text ~-->
                        </div>
                    </div>
                    <!--~./ end footer bottom area ~-->
                </div>
            </div>
        </div>
    </div>
</footer>
<!--~./ end site footer ~-->

</div>
<!--~~./ end site content ~~-->
<?php wp_footer() ?>













</body>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO5gB5AYjVEtuZxzRDMCOQ8_PEXikYRcg"></script>

</html>