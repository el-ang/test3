<?php get_header(); ?>
<section class="coastal-content main-content p-50">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile;
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>