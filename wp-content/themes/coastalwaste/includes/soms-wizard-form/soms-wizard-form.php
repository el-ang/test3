<?php
/**
 * Plugin Name: 	SOMS Wizard Form
 * Plugin URI:		http://somsweb.com.au
 * Description:		A simple plugin to add a wizard form in website.
 * Text Domain: 	somswizard
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define('SOMSWIZARD_PATH', get_template_directory_uri() . '/includes/soms-wizard-form');

function somswizard_enqueue_scripts(){
    
}
add_action( 'wp_enqueue_scripts', 'somswizard_enqueue_scripts' );

function somswizard_show_form_shortcode(){
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-toggle', SOMSWIZARD_PATH . '/assets/css/bootstrap-toggle.min.css');
    wp_enqueue_style('form-validation', SOMSWIZARD_PATH . '/assets/css/formValidation.min.css');
    wp_enqueue_style('chosen', SOMSWIZARD_PATH . '/assets/css/chosen.min.css');
    wp_enqueue_style( 'somswizard', SOMSWIZARD_PATH . '/assets/css/frontend.css');

    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', null, null, true);
    wp_enqueue_script('bootstrap-wizard', SOMSWIZARD_PATH . '/assets/js/jquery.bootstrap.wizard.min.js', null, null, true);
    wp_enqueue_script('bootstrap-toggle', SOMSWIZARD_PATH . '/assets/js/bootstrap-toggle.min.js', null, null, true);
    wp_enqueue_script('chosen', SOMSWIZARD_PATH . '/assets/js/chosen.jquery.min.js', null, null, true);
    wp_enqueue_script('form-validation', SOMSWIZARD_PATH . '/assets/js/formValidation.min.js', null, null, true);
    wp_enqueue_script('bs-form-validation', SOMSWIZARD_PATH . '/assets/js/fv-bootstrap.min.js', null, null, true);
    wp_enqueue_script('somswizard', SOMSWIZARD_PATH . '/assets/js/frontend.js', null, null, true);
    wp_localize_script('somswizard', 'wizard_param', array('ajaxurl' => admin_url( 'admin-ajax.php' )));

	ob_start();
	include('templates/form.php');
	return ob_get_clean();
}

add_action( 'wp_ajax_nopriv_load_pages', 'somswizard_show_section' );
add_action( 'wp_ajax_load_pages', 'somswizard_show_section' );
function somswizard_show_section(){
    extract($_GET);
    extract($_POST);
    if(is_numeric($section) && in_array($section, [1,2,3,4,5,6,7,8])){
        $include = 'section-'.$section.'.php';
    } else{
        $include = 'section-1.php';
    }

    ob_start();
    include('templates/'.$include);
    echo ob_get_clean();
    wp_die();
}

function somswizard_register_shortcodes(){
	add_shortcode('soms_form', 'somswizard_show_form_shortcode');
}

add_action('init','somswizard_register_shortcodes');
// Use shortcodes in text widgets.
add_filter('widget_text','do_shortcode');

/**
* REMOVE EMPTY PARAGRAPH AFTER SHORTCODE
*/
if( ! function_exists('remove_empty_paragraph') ){
    add_filter( 'the_content', 'remove_empty_paragraph' );
    function remove_empty_paragraph( $content ) {
        $array = array(
            '<p>['    => '[',
            ']</p>'   => ']',
            ']<br />' => ']'
        );
        return strtr( $content, $array );
    }
}