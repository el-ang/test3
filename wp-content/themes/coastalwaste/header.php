<?php global $redux; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<link rel="shortcut icon" href="<?php echo $redux['favicon-image']['url']; ?>" type="image/vnd.microsoft.icon" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!----- HEADER -------------->
		<header class="fixed-top dark-matter">
			<div class="container-fluid">
				<div class="row justify-align-center align-items-center no-gutters">
					<div class="col-8 col-md-8 col-lg-3">
						<div class="site-logo">
							<a href="<?php echo home_url()?>">
								<?php
									$big_logo = somsweb_get_image_id($redux['logo-image']['url']);
									$image_alt = get_post_meta( $id_image, '_wp_attachment_image_alt', true);
									
									$small_logo = somsweb_get_image_id($redux['small-logo-image']['url']);
									$image_alt_1 = get_post_meta( $id_image, '_wp_attachment_image_alt', true);
								?>
								<img class="img-fluid d-none d-md-none d-lg-block" src="<?php echo $redux['logo-image']['url'];?>" alt="<?php echo $image_alt;?>" />
								<img class="img-fluid d-block d-md-block d-lg-none float-left float-lg-none" src="<?php echo $redux['small-logo-image']['url'];?>" alt="<?php echo $image_alt_1;?>" />
							</a>
						</div>
					</div>
					<div class="d-block d-md-block d-lg-none col text-right">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#coastal_menu" aria-controls="coastal_menu" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fa fa-bars mx-0"></i>
						</button>
					</div>
					<div class="col-12 col-lg-9">
						<div class="row d-flex align-items-center main_nav">
							<div class="col-12 d-none d-md-none d-lg-block contact-info text-center text-lg-right">
								<ul class="boxed-icons d-inline-flex align-items-center">
									<li>
										<div class="boxed-icons-wrapper d-flex align-items-center">
											<i class="green-light fa fa-map-marker"></i>
											<p class="text-left"><?php echo $redux['office-address'];?></p>
										</div>
									</li>
									<li>
										<div class="boxed-icons-wrapper d-flex align-items-center">
											<i class="green-light fa fa-phone"></i>
											<p class="text-left">
												<a href="tel:<?php echo $redux['mobile-number'];?>"><?php echo $redux['mobile-number'];?></a><br />
												<a href="tel:<?php echo $redux['phone-number'];?>"><?php echo $redux['phone-number'];?></a>
											</p>
										</div>
									</li>
									<li>
										<div class="boxed-icons-wrapper d-flex align-items-center">
											<i class="green-light fa fa-clock-o"></i>
											<p class="text-left"><?php echo $redux['opening-hours'];?></p>
										</div>
									</li>
								</ul>
								
								<ul class="social-distortion d-inline-flex">
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
							
							<div class="col-12">
								<nav class="navbar navbar-expand-lg float-lg-right py-0">
									
									<div class="collapse navbar-collapse" id="coastal_menu">
										<?php 
											wp_nav_menu(array(
												'theme_location' => 'main-menu',
												'depth'		 => 2,
												'container'	 => false,
												'menu_class' => 'navbar-nav',
												'walker'	 => new Bootstrap_Walker_Nav_Menu(),
											));
										?>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--------------------------->
<?php echo get_template_part( 'template-parts/template', 'header' ); ?>