@extends('express.index')

@section('title', 'Room For Milk Express :: ' . $product->name)

@section('subheader')

@include('subviews.subheader', ['imageUrl' => '/images/' . $product->id . '.jpg', 'headlineText' => $product->name, 'class' => 'eight columns offset-by-two'])

@stop


@section('content')

<div class="row">

	<div class="eight columns offset-by-two">


		{!! Markdown::convertToHtml($product->description) !!}

		<p style="text-align: center"><a class="button button-primary" href="http://calendly.com/fefogarcia/express" target="_blank" data-sr="flip 180deg">Schedule Now – Only ${{ $product->price }}</a></p>

		<p style="text-align: center; font-size: 10px">Once you've scheduled your session, you'll be sent a secure link to pay via PayPal.</p>

	</div>

</div>


<br/><br/>

<div class="row">

	<div class="eight columns offset-by-two">

		<h5>Other Express Products</h5>

		<div class="row">

@foreach ($products as $product)

			<div class="four columns">
				<a href="/express/{{ $product->id }}/"><div class="article-image" style="background-image: url('/images/{{ $product->id }}.jpg')">&nbsp;</div></a>
				<h6><a href="/express/{{ $product->id }}/">{{ $product->name }}</a></h6>
			</div>

@endforeach

		</div>

	</div>

</div>



@stop