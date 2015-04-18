@extends('roomformilk')

@section('title', "Room For Milk")

@section('content')

<div class="row">

	<div class="ten columns offset-by-one">

{!! Markdown::convertToHtml("

#### When you pictured yourself finally owning your own business, did you also see yourself wearing too many hats, doing busywork for hours a day?

Did you see yourself exhausted, trying to follow up on leads that turned out to be dead ends, following every marketing tip in the book (or blog), overwhelmed by how much work you have to do in exchange for a small amount of revenue?

##### Of course not.

At the end of the day, you’re in business to do what you’re great at.

- You are not in business to schedule customers in.
- You are not in business to chase delinquent clients.
- You are not in business to learn productivity software.

But if you’re not in business to do those things, then why do you find yourself constantly doing them?

#### What would you do with two extra hours every week?

How much further would your business be now **if you could reclaim all the hours you’ve spent doing repetitive work?** If administrative tasks such as scheduling, email sorting, marketing emails, all took care of themselves? More importantly, how many customers would you be able to keep by making their lives easier in the process?

All without having to hire full-time staff that you then have to manage, meaning you might as well go back to doing the work yourself.

The bad news is: the wasted time is already wasted. **But the good, amazing news is: you don’t need to waste it anymore**.

#### Enter Room For Milk.

Room For Milk was born from my experience helping companies (both small and large) with their design workflow, and from my realization that most small businesses exist under the belief that operations management and automation are a luxury reserved for Fortune 500 corporations with several moving parts.

Nothing could be further from the truth – in fact, corporations can afford to waste resources in a way that most small businesses can't.

Let's get your time and energy back.

##### What You Put In

With a short conversation over phone or Skype, I get:
- an understanding of how your business currently operates
- what your goals are for the way you spend your work hours

Then I set off to work.

##### What You Get

Once I'm done, you get a document detailing improvements not only for back-office tasks such as scheduling and personnel handling, but also in how your customers currently interact with your website, improving sales in the short term and overall customer satisfaction in the long term.

The report also includes:

- An analysis of your current process
- A revised process
- A tool list with immediately actionable steps in order to implement that revised process
- An implementation plan to help you adopt the tools
- A custom worksheet to track the results

This service is ideal for online businesses with 3 employees or less. The reason for this is that, differently from physical businesses, internet-based companies don't require as much physical presence for operational analysis.

#### Every hour not saved is an hour wasted.

Stop wasting your energy, and reclaim your right to spend your time doing the work you actually started your business to do.

Type in your email below and you'll get a few questions which I've designed to better understand your current process, and from then I'll see if we're a good fit and we'll schedule our conversation.


");

!!}

<form action="http://formtoemail.com/user_forms.php" method="post">
  <input type="hidden" name="user_id" value="OV8HJYTVSWRPUJ73CYWU">
  <input type="hidden" name="form_id" value="1">
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Your name</label>
      <input class="u-full-width" type="text" placeholder="test@mailbox.com" name="name">
    </div>
    <div class="six columns">
      <label for="exampleEmailInput">Your email</label>
      <input class="u-full-width" type="email" placeholder="test@mailbox.com" name="email">
    </div>
  </div>
<!--   <label class="example-send-yourself-copy">
    <input type="checkbox">
    <span class="label-body">Send a copy to yourself</span>
  </label>
 -->  <div style="text-align: center"><input class="button-primary" type="submit" value="Get contacted"></div>
</form>



	</div>

</div>


@stop