<?php /* Smarty version Smarty-3.1.16, created on 2014-10-02 16:41:51
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\fontend\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3027953cd4fa7cf4431-31941303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab2d78fbee007f9a730437cebaa18952ccfb3a0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\fontend\\lost.tpl',
      1 => 1412260908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3027953cd4fa7cf4431-31941303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53cd4fa7d40753_04408267',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd4fa7d40753_04408267')) {function content_53cd4fa7d40753_04408267($_smarty_tpl) {?><div class="content shadow">
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
