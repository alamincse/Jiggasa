<div class="span6 well">
	<h2 class="lead page-header">
		<a href="{$base_url}?action=register" class="pull-right btn btn-primary">Registration</a>
	</h2><!-- .page-header  -->
	{* logout msg *}
	{if isset($logout)}
		<div class="alert alert-success">
			<a href="" class="close" data-dismiss="alert">&times;</a>
			<p>{$logout}</p>
		</div><!--  .alert .alert-error -->
	{/if}

	{* here show error msg *}
	{foreach from = $login item = error}
		<div class="alert alert-error">
			<a href="" class="close" data-dismiss="alert">&times;</a>
			<p>{$error}</p>
		</div><!--  .alert .alert-error -->
	{/foreach}
	<form action="./" method="post" class="form-horizontal">
		<div class="control-group">
			<label for="username" class="control-label">Username</label>
			<div class="controls">
				<input type="text" name="uname" id="username" placeholder="Username" {literal} onfocus="if(this.placeholder == 'Username'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Username';}"{/literal}>
			</div><!-- .controls  -->
		</div><!--  .control-group  -->

		<div class="control-group">
			<label for="pw" class="control-label">Password</label>
			<div class="controls">
				<input type="password" name="pw" id="pw" placeholder="password" {literal} onfocus="if(this.placeholder == 'password'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='password';}"{/literal}>
			</div><!-- .controls  -->
		</div><!--  .control-group  -->
		
		{*<div class="control-group">
			<div class="controls span2">
				 <label class="checkbox">
					<input type="checkbox" name="remember"><span>Remember me.</span>
				</label><!-- .checkbox  -->
			</div><!--  .controls  -->
		</div><!--  .control-group  -->


		<div class="control-group">
			<div class="controls">
				<a href="{$base_url}/lost.php?p=forgot_password&token={$smarty.now}">Forgot Password?</a>
			</div><!-- .controls  -->
		</div><!--  .control-group  -->*}
		
		<div class="control-group">
			<div class="controls">
				<input type="submit" name="submit" value="Login" class="btn btn-primary">
			</div><!-- .controls  -->
		</div><!--  .control-group  -->
	</form><!-- .form-horizontal   -->
</div><!-- .span6  -->