<?php get_header(); ?>

	<main role="main">

		<?php while (have_posts()) : the_post(); ?>

			<section class="modals">
				<?php if( have_rows('person') ): ?>
					<?php while ( have_rows('person') ) : the_row(); ?>
						<div class="person">
							<div class="modal-container">
								<div class="content">
									<div class="modal-close">
										<p>
											<button>close</button>
										</p>
									</div>
									<div class="name">
										<p><?php the_sub_field('name'); ?></p>
									</div>
									<div class="credentials">
										<p>
											<small><?php the_sub_field('credentials'); ?></small>
										</p>
									</div>
									<div class="portrait">
										<p>
											<picture>
												<?php $image = get_sub_field('portrait'); ?>
											  <source media="(min-width: 1200px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'large' )[0]; ?>">
												<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'medium' )[0]; ?>">
											  <img src="<?php echo wp_get_attachment_image_src( $image, 'small' )[0]; ?>">
											</picture>
										</p>
									</div>
									<div class="bio">
										<?php the_sub_field('bio'); ?>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</section>

			<section class="people">
				<?php $index=0; ?>
				<?php if( have_rows('person') ): ?>
					<?php while ( have_rows('person') ) : the_row(); ?>
						<div class="person">
							<div class="name">
								<p class="set-back"><?php the_sub_field('name'); ?></p>
							</div>
							<div class="portrait modal-toggle">
								<p>
									<button data-index="<?php echo $index++; ?>">
										<picture>
											<?php $image = get_sub_field('portrait'); ?>
										  <source media="(min-width: 1800px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'large' )[0]; ?>">
											<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'medium' )[0]; ?>">
										  <img src="<?php echo wp_get_attachment_image_src( $image, 'small' )[0]; ?>">
										</picture>
									</button>
								</p>
							</div>
							<div class="credentials">
								<p>
									<small><?php the_sub_field('credentials'); ?></small>
								</p>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</section>

		<?php endwhile; ?>

	</main>

	<script>

		(function ($, root, undefined) {

			$(function () {

				var $scrollTop;

				$(window).load(function(){
					init();
				});

				var requestAnimationFrame = (function(){
				 return  window.requestAnimationFrame       ||
								 window.webkitRequestAnimationFrame ||
								 window.mozRequestAnimationFrame    ||
								 window.oRequestAnimationFrame      ||
								 window.msRequestAnimationFrame     ||
								 function(callback, element){
										 window.setTimeout(callback, 1000 / 60);
								 };
				 })();

				var init = function(time) {
					$(".modal-toggle button").on("click", function() {
						var index = $(this).attr("data-index");
						$(".modals .person").eq(index).addClass("show");
					});

					$(".modal-close button").on("click", function() {
						$(".modals .person").removeClass("show");
					});

					animate();
				}

				var animate = function(time) {
					requestAnimationFrame( animate );
					$scrollTop = $(document).scrollTop();

					if($scrollTop > $(window).height()) {
					} else {
					}
				}

			});

		})(jQuery, this);

	</script>

<?php get_footer(); ?>
