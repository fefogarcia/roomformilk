@extends('roomformilk')

@section('title', "Room For Milk :: Contact")

@section('h2', '<h2>CONTACT</h2>')

@section('content')

<div class="row">

	<div class="eight columns offset-by-two">


<p>Use the form below to get in touch, and I should respond within 24 hours.</p>

<p>For <strong>Room For Milk Express</strong> products, please buy directly from the <a href="/express/">product page</a>.</p>

<!-- The above form looks like this -->
<form>
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Your email</label>
      <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
    </div>
    <div class="six columns">
      <label for="exampleRecipientInput">Reason for contacting</label>
      <select class="u-full-width" id="exampleRecipientInput">
        <option value="question">Questions</option>
        <option value="quote">Quote Request</option>
        <option value="writing">Guest Writing</option>
        <option value="other">Other</option>
      </select>
    </div>
  </div>
  <label for="exampleMessage">Message</label>
  <textarea class="u-full-width" placeholder="Hi Felipe…" id="exampleMessage"></textarea>
  <label class="example-send-yourself-copy">
    <input type="checkbox">
    <span class="label-body">Send a copy to yourself</span>
  </label>
  <div style="text-align: center"><input class="button-primary" type="submit" value="Submit"></div>
</form>

	</div>

</div>


@stop