<?php/** * Theme Customizer * * Helper functions for theme customizer use. *//** * Customization Option ID * * Used for storing and getting customizer option values from a master array. * The option name is based on the parent theme's name. * Settings API used instead of theme mod for greater flexibility. */function ctc_customize_option_id() {	$option_id = CTFW_THEME_SLUG . '_customizations'; // unique to parent theme	return apply_filters( 'ctc_customize_option_id', $option_id ); // prefix with theme name so options are unique to theme}/** * Get Customization Value * * This gets a customization value for convenient use in templates, etc. */function ctc_customization( $option ) {	$value = '';	// Get options array to pull value from	$options = get_option( ctc_customize_option_id() );		// Get default value	$defaults = ctc_customize_defaults();	$default = isset( $defaults[$option]['value'] ) ? $defaults[$option]['value'] : '';	// Option not saved - use default value	if ( ! isset( $options[$option] ) ) {		$value = $default;	}		// Option has been saved	else {				// Value is empty when not allowed, use default		if ( empty( $options[$option] ) && ! empty( $defaults[$option]['no_empty'] ) ) {			$value = $default;		}				// Otherwise, stick with current value		else {			$value = $options[$option];		}	}	// Return filtered	return apply_filters( 'ctc_customization', $value, $option );	}