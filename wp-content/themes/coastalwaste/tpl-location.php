<?php /* Template Name: Locations */ ?>
<?php get_header();?>
<section class="coastal-content p-50">
	<div class="container">
		<div class="row justify-align-center">
			<?php 
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'location' );
				endwhile;
			?>
		</div>
		
		</div>
	</div>
</section>
<?php get_footer(); ?>