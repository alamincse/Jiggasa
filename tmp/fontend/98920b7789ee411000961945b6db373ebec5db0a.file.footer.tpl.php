<?php /* Smarty version Smarty-3.1.16, created on 2014-12-23 12:11:45
         compiled from "C:\xampp\htdocs\myphpsite\CMS_PROJECT\template\fontend\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2959454846ce05fe2a2-07596606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98920b7789ee411000961945b6db373ebec5db0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\template\\fontend\\footer.tpl',
      1 => 1419333103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2959454846ce05fe2a2-07596606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54846ce064baa0_73311328',
  'variables' => 
  array (
    'news' => 0,
    'new' => 0,
    'recent_post' => 0,
    'base_url' => 0,
    'recent_posts' => 0,
    'social_contact' => 0,
    'contact' => 0,
    'copyright_left' => 0,
    'copy_left' => 0,
    'author' => 0,
    'add_js' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54846ce064baa0_73311328')) {function content_54846ce064baa0_73311328($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="shadow">
	<div class="row footer">
		<div class="span3 news">
			<?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
				<h2><?php echo $_smarty_tpl->tpl_vars['new']->value['widget_sub'];?>
</h2>
				<p><?php echo $_smarty_tpl->tpl_vars['new']->value['widget_content'];?>
</p>
			<?php } ?>
		</div><!-- .span3 .news  -->	

		<div class="span3 team">
			<h2>Our Team</h2>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['recent_posts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recent_posts']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_post']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recent_posts']->key => $_smarty_tpl->tpl_vars['recent_posts']->value) {
$_smarty_tpl->tpl_vars['recent_posts']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['recent_posts']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['recent_posts']->value['post_title'];?>
"><i class="fa fa-arrow-circle-o-right"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['recent_posts']->value['post_title'];?>
</a>
					</li>
				<?php } ?>
			</ul>
		</div><!--  .span3 .team -->

		<div class="span3 rc-product">
			<h2>Recent Products</h2>
			<ul>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Test post in the site.</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Do you remember me ? I'm ...</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Test post in the site.</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Do you remember me ? I'm ...</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Test post in the site.</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Do you remember me ? I'm ...</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Test post in the site.</a></li>
			</ul>
		</div>


		<div class="span2 social-icon">
			<?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['social_contact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>
				<h2><?php echo $_smarty_tpl->tpl_vars['contact']->value['widget_sub'];?>
</h2>
				<?php echo $_smarty_tpl->tpl_vars['contact']->value['widget_content'];?>

			<?php } ?>
		</div><!-- .span2 .social-icon  -->
	</div><!-- .row .footer  -->

	<div class="row footer-bottom">
		<div class="span12">
			
			<?php  $_smarty_tpl->tpl_vars['copy_left'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['copy_left']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['copyright_left']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['copy_left']->key => $_smarty_tpl->tpl_vars['copy_left']->value) {
$_smarty_tpl->tpl_vars['copy_left']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['copy_left']->value['widget_content'];?>

			<?php } ?>

			<span>&#169;&nbsp;&nbsp;Copyright &nbsp;&nbsp;<?php echo smarty_modifier_date_format(time(),'Y');?>
,&nbsp;&nbsp;all Rights Reserved.</span> 
			<span class="pull-right d-right">
				Developer &raquo; <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="ttip" data-toggle="tooltip" title="Web Application Project"><?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</a>
			</span>
		</div><!-- .span12  -->
	</div><!--  .row .footer-bottom -->
</div><!-- .shadow  -->

	
	<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['add_js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['js']->value;?>

	<?php } ?>

	
		<script>
			$('a.ttip').tooltip();
		</script>

		<script type="text/javascript">
		var __lc = {};
		__lc.license = 4869051;

		(function() {
			var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
			lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
		})();


		</script>

		<script type="text/javascript">
		    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		    var disqus_shortname = 'dept-project'; // required: replace example with your forum shortname

		    /* * * DON'T EDIT BELOW THIS LINE * * */
		    (function () {
		        var s = document.createElement('script'); s.async = true;
		        s.type = 'text/javascript';
		        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
		        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		    }());

		    // Rating msg.
		    // var anchor = document.getElementById( 'ratings' );
	    	
	    	// anchor.addEventListener( 'click', doSomething, true );

		    // function doSomething()
		    // {
		    // 	alert( 'Thank you for given your rating.' );
		    // }

    	</script>
	

</body>
</html><?php }} ?>
