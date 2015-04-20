@extends('articles.index')

@section('title', 'Room For Milk :: ' . $article->headline)

@section('meta')

<meta property="og:title" content="{{ $article->headline }}" />
<meta property="og:site_name" content="Room For Milk"/>
<meta property="og:description" content="{{ $article->description }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://roomformilk.net/articles/{{ $article->slug }}" />  
<meta property="og:locale" content="en_US" />  
<meta property="article:author" content="https://www.twitter.com/talktofefo" />
<meta property="og:image" content="http://roomformilk.net/images/article-headers/{{ $article->id }}.jpg" />

@stop

@section('subheader')

<div id="subheader-wrapper" style="background-image: url('/images/article-headers/{{ $article->id }}.jpg')">
	<div class="full-width" id="subheader">
	  <div class="container">
	    <div class="row">
	      <div class="ten columns offset-by-one">
			<br/><br/><br/><br/><br/>
			<h3>{{ $article->headline }}</h3>
	      </div>
	    </div>
	  </div>
	</div>
</div>

@stop

@section('content')

<div class="row">

	<div class="ten columns offset-by-one">

		{!! Markdown::convertToHtml($article->text) !!}


		<!-- Begin MailChimp Signup Form -->  

		<div id="mc_embed_signup">  
		<form action="//themajorofficial.us1.list-manage.com/subscribe/post?u=8bf6015af5ddfba77d30c7db9&amp;id=7ae91179df" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>  
		    <div id="mc_embed_signup_scroll">
		    <h5>Liked this post?</h5>
		    <p>Sign up below and receive weekly e-mails with tips on harnessing technology to improve your brand.</p>

		<div class="row">

		<div class="mc-field-group five columns">
		    <label for="mce-FNAME">First Name</label>
		    <input type="text" value="" name="FNAME" class="required" id="mce-FNAME" style="width: 90%">
		</div>  

		<div class="mc-field-group five columns">
		    <label for="mce-EMAIL">Email Address</label>
		    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" style="width: 90%">
		</div>  

		<div id="mce-responses" class="clear two columns">
		    <label for="labelForSubmit">&nbsp;</label>
		        <div class="response" id="mce-error-response" style="display:none"></div>
		        <div class="response" id="mce-success-response" style="display:none"></div>
		    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;"><input type="text" name="b_8bf6015af5ddfba77d30c7db9_7ae91179df" tabindex="-1" value=""></div>
		    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button button-primary"></div>
		    </div>

		</div>


		</form>  
		</div>  

		<!--End mc_embed_signup-->
		
		<div style="text-align: right">
			<span class='st_facebook_large' displayText='Facebook'></span>
			<span class='st_twitter_large' displayText='Tweet'></span>
			<span class='st_linkedin_large' displayText='LinkedIn'></span>
			<span class='st_googleplus_large' displayText='Google +'></span>
			<span class='st_email_large' displayText='Email'></span>
		</div>

		<br/>

		<h5>More Articles</h5>

		<ul>

@foreach ($articles as $article)

			<li><a href="/articles/{{ $article->slug }}">{{ $article->headline }}</a></li>

@endforeach

		</ul>


	</div>

</div>

<!-- <script src="//my.hellobar.com/65ffe1b5e60bbccad215df6ede004b88fa4f9547.js" type="text/javascript" charset="utf-8" async="async"></script> -->

@stop