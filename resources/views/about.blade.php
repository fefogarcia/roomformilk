@extends('roomformilk')

@section('title', "Room For Milk :: Contact")

@section('h2', '<h2>ABOUT</h2>')

@section('content')

<div class="row">

	<div class="eight columns offset-by-two">


{!! Markdown::convertToHtml("

<strong>My name is Felipe Garcia</strong>.

I spent the first 7 years of my career working in the digital marketing industry, both as a freelancer and in-house. Over time I noticed that, aside from my usual duties as a designer and developer, I would spend a lot of my time finding inefficiencies and automating them to save costs for my clients and employers.

I eventually went back to school and got a Master's degree in Design Management, where I learned about Operations Management and the study of productivity.

Upon graduating, I was lucky enough to help manage products at American Express and Gap, and that experience taught me that a lot of the strategies corporations use to save costs and produce more can also be applied to smaller businesses, even online ones.

##### That's how Room For Milk was born.

As a consultant, I now help online entrepreneurs make the best out of their time, and I teach them how to automate or outsource repetitive tasks so that they can focus on what they do best.


") !!}

<p>For any questions, feel free to <a href="/contact/">send me a message</a> or <a href="http://twitter.com/talktofefo" target="_blank">get in touch on Twitter</a>.</p>


	</div>

</div>


@stop