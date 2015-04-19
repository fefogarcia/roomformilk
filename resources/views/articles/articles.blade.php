@extends('articles.index')

@section('content')

<div class="row">

	<div class="ten columns offset-by-one">

		<h5>This is where I keep my writing.</h5>

@foreach ($articles as $article)

		<li><a href="/articles/{{ $article->slug }}">{{ $article->headline }}</a></li>

@endforeach

	</div>

</div>


@stop