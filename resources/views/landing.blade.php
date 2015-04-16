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

{!! $landingPage->text !!}

	</div>

</div>

<div class="row">

	<div class="eight columns offset-by-two">

		<p style="text-align: center"><a class="button button-primary" href="http://calendly.com/fefogarcia/express" target="_blank" data-sr="flip 180deg">Schedule Now – Only $125</a></p>

		<p style="text-align: center; font-size: 10px">Once you've scheduled your session, you'll be sent a secure link to pay via PayPal.</p>

	</div>

</div>



@stop