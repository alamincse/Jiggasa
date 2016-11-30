<?php /* Smarty version Smarty-3.1.16, created on 2015-01-02 08:27:06
         compiled from "C:\xampp\htdocs\Jiggasa\template\fontend\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1262154a4da02b76951-13518031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8819195414611b8ed5b470380dc7d38fc5677199' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Jiggasa\\template\\fontend\\register.tpl',
      1 => 1420103536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1262154a4da02b76951-13518031',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a4da02be4fa5_16768890',
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
<?php if ($_valid && !is_callable('content_54a4da02be4fa5_16768890')) {function content_54a4da02be4fa5_16768890($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\Jiggasa\\include\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_image')) include 'C:\\xampp\\htdocs\\Jiggasa\\include\\smarty\\libs\\plugins\\function.html_image.php';
?><h3 class="page-header">Registration Form <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="pull-right btn btn-primary">Login</a></h3>

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
