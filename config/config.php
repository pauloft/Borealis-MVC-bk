<?php

 // Current environment. Options are: development and production
defined('ENVIRONMENT') || define('ENVIRONMENT', 'development');

$config['ROOT'] = 'http://demo.com';

/**
 * Config for Scaffold
 * Documentation for config can be found here:
 * http://wiki.github.com/anthonyshort/Scaffold/configuration
 *
 * @author Anthony Short
 */
$config['Scaffold'] = array(
	
		// Autoload extensions
			// Extensions can be found in /libraries/scaffold/extensions
		'extensions' => array(
				'Sass',
				'Minify',
				'Import'
			),
	);

?>