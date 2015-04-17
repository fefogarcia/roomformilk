@extends('express.index')

@section('title', "Room For Milk Express")

@section('content')

<div class="row">

	<div class="twelve columns">

		<h5>For most smaller businesses, a full operational setup for their online presence is overwhelming and might even be overkill.</h5>

		<p>With <strong>Room For Milk Express</strong>, you can get on-demand systems installed on your website that will generate immediate value for your company, for a fraction of the price of a full-fledged operational strategy.</p>

		<p>Get one, or get them all – pay only for what you need.</p>

	</div>

</div>


@foreach ($products as $product)

<?php $count++ ?>

<div class="row">

@if ($count % 2 == 0)

	<div class="one-half column">
		<a href="/express/{{ $product->id }}/">
			<img src="/images/{{ $product->id }}.jpg" style="width: 100%; border-radius: 2%" />
		</a>
	</div>

@endif

	<div class="one-half column">

		<h4>{{ $product->name }}</h4>

		<p>{!! Markdown::convertToHtml($product->intro) !!}</p>

		<p style="text-align: center"><a class="button button-primary" href="/express/{{ $product->id }}/">Read More</a></p>

	</div>

@if ($count % 2 == 1)

	<div class="one-half column">
		<a href="/express/{{ $product->id }}/">
			<img src="/images/{{ $product->id }}.jpg" style="width: 100%; border-radius: 2%" />
		</a>
	</div>

@endif


</div>

@endforeach


@stop