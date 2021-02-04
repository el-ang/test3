<?php if(has_post_thumbnail()):?>
	<div class="col-12 col-md-5 d-block d-md-none text-left text-md-left">
		<?php dynamic_sidebar('sidebar-location');?>
	</div>
	<div class="col-12 col-md-7 col-lg-7 text-left text-md-left">
		<?php 
			$thumb_url = get_the_post_thumbnail_url($post->ID); 
			$image_alt = get_post_meta( $thumb_url, '_wp_attachment_image_alt', true);
		?>
		<img class="img-responsive" src="<?php the_post_thumbnail_url($post->ID)?>" alt="<?php echo $image_alt;?>" />
		<?php
			the_content();
			
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div>
	<div class="col-12 col-md-5 d-none d-md-block text-left text-md-left">
		<?php dynamic_sidebar('sidebar-location');?>
	</div>
<?php else: ?>
	<div class="col-12 col-md-5 d-block d-md-none text-left text-md-left">
		<?php dynamic_sidebar('sidebar-location');?>
	</div>
	
	<div class="col-12 col-md-7 text-left text-md-left">
		<?php
			the_content();
			
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div>
	<div class="col-12 col-md-5 d-none d-md-block text-md-left">
		<?php dynamic_sidebar('sidebar-location');?>
	</div>
<?php endif;?>
<?php
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
			get_the_title()
		),
		'<div class="entry-footer"><span class="edit-link">',
		'</span></div><!-- .entry-footer -->'
	);
?>