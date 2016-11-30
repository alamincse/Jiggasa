<!doctype html>
<html lang="en">
	{* meta tag *}
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
	<meta name="keywords" content="{if isset($self_keywords) && $self_keywords != ''}{$self_keywords|escape:'html'}{else}{$meta_keywords}{/if}" />
	<meta name="description" content="{if isset($self_description) && $self_description != ''}{$self_description|escape:'html'}{else}{$meta_desc}{/if}" />
	<meta name="author" content="{$author}"/>
	
	{* site title *}
	<title>
		{if $page_name == 'Home' }
			{$site_name}&nbsp;&raquo;&nbsp;{$site_title}
		{/if}
	</title>
	
	{* StyleSheet *}
	{foreach from = $add_css item = css}
		<link rel="stylesheet" href="{$css}" type="text/css"/>
	{/foreach}
	

	{* auto search for Forum page *}
	{literal}
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
	{/literal}
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

					<a href="{$base_url}" class="brand site-title">
						{$site_name}
						<p style="font-size:13px;">{$site_title}</p>
					</a>
				</div> <!--  .container  -->
			</div> <!--  .navbar-simple  -->
		</div> <!--  .navbar navbar-inverse navbar-fixed  -->