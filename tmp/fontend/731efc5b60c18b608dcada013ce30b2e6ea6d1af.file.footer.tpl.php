<?php /* Smarty version Smarty-3.1.16, created on 2015-01-02 04:43:04
         compiled from "C:\xampp\htdocs\Jiggasaa\template\fontend\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2670454a613c8bcb642-44548802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '731efc5b60c18b608dcada013ce30b2e6ea6d1af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Jiggasaa\\template\\fontend\\footer.tpl',
      1 => 1420093210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2670454a613c8bcb642-44548802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'author' => 0,
    'add_js' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54a613c8be4282_39937048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a613c8be4282_39937048')) {function content_54a613c8be4282_39937048($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\Jiggasaa\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="shadow">
	<div class="row footer-bottom">
		<div class="span12">
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
	

</body>
</html><?php }} ?>
