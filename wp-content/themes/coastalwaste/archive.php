<?php get_header(); ?>
<section class="coastal-content p-50">
	<div class="container">
		<div class="row justify-content-center">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if(has_post_thumbnail()):?>
					<div class="col-12 col-md-4 text-left text-md-left pb-5">
						<?php 
							$thumb_url = get_the_post_thumbnail_url($post->ID); 
							$image_alt = get_post_meta( $thumb_url, '_wp_attachment_image_alt', true);?>
						<img class="img-responsive" src="<?php the_post_thumbnail_url($post->ID)?>" alt="<?php echo $image_alt;?>" />
					</div>
					
					<div class="col-12 col-md-8 text-left text-md-left pb-5">
						<h2><?php the_title();?></h2>
						<?php the_excerpt();?>
						<a href="<?php the_permalink();?>"  class="button-green">Read Article</a>
					</div>
				<?php else : ?>
					<div class="col-12 pb-5">
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<?php the_excerpt();?>
						<a href="<?php the_permalink();?>"  class="button-green">Read Article</a>
					</div>
				<?php endif;?>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>