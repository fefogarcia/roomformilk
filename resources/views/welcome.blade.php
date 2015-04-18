@extends('roomformilk')

@section('title', "Room For Milk")

@section('content')

<div class="row">

	<div class="ten columns offset-by-one">

{!! Markdown::convertToHtml("

<!-- # Is Running Your Own Business Draining Your Energy? -->

##### Running a company is hard.

The amount of hats you have to wear stands in stark contrast to how you imagined yourself spending your days.

- **You feel stressed** as tasks slip through the cracks and you can't prioritize
- **You struggle** to stay on top of your inbox
- **You have paper piling up** faster than you can handle
- **You know there must be better ways**, but you have no time to look for them

You've read productivity blogs, memorized &rdquo;life hacks&rdquo; (and immediately forgot them), cluttered your phone with too many to-do apps. And yet when the rubber hits the road, **you're left with too much to do and too few hours in the day**.

##### It doesn't need to be this way.

A productivity consultant can help you:

- **Have more time for yourself** by freeing up time you currently spend working. Give your family and friends the quality time they deserve.
- **Increase your profits** by having more capacity. Less time on busywork means more time for actual business.
- **Focus on what only you can do** by delegating, outsourcing and automating the rest. Reinventing the wheel is always counterproductive.

Time to go back to the reason you're in business.

##### Productivity tricks won't help you if you don't know which parts to fix.

The first thing we'll do is spend a few days monitoring your daily activities at work – people often don't realize how much of their time goes into repetitive or even unnecessary tasks.

Then, once we have a clear picture of the way you spend your time, we start a two-part process:

1. We **identify** what can be automated or outsourced and design a system around those.
2. We **rewrite** your daily schedule, now with much more slack in the canvas.

I then follow-up with you in two weeks, to see how well the new system is working, and we make changes on the parts that aren't. **I don't rest until you're making the most of your time**.

##### Reclaim your time before it claims you.

**Fill in your name and e-mail below, and press &rdquo;send&rdquo;**. You'll soon get a few questions that will help me understand you and your business, and if we're a good fit, from then we'll schedule time for our first conversation.

");

!!}

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