/*
* classie - class helper
*
* classie.has( elem, 'my-class' ) -> true/false
* classie.add( elem, 'my-new-class' )
* classie.remove( elem, 'my-unwanted-class' )
* classie.toggle( elem, 'my-class' )
*/

function classReg( className ) {
	return new RegExp("(^|¥¥s+)" + className + "(¥¥s+|$)");
}
var hasClass, addClass, removeClass;
if ( 'classList' in document.documentElement ) {
	hasClass = function( elem, c ) {
		return elem.classList.contains( c );
	};
	addClass = function( elem, c ) {
		elem.classList.add( c );
	};
	removeClass = function( elem, c ) {
		elem.classList.remove( c );
	};
}
else {
	hasClass = function( elem, c ) {
		return classReg( c ).test( elem.className );
	};
	addClass = function( elem, c ) {
		if ( !hasClass( elem, c ) ) {
			elem.className = elem.className + ' ' + c;
		}
	};
	removeClass = function( elem, c ) {
		elem.className = elem.className.replace( classReg( c ), ' ' );
	};
}
function toggleClass( elem, c ) {
	var fn = hasClass( elem, c ) ? removeClass : addClass;
	fn( elem, c );
}
var classie = {
// full names
hasClass: hasClass,
addClass: addClass,
removeClass: removeClass,
toggleClass: toggleClass,
// short names
has: hasClass,
add: addClass,
remove: removeClass,
toggle: toggleClass
};
// transport
if ( typeof define === 'function' && define.amd ) {
// AMD
define( classie );
} else {
// browser global
window.classie = classie;
}// --- classie - class helper ---


/**
	*
	*  sidemenu effect js
	*
	**/
	function hasParentClass( e, classname ) {
		if(e === document) return false;
		if( classie.has( e, classname ) ) {
			return true;
		}
		return e.parentNode && hasParentClass( e.parentNode, classname );
	}

	$(function(){
		var agent = navigator.userAgent;
		$('a[data-filter^=#]').click(function(){
			var href= $(this).attr("data-filter");
			var target = $(href == "#" || href == "" ? 'html' : href);
			if(agent.search(/iPhone/) != -1 || agent.search(/iPad/) != -1 || agent.search(/Android/) != -1){
				setTimeout(function(){
					var speed = 1000;
					var position = target.offset().top;
					$("html, body").animate({scrollTop:position}, speed, "swing");
					return false;
				},600);
			}else{
				var speed = 1000;
				var position = target.offset().top;
				$("html, body").animate({scrollTop:position}, speed, "swing");
				return false;
			}
		});
	});

	$(function(){
		$('a[href^=#]').click(function(){
			var href= $(this).attr("href");
			var target = $(href == "#" || href == "" ? 'html' : href);
			if($(this).attr("href") == "#carousel-173712" || $(this).attr("rel") == "lightbox-cats"){
				return false;
			}
			var speed = 1000;
			var position = target.offset().top;
			$("html, body").animate({scrollTop:position}, speed, "swing");
			return false;
		});
	});

	$(function() {
		$(window).scroll(function () {
			var s = $(this).scrollTop();
			var m = document.getElementById("header").clientHeight;
			if(s > 1 && 50 > s){
				$('#message-box').fadeOut('fast');
			}else if(s <= 1){
				$('#message-box').fadeIn('fast');
				$('#navbar').hide('slow');
			}
			if(s > m-70 && m > s) {
				$('#navbar').show('slow');
			}
		});
	});
	$(function(){
		$(window).load(function() {
			$('#navbar').hide();
			var $menuContainer = $('.isotopeMenu');
			var $wineContainer = $('.isotopeWine');

			$menuContainer.isotope({
				animationEngine : 'jquery',
				itemSelector: '.item',
				resizable: false, // disable normal resizing
			});
			$wineContainer.isotope({
				animationEngine : 'jquery',
				itemSelector: '.item',
				resizable: false, // disable normal resizing
			});
			var menuHeight = $('#menulist').height();
			var wineHeight = $('#winelist').height();
			$('#menu-filter a').click(function(){
				$('#menulist').height(menuHeight);
				var selector = $(this).attr('data-filter');
				$menuContainer.isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						easing: 'easeInOutQuad',
					},
				});
				return false;
			});
			$('#wine-filter a').click(function(){
				$('#winelist').height(wineHeight);
				var selector = $(this).attr('data-filter');
				$wineContainer.isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						easing: 'easeInOutQuad',
					},
				});
				return false;
			});
		});
});

