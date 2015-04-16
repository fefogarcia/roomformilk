@extends('express.index')

@section('title', 'Room For Milk Express :: ' . $product->name)

@section('subheader')

<div class="full-width" id="subheader" style="background-image: url('/images/{{ $product->id }}-bg.jpg')">
  <div class="container">
    <div class="row">
      <div class="eight columns offset-by-two">
		<br/><br/><br/>
		<h3>{{ $product->name }}</h3>
      </div>
    </div>
  </div>
</div>


@stop


@section('content')

<div class="row">

	<div class="eight columns offset-by-two">


		{!! Markdown::convertToHtml($product->description) !!}

		<p style="text-align: center"><a class="button button-primary" href="http://calendly.com/fefogarcia/express" target="_blank" data-sr="flip 180deg">Schedule Now – Only $125</a></p>

		<p style="text-align: center; font-size: 10px">Once you've scheduled your session, you'll be sent a secure link to pay via PayPal.</p>

	</div>

</div>

<div class="row" data-sr>

	<div class="eight columns offset-by-two">

		<h5>Other Express Products</h5>

		<ul class="products">

@foreach ($products as $product)

			<li><a href="/express/{{ $product->id }}/">{{ $product->name }}</a></li>

@endforeach

		</ul>

	</div>

</div>


@stop