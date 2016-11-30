<?php /* Smarty version Smarty-3.1.16, created on 2014-11-24 21:10:45
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\fontend\no-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2124254738feb126f60-22607307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e8d14ac253023a49c7ae87199ba7f4e30722b5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\fontend\\no-header.tpl',
      1 => 1416859843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2124254738feb126f60-22607307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54738feb162319_78205554',
  'variables' => 
  array (
    'self_keywords' => 0,
    'meta_keywords' => 0,
    'self_description' => 0,
    'meta_desc' => 0,
    'author' => 0,
    'site_title' => 0,
    'site_name' => 0,
    'add_css' => 0,
    'css' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54738feb162319_78205554')) {function content_54738feb162319_78205554($_smarty_tpl) {?><!doctype html>
<html lang="en">
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
	<meta name="keywords" content="<?php if (isset($_smarty_tpl->tpl_vars['self_keywords']->value)&&$_smarty_tpl->tpl_vars['self_keywords']->value!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['self_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
<?php }?>" />
	<meta name="description" content="<?php if (isset($_smarty_tpl->tpl_vars['self_description']->value)&&$_smarty_tpl->tpl_vars['self_description']->value!='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['self_description']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['meta_desc']->value;?>
<?php }?>" />
	<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
"/>
	
	
	<title>
		<?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
&nbsp;&raquo;&nbsp;<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>

	</title>
	
	
	<?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['add_css']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" type="text/css"/>
	<?php } ?>
	

	
	
		<script type="text/javascript">
			$(document).ready(function(){
				$("#photoimg").change(function(){
					var file = document.getElementById("photoimg").files[0];
					var readImg = new FileReader();
					readImg.readAsDataURL(file);
					readImg.onload = function(e) {
						$('.prevImg').attr('src',e.target.result).fadeIn();
					}		
				})	
			})

			// Generate for capcha refresh.
			function refreshCaptcha()
			{
				var img = document.images['showcaptcha'];
				img.src = img.src.substring( 0, img.src.lastIndexOf("?") )+"?rand="+Math.random()*1000;
			}
		</script>
	
</head>
<body>
	<div class="container top">
		<div class="top-menu">
			<ul class="toplinks_links">
				<li><a href="#"></a></li>
			</ul><!-- .top-menu  -->
		</div><!-- .container .top  -->
		
		<div class="navbar navbar-inverse navbar-fixed shadow">
			<div class="navbar-simple">
				<div class="container">
					<button type="button" class="btn btn-navbar toggle-btn" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="brand site-title">
						<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>

						<p style="font-size:13px;">Web Application Developer</p>
					</a>
				
				<div class="nav-collapse collapse top-nav">
					<ul class="nav pull-right" id="nav">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Home</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/project.php">Project</a>
							<ul>
								<li><a href="">PHP Project</a></li>
								<li><a href="">Wordpress</a></li>
							</ul>
						</li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/about.php">About me</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/forum.php">Forum</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/contact.php">Contact</a></li>
					</ul> <!--  .nav pull-right  -->
				</div><!-- .nav-collapse collapse  -->
			</div> <!--  .container .content -->
		</div> <!--  .navbar-simple  -->
	</div> <!--  .navbar navbar-inverse navbar-fixed  --><?php }} ?>
