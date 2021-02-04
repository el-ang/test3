<?php
function quote_form($atts){
	global $redux;

	ob_start();
?>
	<div class="modal fade mt-140-sm" id="quote_modal" tabindex="-1" role="dialog" aria-labelledby="quote_modal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header allah-light">
					<h5 class="modal-title"><i class="fa fa-envelope-o" aria-hidden="true"></i>Free Quote</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					
				</div>
				<div class="modal-body">
					<?php echo do_shortcode('[contact-form-7 id="73" title="Free Quote"]'); ?>
				</div>
			</div>
		</div>
	</div>

<?php
	return ob_get_clean();
}
add_shortcode('cwn_form_popup', 'quote_form');

function get_child_page($atts){
	$attributes = shortcode_atts( array(
		'id' => '',
	), $atts );
	
	$args = array(
		'post_type'      => 'page',
		'posts_per_page' => -1,
		'post_parent'    => esc_attr($attributes['id']),
		'order'          => 'ASC',
		'orderby'        => 'menu_order'
	);
	$parent = new WP_Query( $args );
	ob_start();
?>
	<?php if ( $parent->have_posts() ) : ?>
		<div class="row">
			<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
				<?php if(has_post_thumbnail()) :?>
					<div class="col-12 col-md-4 pb-5">
						<?php the_post_thumbnail()?>
					</div>
					<div class="col-12 col-md-8 pb-5">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
						<?php the_excerpt();?>
						<a href="<?php the_permalink(); ?>" class="button-green">Read More</a>
					</div>
				<?php else : ?>
					<div class="col-12 pb-5">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
						<br />
						<?php the_excerpt();?>
						<a href="<?php the_permalink(); ?>" class="button-green">Read More</a>
					</div>
				<?php endif;?>
			<?php endwhile;?>
		</div>
	<?php else:?>
		<div class="col-12 pb-5">
			<p>Data not found</p>
		</div>
	<?php endif;?>
<?php
	return ob_get_clean();
}
add_shortcode('cwn_child_pages', 'get_child_page');

function accordion_wrap($atts, $content){
	ob_start();
?>
	<div class="coastalwaste-accordion">
		<?php echo do_shortcode( $content ); ?>
	</div>

	<script>
		jQuery(document).ready(function($){
			$('.coastalwaste-accordion').accordion({
				collapsible: true,
				active: false, 
				heightStyle: "content",
				header: "> div > h2"
			});
		})
	</script>
<?php
	return ob_get_clean();
}
add_shortcode( 'cwn_accordion', 'accordion_wrap' );

function accordion_title($atts, $content){
	return '<div class="accordion-item"><h2 class="has-content green-light">'.$content.'<i class="fa fa-angle-down float-right"></i></h2>';
}
add_shortcode( 'cwn_accordion_title', 'accordion_title' );

function accordion_title_no_content($atts, $content){
	return '<div class="accordion-item"><h2 class="no-content  green-light">'.$content.'</h2>';
}
add_shortcode( 'cwn_accordion_title_no_content', 'accordion_title_no_content' );

function accordion_content($atts, $content){
	return '<div>'.$content.'</div></div>';
}
add_shortcode( 'cwn_accordion_content', 'accordion_content' );

function accordion_content_no_content($atts, $content){
	return '</div>';
}
add_shortcode( 'cwn_accordion_content_no_content', 'accordion_content_no_content' );


function size_table($atts){
	$args = array(
		'post_type'      => 'binsize',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'orderby'        => 'ID'
	);
	$parent = new WP_Query( $args );
	ob_start();
?>
	<?php if ( $parent->have_posts() ) : ?>
		<div class="table-responsive d-none d-md-none d-lg-block">
			<table class="table">
				<thead>
					<tr>
						<th><strong class="green-light">Skip Bins</strong></th>
						<th><strong class="green-light">Bin Size</strong></th>
						<th></th>
						<th><strong class="green-light">Details</strong></th>
					</tr>
				</thead>
				<tbody>
					<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
						<tr>
							<td width="40%">
								<?php 
									$thumb_url = get_the_post_thumbnail_url($post->ID); 
									$image_alt = get_post_meta( $thumb_url, '_wp_attachment_image_alt', true);
								?>
								<img class="img-responsive" src="<?php the_post_thumbnail_url($post->ID)?>" alt="<?php echo $image_alt;?>" />
							</td>
							<td  width="15%">
								<h3><?php echo get_field('size_number', $post->ID);?></h3>
							</td>
							<td  width="20%">
								<p><?php echo get_field('size_desc', $post->ID);?></p>
							</td>
							<td  width="25%">
								<?php the_content();?>
							</td>
						</tr>
					<?php endwhile;?>
					<?php wp_reset_query();?>
				</tbody>
			</table>
		</div>
		<div class="table-responsive d-block d-md-block d-lg-none">
			<table class="table">
				<tbody>
					<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
						<tr>
							<td colspan="2">
								<?php 
									$thumb_url = get_the_post_thumbnail_url($post->ID); 
									$image_alt = get_post_meta( $thumb_url, '_wp_attachment_image_alt', true);
								?>
								<img class="img-responsive" src="<?php the_post_thumbnail_url($post->ID)?>" alt="<?php echo $image_alt;?>" />
							</td>
						</tr>
						<tr>
							<td >
								<strong class="green-light">Bin Size</strong>
							</td>
							<td >
								<h3><?php echo get_field('size_number', $post->ID);?></h3>
								<p><?php echo get_field('size_desc', $post->ID);?></p>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<strong class="green-light">Details</strong>
								<?php the_content();?>
							</td>
						</tr>
					<?php endwhile;?>
					<?php wp_reset_query();?>
				</tbody>
			</table>
		</div>
	<?php else:?>
		<div class="col-12 pb-5">
			<p>Data not found</p>
		</div>
	<?php endif;?>
<?php
	return ob_get_clean();
}
add_shortcode('cwn_size_table', 'size_table');

?>