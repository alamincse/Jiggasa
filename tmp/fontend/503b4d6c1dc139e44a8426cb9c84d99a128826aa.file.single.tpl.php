<?php /* Smarty version Smarty-3.1.16, created on 2014-12-07 20:34:44
         compiled from "C:\xampp\htdocs\myphpsite\CMS_PROJECT\template\fontend\single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1774154846e5fda36e0-52485327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '503b4d6c1dc139e44a8426cb9c84d99a128826aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\template\\fontend\\single.tpl',
      1 => 1417980881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1774154846e5fda36e0-52485327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54846e5feba3a9_43071349',
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
<?php if ($_valid && !is_callable('content_54846e5feba3a9_43071349')) {function content_54846e5feba3a9_43071349($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
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

					<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['data']->value['post_content']);?>

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
