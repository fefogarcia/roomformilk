@extends('articles.index')

@section('content')

<div class="row">

	<div class="ten columns offset-by-one">

		<h5>This is where I keep my writing.</h5>

@foreach ($articles as $article)

<div class="row">

<div class="three columns"><div class="article-image" style="background-image: url('/images/article-headers/{{ $article->id }}.jpg')">&nbsp;</div></div>
<div class="nine columns"><h6><a href="/articles/{{ $article->slug }}">{{ $article->headline }}</a></h6></div>

</div>

<br/>

@endforeach

	</div>

</div>


@stop