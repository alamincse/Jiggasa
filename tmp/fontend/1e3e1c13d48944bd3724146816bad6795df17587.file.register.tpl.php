<?php /* Smarty version Smarty-3.1.16, created on 2014-12-02 18:30:05
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\fontend\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2401853cd4a145fd9d5-50764456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e3e1c13d48944bd3724146816bad6795df17587' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\fontend\\register.tpl',
      1 => 1417541402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2401853cd4a145fd9d5-50764456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53cd4a14654f01_51030745',
  'variables' => 
  array (
    'base_url' => 0,
    'register_complete' => 0,
    'error' => 0,
    'options' => 0,
    'rand' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd4a14654f01_51030745')) {function content_53cd4a14654f01_51030745($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_image')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\function.html_image.php';
?><h3 class="page-header">Registration Form <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/forum.php" class="pull-right">Login</a></h3>

<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['register_complete']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php } ?>

<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="control-group">
		<label for="f-name" class="control-label">Full Name</label>
		<div class="controls">
			<input type="text" name="f_name" id="f-name" placeholder="Full Name"  onfocus="if(this.placeholder=='Full Name'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Full Name';}" >
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="username" class="control-label">Username</label>
		<div class="controls">
			<input type="text" name="username" id="username" placeholder="Username"  onfocus="if(this.placeholder=='Username'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Username';}" >
			<div id="status"></div>
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="username" class="control-label">Email</label>
		<div class="controls">
			<input type="text" name="email" id="email" placeholder="E-mail"  onfocus="if(this.placeholder=='E-mail'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='E-mail';}" >
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="password" class="control-label">Password</label>
		<div class="controls">
			<input type="password" name="password" id="password" placeholder="password"  onfocus="if(this.placeholder=='password'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='password'}" />
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="password" class="control-label">Confirm Password</label>
		<div class="controls">
			<input type="password" name="c_pw" id="password" placeholder="confirm password"  onfocus="if(this.placeholder=='confirm password'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='confirm password'}" />
		</div><!-- .controls  -->
	</div><!--  .control-group  -->


	<div class="control-group">
		<label class="control-label" for="select">Location</label>
		<div class="controls">
			<?php echo smarty_function_html_options(array('name'=>"select-name",'options'=>$_smarty_tpl->tpl_vars['options']->value,'id'=>"select",'onchange'=>"populate(this.id, 'use')"),$_smarty_tpl);?>

		</div><!-- .controls  -->
	</div><!-- .control-group  -->

	<div class="control-group">
		<label class="control-label" for="select">Where are you ?</label>
		<div class="controls">
			<?php echo smarty_function_html_options(array('name'=>"option-name",'options'=>"Please Select Country",'id'=>"use"),$_smarty_tpl);?>

			
		</div><!-- .controls  -->
	</div><!-- .control-group  -->

	<div class="control-group">
		<label class="control-label" for="select">Profile Picture</label>
		<div class="controls">
			<div id="preview">
				<p><?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['base_url']->value)."/assets/img/noimage.png",'name'=>"user_img",'class'=>"img-polaroid prevImg thumbnail"),$_smarty_tpl);?>
</p>
			</div><!-- .preview  -->
			
			<input type="file" name="profile_image" id="photoimg" multiple>
		</div><!-- .controls  -->
	</div><!-- .control-group  -->

	<div class="control-group">
		<div class="controls captcha-img">
			<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/captcha.php?rand=<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
" alt="captcha" id='showcaptcha'>
			<a href='javascript: refreshCaptcha();'><?php echo smarty_function_html_image(array('file'=>((string)$_smarty_tpl->tpl_vars['base_url']->value)."/assets/img/captcha_refresh.png"),$_smarty_tpl);?>
</a>
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="captcha" class="control-label">Are you human ?</label>
		<div class="controls">
			<input type="text" name="captcha" id="captcha" placeholder="Type Captcha"  onfocus="if(this.placeholder=='Type Captcha'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Type Captcha';}" >
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<div class="controls">
			<input type="submit" name="submit_reg" value="Register" class="btn btn-inverse">
		</div><!-- .controls  -->
	</div><!--  .control-group  -->
</form><!-- .form-horizontal   --><?php }} ?>
