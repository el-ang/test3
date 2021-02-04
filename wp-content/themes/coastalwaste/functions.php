<?php
/**
* We Need Support
*/
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
//add_theme_support( 'html5', array( 'search-form' ) );

/**
* Remove Stupid Things, Emoji Especially
*/
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

/**
* Hide Wordpress Admin Bar
*/
add_filter('show_admin_bar', '__return_false');
remove_action('personal_options','_admin_bar_preferences');

/**
* Security
*/
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','index_rel_link');
remove_action('wp_head','wp_generator');

/**
* Run Shortcode in Text Widget
*/
add_filter('widget_text', 'do_shortcode');

/**
* Check plugin requirement
*/
include_once('includes/tgm-plugin-activation/tgm-plugin-activation.php');

/**
* Redux Ready to Serve
*/
include_once('redux.php');

/**
* Never Lost Again
*/
if (function_exists('register_nav_menus')) {
	register_nav_menus([
		'main-menu' => __('Main Menu'),
		'footer-menu-1' => __('Footer Menu 1'),
		'footer-menu-2' => __('Footer Menu 2'),
		'footer-menu-3' => __('Footer Menu 3'),
	]);
}

/**
* Gandalf the Widget
*/
function casting_sidebar(){
	register_sidebar([
		'name' 			=> 'Primary Sidebar',
		'id' 			=> 'primary-sidebar',
		'description' 	=> 'Primary Sidebar',
		'before_widget' => '<div id="%1$s" class="aside-post grey-mayemaye py-5 px-3 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);
	register_sidebar([
		'name' 			=> 'Footer 1',
		'id' 			=> 'footer-1',
		'description' 	=> 'Footer 1',
		'before_widget' => '<div id="%1$s" class="footer_sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);
	register_sidebar([
		'name' 			=> 'Footer 2',
		'id' 			=> 'footer-2',
		'description' 	=> 'Footer 2',
		'before_widget' => '<div id="%1$s" class="footer_sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);
	register_sidebar([
		'name' 			=> 'Footer 3',
		'id' 			=> 'footer-3',
		'description' 	=> 'Footer 3',
		'before_widget' => '<div id="%1$s" class="footer_sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);
	register_sidebar([
		'name' 			=> 'Footer 4',
		'id' 			=> 'footer-4',
		'description' 	=> 'Footer 4',
		'before_widget' => '<div id="%1$s" class="footer_sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);
	register_sidebar([
		'name' 			=> 'Footer 5',
		'id' 			=> 'footer-5',
		'description' 	=> 'Footer 5',
		'before_widget' => '<div id="%1$s" class="footer_sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);
	register_sidebar([
		'name' 			=> 'Location',
		'id' 			=> 'sidebar-location',
		'description' 	=> 'Sidebar for Location Page',
		'before_widget' => '<div id="%1$s" class="footer_sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);
}
add_action('widgets_init', 'casting_sidebar');

/**
* One Punch Enqueue
*/
function one_punch_man(){
	/*** Register Style ***/
	wp_register_style('theme-font', 'https://fonts.googleapis.com/css?family=Montserrat:300,700', array(), null, 'all');
	wp_register_style('bootstrapmin', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), null, 'all');
	wp_register_style('jquery-ui', get_template_directory_uri().'/assets/css/jquery-ui.min.css', array(), null, 'all');
	wp_register_style('fontawesomemin', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_register_style('animate', get_template_directory_uri().'/assets/css/animate.css', array(), '3.5.1', 'all');
	wp_register_style('imghover', get_template_directory_uri().'/assets/css/imagehover.min.css', array(), '2.0.0', 'all');
	wp_register_style('fancybox', get_template_directory_uri().'/assets/fancybox/jquery.fancybox.css', array(), '2.0.0', 'all');
	wp_register_style('swiper', get_template_directory_uri().'/assets/css/swiper.min.css', array(), null, 'all');
	wp_register_style('main-style', get_stylesheet_uri(), array(), null, 'all');
	
	/*** Register Scripts ***/
	wp_register_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '2.1.3', true);
	wp_register_script('bootstrapmin', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '3.3.7', true);
	wp_register_script('jquery-ui', get_template_directory_uri().'/assets/js/jquery-ui.min.js', array(), null, true);
	wp_register_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.min.js', array(), '2.8.3', true);
	wp_register_script('wow', get_template_directory_uri().'/assets/js/wow.min.js', array(), '1.1.3', true);
	wp_register_script('hoverIntent', get_template_directory_uri().'/assets/js/hoverIntent.js', array(), '1.0.0', true);
	wp_register_script('swiper', get_template_directory_uri().'/assets/js/swiper.min.js', array(), null, true);
	wp_register_script('fancybox', get_template_directory_uri().'/assets/fancybox/jquery.fancybox.pack.js', array(), null, true);
	wp_register_script('parallax', get_template_directory_uri().'/assets/js/parallax.min.js', array(), null, true);
	wp_register_script('custom', get_template_directory_uri().'/assets/js/script.js', array(), null, true);

	wp_localize_script('custom', 'theme_param', array('ajaxurl' => admin_url( 'admin-ajax.php' )));
	/*** Punch the Style ***/
	wp_enqueue_style(['main-style', 'theme-font', 'bootstrapmin', 'fontawesomemin', 'animate', 'imghover', 'fancybox','swiper']);
	/*** Punch the Scripts ***/
	wp_enqueue_script(['jquery', 'bootstrapmin', 'jquery-ui', 'modernizr', 'wow',  'main-script','hoverIntent','swiper','fancybox','parallax', 'custom']);
}
add_action('wp_enqueue_scripts', 'one_punch_man');

/**
* Use theme fontawesome
*/
function replace_types_fontawesome(){
	wp_deregister_style('font-awesome');
}
add_action('init', 'replace_types_fontawesome', 999);

/**
* Retrieve image id by url
*/
function somsweb_get_image_id($image_url) {
	global $wpdb;
	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
	return $attachment[0]; 
}

/**
* REMOVE EMPTY PARAGRAPH AFTER SHORTCODE
*/
add_filter( 'the_content', 'remove_empty_paragraph' );
function remove_empty_paragraph( $content ) {
	$array = array(
		'<p>['    => '[',
		']</p>'   => ']',
		']<br />' => ']'
	);
	return strtr( $content, $array );
}

/**
* Remove “Category:”, “Tag:”, “Author:” from the_archive_title
*/
add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}

	return $title;
});

/**
* Custom Pagination
*/
function somsweb_pagination( $echo = true ){
	global $wp_query;

	$big = 999999999; // need an unlikely integer

	$pages = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'type'  => 'array',
			'prev_next'   => true,
			'prev_text'    => __('«'),
			'next_text'    => __('»'),
		)
	);

	if( is_array( $pages ) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

		$pagination = '<ul class="pagination">';

		foreach ( $pages as $page ) {
			$pagination .= "<li>$page</li>";
		}

		$pagination .= '</ul>';

		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
}

add_action( 'after_setup_theme', 'bootstrap_setup' );
if ( ! function_exists( 'bootstrap_setup' ) ):
	function bootstrap_setup(){
		class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
			
			function start_lvl( &$output, $depth = 0, $args = array() ){
				$indent = str_repeat( "\t", $depth );
				$output	   .= "\n$indent<ul class=\"dropdown-menu allah-light\">\n";
				
			}
			function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
				
				$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
				$li_attributes = '';
				$class_names = $value = '';
				$classes = empty( $item->classes ) ? array() : (array) $item->classes;
				$classes[] = ($args->has_children) ? 'dropdown' : '';
				$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
				$classes[] = 'nav-item menu-item-' . $item->ID;
				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
				$class_names = ' class="' . esc_attr( $class_names ) . '"';
				$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
				$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
				$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
				$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
				$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
				$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
				$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
				$attributes .= ($args->has_children) 	    ? ' class="nav-link dropdown-toggle" data-toggle="dropdown"' : 'class="nav-link"';
				$item_output = $args->before;
				$item_output .= '<a'. $attributes .'>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= ($args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
				$item_output .= $args->after;
				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}
			function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
				
				if ( !$element )
					return;
				
				$id_field = $this->db_fields['id'];
				//display this element
				if ( is_array( $args[0] ) ) 
					$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
				else if ( is_object( $args[0] ) ) 
					$args[0]->has_children = ! empty( $children_elements[$element->$id_field] ); 
				$cb_args = array_merge( array(&$output, $element, $depth), $args);
				call_user_func_array(array(&$this, 'start_el'), $cb_args);
				$id = $element->$id_field;
				// descend only when the depth is right and there are childrens for this element
				if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
					foreach( $children_elements[ $id ] as $child ){
						if ( !isset($newlevel) ) {
							$newlevel = true;
							//start the child delimiter
							$cb_args = array_merge( array(&$output, $depth), $args);
							call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
						}
						$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
					}
						unset( $children_elements[ $id ] );
				}
				if ( isset($newlevel) && $newlevel ){
					//end the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
				}
				//end this element
				$cb_args = array_merge( array(&$output, $element, $depth), $args);
				call_user_func_array(array(&$this, 'end_el'), $cb_args);
				
			}
			
		}
	}
endif;
/**
* Include Everything
*/
include_once('includes/shortcodes.php');