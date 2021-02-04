<?php global $redux; ?>
<?php if(is_home() || is_front_page()): ?>
	<section class="coastal_slider">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php $i=0;foreach ($redux['main-slider'] as $slide): ?>
					<div class="swiper-slide">
						<?php
							$attach_id = attachment_url_to_postid( $slide['image']);
							$title = get_post_meta($attach_id, '_wp_attachment_image_alt', TRUE);
						?>
						<img class="swiper-lazy" src="<?php echo $slide['image']?>" alt="<?php echo $title;?>" />
						<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					</div>
					<?php $i++;?>
				<?php endforeach;?>
			</div>
		</div>
	</section>

<?php endif;?>
<?php if(is_page() && !is_front_page()  && !is_page('contact-us')): ?>
	<section class="coastal_post_header color-white grey-mayemaye green-bottom-border p-40 p-lg-90 mt-80-sm mt-80-md mt-130-lg" data-parallax="scroll" data-image-src="<?php echo $redux['default-header-image']['url'];?>">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 text-left text-md-center">
					<!-- <div id="primary-sidebar"></div> -->
					<h1 class="mb-0"><?php echo get_the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php if(is_archive()  && have_posts()): ?>
	<section class="coastal_post_header color-white grey-mayemaye green-bottom-border p-40 p-lg-90 mt-80-sm mt-80-md mt-130-lg" data-parallax="scroll" data-image-src="<?php echo $redux['archive-header-image']['url'];?>">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 text-left text-md-center">
					<?php
						the_archive_title( '<h1 class="archive-title mb-0">', '</h1>' );
					?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php if(is_single()): ?>
	<section class="coastal_post_header color-white grey-mayemaye green-bottom-border p-40 p-lg-90 mt-80-sm mt-80-md mt-130-lg" data-parallax="scroll" data-image-src="<?php echo $redux['archive-header-image']['url'];?>">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 text-left text-md-center">
					<h1 class="mb-0"><?php the_title();?></h1>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>