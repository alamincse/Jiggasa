<?php 
	define( '_VALID', true );
	require_once ( dirname( __FILE__ ) .'/include/config.php' ); 
	require_once ( dirname( __FILE__ ) .'/functions.php' );

    $smarty->assign('site_name', $seo['site_name']);
    $smarty->assign('site_title', $seo['site_title']);
	$smarty->assign('page_name', $seo['page_name']['lost']);
	$smarty->assign('article_title', '');
	$smarty->assign('self_keywords', $seo['index_keywords']);
	$smarty->assign('meta_keywords', $seo['index_meta']);
	$smarty->assign('meta_desc', $seo['meta_desc']);
	$smarty->assign('author', $seo['author']);
	$smarty->assign('errors', password_lost());
	$smarty->assign('add_css', add_css());
	$smarty->assign('add_js', add_js());
	$smarty->display('header.tpl');	
	$smarty->display('lost.tpl');	
	$smarty->display('footer.tpl');	
?>