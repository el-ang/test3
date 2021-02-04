<div class="row">
	<?php if(has_post_thumbnail()):?>
		<div class="col-12 col-md-4 pb-5 text-left text-md-left">
			<?php 
				$id = $post->ID;
				$thumb_url = get_the_post_thumbnail_url($post->ID); 
				$image_alt = get_post_meta( $thumb_url, '_wp_attachment_image_alt', true);
			?>
			<img class="img-responsive" src="<?php the_post_thumbnail_url($id)?>" alt="<?php echo $image_alt;?>" />
		</div>
		<div class="col-12 col-md-8 pb-5 text-left text-md-left">
			<h2><?php the_title();?></h2>
			<?php the_content();?>
		</div>
	<?php else: ?>
		<div class="col-12 pb-5 text-left text-md-left">
			<h2><?php the_title();?></h2>
			<?php the_content();?>
		</div>
	<?php endif;?>
</div>
