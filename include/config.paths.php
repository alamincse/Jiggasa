<?php
/**
 * Description: Path or Location settings for this website
 * @package   : Jiggasa
 * @author    : AL-AMIN
 * @version   : 1.0
 * @author URL: http://parbona.net
 */ 
	defined('_VALID') or die('Restricted Access!');
	
	/*-------------------------------------------------------------------
	| 
	| Description : Store variable on your website requirement.
	| 
	| -------------------------------------------------------------------*/
	
	$config = array();

	/*-------------------------------------------------------------------
	| 
	| Description : Set your site address where you store this website.
	| Example: 'http://parbona.net'
	| 
	| -------------------------------------------------------------------*/

	$config['BASE_URL'] = 'http://localhost/my_task/Jiggasa/';

	/*-------------------------------------------------------------------
	| Optional...
	| Description : Locate original directory. It's default settings, you can't change it.
	| 
	| -------------------------------------------------------------------*/

	$config['BASE_DIR'] = dirname( dirname( __FILE__ ) );

	/** End of the website path connection */
?>