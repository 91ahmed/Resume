/*
    Website Name: OResume
    Version: v1.0
    Author: Ahmed Hassan
    Author Link: https://codecanyon.net/user/ahmed12491
    Description: PHP Dynamic JSON Resume
*/
$(document).ready(function(){

    /** Loading Spinner **/
    $('.loader-content').delay(4000).slideUp('slow');

	/*****************************
        Smooth Scroll to Sections
    ******************************/
    $('a[href^="#"]').on('click', function (event) {
        var target = $($(this).attr('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').animate({ scrollTop: target.offset().top }, 1000);
        }
    });
 
     /********************
        Scroll to Top 
      *********************/
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 250) {
            $('.go-to-top').fadeIn(200); 
        } else {
            $('.go-to-top').fadeOut(200);  
        }
    });
    $('.go-to-top').on('click', function() {
        $('body,html').animate({
            scrollTop : 0      
        }, 400);
    });

    /************************************
        Change navbar after scrolling 
    *************************************/
    $(window).scroll(function(){
    	var top = $(this).scrollTop();

	    if($(this).scrollTop() >= 150){
	    	$('.navbar').addClass('navbar-scroll');
	    }else{
	    	$('.navbar').removeClass('navbar-scroll');
	    }
	});

    /*****************************************
        Edit active and not active Sections 
    ******************************************/
    $('.section').each(function(){
        var active = $(this).attr('data-active');
        var id = $(this).attr('id');

        if (active == 'notactive') {
            $(this).addClass('section-notactive');
            $(".section-"+id+"").addClass('section-notactive');
        } else {
            $(this).addClass('section-active');
        }
    });

});