<?php 
/**
 * Database Configuration
 * @package   : Jiggasa
 * @author    : AL-AMIN
 * @version   : 1.0
 * @author URL: http://parbona.net
 */
	defined('_VALID') or die('Restricted Access!');

	session_start();

	require_once 'dbconn.php';

	try{

		$cont = new PDO("mysql:host=". $config['db_host'] ."; dbname=". $config['db_name'], $config['db_user'], $config['db_pass']);	
	
	}catch(PDOException $e){
		
		echo 'Error : ' . $e->getMessage();
		die();
	}
	
	
?>