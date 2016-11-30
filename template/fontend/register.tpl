<h3 class="page-header">Registration Form <a href="{$base_url}" class="pull-right btn btn-primary">Login</a></h3>
{* here show error msg *}
{foreach from = $register_complete item = error}
	{$error}
{/foreach}

<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="control-group">
		<label for="f-name" class="control-label">Full Name</label>
		<div class="controls">
			<input type="text" name="f_name" id="f-name" placeholder="Full Name" {literal} onfocus="if(this.placeholder=='Full Name'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Full Name';}"{/literal} >
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="username" class="control-label">Username</label>
		<div class="controls">
			<input type="text" name="username" id="username" placeholder="Username" {literal} onfocus="if(this.placeholder=='Username'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Username';}" {/literal}>
			<div id="status"></div>
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="username" class="control-label">Email</label>
		<div class="controls">
			<input type="text" name="email" id="email" placeholder="E-mail" {literal} onfocus="if(this.placeholder=='E-mail'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='E-mail';}" {/literal}>
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="password" class="control-label">Password</label>
		<div class="controls">
			<input type="password" name="password" id="password" placeholder="password" {literal} onfocus="if(this.placeholder=='password'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='password'}" {/literal}/>
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="password" class="control-label">Confirm Password</label>
		<div class="controls">
			<input type="password" name="c_pw" id="password" placeholder="confirm password" {literal} onfocus="if(this.placeholder=='confirm password'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='confirm password'}" {/literal}/>
		</div><!-- .controls  -->
	</div><!--  .control-group  -->


	<div class="control-group">
		<label class="control-label" for="select">Location</label>
		<div class="controls">
			{html_options name = "select-name" options = $options id = "select" onchange = "populate(this.id, 'use')"}
		</div><!-- .controls  -->
	</div><!-- .control-group  -->

	<div class="control-group">
		<label class="control-label" for="select">Where are you ?</label>
		<div class="controls">
			{html_options name = "option-name" options = "Please Select Country" id = "use"}
			{* output : <select name="option-name" id="use"><option value="">Please Select 	  	 Country</option></select>
			*}
		</div><!-- .controls  -->
	</div><!-- .control-group  -->

	<div class="control-group">
		<label class="control-label" for="select">Profile Picture</label>
		<div class="controls">
			<div id="preview">
				<p>{html_image file = "{$base_url}/assets/img/noimage.png" name ="user_img" class="img-polaroid prevImg thumbnail"}</p>
			</div><!-- .preview  -->
			
			<input type="file" name="profile_image" id="photoimg" multiple>
		</div><!-- .controls  -->
	</div><!-- .control-group  -->

	<div class="control-group">
		<div class="controls captcha-img">
			<img src="{$base_url}/captcha.php?rand={$rand}" alt="captcha" id='showcaptcha'>
			<a href='javascript: refreshCaptcha();'>{html_image file="{$base_url}/assets/img/captcha_refresh.png"}</a>
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<label for="captcha" class="control-label">Are you human ?</label>
		<div class="controls">
			<input type="text" name="captcha" id="captcha" placeholder="Type Captcha" {literal} onfocus="if(this.placeholder=='Type Captcha'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Type Captcha';}" {/literal}>
		</div><!-- .controls  -->
	</div><!--  .control-group  -->

	<div class="control-group">
		<div class="controls">
			<input type="submit" name="submit_reg" value="Register" class="btn btn-inverse">
		</div><!-- .controls  -->
	</div><!--  .control-group  -->
</form><!-- .form-horizontal   -->