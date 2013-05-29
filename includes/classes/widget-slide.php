<?php/** * Slide Widget */class CTC_Widget_Slide extends CTC_Widget {	/**	 * Register widget with WordPress	 */	function __construct() {			parent::__construct(			'ctc-slide',			_x( 'CT Slide', 'widget', 'church-theme-framework' ),			array(				'description' => __( 'A slide to be shown in a slider', 'church-theme-framework' )			),			array(				'width' => 300,				'height' => 550			)					);		}	/**	 * Field configuration	 *	 * This is used by CTC_Widget class for automatic field output, filtering, sanitization and saving.	 */	 	function ctc_fields() { // prefix in case WP core adds method with same name		// Fields		$fields = array(			// Example			/*			'field_id' => array(				'name'				=> __( 'Field Name', 'church-theme-framework' ),				'after_name'		=> '', // (Optional), (Required), etc.				'desc'				=> __( 'This is the description below the field.', 'church-theme-framework' ),				'type'				=> 'text', // text, textarea, checkbox, radio, select, number, url, image				'checkbox_label'	=> '', //show text after checkbox				'radio_inline'		=> false, // show radio inputs inline or on top of each other				'number_min'		=> '', // lowest possible value for number type				'number_max'		=> '', // highest possible value for number type				'options'			=> array(), // array of keys/values for radio or select				'default'			=> '', // value to pre-populate option with (before first save or on reset)				'no_empty'			=> false, // if user empties value, force default to be saved instead				'allow_html'		=> false, // allow HTML to be used in the value (text, textarea)				'attributes'		=> array(), // attributes to add to input element				'class'				=> '', // class(es) to add to input				'field_attributes'	=> array(), // attr => value array for field container				'field_class'		=> '', // class(es) to add to field container				'custom_sanitize'	=> '', // function to do additional sanitization (or array( &$this, 'method' ))				'custom_field'		=> '', // function for custom display of field input				'page_templates'	=> array(), // field will not appear or save if one of these page templates are not selected (or array( &$this, 'method' ))				'taxonomies'		=> array(), // hide field if taxonomies are not supported			);			*/			// Title			'title' => array(				'name'				=> _x( 'Title', 'slide widget', 'church-theme-framework' ),				'after_name'		=> '', // (Optional), (Required), etc.				'desc'				=> '',				'type'				=> 'text', // text, textarea, checkbox, radio, select, number, url, image				'checkbox_label'	=> '', //show text after checkbox				'radio_inline'		=> false, // show radio inputs inline or on top of each other				'number_min'		=> '', // lowest possible value for number type				'number_max'		=> '', // highest possible value for number type				'options'			=> array(), // array of keys/values for radio or select				'default'			=> '', // value to pre-populate option with (before first save or on reset)				'no_empty'			=> false, // if user empties value, force default to be saved instead				'allow_html'		=> false, // allow HTML to be used in the value (text, textarea)				'attributes'		=> array(), // attributes to add to input element				'class'				=> '', // class(es) to add to input				'field_attributes'	=> array(), // attr => value array for field container				'field_class'		=> '', // class(es) to add to field container				'custom_sanitize'	=> '', // function to do additional sanitization (or array( &$this, 'method' ))				'custom_field'		=> '', // function for custom display of field input				'page_templates'	=> array(), // field will not appear or save if one of these page templates are not selected (or array( &$this, 'method' ))				'taxonomies'		=> array(), // hide field if taxonomies are not supported			),			// Description			'description' => array(				'name'				=> _x( 'Description', 'slide widget', 'church-theme-framework' ),				'after_name'		=> '', // (Optional), (Required), etc.				'desc'				=> '',				'type'				=> 'text', // text, textarea, checkbox, radio, select, number, url, image				'checkbox_label'	=> '', //show text after checkbox				'radio_inline'		=> false, // show radio inputs inline or on top of each other				'number_min'		=> '', // lowest possible value for number type				'number_max'		=> '', // highest possible value for number type				'options'			=> array(), // array of keys/values for radio or select				'default'			=> '', // value to pre-populate option with (before first save or on reset)				'no_empty'			=> false, // if user empties value, force default to be saved instead				'allow_html'		=> false, // allow HTML to be used in the value (text, textarea)				'attributes'		=> array(), // attributes to add to input element				'class'				=> '', // class(es) to add to input				'field_attributes'	=> array(), // attr => value array for field container				'field_class'		=> '', // class(es) to add to field container				'custom_sanitize'	=> '', // function to do additional sanitization (or array( &$this, 'method' ))				'custom_field'		=> '', // function for custom display of field input				'page_templates'	=> array(), // field will not appear or save if one of these page templates are not selected (or array( &$this, 'method' ))				'taxonomies'		=> array(), // hide field if taxonomies are not supported			),			// Click URL			'click_url' => array(				'name'				=> _x( 'Click URL', 'slide widget', 'church-theme-framework' ),				'after_name'		=> '', // (Optional), (Required), etc.				'desc'				=> '',				'type'				=> 'url', // text, textarea, checkbox, radio, select, number, url, image				'checkbox_label'	=> '', //show text after checkbox				'radio_inline'		=> false, // show radio inputs inline or on top of each other				'number_min'		=> '', // lowest possible value for number type				'number_max'		=> '', // highest possible value for number type				'options'			=> array(), // array of keys/values for radio or select				'default'			=> '', // value to pre-populate option with (before first save or on reset)				'no_empty'			=> false, // if user empties value, force default to be saved instead				'allow_html'		=> false, // allow HTML to be used in the value (text, textarea)				'attributes'		=> array(), // attributes to add to input element				'class'				=> '', // class(es) to add to input				'field_attributes'	=> array(), // attr => value array for field container				'field_class'		=> 'ctc-widget-no-bottom-margin', // class(es) to add to field container				'custom_sanitize'	=> '', // function to do additional sanitization (or array( &$this, 'method' ))				'custom_field'		=> '', // function for custom display of field input				'page_templates'	=> array(), // field will not appear or save if one of these page templates are not selected (or array( &$this, 'method' ))				'taxonomies'		=> array(), // hide field if taxonomies are not supported			),			// New Window			'click_new' => array(				'name'				=> '',				'after_name'		=> '', // (Optional), (Required), etc.				'desc'				=> '',				'type'				=> 'checkbox', // text, textarea, checkbox, radio, select, number, url, image				'checkbox_label'	=> _x( 'Open in new tab', 'slide widget', 'church-theme-framework' ), //show text after checkbox				'radio_inline'		=> false, // show radio inputs inline or on top of each other				'number_min'		=> '', // lowest possible value for number type				'number_max'		=> '', // highest possible value for number type				'options'			=> array(), // array of keys/values for radio or select				'default'			=> false, // value to pre-populate option with (before first save or on reset)				'no_empty'			=> false, // if user empties value, force default to be saved instead				'allow_html'		=> false, // allow HTML to be used in the value (text, textarea)				'attributes'		=> array(), // attributes to add to input element				'class'				=> '', // class(es) to add to input				'field_attributes'	=> array(), // attr => value array for field container				'field_class'		=> 'ctc-widget-no-top-margin', // class(es) to add to field container				'custom_sanitize'	=> '', // function to do additional sanitization (or array( &$this, 'method' ))				'custom_field'		=> '', // function for custom display of field input				'page_templates'	=> array(), // field will not appear or save if one of these page templates are not selected (or array( &$this, 'method' ))				'taxonomies'		=> array(), // hide field if taxonomies are not supported			),			// Image			'image_id' => array(				'name'				=> _x( 'Image', 'slide widget', 'church-theme-framework' ),				'after_name'		=> '', // (Optional), (Required), etc.				'desc'				=> '',				'type'				=> 'image', // text, textarea, checkbox, radio, select, number, url, image				'checkbox_label'	=> '', //show text after checkbox				'radio_inline'		=> false, // show radio inputs inline or on top of each other				'number_min'		=> '', // lowest possible value for number type				'number_max'		=> '', // highest possible value for number type				'options'			=> array(), // array of keys/values for radio or select				'default'			=> '', // value to pre-populate option with (before first save or on reset)				'no_empty'			=> false, // if user empties value, force default to be saved instead				'allow_html'		=> false, // allow HTML to be used in the value (text, textarea)				'attributes'		=> array(), // attributes to add to input element				'class'				=> '', // class(es) to add to input				'field_attributes'	=> array(), // attr => value array for field container				'field_class'		=> '', // class(es) to add to field container				'custom_sanitize'	=> '', // function to do additional sanitization (or array( &$this, 'method' ))				'custom_field'		=> '', // function for custom display of field input				'page_templates'	=> array(), // field will not appear or save if one of these page templates are not selected (or array( &$this, 'method' ))				'taxonomies'		=> array(), // hide field if taxonomies are not supported			),			// Video URL			'video' => array(		// generic "video" (vs "video_url") in case ever want to allow embed code				'name'				=> _x( 'Video URL', 'slide widget', 'church-theme-framework' ),				'after_name'		=> '', // (Optional), (Required), etc.				'desc'				=> '',				'type'				=> 'url', // text, textarea, checkbox, radio, select, number, url, image				'checkbox_label'	=> '', //show text after checkbox				'radio_inline'		=> false, // show radio inputs inline or on top of each other				'number_min'		=> '', // lowest possible value for number type				'number_max'		=> '', // highest possible value for number type				'options'			=> array(), // array of keys/values for radio or select				'default'			=> '', // value to pre-populate option with (before first save or on reset)				'no_empty'			=> false, // if user empties value, force default to be saved instead				'allow_html'		=> false, // allow HTML to be used in the value (text, textarea)				'attributes'		=> array(), // attributes to add to input element				'class'				=> '', // class(es) to add to input				'field_attributes'	=> array(), // attr => value array for field container				'field_class'		=> '', // class(es) to add to field container				'custom_sanitize'	=> '', // function to do additional sanitization (or array( &$this, 'method' ))				'custom_field'		=> '', // function for custom display of field input				'page_templates'	=> array(), // field will not appear or save if one of these page templates are not selected (or array( &$this, 'method' ))				'taxonomies'		=> array(), // hide field if taxonomies are not supported			),		);				// Return config		return $fields;		}}