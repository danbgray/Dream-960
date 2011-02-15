<?php
function dream960_form_system_theme_settings_alter(&$form, &$form_state) {
	$form['dev_mode'] = array(
	    '#type' 	=> 'radios',
	    '#title'	=> t('Toggle Display of 960 Grid for development, and other development features'),
	    '#options' 	=> array(
	      'on' 		=> t('on'),
	      'off' 	=> t('off'),
	    ),
	    '#default_value' => theme_get_setting('dev_mode'),
	
	    // Place development options in a form below the rest of the theme options 
	    '#weight' => -2,
	  );
	 
}
