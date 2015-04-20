@extends('articles.index')

@section('content')

<div class="row">

	<div class="ten columns offset-by-one">

		<!-- <h4>This is where I keep my writing.</h4> -->

@foreach ($articles as $article)

<div class="row">

<div class="four columns"><a href="/articles/{{ $article->slug }}/"><div class="article-image" style="background-image: url('/images/article-headers/{{ $article->id }}.jpg')">&nbsp;</div></a></div>
<div class="eight columns">
	<h5><a href="/articles/{{ $article->slug }}/">{{ $article->headline }}</a></h5>
	<p>{{ $article->description }}</p>
</div>

</div>

<br/>

@endforeach

	</div>

</div>


@stop