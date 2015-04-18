@extends('roomformilk')

@section('title', "Room For Milk :: Consulting")

@section('h2', '<h2><a href="/consulting/">CONSULTING</a></h2>')

@section('content')

<div class="row">

	<div class="ten columns offset-by-one">


{!! Markdown::convertToHtml($text); !!}

<form action="http://formtoemail.com/user_forms.php" method="post">
  <input type="hidden" name="user_id" value="OV8HJYTVSWRPUJ73CYWU">
  <input type="hidden" name="form_id" value="1">
  <div class="row">
    <div class="five columns">
      <input class="u-full-width" type="text" placeholder="Your name" name="name">
    </div>
    <div class="five columns">
      <input class="u-full-width" type="email" placeholder="your@email.com" name="email">
    </div>
    <div class="two columns">
      <div style="text-align: right"><input class="button-primary" type="submit" value="Send"></div>
    </div>
  </div>
<!--   <label class="example-send-yourself-copy">
    <input type="checkbox">
    <span class="label-body">Send a copy to yourself</span>
  </label>
 -->  
</form>


	</div>

</div>


@stop