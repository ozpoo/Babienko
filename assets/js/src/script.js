(function ($, root, undefined) {

	$(function () {

		'use strict';

		var elapsed = false;
		var loaded = false;

		$(document).ready(function(){
			init();
			size();
		});

		setTimeout(function() {
      elapsed = true;
      if(loaded) {
				reveal();
			}
    }, 2200);

    $(window).load(function() {
			$(".home main, .roster main, .connect main, .connect .left").css("margin-top", $(".logo").innerHeight() + ($(".logo").position().top*2));
			loaded = true;
      if(elapsed) {
				reveal();
      }
    });

		$(window).resize(function(){
			size();
		});

		function init() {
			document.addEventListener("touchstart", function(){}, true);
		}

		function reveal() {
			$("body").addClass("ready");
			setTimeout(function(){
				$(".title-fade").removeClass("show");
			}, 1880);

			$(".menu-toggle button").on("click", function() {
				$(".menu").toggleClass("show");
			});
		}

		function size() {
			$(".title-fade, .intro").css("height", $(window).height());
		}

	});

})(jQuery, this);
