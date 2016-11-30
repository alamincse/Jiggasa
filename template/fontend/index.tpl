<div class="content shadow">
	<div class="row">
		{* show login form *}
		{if $register == '' && $u_name == ''}
			<div class="span8 main-page">
				{include file = 'login.tpl'}
			</div><!-- .span8  -->
		{/if}

		{* show registration form *}
		{if $register <> '' && $u_name == ''}
			<div class="span8 main-page">
				{include file = 'register.tpl'}
			</div><!-- .span8  -->
		{/if}

		
		{**************************************
			@Description : Forum main Template
			@package     : My Personal website
			@author      : Rakib
		***************************************}
		{* when login success then show main forum page  *}
		{if isset($u_name) && $u_name <> ''}
			<div class="span8 main-page">
				<h2 class="" style="border-bottom:1px solid #e1e1e1;padding-bottom:50px;">
					{* Show picture *}
					{foreach from = $user_info item = info}
						<a href="./?uname={$info['userName']|lower}" title="{$info['userName']}">
							{html_image file="subscribers/{$info['userId']}/{$info['profile_img']}" width="40px;" height="40px;"}&nbsp;
					{/foreach}

					<a href="./" style="font-size:12px;">{$u_name}</a>
					
					{*  search form *}
					<form action="" class="pull-right form-horizontal search-box" name = "search">
						<input type="text" name="search" onkeyup="findmatch();" placeholder="Type People name or email and hit enter.">
					</form>
				</h2><!-- .page-header  -->
				

				{* Ask form *}
				{if $profile == '' && $show_o_profile == ''}
					<form action="" method="post" class="form-horizontal" style="margin-top:20px;">
						<input type="text" name="text-post" placeholder="Ask your question..." class="span5" {literal} onfocus="if(this.placeholder=='Ask your question...'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Ask your question...'}" {/literal} required>
						<input type="submit" name="ask" value="Ask Question" class="btn btn-success">
					</form>
				{/if}

			
				{*  show all question for left side *}
				{if isset( $questions ) && $profile == '' && $keyword == '' && $show_o_profile == null}
					<ul class="show-question">
						{foreach from = $questions item = question}
							<li>
								<a href="./?uname={$question['userName']|lower}">{html_image file="subscribers/{$question['userId']}/{$question['profile_img']}"}</a>
								<div class="entry-n">
									<a href="./?uname={$question['userName']|lower}">{$question['userName']}</a>
									
									{* show delete btn *}
									{if $question['userName'] == $u_name}
										<a id="ques" href="./?question={$question['q_id']}&amp;{$question['q_question']}" style="font-size:12px;" class="ttip" data-toggle="tooltip" title="Delete Your question" >&nbsp;<i class="fa fa-trash"></i></a>
									{/if}	
								</div><!-- .entry-n  -->

								<p>
									{$question['q_question']}<br>
									<time class="time">{$question['time']|date_format:"%B %d, %Y at %I: %M %p"} </time>
								</p>

								{* show answer by user *}
								{if isset($answer) && $answer <> null}
									<ul class="ans-show">
										{foreach from = $answer item = ans}
											<!-- {if $question['q_id'] == $ans['qs_id']} -->
												<span class="ans">
													<a href="./?uname={$ans['userName']|lower}">{html_image file="subscribers/{$ans['userId']}/{$ans['profile_img']}" class="ans-pic"}</a>
													<div class="entry-ans">
														<a href="./?uname={$ans['userName']|lower}">

														{$ans['userName']}</a>
														{* show delete btn by answer *}
														{if $ans['userName'] == $u_name}
															<a href="./?answer={$ans['ans_id']}" style="margin-top:-20px;font-size:12px;" class="ttip" data-toggle="tooltip" title="Delete Your Answer"><i class="fa fa-trash"></i></a>
														{/if}
													</div><!-- .entry-ans  -->

													<p>
														{$ans['user_ans']}<br>
														<time class="show-time">
															{$ans['time']|date_format:"%B %d, %Y at %I: %M %p"}
														</time>
													</p>
												</span>
											<!-- {/if} -->
										{/foreach}
									</ul><!-- .ans-show  -->
								{/if}

								<span class="give-pic">
									{foreach from = $user_info item = info}
										<a href="./?uname={$info['userName']|lower}">{html_image file="subscribers/{$info['userId']}/{$info['profile_img']}"}</a>
									{/foreach}
										
									{* comment box *}
									<form action="" method="post">
										<input type="text" name="give-ans" placeholder="Give your ans..." class="span4" {literal} onfocus="if(this.placeholder=='Give your ans...'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Give your ans...'}" {/literal} required>
										<input type="hidden" name="q_id" value="{$question['q_id']}">
										<input type="hidden" name="userId" value="{$info['userId']}">
									</form>
								</span><!-- .give-pic  -->
							</li>
						{/foreach}
					</ul><!-- .show-question  -->
				{/if}


				{* show people when user search *}
				{if isset($keyword) && $keyword <> ''}
					<ul class="search-people">
						{foreach from = $keyword item = people}
							<li>
								<a href="./?uname={$people['userName']|lower}">{html_image file="subscribers/{$people['userId']}/{$people['profile_img']}" width="80px;" height="80px;"}</a>&nbsp
								<span class="people-name">
									<a href="./?uname={$people['userName']|lower}">{$people['userName']}</a>&nbsp;&raquo;
									<a href="./?uname={$people['userName']|lower}">{$people['location']|replace:'/bangladesh':' '|replace:'/others':''|capitalize}</a>
								</span><!-- .people-name  -->
							</li>
						{foreachelse}
							<span style="color:red;">Oops! Don't match your search name. Please try another people name.</span>
						{/foreach}
					</ul><!-- .search-people  -->
				{/if}


				{* If select profile page then show below information *}
				{if isset($profile) && $profile <> ''}
					<ul class="profile">
						{foreach from = $profile item = myprofile}
							<li><a href="./?uname={$myprofile['userName']|lower}">{html_image file="subscribers/{$myprofile['userId']}/{$myprofile['profile_img']}" width="80px;" height="80px;"}</a>&nbsp</li>
							<li>Full Name : <a href="">{$myprofile['Full_name']}</a></li>
							<li>Username : <a href="">{$myprofile['userName']}</a></li>
							<li>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a href="">{$myprofile['email']}</a></li>
							<li>Location&nbsp;&nbsp;&nbsp;&nbsp;: <a href="">{$myprofile['location']|replace:'/':', '|replace:'others':''|capitalize}</a></li>
							<li>Join Date&nbsp;&nbsp;&nbsp;: <a href="">{$myprofile['date']|date_format:"%B %d, %Y &nbsp;at&nbsp; %I: %M %p"}( {$join_date} )</a></li>
						{/foreach}
					</ul><!-- .profile  -->
				{/if}

				{* show others profile when user want *}
				{if isset($show_o_profile) && $show_o_profile <> ''}
					<ul class="profile">
						{foreach from = $show_o_profile item = o_profile}
							<li><a href="./?uname={$o_profile['userName']|lower}">{html_image file="subscribers/{$o_profile['userId']}/{$o_profile['profile_img']}" width="100px;" height="100px;" class="thumbnail"}</a>&nbsp</li>
							<li>Full Name : <a href="">{$o_profile['Full_name']}</a></li>
							<li>Username : <a href="">{$o_profile['userName']}</a></li>
							<li>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <a href="">{$o_profile['email']}</a></li>
							<li>Location&nbsp;&nbsp;&nbsp;&nbsp;: <a href="">{$o_profile['location']|replace:'/':', '|replace:'others':''|capitalize}</a></li>
							<li>Join Date&nbsp;&nbsp;&nbsp;: <a href="">{$o_profile['date']|date_format:"%B %d, %Y &nbsp;at&nbsp; %I: %M %p"}</a></li>
						{/foreach}
					</ul><!-- .profile  -->
				{/if}
			</div><!-- .span9  -->

			<div class="span3 sidebar">
				<ul class="pull-right nav nav-list">
					<li><a href="./?action=myprofile">My Profile</a></li>
					<li><a href="logout.php">logout</a></li>
				</ul><!--  .pull-right .nav .nav-list -->

				{* right sidebar comment option *}
				<ul class="right-ans">
					{foreach from = $sidebar_ans_show item = sidebar_ans}
						<li class="ans">
							<a href="./?uname={$sidebar_ans['userName']|lower}">{html_image file="subscribers/{$sidebar_ans['userId']}/{$sidebar_ans['profile_img']}" width="40px;" height="40px;"}</a>
							<div class="entry-ans"><a href="./?uname={$sidebar_ans['userName']|lower}">{$sidebar_ans['userName']}</a></div>
							<p>{$sidebar_ans['user_ans']}</p>
						</li><!--  .ans -->
					{/foreach}
				</ul><!--  .right-ans -->
			</div><!-- .span3 .sidebar  -->
		{/if}
	</div><!--  .row  -->
</div><!--  .content .shadow -->