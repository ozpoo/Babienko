<?php get_header(); ?>

	<main role="main">

		<section>
			<?php get_template_part('loop-roster'); ?>
		</section>

	</main>

	<script>

		(function ($, root, undefined) {

			$(function () {

				$(window).load(function(){
					init();
				});

				var init = function() {
					$(".modal-toggle button").on("click", function() {
						$(this).closest(".person").find(".modal").addClass("show");
					});

					$(".modal-close button").on("click", function() {
						$(this).closest(".modal").removeClass("show");
					});
				}

			});

		})(jQuery, this);

	</script>

<?php get_footer(); ?>
