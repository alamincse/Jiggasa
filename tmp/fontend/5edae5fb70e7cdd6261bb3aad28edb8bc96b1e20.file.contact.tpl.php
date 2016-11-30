<?php /* Smarty version Smarty-3.1.16, created on 2014-08-19 18:00:16
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\fontend\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1354153de0fb6ac1105-73256739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5edae5fb70e7cdd6261bb3aad28edb8bc96b1e20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\fontend\\contact.tpl',
      1 => 1408463973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1354153de0fb6ac1105-73256739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53de0fb6ac2ea1_23625845',
  'variables' => 
  array (
    'base_url' => 0,
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53de0fb6ac2ea1_23625845')) {function content_53de0fb6ac2ea1_23625845($_smarty_tpl) {?><div class="content shadow">
	<div class="row">
		<div class="span8 single-page">
			<h2 class="page-header about-header">Contact</h2>
			<!-- Contact with me. -->
			
			<div id="myMap" class="thumbnail" style="height:300px;margin-bottom:50px;"></div>

			<p style="font-size:18px;"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/contact.php"><i class="fa fa-envelope-o"></i></a>&nbsp;&nbsp;Do you want to contact me ? Please use below the form.</p><br><br>

			
			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

			<?php } ?>

			<form action="" method="post" class="form-horizontal" >
				<div class="control-group">
					<label for="f-name" class="control-label">Full Name</label>
					<div class="controls">
						<input type="text" name="f_name" id="f-name" class="span4" placeholder="Full Name"  onfocus="if(this.placeholder=='Full Name'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Full Name';}">
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label for="email" class="control-label">Email</label>
					<div class="controls">
						<input type="text" name="email" id="email" class="span4" placeholder="Type your email"  onfocus="if(this.placeholder=='Type your email'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Type your email';}" >
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label for="loc" class="control-label">Location</label>
					<div class="controls">
						<input type="text" name="loc" id="loc" class="span4" placeholder="Where are you ?"  onfocus="if(this.placeholder=='Where are you ?'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Where are you ?';}" >
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label for="subject" class="control-label">Subject</label>
					<div class="controls">
						<input type="text" name="subject" id="subject" class="span4" placeholder="Subject"  onfocus="if(this.placeholder=='Subject'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Subject';}" >
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label for="msg" class="control-label">Message</label>
					<div class="controls">
						<textarea name="msg" id="msg" class="span5" rows="10" placeholder="Type your message..."  onfocus="if(this.placeholder=='Type your message...'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Type your message...';}" ></textarea>
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<div class="controls">
						<input type="submit" name="send-msg" value="Send Message" class="btn btn-inverse">
					</div><!-- .controls  -->
				</div><!--  .control-group  -->
			</form><!-- .form-horizontal   -->
		</div><!--  .span8 -->

		<div class="span3 sidebar">
			<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- .span3 .sidebar  -->
	</div><!--  .row -->
</div><!--  .content .shadow --><?php }} ?>
