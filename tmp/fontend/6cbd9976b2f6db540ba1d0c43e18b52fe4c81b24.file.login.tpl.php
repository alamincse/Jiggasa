<?php /* Smarty version Smarty-3.1.16, created on 2014-11-21 06:33:14
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\fontend\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2876553cd4a145d7bd0-63814537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cbd9976b2f6db540ba1d0c43e18b52fe4c81b24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\fontend\\login.tpl',
      1 => 1416547991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2876553cd4a145d7bd0-63814537',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53cd4a145e9c27_53978694',
  'variables' => 
  array (
    'base_url' => 0,
    'logout' => 0,
    'login' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd4a145e9c27_53978694')) {function content_53cd4a145e9c27_53978694($_smarty_tpl) {?><h2 class="page-header">You Must Login. <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/forum.php?action=register" class="pull-right">Registration</a></h2>

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
<form action="forum.php" method="post" class="form-horizontal">
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
