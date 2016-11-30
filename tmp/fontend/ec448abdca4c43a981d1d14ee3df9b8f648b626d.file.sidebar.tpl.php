<?php /* Smarty version Smarty-3.1.16, created on 2015-01-01 06:12:14
         compiled from "C:\xampp\htdocs\Jiggasa\template\fontend\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2592954a4d72e369c90-80739085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec448abdca4c43a981d1d14ee3df9b8f648b626d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Jiggasa\\template\\fontend\\sidebar.tpl',
      1 => 1418310834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2592954a4d72e369c90-80739085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'recent_post' => 0,
    'recent_posts' => 0,
    'recent_comments' => 0,
    'recent_comment' => 0,
    'sidesCat' => 0,
    'cats' => 0,
    'popularposts' => 0,
    'post' => 0,
    'archive' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a4d72e3ca025_45708534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a4d72e3ca025_45708534')) {function content_54a4d72e3ca025_45708534($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\Jiggasa\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="search-form">
	<h2 class="page-header">Search Form</h2>
	<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/search.php" method="post">
		<input type="text" name="search" placeholder="what are you looking ?"  onfocus="if(this.placeholder=='what are you looking ?'){this.placeholder = ''}" onblur="if(this.placeholder==''){this.placeholder = 'what are you looking ?'}"  class="span3" >
		<input type="submit" name="submit" value="Search" class="btn btn-success"> 
	</form>	
</div><!-- .search-form  -->


<div class="recent-post">
	<h2 class="page-header rp-header">Recent Post</h2>
	<?php  $_smarty_tpl->tpl_vars['recent_posts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recent_posts']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_post']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recent_posts']->key => $_smarty_tpl->tpl_vars['recent_posts']->value) {
$_smarty_tpl->tpl_vars['recent_posts']->_loop = true;
?>
		<ul class="post-list">
			<li>
				<i class="fa fa-arrow-circle-o-right"></i>
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['recent_posts']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['recent_posts']->value['post_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['recent_posts']->value['post_title'];?>
</a>
			</li>
		</ul><!-- .post-list  -->
	<?php } ?>
</div><!-- .recent-post  -->
	
<div class="recent-comment">
    <div class="tabbable rc-cmt">
	    <ul class="nav nav-tabs">
    		<li class="active"><a href="#tab1" data-toggle="tab">Comments</a></li>
    		<li><a href="#tab2" data-toggle="tab">Category</a></li>
    	</ul><!--  .nav nav-tabs -->

    	<div class="tab-content">
    		<div class="tab-pane active" id="tab1">
    			<?php  $_smarty_tpl->tpl_vars['recent_comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recent_comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recent_comment']->key => $_smarty_tpl->tpl_vars['recent_comment']->value) {
$_smarty_tpl->tpl_vars['recent_comment']->_loop = true;
?>
					<ul class="post-cmt-list">
						<li>
							<i class="fa fa-arrow-circle-right"></i>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['recent_comment']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['recent_comment']->value['post_title'];?>
#comments" target="_blank"><?php echo $_smarty_tpl->tpl_vars['recent_comment']->value['post_title'];?>
</a>
							<span class="entry-author">Comments by <?php echo $_smarty_tpl->tpl_vars['recent_comment']->value['comments_name'];?>
 on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['recent_comment']->value['comments_date'],"%B %d, %Y");?>
</span>
						</li>
					</ul><!--  .post-cmt-list -->
				<?php } ?>
    		</div><!-- .tab-pane  -->
    
    		<div class="tab-pane" id="tab2">
    			<?php  $_smarty_tpl->tpl_vars['cats'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cats']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidesCat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cats']->key => $_smarty_tpl->tpl_vars['cats']->value) {
$_smarty_tpl->tpl_vars['cats']->_loop = true;
?>
					
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/category.php?cat=<?php echo $_smarty_tpl->tpl_vars['cats']->value['cat_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['cats']->value['cat_name'];?>
&nbsp;<i class="badge"><?php echo $_smarty_tpl->tpl_vars['cats']->value['post_cat'];?>
</i></a><br>
				<?php } ?>
    		</div><!-- .tab-pane  -->
    	</div><!--  .tab-content -->
    </div><!-- .tabbable  -->

	<h2 class="page-header rc-header">Popular Post</h2>
	<ul class="popular-list">
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popularposts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
			<li>
				<span class="post-count"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_view_count'];?>
</span>&nbsp;&nbsp;
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</a>
				<span class="entry-author">Posted by <?php echo $_smarty_tpl->tpl_vars['post']->value['admin_username'];?>
 on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['post_date'],"%B %d, %Y");?>
</span>
			</li>
		<?php } ?>
	</ul><!-- .popular-list  --> 

	<h2 class="page-header rc-header">Archive Post Search</h2> 
	<?php echo $_smarty_tpl->tpl_vars['archive']->value;?>

</div><!-- .recent-comment  -->
<?php }} ?>
