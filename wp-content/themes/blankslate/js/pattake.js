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

//sticky footer
	$(document).ready(function(){
  		$(window).resize(function(){
			    var footerHeight = $('.footer').outerHeight();
			    var stickFooterPush = $('.push').height(footerHeight);
		
    			$('.wrapper').css({'marginBottom':'-' + footerHeight + 'px'});
		    });
		
    		$(window).resize();
	    });

//print
function printPage() {
    window.print();
}

//match div height of sidebar with left div 
$(document).ready(function(){
			   var divHeight = $('.row').outerHeight(); 
$('.side').css('min-height', divHeight + 40);
		    });
		
    	

//placeholders and title
$(document).ready(function(){ 
	 $('#email,#author').val('');
     $('#author').attr("placeholder", "Your Name");
     $('#author').attr("title", "Your Name");
	 $('#email').attr("placeholder", "Your Email");
	 $('#email').attr("title", "Your Email");
	 $('#email').prop("type", "email");
	 $('#comment').attr("placeholder", "Please type your comments here.");
	 $('#comment').attr("title", "Comments");
	 $('#s').attr("placeholder", "Search for");
	 $('#s').attr("title", "Search for");
	 
});


//placeholder
$(document).ready(function(){ 
  $('#email').on('focus',function (e) {
	 $('#email').removeAttr("placeholder");
	 $('#email').addClass(".test");
	  });
 $('#author').on('focus',function (e) {
	 $('#author').removeAttr("placeholder");
	 });
 $('#comment').on('focus',function (e) {
	 $('#comment').removeAttr("placeholder");
	 });
 $('#s').on('focus',function (e) {
	 $('#s').removeAttr("placeholder");
	 });

$('#email').on('blur',function (e) {
	 $('#email').attr("placeholder","Your Email");
	 });
 $('#author').on('blur',function (e) {
	 $('#author').attr("placeholder","Your Name");
	 });
 $('#comment').on('blur',function (e) {
	 $('#comment').attr("placeholder","Please type your comments here.");
	 });
 $('#s').on('blur',function (e) {
	 $('#s').attr("placeholder","Search for");
	 });
	 
 });