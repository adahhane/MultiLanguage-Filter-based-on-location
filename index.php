<?php
/**
 * @package MultiLanguage Filter based on location
 * @version 0.1
 */
/*
Plugin Name: MultiLanguage Filter based on location
Description: This plugin allows to redirect user to a specific language based on thier location
Author: Ayyoub DAHHANE
Version: 0.1
Author URI: https://www.linkedin.com/in/dahhane/
 */
function filterLanguages($locale) {
	if (geoip_detect2_get_info_from_current_ip($locales = array('en'), $options = array())->country->isoCode == "MA") {
		return 'wp-dev-fr';
	} else {
		return 'en_US';
	}
}
add_filter('locale', 'filterLanguages');
?>
