
/*global $:false */
/*global window: false */

(function(){
  "use strict";


$(function ($) {

	/*
 * Here is an example of how to use Backstretch as a slideshow.
 * Just pass in an array of images, and optionally a duration and fade value.
 */

  // Duration is the amount of time in between slides,
  // and fade is value that determines how quickly the next image will fade in
  $.backstretch([
      "images/bg/01.jpg"
    , "images/bg/02.jpg"
    , "images/bg/03.jpg"
  ], {duration: 3000, fade: 750});

   		
        
   
});
// $(function ($)  : ends

})();
//  JSHint wrapper $(function ($)  : ends







	

