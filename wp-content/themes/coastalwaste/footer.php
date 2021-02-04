<?php global $redux; ?>
	<!-------- Footer ----------->
		<footer class="coastal-footer darkness-grey p-50">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 col-md-12 col-lg-2">
						<img src="<?php echo $redux['small-logo-image']['url'];?>" alt="Coastal Waste Logo" />
						<div class="row">
							<div class="col-12 text-center text-md-center text-lg-left">
								<ul class="social-distortion d-inline-flex pl-4 pl-md-4 pl-lg-0">
									<li>
										<a href="<?php echo $redux['facebook-link'];?>">
											<i class="green-light fa fa-facebook-square"></i>
										</a>
									</li>
									<li>
										<a href="<?php echo $redux['instagram-link'];?>">
											<i class="green-light fa fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="<?php echo $redux['linkedin-link'];?>">
											<i class="green-light fa fa-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-6 col-md-4 col-lg-2 mt-3 mt-md-3 mt-lg-0">
						<?php dynamic_sidebar('footer-1');?>
					</div>
					<div class="col-6 col-md-4 col-lg-2 mt-3 mt-md-3 mt-lg-0">
						<?php dynamic_sidebar('footer-2');?>
					</div>
					<div class="col-12 col-md-4 col-lg-2 mt-3 mt-md-3 mt-lg-0">
						<?php dynamic_sidebar('footer-3');?>
					</div>
					<div class="col-6 col-md-6 col-lg-2">
						<?php dynamic_sidebar('footer-4');?>
					</div>
					
					<div class="col-6 col-md-6 col-lg-2">
						<?php dynamic_sidebar('footer-5');?>
					</div>
				</div>
			</div>
		</footer>
		<section class="copyright dark-matter">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 text-center p-3">
						<?php echo $redux['copyright'];?>
					</div>
				</div>
			</div>
		</section>
	<!--------------------------->
	<!---- FLOATING BUTTON ------>
	<?php if($redux['enable-floating-buttons'] == true):?>
		<a href="<?php echo esc_url(get_permalink($redux['quote-page']))?>" class="d-none d-md-block d-lg-block floating-button small free-quote">
			<div class="background">
				<i class="fa fa-comments"></i> Free Quote
			</div>
		</a>
		<a href="<?php echo esc_url(get_permalink($redux['booking-page']))?>" class="d-none d-md-block d-lg-block floating-button small bookmark">
			<div class="background">
				<i class="fa fa-bookmark-o"></i> Book Now
			</div>
		</a>
		<a href="tel:0895929420" class="d-none d-md-block d-lg-block floating-button small telephone">
			<div class="background">
				<i class="fa fa-phone"></i> Call Now
			</div>
		</a>
		<a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15778.053596542919!2d115.223917!3d-8.6426231!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x151b2f19c94aac8e!2sDigiSnapper%20Webmedia!5e0!3m2!1sen!2sid!4v1612199729266!5m2!1sen!2sid" class="d-none d-md-block d-lg-block floating-button small location" target="_blank">
			<div class="background">
				<i class="fa fa-map-marker"></i> Location
			</div>
		</a>
		<div class="mobile-floating-wrapper d-block d-md-none d-lg-none">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						<a href="<?php echo esc_url(get_permalink($redux['quote-page']))?>" class="mb-2 mobile-floating button-green free-quote">
							<i class="fa fa-comments"></i> Free Quote
						</a>
					</div>
					
					<div class="col-6">
						<a href="<?php echo esc_url(get_permalink($redux['booking-page']))?>" class="mobile-floating button-green bookmark">
							<i class="fa fa-bookmark-o"></i> Book Now
						</a>
					</div>
					
					<div class="col-6">
						<a href="<?php echo $redux['mobile-phone'];?>" class="mobile-floating button-green telephone">
							<i class="fa fa-phone"></i>  Call Now
						</a>
					</div>
					
					<div class="col-6">
						<a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15778.053596542919!2d115.223917!3d-8.6426231!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x151b2f19c94aac8e!2sDigiSnapper%20Webmedia!5e0!3m2!1sen!2sid!4v1612199729266!5m2!1sen!2sid" class="mobile-floating button-green location">
							<i class="fa fa-map-marker"></i> Location
						</a>
					</div>
					
				</div>
			</div>
		</div>
	<?php endif;?>
	<?php echo do_shortcode('[cwn_form_popup]'); ?>
	<!--------------------------->
	<?php wp_footer();?>
	</body>
</html>
