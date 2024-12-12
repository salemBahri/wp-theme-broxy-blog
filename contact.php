<?php
/* Template Name: Contact */
?>
<?php get_header() ?>


		<!--~~~ Sticky Header ~~~-->
		<div id="sticky-header" class="active"></div>
		<!--~./ end sticky header ~-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Contact Block 
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="contact-block">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="contact-content-area">
							<div class="contact-content text-center">
								<h2 class="heading">Contact</h2>
								<p>If you would like to join us on our journey around the world and beyond, then you can follow us on a
									social media channels</p>
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
							<div id="gmaps"></div>
							<div class="contact-form-area">
								<form id="contact_form" class="contact-form" action="#">
									<div class="row">
										<div class="col-lg-4">
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label for="name">Name</label>
														<input class="form-controller" id="name" name="name" type="text">
													</div>
												</div>
												<!--./ col-lg-12-->
												<div class="col-lg-12">
													<div class="form-group">
														<label for="email">Email</label>
														<input class="form-controller" id="email" name="email" type="email">
													</div>
												</div>
												<!--./ col-lg-12 -->
												<div class="col-lg-12">
													<div class="form-group">
														<label for="subject">Subject</label>
														<input class="form-controller" id="subject" name="subject" type="text">
													</div>
												</div>
												<!--./ col-lg-12-->
											</div>
										</div>
										<div class="col-lg-8">
											<div class="form-group">
												<label for="name">Message </label>
												<textarea id="message" name="message" class="form-controller" rows="4" cols="50"></textarea>
											</div>
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</div><!-- /.row -->
								</form><!-- /.contact-form -->
							</div><!-- /.contact-form-area -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--~./ end contact block ~-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
      Start Subscribe Section
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="subscribe-section style-two">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="subscribe-section-content mr-0">
							<div class="section-header">
								<h2 class="title">Subscribe</h2>
								<p>Subscribe Now To Get Daily Updates</p>
							</div>
							<div class="subscribe-form">
								<!-- Subscribe form -->
								<form class="dv-form" id="mc-form">
									<div class="form-group">
										<input id="mc-email" name="EMAIL" placeholder="Email Address" type="email" />
										<button class="btn btn-default" name="Subscribe" id="subscribe-btn" type="submit">
											Subscribe
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--~./ end subscribe section ~-->

		

<?php get_footer() ?>