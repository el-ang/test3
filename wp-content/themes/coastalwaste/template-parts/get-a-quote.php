<?php /* Template Name: Get a Quote */ ?>
<?php get_header(); ?>
<section class="coastal-content p-50">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-left text-left">
				<?php
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
					//the_content();
	
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					) );
				?>
				
				<div class="row">
					<div class="col-12 col-md-6">
						<h3>Instant Skip Bin Quote</h3>
						<?php echo do_shortcode('[blocked_form]'); ?>
					</div>
					<div class="col-12 col-md-6">
						<div class="row">
							<div class="col-6">
								<p><strong>Phone</strong></p>
								
								<p><a href="tel:<?php echo $redux['mobile-number']?>"><?php echo $redux['mobile-number']?></a></p>
								<br />
								<p><strong>Perth City Phone</strong></p>
								<p><a href="tel:<?php echo $redux['phone-number']?>"><?php echo $redux['phone-number']?></a><br /></p>
								<br />
								<p></p>
								<div class="map-google-wrapper">
									<div class="embed-responsive embed-responsive-21by9">
										<?php echo $redux['google-map-url'];?>
									</div>
								</div>
							</div>
							
							<div class="col-6">
								<p><strong>Address</strong></p>
								<p><?php echo $redux['office-address']?></p>
								<br />
								<p><strong>Postal Address</strong></p>
								<p><?php echo $redux['postal-address']?></p>
								<br />
								<p><strong>Perth City Address</strong></p>
								<p><?php echo $redux['perth-address']?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
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
		</div>
	</div>
</section>
<?php get_footer(); ?>