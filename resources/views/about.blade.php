@extends('roomformilk')

@section('title', "Room For Milk :: About")

@section('h2', '<h2>ABOUT</h2>')

@section('content')

<div class="row">

	<div class="eight columns offset-by-two">


{!! Markdown::convertToHtml($text); !!}


	</div>

</div>


@stop