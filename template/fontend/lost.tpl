<div class="content shadow">
	<div class="row">
		<div class="single-page span11">
			<form action="" method="post" class="form-horizontal">
				<h2 class="page-header about-header">Password Recovery Method.</h2>
				{foreach from=$errors item=error}
					{$error}
				{/foreach}
				<div class="control-group">
					<label for="username" class="control-label">Email</label>
					<div class="controls">
						<input type="text" name="email" id="email" placeholder="Type your email" {literal} onfocus="if(this.placeholder == 'Type your email'){this.placeholder = '';}" onblur="if(this.placeholder == ''){this.placeholder = 'Type your email'}" {/literal} />
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<div class="controls">
						<input type="submit" name="submit_lost" value="Submit" class="btn btn-inverse">
					</div>
				</div>
			</form><!-- .form-horizontal   -->
		</div><!-- .single-page .span12  -->
	</div><!--  .row  -->
</div><!--  .content .shadow -->