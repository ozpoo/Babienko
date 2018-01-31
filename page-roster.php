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
											<button>
												<svg version="1.1"
													 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
													 x="0px" y="0px" width="35px" height="19.3px" viewBox="0 0 35 19.3" style="enable-background:new 0 0 35 19.3;"
													 xml:space="preserve">

												<line class="st4" x1="0" y1="1" x2="35" y2="1"/>
												<line class="st4" x1="0" y1="9.7" x2="35" y2="9.7"/>
												<line class="st4" x1="0" y1="18.3" x2="35" y2="18.3"/>
												</svg>
											</button>
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
									<!-- <div class="portrait">
										<p>
											<picture>
												<?php $image = get_sub_field('portrait'); ?>
											  <img src="<?php echo wp_get_attachment_image_src( $image, 'thumb_square' )[0]; ?>">
											</picture>
										</p>
									</div> -->
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
								<p class="set-back"><?php the_sub_field('name'); ?> &mdash; <small><?php the_sub_field('credentials'); ?></small></p>
							</div>
							<div class="portrait modal-toggle">
								<p>
									<button data-index="<?php echo $index++; ?>">
										<picture>
											<?php $image = get_sub_field('portrait'); ?>
										  <img src="<?php echo wp_get_attachment_image_src( $image, 'thumb_square' )[0]; ?>">
										</picture>
									</button>
								</p>
							</div>
							<!-- <div class="credentials">
								<p>
									<small><?php the_sub_field('credentials'); ?></small>
								</p>
							</div> -->
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
