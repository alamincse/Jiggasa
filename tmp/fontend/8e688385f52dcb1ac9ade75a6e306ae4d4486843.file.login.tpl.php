<?php /* Smarty version Smarty-3.1.16, created on 2015-01-02 04:43:04
         compiled from "C:\xampp\htdocs\Jiggasaa\template\fontend\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1589154a613c8b9a160-83191055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e688385f52dcb1ac9ade75a6e306ae4d4486843' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Jiggasaa\\template\\fontend\\login.tpl',
      1 => 1420103662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1589154a613c8b9a160-83191055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'logout' => 0,
    'login' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a613c8bbbcc3_29708975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a613c8bbbcc3_29708975')) {function content_54a613c8bbbcc3_29708975($_smarty_tpl) {?><h2 class="page-header"> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
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
		<div class="controls span2">
			 <label class="checkbox">
				<input type="checkbox" name="remember"><span>Remember me.</span>
			</label><!-- .checkbox  -->
		</div><!--  .controls  -->
	</div><!--  .control-group  -->


	<div class="control-group">
		<div class="controls">
			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/lost.php?p=forgot_password&token=<?php echo time();?>
">Forgot Password?</a>
		</div><!-- .controls  -->
	</div><!--  .control-group  -->
	
	<div class="control-group">
		<div class="controls">
			<input type="submit" name="submit" value="Login" class="btn btn-primary">
		</div><!-- .controls  -->
	</div><!--  .control-group  -->
</form><!-- .form-horizontal   -->
<?php }} ?>
