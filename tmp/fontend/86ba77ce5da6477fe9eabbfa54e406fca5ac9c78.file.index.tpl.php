<?php /* Smarty version Smarty-3.1.16, created on 2015-07-09 10:39:44
         compiled from "H:\xampp\htdocs\Jiggasa\template\fontend\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4462559e3350c6f017-28444645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86ba77ce5da6477fe9eabbfa54e406fca5ac9c78' => 
    array (
      0 => 'H:\\xampp\\htdocs\\Jiggasa\\template\\fontend\\index.tpl',
      1 => 1420092728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4462559e3350c6f017-28444645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'register' => 0,
    'u_name' => 0,
    'user_info' => 0,
    'info' => 0,
    'profile' => 0,
    'show_o_profile' => 0,
    'questions' => 0,
    'keyword' => 0,
    'question' => 0,
    'answer' => 0,
    'ans' => 0,
    'people' => 0,
    'myprofile' => 0,
    'join_date' => 0,
    'o_profile' => 0,
    'sidebar_ans_show' => 0,
    'sidebar_ans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_559e3350dedf00_49290429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559e3350dedf00_49290429')) {function content_559e3350dedf00_49290429($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include 'H:\\xampp\\htdocs\\Jiggasa\\include\\smarty\\libs\\plugins\\function.html_image.php';
if (!is_callable('smarty_modifier_date_format')) include 'H:\\xampp\\htdocs\\Jiggasa\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include 'H:\\xampp\\htdocs\\Jiggasa\\include\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_capitalize')) include 'H:\\xampp\\htdocs\\Jiggasa\\include\\smarty\\libs\\plugins\\modifier.capitalize.php';
?><div class="content shadow">
	<div class="row">
		
		<?php if ($_smarty_tpl->tpl_vars['register']->value==''&&$_smarty_tpl->tpl_vars['u_name']->value=='') {?>
			<div class="span8 main-page">
				<?php echo $_smarty_tpl->getSubTemplate ('login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div><!-- .span8  -->
		<?php }?>

		
		<?php if ($_smarty_tpl->tpl_vars['register']->value!=''&&$_smarty_tpl->tpl_vars['u_name']->value=='') {?>
			<div class="span8 main-page">
				<?php echo $_smarty_tpl->getSubTemplate ('register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div><!-- .span8  -->
		<?php }?>

		
		
		
		<?php if (isset($_smarty_tpl->tpl_vars['u_name']->value)&&$_smarty_tpl->tpl_vars['u_name']->value!='') {?>
			<div class="span8 main-page">
				<h2 class="" style="border-bottom:1px solid #e1e1e1;padding-bottom:50px;">
					<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
						<a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['info']->value['userName'], 'UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['info']->value['userName'];?>
">
							<?php echo smarty_function_html_image(array('file'=>"subscribers/".((string)$_smarty_tpl->tpl_vars['info']->value['userId'])."/".((string)$_smarty_tpl->tpl_vars['info']->value['profile_img']),'width'=>"40px;",'height'=>"40px;"),$_smarty_tpl);?>
&nbsp;
					<?php } ?>

					<a href="./" style="font-size:12px;"><?php echo $_smarty_tpl->tpl_vars['u_name']->value;?>
</a>

					<form action="" class="pull-right form-horizontal search-box" name = "search">
						<input type="text" name="search" onkeyup="findmatch();" placeholder="Type People name or email and hit enter.">
					</form>
				</h2><!-- .page-header  -->
				

				<?php if ($_smarty_tpl->tpl_vars['profile']->value==''&&$_smarty_tpl->tpl_vars['show_o_profile']->value=='') {?>
					<form action="" method="post" class="form-horizontal" style="margin-top:20px;">
						<input type="text" name="text-post" placeholder="Ask your question..." class="span5"  onfocus="if(this.placeholder=='Ask your question...'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Ask your question...'}"  >
						<input type="submit" name="ask" value="Ask Question" class="btn btn-success">
					</form>
				<?php }?>

			
				
				<?php if (isset($_smarty_tpl->tpl_vars['questions']->value)&&$_smarty_tpl->tpl_vars['profile']->value==''&&$_smarty_tpl->tpl_vars['keyword']->value==''&&$_smarty_tpl->tpl_vars['show_o_profile']->value==null) {?>
					<ul class="show-question">
						<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
							<li>
								<a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['question']->value['userName'], 'UTF-8');?>
"><?php echo smarty_function_html_image(array('file'=>"subscribers/".((string)$_smarty_tpl->tpl_vars['question']->value['userId'])."/".((string)$_smarty_tpl->tpl_vars['question']->value['profile_img'])),$_smarty_tpl);?>
</a>
								<div class="entry-n">
									<a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['question']->value['userName'], 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['question']->value['userName'];?>
</a>
									
									
									<?php if ($_smarty_tpl->tpl_vars['question']->value['userName']==$_smarty_tpl->tpl_vars['u_name']->value) {?>
										<a id="ques" href="./?question=<?php echo $_smarty_tpl->tpl_vars['question']->value['q_id'];?>
&amp;<?php echo $_smarty_tpl->tpl_vars['question']->value['q_question'];?>
" style="font-size:12px;" class="ttip" data-toggle="tooltip" title="Delete Your question" >&nbsp;<i class="fa fa-trash"></i></a>
									<?php }?>	
								</div><!-- .entry-n  -->

								<p>
									<?php echo $_smarty_tpl->tpl_vars['question']->value['q_question'];?>
<br>
									<time class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['question']->value['time'],"%B %d, %Y at %I: %M %p");?>
 </time>
								</p>

								
								<?php if (isset($_smarty_tpl->tpl_vars['answer']->value)&&$_smarty_tpl->tpl_vars['answer']->value!=null) {?>
									<ul class="ans-show">
										<?php  $_smarty_tpl->tpl_vars['ans'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ans']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ans']->key => $_smarty_tpl->tpl_vars['ans']->value) {
$_smarty_tpl->tpl_vars['ans']->_loop = true;
?>
											<!-- <?php if ($_smarty_tpl->tpl_vars['question']->value['q_id']==$_smarty_tpl->tpl_vars['ans']->value['qs_id']) {?> -->
												<span class="ans">
													<a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['ans']->value['userName'], 'UTF-8');?>
"><?php echo smarty_function_html_image(array('file'=>"subscribers/".((string)$_smarty_tpl->tpl_vars['ans']->value['userId'])."/".((string)$_smarty_tpl->tpl_vars['ans']->value['profile_img']),'class'=>"ans-pic"),$_smarty_tpl);?>
</a>
													<div class="entry-ans">
														<a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['ans']->value['userName'], 'UTF-8');?>
">

														<?php echo $_smarty_tpl->tpl_vars['ans']->value['userName'];?>
</a>
														
														<?php if ($_smarty_tpl->tpl_vars['ans']->value['userName']==$_smarty_tpl->tpl_vars['u_name']->value) {?>
															<a href="./?answer=<?php echo $_smarty_tpl->tpl_vars['ans']->value['ans_id'];?>
" style="margin-top:-20px;font-size:12px;" class="ttip" data-toggle="tooltip" title="Delete Your Answer"><i class="fa fa-trash"></i></a>
														<?php }?>
													</div><!-- .entry-ans  -->

													<p>
														<?php echo $_smarty_tpl->tpl_vars['ans']->value['user_ans'];?>
<br>
														<time class="show-time">
															<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ans']->value['time'],"%B %d, %Y at %I: %M %p");?>

														</time>
													</p>
												</span>
											<!-- <?php }?> -->
										<?php } ?>
									</ul><!-- .ans-show  -->
								<?php }?>

								<span class="give-pic">
									<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
										<a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['info']->value['userName'], 'UTF-8');?>
"><?php echo smarty_function_html_image(array('file'=>"subscribers/".((string)$_smarty_tpl->tpl_vars['info']->value['userId'])."/".((string)$_smarty_tpl->tpl_vars['info']->value['profile_img'])),$_smarty_tpl);?>
</a>
									<?php } ?>
										
									<form action="" method="post">
										<input type="text" name="give-ans" placeholder="Give your ans..." class="span4"  onfocus="if(this.placeholder=='Give your ans...'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Give your ans...'}"  >
										<input type="hidden" name="q_id" value="<?php echo $_smarty_tpl->tpl_vars['question']->value['q_id'];?>
">
										<input type="hidden" name="userId" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['userId'];?>
">
									</form>
								</span><!-- .give-pic  -->
							</li>
						<?php } ?>
					</ul><!-- .show-question  -->
				<?php }?>


				
				<?php if (isset($_smarty_tpl->tpl_vars['keyword']->value)&&$_smarty_tpl->tpl_vars['keyword']->value!='') {?>
					<ul class="search-people">
						<?php  $_smarty_tpl->tpl_vars['people'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['people']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['keyword']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['people']->key => $_smarty_tpl->tpl_vars['people']->value) {
$_smarty_tpl->tpl_vars['people']->_loop = true;
?>
							<li>
								<a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['people']->value['userName'], 'UTF-8');?>
"><?php echo smarty_function_html_image(array('file'=>"subscribers/".((string)$_smarty_tpl->tpl_vars['people']->value['userId'])."/".((string)$_smarty_tpl->tpl_vars['people']->value['profile_img']),'width'=>"80px;",'height'=>"80px;"),$_smarty_tpl);?>
</a>&nbsp
								<span class="people-name">
									<a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['people']->value['userName'], 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['people']->value['userName'];?>
</a>&nbsp;&raquo;
									<a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['people']->value['userName'], 'UTF-8');?>
"><?php echo smarty_modifier_capitalize(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['people']->value['location'],'/bangladesh',' '),'/others',''));?>
</a>
								</span><!-- .people-name  -->
							</li>
						<?php }
if (!$_smarty_tpl->tpl_vars['people']->_loop) {
?>
							<span style="color:red;">Oops! Don't match your search name. Please try another people name.</span>
						<?php } ?>
					</ul><!-- .search-people  -->
				<?php }?>


				
				<?php if (isset($_smarty_tpl->tpl_vars['profile']->value)&&$_smarty_tpl->tpl_vars['profile']->value!='') {?>
					<ul class="profile">
						<?php  $_smarty_tpl->tpl_vars['myprofile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['myprofile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['myprofile']->key => $_smarty_tpl->tpl_vars['myprofile']->value) {
$_smarty_tpl->tpl_vars['myprofile']->_loop = true;
?>
							<li><a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['myprofile']->value['userName'], 'UTF-8');?>
"><?php echo smarty_function_html_image(array('file'=>"subscribers/".((string)$_smarty_tpl->tpl_vars['myprofile']->value['userId'])."/".((string)$_smarty_tpl->tpl_vars['myprofile']->value['profile_img']),'width'=>"80px;",'height'=>"80px;"),$_smarty_tpl);?>
</a>&nbsp</li>
							<li>Full Name : <a href=""><?php echo $_smarty_tpl->tpl_vars['myprofile']->value['Full_name'];?>
</a></li>
							<li>Username : <a href=""><?php echo $_smarty_tpl->tpl_vars['myprofile']->value['userName'];?>
</a></li>
							<li>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a href=""><?php echo $_smarty_tpl->tpl_vars['myprofile']->value['email'];?>
</a></li>
							<li>Location&nbsp;&nbsp;&nbsp;&nbsp;: <a href=""><?php echo smarty_modifier_capitalize(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['myprofile']->value['location'],'/',', '),'others',''));?>
</a></li>
							<li>Join Date&nbsp;&nbsp;&nbsp;: <a href=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['myprofile']->value['date'],"%B %d, %Y &nbsp;at&nbsp; %I: %M %p");?>
( <?php echo $_smarty_tpl->tpl_vars['join_date']->value;?>
 )</a></li>
						<?php } ?>
					</ul><!-- .profile  -->
				<?php }?>

				
				<?php if (isset($_smarty_tpl->tpl_vars['show_o_profile']->value)&&$_smarty_tpl->tpl_vars['show_o_profile']->value!='') {?>
					<ul class="profile">
						<?php  $_smarty_tpl->tpl_vars['o_profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o_profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['show_o_profile']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o_profile']->key => $_smarty_tpl->tpl_vars['o_profile']->value) {
$_smarty_tpl->tpl_vars['o_profile']->_loop = true;
?>
							<li><a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['o_profile']->value['userName'], 'UTF-8');?>
"><?php echo smarty_function_html_image(array('file'=>"subscribers/".((string)$_smarty_tpl->tpl_vars['o_profile']->value['userId'])."/".((string)$_smarty_tpl->tpl_vars['o_profile']->value['profile_img']),'width'=>"100px;",'height'=>"100px;",'class'=>"thumbnail"),$_smarty_tpl);?>
</a>&nbsp</li>
							<li>Full Name : <a href=""><?php echo $_smarty_tpl->tpl_vars['o_profile']->value['Full_name'];?>
</a></li>
							<li>Username : <a href=""><?php echo $_smarty_tpl->tpl_vars['o_profile']->value['userName'];?>
</a></li>
							<li>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a href=""><?php echo $_smarty_tpl->tpl_vars['o_profile']->value['email'];?>
</a></li>
							<li>Location&nbsp;&nbsp;&nbsp;&nbsp;: <a href=""><?php echo smarty_modifier_capitalize(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['o_profile']->value['location'],'/',', '),'others',''));?>
</a></li>
							<li>Join Date&nbsp;&nbsp;&nbsp;: <a href=""><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['o_profile']->value['date'],"%B %d, %Y &nbsp;at&nbsp; %I: %M %p");?>
</a></li>
						<?php } ?>
					</ul><!-- .profile  -->
				<?php }?>
			</div><!-- .span9  -->

			<div class="span3 sidebar">
				<ul class="pull-right nav nav-list">
					<li><a href="./?action=myprofile">My Profile</a></li>
					<li><a href="logout.php">logout</a></li>
				</ul><!--  .pull-right .nav .nav-list -->

				<ul class="right-ans">
					<?php  $_smarty_tpl->tpl_vars['sidebar_ans'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sidebar_ans']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebar_ans_show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sidebar_ans']->key => $_smarty_tpl->tpl_vars['sidebar_ans']->value) {
$_smarty_tpl->tpl_vars['sidebar_ans']->_loop = true;
?>
						<li class="ans">
							<a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['sidebar_ans']->value['userName'], 'UTF-8');?>
"><?php echo smarty_function_html_image(array('file'=>"subscribers/".((string)$_smarty_tpl->tpl_vars['sidebar_ans']->value['userId'])."/".((string)$_smarty_tpl->tpl_vars['sidebar_ans']->value['profile_img']),'width'=>"40px;",'height'=>"40px;"),$_smarty_tpl);?>
</a>
							<div class="entry-ans"><a href="./?uname=<?php echo mb_strtolower($_smarty_tpl->tpl_vars['sidebar_ans']->value['userName'], 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['sidebar_ans']->value['userName'];?>
</a></div>
							<p><?php echo $_smarty_tpl->tpl_vars['sidebar_ans']->value['user_ans'];?>
</p>
						</li><!--  .ans -->
					<?php } ?>
				</ul><!--  .right-ans -->
			</div><!-- .span3 .sidebar  -->
		<?php }?>
	</div><!--  .row  -->
</div><!--  .content .shadow --><?php }} ?>
