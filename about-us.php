<?php
/* Template Name: About Us */
?>
<?php get_header() ?>

<!--~~~ Sticky Header ~~~-->
<div id="sticky-header" class="active"></div>
<!--~./ end sticky header ~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	Start About Block 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="about-block">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="about-content-area text-center">
					<div class="about-content">
						<h2 class="heading">About Me</h2>
						<p>
						<?php the_content(); ?>
						</p>
					</div>
					<div class="about-mockup">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about.png" alt="About Me">
					</div>
					<div class="follow-me">
						Follow Me :
						<a href="#"><span class="fab fa-behance"></span></a>
						<a href="#"><span class="fab fa-vimeo-v"></span></a>
						<a href="#"><span class="fab fa-facebook-f"></span></a>
						<a href="#"><span class="fab fa-twitter"></span></a>
						<a href="#"><span class="fab fa-instagram"></span></a>
						<a href="#"><span class="fab fa-pinterest-p "></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--~./ end about block ~-->

<?php get_footer() ?>