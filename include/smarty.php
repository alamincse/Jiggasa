<?php 
/**
 * load Smarty library
 * @package   : Jiggasa
 * @author    : AL-AMIN
 * @version   : 1.0
 * @author URL: http://parbona.net
 */
	defined('_VALID') or die('Restricted Access!');

	/** set public tempalte */
	$tpl_dir = 'fontend'; 

	require_once ( dirname( __FILE__ ). '/smarty/libs/Smarty.class.php' );
	$smarty = new Smarty;
	$smarty->compile_check = true;
	$smarty->debugging = false;
	$smarty->template_dir = $config['BASE_DIR']. '/template/' .$tpl_dir; 
	$smarty->compile_dir = $config['BASE_DIR']. '/tmp/' .$tpl_dir;

	$smarty->assign('base_url', $config['BASE_URL']);
	$smarty->assign('basedir', $config['BASE_DIR']);
?>