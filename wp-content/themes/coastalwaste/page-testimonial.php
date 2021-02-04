<?php get_header(); ?>
<section class="coastal-content p-50">
	<div class="container">
		<div class="row justify-content-center">
			<?php 
				$args = array(
					'post_type'      => 'testimonial',
					'posts_per_page' => -1,
					'order'          => 'ASC',
					'orderby'        => 'ID'
				);
				$parent = new WP_Query( $args );
			?>
			<?php if ( $parent->have_posts() ) :?>
				<div class="col-12 col-md-9 col-lg-9 text-left text-md-left">
					<?php 
						while ( $parent->have_posts() ) : $parent->the_post();
							get_template_part( 'template-parts/content', 'testimonials' );
						endwhile;
					?>
				</div>
				<div class="col-12 col-md-3 col-md-3 text-left text-md-left">
					<?php dynamic_sidebar('primary-sidebar');?>
				</div>
			<?php else:?>
				<div class="col-12 col-md-9 col-lg-9 text-left text-md-left">
					<p>No testimonials</p>
				</div>
				<div class="col-12 col-md-3 col-md-3 text-left text-md-left">
					<?php dynamic_sidebar('primary-sidebar');?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>