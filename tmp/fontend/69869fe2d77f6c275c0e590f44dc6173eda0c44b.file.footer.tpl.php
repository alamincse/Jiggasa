<?php /* Smarty version Smarty-3.1.16, created on 2016-11-30 11:58:34
         compiled from "E:\xampp\htdocs\my_task\Jiggasa\template\fontend\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1268583eaaeaa0a985-44586301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69869fe2d77f6c275c0e590f44dc6173eda0c44b' => 
    array (
      0 => 'E:\\xampp\\htdocs\\my_task\\Jiggasa\\template\\fontend\\footer.tpl',
      1 => 1480503438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1268583eaaeaa0a985-44586301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_583eaaeaa42a46_07885245',
  'variables' => 
  array (
    'author' => 0,
    'add_js' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eaaeaa42a46_07885245')) {function content_583eaaeaa42a46_07885245($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\my_task\\Jiggasa\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="shadow">
	<div class="row footer-bottom">
		<div class="span12">
			<span>&#169;&nbsp;&nbsp;<a href="http://parbona.net" target="_blank">Parbona</a> - <?php echo smarty_modifier_date_format(time(),'Y');?>
,&nbsp;&nbsp;all Rights Reserved.</span> 
			<span class="pull-right d-right">
				Developer &raquo; <a href="http://parbona.net" target="_blank" class="ttip" data-toggle="tooltip" title="Web Application Developer"><?php echo $_smarty_tpl->tpl_vars['author']->value;?>
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
	

</body>
</html><?php }} ?>
