<?php get_header();?>
	<!----- Content ------------->
		<section class="coastal_content p-50 px-md-4 px-xl-5">
			<div class="container-fluid">
				<div class="row justify-content-center align-items-start">
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>
						<?php if(has_post_thumbnail()):?>
							<div class="col-12 col-md-12 col-lg-6 col-xl-8">
								<h1 class="mini-headline text-uppercase"><?php the_title();?></h1>
								<?php the_content();?>
							</div>
							<div class="col-12 col-md-12 col-lg-6 col-xl-4">
								<?php 
									$thumb_url = get_the_post_thumbnail_url($post->ID); 
									$image_alt = get_post_meta( $thumb_url, '_wp_attachment_image_alt', true);
								?>
								<img src="<?php echo $thumb_url;?>" alt="<?php echo get_post_meta(34, '_wp_attachment_image_alt', TRUE); ?>" />
							</div>
						<?php else: ?>
							<div class="col-12">
								<h1 class="mini-headline text-uppercase"><?php the_title();?></h1>
								<?php the_content();?>
							</div>
						<?php endif; ?>
					<?php endwhile;?>
				</div>
			</div>
		</section>
	<?php echo get_template_part( 'template-parts/template', 'home' ); ?>
	<!--------------------------->
<?php get_footer(); ?>