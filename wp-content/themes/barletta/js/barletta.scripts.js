jQuery(function($) {
  "use strict";

// hide #back-top first
$("#back-top").hide();

// fade in #back-top

$(window).scroll(function () {
	if ($(this).scrollTop() > 100) {
		$('#back-top').fadeIn();
	} else {
		$('#back-top').fadeOut();
	}
});

// scroll body to 0px on click
$('#back-top a').on("click", function(){
	$('body,html').animate({
		scrollTop: 0
	}, 800);
	return false;
});

/*
* Wrapping img
*/

$(".attachment-147x110").wrapAll("<div class='decorate'></div>");


// slider
$('.mz-slider').bxSlider({
	pager: false,
	speed: 1000,
	slideMargin: 0,
	prevText: '<i class="fa fa-angle-left"></i>',
	nextText: '<i class="fa fa-angle-right"></i>',
	easing: 'ease-in-out'
});

});
/*
* Vanilla js
* Making nav be showed scroll = up
*/

var lastScrollTop = 0;

var scoll_nav_bar = function() 
{

	var cls_oNav = document.getElementsByClassName('navbar');
	
	var oScroll = window.pageYOffset || document.documentElement.scrollTop;
	
	if (oScroll > lastScrollTop) {		
		
		if (cls_oNav[0].className !== 'navbar scrolled') {
			cls_oNav[0].classList.add('scrolled');
		} 

	} else {
		cls_oNav[0].classList.remove('scrolled');
	}
	
	lastScrollTop = oScroll;
	
}

/*
* Scroll sidebar with div
*/

var scroll_sidebar = function(iRow, iSide) 
{
	var cls_oSideChild = document.getElementsByClassName('col-md-3')[0];
	var id_oSideParent = document.getElementById('fixed-side');
	var oScroll = window.pageYOffset || document.documentElement.scrollTop;
		
	if (oScroll > iRow.top) {
		if (cls_oSideChild.className !== 'fixed' && id_oSideParent.className !== 'helper') {
			id_oSideParent.classList.add('helper');
			cls_oSideChild.classList.add('fixed'); 
		}
	} 

	if(oScroll < iRow.top) {
		id_oSideParent.classList.remove('helper');
		cls_oSideChild.classList.remove('fixed');
	}
	
	if (oScroll > iRow.bottom) {
		id_oSideParent.classList.remove('helper');
		cls_oSideChild.classList.remove('fixed');
	}
	
	console.log(oScroll, iRow, iSide)
}

//Att Göra: Sidebaren ska vara fixed och ta bort alla if kanske en loop?oca

/*
* Calculate position of div
*/

function offset(el) {
    
    var offsets = el.getBoundingClientRect();
	var top = offsets.top;
	var left = offsets.bottom;
    
    return { top: offsets.top, bottom: offsets.bottom }
}

document.addEventListener("scroll", scoll_nav_bar);

//document.addEventListener("scroll", scroll_sidebar);


/*document.addEventListener("scroll", function() {
	
	var sidebar = document.getElementsByClassName('col-md-3')[0];
	var row = document.getElementsByClassName('row')[0];
	
	scroll_sidebar(offset(row), offset(sidebar));
}); */