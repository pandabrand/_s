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
    icons: icons,
    heightStyle: "content",
  });

  $('[id^=accordion-]').each(function(index){
    $(this).accordion({
      icons: icons,
      heightStyle: "content",
    });
  });
}(jQuery));
