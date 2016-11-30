<div class="shadow">
	<div class="row footer-bottom">
		<div class="span12">
			<span>&#169;&nbsp;&nbsp;<a href="http://parbona.net" target="_blank">Parbona</a> - {$smarty.now|date_format:'Y'},&nbsp;&nbsp;all Rights Reserved.</span> 
			<span class="pull-right d-right">
				Developer &raquo; <a href="http://parbona.net" target="_blank" class="ttip" data-toggle="tooltip" title="Web Application Developer">{$author}</a>
			</span>
		</div><!-- .span12  -->
	</div><!--  .row .footer-bottom -->
</div><!-- .shadow  -->

	{* javaScript *}
	{foreach from = $add_js item = js}
		{$js}
	{/foreach}

	{literal}
		<script>
			$('a.ttip').tooltip();
		</script>
	{/literal}

</body>
</html>