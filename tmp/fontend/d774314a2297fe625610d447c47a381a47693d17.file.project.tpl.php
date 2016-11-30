<?php /* Smarty version Smarty-3.1.16, created on 2014-12-07 16:14:56
         compiled from "C:\xampp\htdocs\myphpsite\CMS_PROJECT\template\fontend\project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1213454846ef07a8930-20139469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd774314a2297fe625610d447c47a381a47693d17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\template\\fontend\\project.tpl',
      1 => 1408888974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1213454846ef07a8930-20139469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'php_project' => 0,
    'project' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54846ef080a5e2_77917422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54846ef080a5e2_77917422')) {function content_54846ef080a5e2_77917422($_smarty_tpl) {?><div class="content shadow">
	<div class="row">
		<div class="span8 single-page">
			<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['php_project']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
				<div class="span3">
					<h2><?php echo $_smarty_tpl->tpl_vars['project']->value['widget_sub'];?>
</h2>
					<a style="margin-left:-5px;" href="uploads/<?php echo $_smarty_tpl->tpl_vars['project']->value['widget_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['project']->value['widget_media'];?>
" class="thumbnail span3"><img src="uploads/<?php echo $_smarty_tpl->tpl_vars['project']->value['widget_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['project']->value['widget_media'];?>
" alt=""></a>
					<div>
						<?php echo $_smarty_tpl->tpl_vars['project']->value['widget_content'];?>

					</div>
				</div>
			<?php } ?>
		</div><!-- .span8 .single-page -->
		
		<div class="span3 sidebar">
			<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- .span3 .sidebar -->
	</div><!--  .row  -->
</div><!--  .content .shadow --><?php }} ?>
