
<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
     <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <title>
         @yield('title')
      </title>
      <link rel="stylesheet" href="cdnjs/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
      <link rel="stylesheet" href="dist/slicknav.css">
      <script src="dist/modernizr.min.js"></script>
      <script src="dist/jquery.slicknav.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
         
         	$('#menu').slicknav();
         
         });
         
      </script>
      <link href="slider/responsiveslides.css" rel="stylesheet" type="text/css" />
      <script src="slider/responsiveslides.min.js"></script>
      <script type="text/javascript">
         $(function() {
         
         	$(".rslides").responsiveSlides({
         
         	auto: true,             // Boolean: Animate automatically, true or false
         
         	speed: 500,            	// Integer: Speed of the transition, in milliseconds
         
         	timeout: 7000,          // Integer: Time between slide transitions, in milliseconds
         
         	pager: true,            // Boolean: Show pager, true or false
         
         	nav: false,            	// Boolean: Show navigation, true or false
         
         	random: false,          // Boolean: Randomize the order of the slides, true or false
         
         	pause: false,           // Boolean: Pause on hover, true or false
         
         	pauseControls: true,    // Boolean: Pause when hovering controls, true or false
         
         	prevText: "Previous",   // String: Text for the "previous" button
         
         	nextText: "Next",       // String: Text for the "next" button
         
         	maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
         
         	navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
         
         	manualControls: "",     // Selector: Declare custom pager navigation
         
         	namespace: "rslides",   // String: Change the default namespace used
         
         	before: function(){},   // Function: Before callback
         
         	after: function(){}     // Function: After callback
         
         });
         
         });
         
      </script>
      <!-- Home Page Slider -->
      <script type="text/javascript" src="js/scrolltopcontrol.js"></script>
      <script type="text/javascript">
         $(window).scroll(function(){
         
           var sticky = $('.sticky'),
         
               scroll = $(window).scrollTop();
         
           if (scroll >= 1) sticky.addClass('fixed');
         
           else sticky.removeClass('fixed');
         
         });
         
      </script>
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive_style.css" rel="stylesheet">
   </head>