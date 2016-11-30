<?php /* Smarty version Smarty-3.1.16, created on 2015-09-01 16:54:03
         compiled from "C:\xampp\htdocs\Jiggasa\template\fontend\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:348754a4d73dd6ebe9-07199922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a67dd26b97aea57328a3d42f80f94c1b14d4d93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Jiggasa\\template\\fontend\\login.tpl',
      1 => 1441119242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '348754a4d73dd6ebe9-07199922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a4d73dd92570_05737066',
  'variables' => 
  array (
    'base_url' => 0,
    'logout' => 0,
    'login' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a4d73dd92570_05737066')) {function content_54a4d73dd92570_05737066($_smarty_tpl) {?><h2 class="page-header"> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
?action=register" class="pull-right btn btn-primary">Registration</a></h2>

<?php if (isset($_smarty_tpl->tpl_vars['logout']->value)) {?>
	<div class="alert alert-success">
		<a href="" class="close" data-dismiss="alert">&times;</a>
		<p><?php echo $_smarty_tpl->tpl_vars['logout']->value;?>
</p>
	</div><!--  .alert .alert-error -->
<?php }?>


<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['login']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
	<div class="alert alert-error">
		<a href="" class="close" data-dismiss="alert">&times;</a>
		<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
	</div><!--  .alert .alert-error -->
<?php } ?>
<form action="./" method="post" class="form-horizontal">
	<div class="control-group">
		<label for="username" class="control-label">Username</label>
		<div class="controls">
			<input type="text" name="uname" id="username" placeholder="Username"  onfocus="if(this.placeholder == 'Username'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Username';}">
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="pw" class="control-label">Password</label>
		<div class="controls">
			<input type="password" name="pw" id="pw" placeholder="password"  onfocus="if(this.placeholder == 'password'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='password';}">
		</div><!-- .controls  -->
	</div><!--  .control-group  -->
	
	
	
	<div class="control-group">
		<div class="controls">
			<input type="submit" name="submit" value="Login" class="btn btn-primary">
		</div><!-- .controls  -->
	</div><!--  .control-group  -->
</form><!-- .form-horizontal   -->
<?php }} ?>
