<?php /* Smarty version Smarty-3.1.16, created on 2014-12-07 16:15:16
         compiled from "C:\xampp\htdocs\myphpsite\CMS_PROJECT\template\fontend\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2935154846f04a21a82-41911588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab92a940e7964f95e036564435fa1b8ed070360' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\template\\fontend\\about.tpl',
      1 => 1417620766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2935154846f04a21a82-41911588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'about_me' => 0,
    'about' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54846f04a80ba8_47863095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54846f04a80ba8_47863095')) {function content_54846f04a80ba8_47863095($_smarty_tpl) {?><div class="content shadow">
	<div class="row">
		<div class="single-page span8">
			<?php  $_smarty_tpl->tpl_vars['about'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['about']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['about_me']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['about']->key => $_smarty_tpl->tpl_vars['about']->value) {
$_smarty_tpl->tpl_vars['about']->_loop = true;
?>
				<h2 class="page-header about-header"><?php echo $_smarty_tpl->tpl_vars['about']->value['widget_sub'];?>
</h2>
				<span class="pull-right">
					<div id="slider">
					<a href="uploads/<?php echo $_smarty_tpl->tpl_vars['about']->value['widget_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['about']->value['widget_media'];?>
" target="_blank">
					<img src="uploads/<?php echo $_smarty_tpl->tpl_vars['about']->value['widget_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['about']->value['widget_media'];?>
" alt="" class="thumbnail span3"></a>
					</div>
				</span><!--  .pull-right -->
				<?php echo $_smarty_tpl->tpl_vars['about']->value['widget_content'];?>

			<?php } ?>
		</div><!-- .span8  -->
		
		<div class="span3 sidebar">
			<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- .span3 .sidebar -->
	</div><!--  .row  -->
</div><!--  .content .shadow --><?php }} ?>
