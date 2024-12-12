<?php
/* Template Name: Coming Soon */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>

	<?php wp_head(); ?>
</head>

<body>
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
            Start Coming Soon Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="coming-soon-block ptb-100 bg-image bg-overlay"
             style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/others/coming-soon-bg.png'); ?>');">

			<div id="particles-js"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="coming-soon-content text-center">
							<div class="site-logo">
								<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/coming-logo1.png" style="width: 50px;"  alt="logo"></a>
							</div>
							<!--~~./ site-logo ~~-->
							<div class="countdown-area">
								<div id="countdown"></div>
							</div>
							<!--~./ countdown-area ~-->
						</div>
					</div>
					<!--~./ end coming soon content ~-->
				</div>
				<!--./ col-lg-7 -->
			</div>
			<!--./ row -->
		</div>
		<!--./ coming-soon-block -->
	</div>
	<!--~~./ end site content ~~-->

	<?php wp_footer() ?>
	
	<script>
		particlesJS('particles-js', {
			"particles": {
				"number": {
					"value": 50,
					"density": {
						"enable": true,
						"value_area": 800
					}
				},
				"color": {
					"value": "#888"
				},
				"shape": {
					"type": "circle",
					"stroke": {
						"width": 0,
						"color": "#888"
					},
					"polygon": {
						"nb_sides": 5
					},
					"image": {
						"src": "img/github.svg",
						"width": 100,
						"height": 100
					}
				},
				"opacity": {
					"value": 0.5,
					"random": false,
					"anim": {
						"enable": false,
						"speed": 3,
						"opacity_min": 0.1,
						"sync": false
					}
				},
				"size": {
					"value": 5,
					"random": true,
					"anim": {
						"enable": false,
						"speed": 40,
						"size_min": 0.1,
						"sync": false
					}
				},
				"line_linked": {
					"enable": true,
					"distance": 150,
					"color": "#888",
					"opacity": 0.4,
					"width": 1
				},
				"move": {
					"enable": true,
					"speed": 6,
					"direction": "none",
					"random": false,
					"straight": false,
					"out_mode": "out",
					"attract": {
						"enable": false,
						"rotateX": 600,
						"rotateY": 1200
					}
				}
			},
			"interactivity": {
				"detect_on": "canvas",
				"events": {
					"onhover": {
						"enable": true,
						"mode": "repulse"
					},
					"onclick": {
						"enable": true,
						"mode": "push"
					},
					"resize": true
				},
				"modes": {
					"grab": {
						"distance": 400,
						"line_linked": {
							"opacity": 1
						}
					},
					"bubble": {
						"distance": 400,
						"size": 40,
						"duration": 2,
						"opacity": 8,
						"speed": 3
					},
					"repulse": {
						"distance": 200
					},
					"push": {
						"particles_nb": 4
					},
					"remove": {
						"particles_nb": 2
					}
				}
			},
			"retina_detect": true,
			"config_demo": {
				"hide_card": false,
				"background_color": "#b61924",
				"background_image": "",
				"background_position": "50% 50%",
				"background_repeat": "no-repeat",
				"background_size": "cover"
			}
		}
		);
	</script>
</body>

</html>