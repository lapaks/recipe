// Smooth Scrolling
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 2000, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});


// Fixed Menu 
if ( $(window).width() > 1024) {     

   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 54;
			 if ($(window).scrollTop() > navHeight) {
				 $('#nav').addClass('fixed');
			 }
			 else {
				 $('#nav').removeClass('fixed');
			 }
		});
	});
}
else {
				 $('#nav').addClass('fixed');
		
	}
	
// Min Height
if ( $(window).width() > 640) {     

$(document).ready(function() {
  function setHeight() {
    windowHeight = ($(window).innerHeight());
    $('#about-me','#category').css('min-height', windowHeight);
  };
  setHeight();
  $(window).resize(function() {
    setHeight();
  });
});
}

//collapse bootstrap menu on click

$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});

// Page Refresh
jQuery(function($){
var windowWidth = $(window).width();

$(window).resize(function() {
    if(windowWidth != $(window).width()){
    location.reload();
    return;
    }
});
});

// Menu on Bottom
if ( $(window).width() > 1024) {     
$(document).ready(function() {
  function setHeight() {
    windowHeight = ($(window).innerHeight()+  50);
    $('.head-banner').css('height', windowHeight);
  };
  setHeight();
  $(window).resize(function() {
    setHeight();
  });
});

}
else if ( $(window).width() < 640)
{
 $(document).ready(function(){
	  $('#nav').addClass('fixed');
	     
	  
	
	});

}

