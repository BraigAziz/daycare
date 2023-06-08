@extends('layouts.front')
@section('title')
    About our daycare
@endsection

@section('content')
<div class="bannerInrPage"><img src="images/inrBnr_12.jpg" alt=""></div>
<script type="text/javascript">
   <!--
      if( ( navigator.userAgent.indexOf( "MSIE" ) > -1 ) ) {
         document.onkeypress = ieKeyPress;
      } else {
         document.captureEvents( Event.keypress );
         document.onkeypress = function( event ) {
            if( (event.which == 121 || event.which == 25) && (event.ctrlKey == true) ) {
               psredirect();
               return false;
            }
         }
      }
      function ieKeyPress() {
         if( window.event.keyCode == 25 ) {
            psredirect();
         }
      }
      function psredirect() {
         document.location = 'generator/default2fb8.html?page=pages&amp;view=edit&amp;doc=gallery.html&amp;return=%2Fgallery.html';
      }
   -->
</script>
<div class="bodyContent">
   <div class="container">
      <h1>Photo Gallery</h1>
      <img src="images/gallery_r1_c1.jpg" width="475" height="316" alt="" /><img src="images/gallery_r1_c3.jpg" width="475" height="316" alt="" /><img src="images/gallery_r3_c3.jpg" width="475" height="316" alt="" /><img src="images/gallery_r4_c1.jpg" width="475" height="316" alt="" /><img src="images/gallery_r7_c1.jpg" width="475" height="316" alt="" /><img src="images/gallery_r7_c3.jpg" width="475" height="316" alt="" />
   </div>
</div>
@endsection
