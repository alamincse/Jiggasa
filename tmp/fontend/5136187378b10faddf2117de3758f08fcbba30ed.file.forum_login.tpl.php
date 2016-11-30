<?php /* Smarty version Smarty-3.1.16, created on 2014-08-24 22:30:48
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\fontend\forum_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1484253fa4aa84a7cb7-84114262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5136187378b10faddf2117de3758f08fcbba30ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\fontend\\forum_login.tpl',
      1 => 1408912246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1484253fa4aa84a7cb7-84114262',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53fa4aa84f5bb1_62187511',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fa4aa84f5bb1_62187511')) {function content_53fa4aa84f5bb1_62187511($_smarty_tpl) {?><h2 class="page-header">Login</h2>
<a href="forum.php?action=register">Register</a>
<form action="" method="post" class="form-horizontal">
	<div class="control-group">
		<label for="username" class="control-label">Username</label>
		<div class="controls">
			<input type="text" name="uname" id="username" placeholder="Username"  onfocus="if(this.placeholder == 'Username'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Username';}" class="span3">
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="pw" class="control-label">Password</label>
		<div class="controls">
			<input type="password" name="pw" id="pw" placeholder="password"  onfocus="if(this.placeholder == 'password'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='password';}" class="span3">
		</div><!-- .controls  -->
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
			<input type="submit" name="submit" value="Login" class="btn btn-success">
		</div><!-- .controls  -->
	</div><!--  .control-group  -->
</form><!-- .form-horizontal   --><?php }} ?>
