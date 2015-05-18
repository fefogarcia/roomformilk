@extends('articles.index')

@section('title', 'Room For Milk :: ' . $article->headline)

@section('meta')

<meta property="og:title" content="{{ $article->headline }}" />
<meta property="og:site_name" content="Room For Milk"/>
<meta property="og:description" content="{{ $article->description }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://roomformilk.net/articles/{{ $article->slug }}/" />
<meta property="og:locale" content="en_US" />  
<meta property="article:author" content="https://www.twitter.com/talktofefo" />
<meta property="og:image" content="http://roomformilk.net/images/article-headers/{{ $article->id }}.jpg" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@talktofefo" />
<meta name="twitter:creator" content="@talktofefo" />
<meta name="twitter:url" content="http://roomformilk.net/articles/{{ $article->slug }}/" />
<meta name="twitter:title" content="{{ $article->headline }}" />
<meta name="twitter:description" content="{{ $article->description }}" />
<meta name="twitter:image" content="http://roomformilk.net/images/article-headers/{{ $article->id }}.jpg" />

@stop

@section('subheader')

@include('subviews.subheader', ['imageUrl' => '/images/article-headers/' . $article->id . '.jpg', 'headlineText' => $article->headline, 'class' => 'ten columns offset-by-one'])

@stop

@section('content')

<div class="row">

	<div class="ten columns offset-by-one">

		{!! Markdown::convertToHtml($article->text) !!}



		
<!-- 		<div style="text-align: left">
			<span class='st_facebook_large' displayText='Facebook'></span>
			<span class='st_twitter_large' displayText='Tweet'></span>
			<span class='st_linkedin_large' displayText='LinkedIn'></span>
			<span class='st_googleplus_large' displayText='Google +'></span>
			<span class='st_email_large' displayText='Email'></span>
		</div>
 -->
		<br/>

	</div>

</div>

<!-- include('subviews.more', ['class' => 'ten columns offset-by-one', 'list' => $articles]) -->

<div class="row">

	<div class="ten columns offset-by-one">

		<h5>More Articles</h5>

		<div class="row">

@foreach ($articles as $article)

			<div class="four columns">
				<a href="/articles/{{ $article->slug }}/"><div class="article-image" style="background-image: url('/images/article-headers/{{ $article->id }}.jpg')">&nbsp;</div></a>
				<h6><a href="/articles/{{ $article->slug }}/">{{ $article->headline }}</a></h6>
			</div>

@endforeach

		</div>

	</div>

</div>

<!-- <script src="//my.hellobar.com/65ffe1b5e60bbccad215df6ede004b88fa4f9547.js" type="text/javascript" charset="utf-8" async="async"></script> -->

@stop