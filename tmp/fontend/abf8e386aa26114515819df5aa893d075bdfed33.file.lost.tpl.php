<?php /* Smarty version Smarty-3.1.16, created on 2015-01-02 16:01:53
         compiled from "C:\xampp\htdocs\Jiggasa\template\fontend\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:951554a4df59b7a026-54065789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abf8e386aa26114515819df5aa893d075bdfed33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Jiggasa\\template\\fontend\\lost.tpl',
      1 => 1420091284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '951554a4df59b7a026-54065789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a4df59bc8756_19384065',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a4df59bc8756_19384065')) {function content_54a4df59bc8756_19384065($_smarty_tpl) {?><div class="content shadow">
	<div class="row">
		<div class="single-page span11">
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
		</div><!-- .single-page .span12  -->
	</div><!--  .row  -->
</div><!--  .content .shadow --><?php }} ?>
