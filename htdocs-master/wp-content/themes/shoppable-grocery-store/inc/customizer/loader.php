<?php

function shoppable_grocery_store_default_styles(){

	// Begin Style
	$css = '<style>';

	# Responsive Departments
	if( !get_theme_mod( 'mobile_departments', true ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-department-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive views
	if(!get_theme_mod('mobile_views', true ) ){
		$css .='
			@media screen and (max-width: 767px){
				.section-view-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Advert
	if( !get_theme_mod( 'mobile_advert', true ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-advert-area {
	    			display: none;
				}
			}
		';
	}
	
	// End Style
	$css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
add_action( 'wp_head', 'shoppable_grocery_store_default_styles', 99 );