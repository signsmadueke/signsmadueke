"use strict";

$(document).ready(function () {

	document.getElementById('copyrightdate').innerHTML = new Date().getFullYear();

	$(".harmburger").on('click', function (openSidebar) {
		var $body = $('body');
		var $menu = $('.harmburger');
		$body.toggleClass("sidebar-opened");
		$menu.toggleClass("collapsed");
	});

	$(document).keypress(function (e) {
		var $body = $('body');
		var $menu = $('.harmburger');
		if (e.keyCode === 27) {
			$body.toggleClass("sidebar-opened");
			$menu.toggleClass("collapsed");
		}
	});

	lightbox.option({
		'resizeDuration': 200,
		'wrapAround': true,
		'fadeDuration': 200,
		'fitImagesInViewport': true,
		'imageFadeDuration': 200,
		'resizeDuration': 200,
		'disableScrolling': true,
		'alwaysShowNavOnTouchDevices': true
	});

	$(function() {
		$('.lazy').Lazy({
			// your configuration goes here
			scrollDirection: 'vertical',
			effect: 'fadeIn',
			visibleOnly: true,
			onError: function(element) {
				console.log('error loading ' + element.data('src'));
			}
		});
    });
	
});

var pAgree = '1';

jQuery('img.svg').each(function () {
	var $img = jQuery(this);
	var imgID = $img.attr('id');
	var imgClass = $img.attr('class');
	var imgURL = $img.attr('src');

	jQuery.get(imgURL, function (data) {
		// Get the SVG tag, ignore the rest
		var $svg = jQuery(data).find('svg');

		// Add replaced image's ID to the new SVG
		if (typeof imgID !== 'undefined') {
			$svg = $svg.attr('id', imgID);
		}
		// Add replaced image's classes to the new SVG
		if (typeof imgClass !== 'undefined') {
			$svg = $svg.attr('class', imgClass + ' replaced-svg');
		}

		// Remove any invalid XML tags as per http://validator.w3.org
		$svg = $svg.removeAttr('xmlns:a');

		// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
		if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
			$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
		}

		// Replace image with new SVG
		$img.replaceWith($svg);

	}, 'xml');

});