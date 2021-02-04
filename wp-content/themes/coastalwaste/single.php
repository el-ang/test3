<?php get_header(); ?>
<section class="coastal-content main-content p-50">
	<div class="container">
		<div class="row justify-content-center">
			<?php
				if ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'single' );
				endif;
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>