(function ($, root, undefined) {

	$(function () {

		'use strict';

		$(document).ready(function(){
			$(".home main, .roster main, .connect main, .connect .left").css("margin-top", $(".header").innerHeight());

			$(".title-fade, .intro").css("height", $(window).height());

			$(".menu-toggle button").on("click", function() {
				$(".menu").toggleClass("show");
			});
		});

		$(window).load(function(){
			$("body").addClass("ready");
			setTimeout(function(){
				$(".title-fade").removeClass("show");
			}, 1200);
		});

		$(window).resize(function(){
			$(".home main, .roster main, .connect main, .connect .left").css("margin-top", $(".header").innerHeight());
		});

	});

})(jQuery, this);
