<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/skeleton.css">
  <link rel="stylesheet" href="/css/custom.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="/images/favicon.png?v=2">


</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="full-width" id="header">
  <div class="container">
    <div class="row">
      <div class="eight columns offset-by-two">
      	<div style="text-align: center" id="logo">
        	<a href="/"><img src="/logo/1000/200/light" style="width: 100%" /></a><br/>
          @yield('h2')
        </div>
      </div>
    </div>
  </div>
</div>

@yield('subheader')


<div class="full-width">
  <div class="container" style="margin-top: 5%; margin-bottom: 5%">
      	
      	@yield('content')

  </div>
</div>



<div class="full-width" id="footer">
  <div class="container">
    <div class="row">
      <div class="two columns">
        <h6>Room For Milk:</h6>
      </div>
      <div class="two columns">
        	<ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about/">About</a></li>
            <li><a href="/contact/">Contact</a></li>
          </ul>
      </div>
      <div class="two columns">
        <h6>Felipe Garcia:</h6>
      </div>
      <div class="two columns">
          <ul>
            <li><a href="http://linkedin.com/in/fefogarcia" target="_blank">LinkedIn</a></li>
            <li><a href="http://twitter.com/talktofefo" target="_blank">Twitter</a></li>
            <li><a href="http://github.com/fefogarcia" target="_blank">GitHub</a></li>
          </ul>
      </div>
      <div class="four columns">
        <div style="text-align: center">
          <a href="/"><img src="/logo/400/100/light" style="width: 100%" /></a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="full-width" id="subfooter">
  <div class="container">
    <div class="row">
      <div class="twelve column">
        <div style="text-align: center">
          Copyright 2015 Felipe Garcia // Room For Milk
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src='/js/jquery.blast.min.js'></script>

<script>

$(window).scroll(function () {

  var chars = $('h2').blast({
    delimiter: 'character'
  });

  var newOpacity = 1 - ($(this).scrollTop() / 75);
  $('#logo').css('opacity', newOpacity);

});

// chars.each(function(i) {
//   // initialize position
//   alert(this.innerHTML.charCodeAt(0));
// });

// alert(chars[1].innerHTML.charCodeAt(0));

</script>

<!-- Scroll reveal stuff -->

<script src='/js/scrollReveal.min.js'></script>
<script>

      var config = {
        scale: { power: '0' },
        easing: 'hustle',
        // reset:  true,
        delay:  'onload',
        vFactor: 0.90
      }

      window.sr = new scrollReveal( config );

</script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>