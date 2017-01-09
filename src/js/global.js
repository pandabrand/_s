//Custom global scripts
jQuery(document).ready(function($) {
  'use strict';

  $('.flexslider').flexslider({
    controlNav: false,
    directionNav: false,
  });
  var icons = {
    header: "ui-icon-circle-arrow-e",
    activeHeader: "ui-icon-circle-arrow-s"
  };
  $( "#accordion" ).accordion({
    icons: null,
    heightStyle: "content",
  });

  $('[id^=accordion-]').each(function(index){
    $(this).accordion({
      icons: null,
      heightStyle: "content",
    });
  });
}(jQuery));
