<?php 
/**
* Implements hook_css_alter to add a hook for debug mode
* 
* When debug mode is on, it shows the 960 css grid
* Otherwise it hides it.
*/
function dream960_css_alter(&$css) { 
	global $theme_info, $base_theme_info;
	$base_framework = $base_theme_info[0]->info;
	
	/* Get rid of the debug css rule if we're not in debug mode */
	if(theme_get_setting('dev_mode') == 'off') { 
		unset($css["sites/all/themes/ninesixty/styles/framework/debug.css"]);
	}
}
?>