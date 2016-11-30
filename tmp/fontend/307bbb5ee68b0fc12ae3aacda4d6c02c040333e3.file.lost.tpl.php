<?php /* Smarty version Smarty-3.1.16, created on 2014-12-15 20:08:31
         compiled from "C:\xampp\htdocs\myphpsite\CMS_PROJECT\template\fontend\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9444548f31af9749d3-70640590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307bbb5ee68b0fc12ae3aacda4d6c02c040333e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\template\\fontend\\lost.tpl',
      1 => 1412260908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9444548f31af9749d3-70640590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_548f31afadcf74_56087483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f31afadcf74_56087483')) {function content_548f31afadcf74_56087483($_smarty_tpl) {?><div class="content shadow">
	<div class="row">
		<div class="single-page span8">
			<form action="" method="post" class="form-horizontal">
				<h2 class="page-header about-header">Password Recovery Method.</h2>
				<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

				<?php } ?>
				<div class="control-group">
					<label for="username" class="control-label">Email</label>
					<div class="controls">
						<input type="text" name="email" id="email" placeholder="Type your email"  onfocus="if(this.placeholder == 'Type your email'){this.placeholder = '';}" onblur="if(this.placeholder == ''){this.placeholder = 'Type your email'}"  />
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<div class="controls">
						<input type="submit" name="submit_lost" value="Submit" class="btn btn-inverse">
					</div>
				</div>
			</form><!-- .form-horizontal   -->
		</div><!-- .single-page .span8  -->
		
		<div class="span3 sidebar">
			<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- .span3  -->
	</div><!--  .row  -->
</div><!--  .content .shadow --><?php }} ?>
