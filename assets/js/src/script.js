(function ($, root, undefined) {

	$(function () {

		'use strict';

		$(document).ready(function(){

		});

		$(window).load(function(){

			init();

		});

		$(window).resize(function(){
			size();
		});

		function init() {
			$("body").addClass("ready");
			size();

			setTimeout(function(){
				$(".title-fade").removeClass("show");
			}, 1880);

			$(".menu-toggle button").on("click", function() {
				$(".menu").toggleClass("show");
			});
		}

		function size() {
			$(".home main, .roster main, .connect main, .connect .left").css("margin-top", $(".logo").innerHeight() + ($(".logo").position().top*2));
			$(".title-fade, .intro").css("height", $(window).height());
		}

	});

})(jQuery, this);
