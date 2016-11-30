<?php 
/**
 * Subscribers logout
 * @author : AL-AMIN
 */
	define( '_VALID', true );
	require_once( dirname(__FILE__) .'/include/config.php' );

	session_start();
	session_destroy();
	setcookie( 'uname', '', time() - 43200 );
	setcookie( 'u_id', '', time() - 43200 );

	header( 'location:./?logout=true&' .rawurlencode($config['BASE_URL']) );
?>