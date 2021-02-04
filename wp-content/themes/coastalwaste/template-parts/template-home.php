<?php global $redux; ?>

	<section class="coastal-content book_banner p-30 allah-light d-none d-md-none d-lg-block">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<img src="<?php echo esc_url($redux['booking-image']['url'])?>" alt="<?php echo get_post_meta(519, '_wp_attachment_image_alt', TRUE); ?>" />
				<div class="col-12 col-lg-5 col-xl-auto offset-lg-5 offset-xl-4">
					<h3  class="text-left text-lg-center color-white">Site main tagline here</h3>
				</div>
				<div class="col-12 col-lg-2 col-xl-2 offset-xl-2 offset-cust-0">
					<a href="<?php echo esc_url(get_permalink($redux['qupte-page']));?>" class="text-left text-lg-center button-red-pop w-100">Enquire Now</a>
				</div>
			</div>
		</div>
	</section>
	<section class="coastal-content grey-light p-30 px-md-4 px-xl-5">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12">
					<h2 class="text-left text-lg-center"><?php echo $redux['booking-title']?></h2>
				</div>
				<div class="col-12">
					<p class="text-left text-lg-center mb-0"><?php echo $redux['booking-content']?></p>
				</div>
				
			</div>
		</div>
	</section>
	<?php if (!empty($redux['1-content']) && !empty($redux['1-title']) && !empty($redux['1-media']['url'])):?>
		<section class="coastal-content d-inline-block  d-md-inline-block d-lg-inline-block  d-xl-flex">
			<div class="width-50">
				<img class="hi-lg-100" src="<?php echo $redux['1-media']['url'] ?>" alt="<?php echo get_post_meta(416, '_wp_attachment_image_alt', TRUE); ?>" />
			</div>
			<div class="width-50 p-50 pe-40 pe-sm-15 allah-light-darker color-white text-left text-md-left text-lg-center text-xl-left">
				<h2><?php echo $redux['1-title']?></h2>
				<?php echo $redux['1-content']?>
			</div>
		</section>
	<?php endif; ?>
	<?php if (!empty($redux['2-content']) && !empty($redux['2-title'])):?>
		<section class="coastal-content grey-light p-50 px-md-4 px-xl-5">
			<div class="container-fluid">
				<div class="row justify-align-center">
					<div class="col-12 text-left text-lg-center ">
						<h2><?php echo $redux['2-title'];?></h2>
					</div>
					<div class="col-12 text-left text-lg-center">
						<p><?php echo $redux['2-content']?></p>
					</div>
					<?php if($redux['enable-2-icons'] == true):?>
						<div class="col-12">
							<div class="icons-list row p-30">
								<?php foreach($redux['2-icons'] as $icon):?>
									<div class="col-6 col-md col-lg text-center">
										<?php
											$attach_id = attachment_url_to_postid( $icon['image']);
											$title = get_post_meta($attach_id, '_wp_attachment_image_alt', TRUE);
										?>
										<img src="<?php echo $icon['image']?>" alt="<?php echo $title;?>" />
										<p class="small-text"><?php echo $icon['title']?></p>
									</div>
								<?php endforeach;?>
							</div>
						</div>
					<?php endif;?>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php if (!empty($redux['3-content']) && !empty($redux['3-title'])):?>
	<section class="coastal-content p-50 px-md-4 px-xl-5 color-white grey-mayemaye" data-parallax="scroll" data-image-src="<?php echo $redux['3-media']['url'];?>">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 text-left text-md-left text-lg-center">
					<h2><?php echo $redux['3-title'];?></h2>
				</div>
				<div class="col-12 text-left text-md-left text-lg-center">
					<?php echo $redux['3-content'];?>
				</div>
			</div>
			
		</div>
	</section>
	<?php endif; ?>
	<?php if (!empty($redux['4-content']) && !empty($redux['4-title']) &&  !empty($redux['4-media']['url'])):?>
	<section class="coastal-content p-50 px-md-4 px-xl-5">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-12 text-left text-md-left text-lg-center">
					<h2><?php echo $redux['4-title'];?></h2>
				</div>
				<div class="col-12 text-md-left text-lg-center">
					<p><?php echo $redux['4-subtitle'];?></p>
				</div>
				<div class="col-12 pt-5 pt-md-0">
					<div class="row justify-content-center align-items-start">
						<div class="col-12 col-md-12 col-lg-7 col-xl-6">
							<img class="hi-100" src="<?php echo $redux['4-media']['url'];?>" alt="<?php echo get_post_meta(532, '_wp_attachment_image_alt', TRUE); ?>" />
						</div>
						<div class="col-12 col-md-12 col-lg-5 col-xl-6">
							<?php echo $redux['4-content']?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<?php if (!empty($redux['5-content']) && !empty($redux['5-title']) &&  !empty($redux['5-media']['url'])):?>
		<section class="coastal-content d-inline-block d-md-inline-block d-lg-inline-block  d-xl-flex">
			<div class="width-50 p-50 pe-40 pe-sm-15 allah-light color-white text-left text-md-left text-lg-center text-xl-right">
				<h2><?php echo $redux['5-title']?></h2>
					<?php echo $redux['5-content']?>
				<?php if(!empty($redux['5-pageto'])):?>
					<div class="align-self-end">
						<a href="<?php echo esc_url(get_permalink($redux['5-pageto']))?>" class="button-grey">View All Our Recycling Service Options</a>
					</div>
				<?php endif;?>
			</div>
			<div class="width-50">
				<img class="hi-100"src="<?php echo $redux['5-media']['url']?>" alt="<?php echo get_post_meta(533, '_wp_attachment_image_alt', TRUE); ?>" />
			</div>
		</section>
	<?php endif; ?>