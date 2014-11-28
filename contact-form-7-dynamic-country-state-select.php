<?php
/*
 * Plugin Name: Contact Form 7 Dynamic country-state select
 * Version: 1.0
 * Plugin URI: http://mathieuforest.ca/
 * Description: This was develop for custom needs.
 * Author: Mathieu Forest
 * Author URI: http://mathieuforest.ca/
 Use [select* country include_blank id:country] and [select* country include_blank id:state] shortcodes in contact form 7.
 */

// Add countries script for forms

if(ICL_LANGUAGE_CODE=='fr'){
	wp_enqueue_script( 'country', plugins_url() . '/exob2b-contact-form-7-dynamic-country-state-select/js/countries-fr.js', array(), '1.0.0', false );
	wp_enqueue_script( 'country-list-call', plugins_url() . '/exob2b-contact-form-7-dynamic-country-state-select/js/populate-country-state.js', array(), '1.0.0', true );
}else{
	wp_enqueue_script( 'country', plugins_url() . '/exob2b-contact-form-7-dynamic-country-state-select/js/countries-en.js', array(), '1.0.0', false );
	wp_enqueue_script( 'country-list-call', plugins_url() . '/exob2b-contact-form-7-dynamic-country-state-select/js/populate-country-state.js', array(), '1.0.0', true );
}

?>
