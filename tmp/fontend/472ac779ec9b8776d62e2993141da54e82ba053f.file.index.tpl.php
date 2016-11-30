<?php /* Smarty version Smarty-3.1.16, created on 2014-12-04 20:58:14
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\fontend\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25353f39ea9870e59-29001760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '472ac779ec9b8776d62e2993141da54e82ba053f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\fontend\\index.tpl',
      1 => 1417723082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25353f39ea9870e59-29001760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53f39ea99b31c4_62743999',
  'variables' => 
  array (
    'articles' => 0,
    'base_url' => 0,
    'article' => 0,
    'clock' => 0,
    'total_pages' => 0,
    'has_pre_page' => 0,
    'previous_page' => 0,
    'page' => 0,
    'has_next_page' => 0,
    'next_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f39ea99b31c4_62743999')) {function content_53f39ea99b31c4_62743999($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\modifier.truncate.php';
?><div class="content shadow">
	<div class="row">
		<div class="main-page span8">
			<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
				<header>
					<h2 class="page-header empty-title">
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_title'];?>
</a>
					</h2><!--  .page-header .empty-title -->

					<p class="post-author empty-author">
						<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
">
							<i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['admin_username'];?>

						</a>&nbsp;<span style="color:#ccc;">|</span> 
						
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
">
							<i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['post_date'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_modifier_date_format($_tmp1,"%B %d, %Y &nbsp;".((string)$_smarty_tpl->tpl_vars['clock']->value)."&nbsp; %I: %M %p");?>

						</a>&nbsp;<span style="color:#ccc;">|</span> 

						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/category.php?cat=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_cat'];?>
">
							<i class="fa fa-book"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['post_cat'];?>

						</a>&nbsp;<span style="color:#ccc;">|</span> 
						
						<span class="entry-comments">
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['comments_count'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==0) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
#comments" target="_blank"><i class='fa fa-comment-o'></i>&nbsp;No Comments</a>
							<?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['comments_count'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==1) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
#comments" target="_blank"><i class='fa fa-comment'></i>&nbsp;One Comment</a>
							<?php } else { ?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
#comments" target="_blank"><i class='fa fa-comments'></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['comments_count'];?>
 Comments</a>
							<?php }}?>
						</span><!-- .entry-comments -->

						&nbsp;<span style="color:#ccc;">|</span>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
">
							<i class="fa fa-eye"></i>&nbsp;&nbsp;
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['post_view_count'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==0) {?> 
								Not views the article 
							<?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['post_view_count'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5==1) {?> 
								view&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['post_view_count'];?>
&nbsp;time
							<?php } else { ?>
								view&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['post_view_count'];?>
&nbsp;times
							<?php }}?>
						</a>
					</p><!--  .post-author .empty-author -->
				</header>


				<div class="empty-content">
					<span class="empty-media">
						<?php if (isset($_smarty_tpl->tpl_vars['article']->value['image_name'])) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
" >
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/articles_img/uploads/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['image_name'];?>
" alt="" width="300px;" >
							</a>
						<?php }?>
					</span><!-- .empty-media  -->

					<?php ob_start();?><?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['article']->value['post_content'], $tmp);?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6>150) {?>
						<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['post_content'],700," ",true);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_title'];?>
">Read More...</a>
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['article']->value['post_content'];?>

					<?php }?>
				</div><!-- .entry-content  -->
			<?php } ?>

			
			
			<?php if ($_smarty_tpl->tpl_vars['total_pages']->value>1&&$_smarty_tpl->tpl_vars['articles']->value) {?>
				<div class="pagination pagers span3 offset3">
					<ul>
						<?php if ($_smarty_tpl->tpl_vars['has_pre_page']->value) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['previous_page']->value;?>
">&laquo; Pre</a>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['name'] = 'page_name';
$_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['total_pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['page_name']['total']);
?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['page_name']['index']==$_smarty_tpl->tpl_vars['page']->value) {?>
								<li class="active"><a href="#"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['page_name']['index'];?>
</a></li>
							<?php } else { ?>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['page_name']['index']<5) {?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
?page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['page_name']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['page_name']['index'];?>
</a></li>

								<?php }?>
							<?php }?>
						<?php endfor; endif; ?>
				
						<?php if ($_smarty_tpl->tpl_vars['has_next_page']->value) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
?page=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
">Next &raquo;</a>
						<?php }?>
					</ul>
				</div><!-- .pagination  -->
			<?php } else { ?>
				<span style="color:red;font-size:20px;">Oops! 404 Page Not Found. Please search less then <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 page. </span>
			<?php }?>
		</div><!-- .span8  -->
		
		<div class="sidebar span3">
			<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- .span3  -->
	</div><!--  .row  -->
</div><!--  .content .shadow --><?php }} ?>
