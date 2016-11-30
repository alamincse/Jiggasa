<?php /* Smarty version Smarty-3.1.16, created on 2014-12-02 16:23:34
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\fontend\comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2816453cd4f34dde8d0-24411445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e4e6fa8fb4362927516b303c274ee0e66640ab4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\fontend\\comments.tpl',
      1 => 1417533800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2816453cd4f34dde8d0-24411445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53cd4f34e7c953_00381195',
  'variables' => 
  array (
    'u_name' => 0,
    'logins' => 0,
    'login' => 0,
    'registers' => 0,
    'register' => 0,
    'u_id' => 0,
    'cmt_edit' => 0,
    'msg' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd4f34e7c953_00381195')) {function content_53cd4f34e7c953_00381195($_smarty_tpl) {?>
<div class="wrapper">
	<div class="comment-wrapper">
		<h3 class="page-header comment-title">
			Leave a Comment
			
			<?php if (isset($_smarty_tpl->tpl_vars['u_name']->value)&&$_smarty_tpl->tpl_vars['u_name']->value!='') {?>
				<a href="logout.php" class="pull-right">Logout</a>
			<?php }?>
		</h3>

		
		<?php  $_smarty_tpl->tpl_vars['login'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['login']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['login']->key => $_smarty_tpl->tpl_vars['login']->value) {
$_smarty_tpl->tpl_vars['login']->_loop = true;
?>
			<div class="alert alert-error">
				<a href="" class="close" data-dismiss="alert">&times;</a>
				<p><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</p>
			</div><!--  .alert .alert-error -->
		<?php } ?>

		
		<?php if (isset($_smarty_tpl->tpl_vars['registers']->value)) {?>
			<?php if (!empty($_smarty_tpl->tpl_vars['registers']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['register'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['register']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['registers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['register']->key => $_smarty_tpl->tpl_vars['register']->value) {
$_smarty_tpl->tpl_vars['register']->_loop = true;
?>
					<div class="alert alert-error">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p><?php echo $_smarty_tpl->tpl_vars['register']->value;?>
</p>
					</div><!--  .alert .alert-error -->
				<?php } ?>
			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['u_id']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['cmt_edit']->value) {?>
				<form action="" method="post">
					<div class="comment-insert">
						<h3 class="who-says"><span>Says:&nbsp;</span> <?php echo $_smarty_tpl->tpl_vars['u_name']->value;?>
</h3>
						<a id="respond">
							<div class="comment-insert-container">
								<textarea name="cmt_content" class="comment-insert-text" id="comment-post-text"><?php echo $_smarty_tpl->tpl_vars['cmt_edit']->value;?>
</textarea>
							</div><!-- .comment-insert-container  -->
						</a><!-- #respond  -->
						
						<input type="submit" name="cmt_update" value="Update Comment">
					</div><!-- .comment-insert  -->
				</form>
			<?php } else { ?>

				
				<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
					<div class="alert alert-error">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
					</div><!-- .alert .alert-error -->
				<?php }?>
				
				<form action="" method="post">
					<a id="comments">
						<div class="comment-insert">
							<h3 class="who-says"><span>Says:&nbsp;</span> <?php echo $_smarty_tpl->tpl_vars['u_name']->value;?>
</h3>
							<a id="respond">
								<div class="comment-insert-container">
									<textarea name="cmt_content" class="comment-insert-text" id="comment-post-text"></textarea>
								</div><!-- .comment-insert-container  -->
							</a><!-- #respond  -->
							
							<input type="submit" name="cmt_submit" value="Comment">
						</div><!-- .comment-insert  -->
					</a><!-- #comments  -->
				</form>
			<?php }?>
		<?php } else { ?>
			<a id="comments">
				<span class="user-login">Do you want to comment this article or Reply any comments ? Please<a href="#login" data-toggle="modal">Login</a> or <a href="#register" data-toggle="modal">Registration.</a></span>
			</a><!--  #comments -->
		<?php }?>

		<div class="comments-list">
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>

			<?php } ?>
		</div><!-- .comment-list  -->
	</div><!-- .comment-wrapper  -->
</div><!--  .wrapper -->

<input type="hidden" id="userId" value="<?php echo $_smarty_tpl->tpl_vars['u_id']->value;?>
">
<input type="hidden" id="userName" value="<?php echo $_smarty_tpl->tpl_vars['u_name']->value;?>
"><?php }} ?>
