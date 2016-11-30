<?php /* Smarty version Smarty-3.1.16, created on 2014-12-04 21:52:25
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\fontend\single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1487153cd4f34d2cd82-30678190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a94431fda16f8459e342cacf13a8feb763dceaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\fontend\\single.tpl',
      1 => 1417726341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1487153cd4f34d2cd82-30678190',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53cd4f34dca0f3_99123954',
  'variables' => 
  array (
    'data' => 0,
    'base_url' => 0,
    'total_comments' => 0,
    'clock' => 0,
    'up_preview' => 0,
    'previous_post' => 0,
    'next_post' => 0,
    'u_login' => 0,
    'u_register' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd4f34dca0f3_99123954')) {function content_53cd4f34dca0f3_99123954($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="content shadow">
	<div class="row">
		<div class="single-page span8">
			<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
				<header>
					
					
					<h2 class="page-header">
						<a style="font-size:25px;" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['data']->value['post_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['post_title'];?>
</a>
						<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['data']->value['post_title'];?>
#comments"><?php echo $_smarty_tpl->tpl_vars['total_comments']->value;?>
</a>
					</h2>
					<p class="single-empty-author"> 
						<a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['admin_username'];?>
</a> 
						&nbsp;<span style="color:#ccc;">|</span> <a href=""><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['post_date'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_modifier_date_format($_tmp1,"%B %d, %Y &nbsp;".((string)$_smarty_tpl->tpl_vars['clock']->value)."&nbsp; %I: %M %p");?>
</i></a>&nbsp;<span style="color:#ccc;">|</span> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/category.php?cat=<?php echo $_smarty_tpl->tpl_vars['data']->value['post_cat'];?>
"><i class="fa fa-book"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['post_cat'];?>
</a>&nbsp;<span style="color:#ccc;">|</span> <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['data']->value['post_title'];?>
"><i class="fa fa-eye"></i>&nbsp;&nbsp;view&nbsp;<?php echo $_smarty_tpl->tpl_vars['up_preview']->value;?>
&nbsp;times</a>
					</p>
				</header>

				
				<div class="empty-content">
					<span class="empty-media">
						<?php if (isset($_smarty_tpl->tpl_vars['data']->value['image_name'])) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/articles_img/uploads/<?php echo $_smarty_tpl->tpl_vars['data']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['image_name'];?>
" >
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/articles_img/uploads/<?php echo $_smarty_tpl->tpl_vars['data']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['image_name'];?>
" alt="" >
							</a>
						<?php }?>
					</span><!-- .empty-media  -->

					<?php echo $_smarty_tpl->tpl_vars['data']->value['post_content'];?>

				</div><!-- .empty-content  -->

				<div class="empty-pre-nex">
					<div class="next-pre-post">
						<?php if ($_smarty_tpl->tpl_vars['previous_post']->value) {?>
							<span class="pre-post"><?php echo $_smarty_tpl->tpl_vars['previous_post']->value;?>
</span>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['next_post']->value) {?>
							<span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['next_post']->value;?>
</span>
						<?php }?>
					</div><!-- .next-pre-post  -->
				</div><!--  .empty-content  -->

				<a id="rating...">
					<div class="feedback">
						<p>Give your feedback on this article.<a href="#rating">( <?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['data']->value['rating']);?>
 )</a></p>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['name'] = 'rate';
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] = is_array($_loop=6) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['rate']['total']);
?>
							<a class="rating" id="ratings" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['data']->value['post_title'];?>
&amp;rating=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
#rating..." title="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['rate']['index'];?>
">☆</a>
						<?php endfor; endif; ?>
					</div><!-- .feedback  -->
				</a>

				<div class="comment-form">		
					<?php echo $_smarty_tpl->getSubTemplate ('comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div><!-- .comment-form  -->
			<?php } else { ?>
				<h1>Oops ! The article Not Found.</h1>
			<?php }?>	
		</div><!--  .single-page span7 well -->

		<aside class="sidebar span3">
			<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</aside> <!--  .sidebar-area span3  -->
	</div><!--  .row  -->
	
	
	<?php echo $_smarty_tpl->tpl_vars['u_login']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['u_register']->value;?>

</div><!--  .content .shadow --><?php }} ?>
