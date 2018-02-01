<?php get_header(); ?>

	<main role="main">

		<section>

			<section class="wrap">
			  <div class="window">
			    <div class="carousel">
						<?php
							$args = array(
						    'post_type'				=> 'build',
								'posts_per_page'	=> -1,
								'meta_key'		=> 'home_feature_slider',
								'meta_value'	=> 1
						    );
							$the_query = new WP_Query( $args );
						?>
						<?php $count=0; ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<figure class="project slide" data-index="<?php echo $count++; ?>">
								<a href="<?php the_permalink(); ?>">
									<picture>
										<?php $image = get_field( "home_feature_slider_image" ); ?>
										<source media="(min-width: 2000px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'x-large' )[0]; ?>">
									  <source media="(min-width: 1600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'large' )[0]; ?>">
										<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'medium' )[0]; ?>">
									  <img draggable="false" src="<?php echo wp_get_attachment_image_src( $image, 'thumb_square' )[0]; ?>">
									</picture>
								</a>
							</figure>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
			    </div>
			  </div>
				<div class="prev">
					<button>
						<svg version="1.1"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
							 x="0px" y="0px" width="61.4px" height="29.7px" viewBox="0 0 61.4 29.7" style="enable-background:new 0 0 61.4 29.7;"
							 xml:space="preserve">
						<line class="st3" x1="61.4" y1="14.8" x2="1.4" y2="14.8"/>
						<polyline class="st3" points="15.6,29 1.4,14.8 15.6,0.7 "/>
						</svg>
					</button>
				</div>
				<div class="next">
				  <button>
						<svg version="1.1"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
							 x="0px" y="0px" width="61.4px" height="29.7px" viewBox="0 0 61.4 29.7" style="enable-background:new 0 0 61.4 29.7;"
							 xml:space="preserve">
						<line class="st3" x1="0" y1="14.8" x2="60" y2="14.8"/>
						<polyline class="st3" points="45.9,0.7 60,14.8 45.9,29 "/>
						</svg>
					</button>
				</div>
			</section>

			<section class="sub-menu-left">
				<ul class="filters">
					<li class="selected">
						<label>
				      <input type="checkbox" value="all" >
				      <i class="fa" aria-hidden="true"></i> All
				    </label>
					</li>
					<li>
						<label>
				      <input type="checkbox" value="residence" >
				      <i class="fa" aria-hidden="true"></i> Residence
				    </label>
					</li>
					<li>
						<label>
				      <input type="checkbox" value="non-residence" >
				      <i class="fa" aria-hidden="true"></i> Non-Residence
				    </label>
					</li>
					<li>
						<label>
				      <input type="checkbox" value="in-progress" >
				      <i class="fa" aria-hidden="true"></i> In-Progress
				    </label>
					</li>
					<li>
						<label>
				      <input type="checkbox" value="details" >
				      <i class="fa" aria-hidden="true"></i> Details
				    </label>
					</li>
				<ul>
			</section>

			<section class="sub-menu-right">
				<ul>
					<li class="share-toggle"><button>Share <i class="fa fa-share" aria-hidden="true"></i></button></li>
					<li class="contact-toggle"><button>info@studiobarc.com <i class="fa fa-envelope" aria-hidden="true"></i></button></li>
				</ul>
			</section>

			<section class="grid-wrap">
				<div class="grid">
					<?php
						$args = array(
							'post_type'				=> 'build',
							'posts_per_page'	=> -1
					    );
						$the_query = new WP_Query( $args );
					?>
					<?php $count = 0; ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php $categories = get_the_category(); ?>
						<div class="grid-item all <?php echo strtolower(esc_html( $categories[0]->name )); ?>">
							<?php if($count % 3 == 0): ?>
								<?php $image = get_field('home_grid_landscape'); ?>
									<figure>
										<a href="<?php the_permalink(); ?>">
											<picture>
											  <source media="(min-width: 1800px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_landscape' )[0]; ?>">
												<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_landscape' )[0]; ?>">
											  <img src="<?php echo wp_get_attachment_image_src( $image, 'thumb_landscape' )[0]; ?>">
											</picture>
										</a>
									</figure>
								<?php elseif(($count+1) % 3 == 0): ?>
									<?php $image = get_field('home_grid_landscape'); ?>
									<figure>
										<a href="<?php the_permalink(); ?>">
											<picture>
											  <source media="(min-width: 1800px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_square' )[0]; ?>">
												<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_square' )[0]; ?>">
											  <img src="<?php echo wp_get_attachment_image_src( $image, 'thumb_square' )[0]; ?>">
											</picture>
										</a>
									</figure>
								<?php elseif(($count+2) % 3 == 0): ?>
									<?php $image = get_field('home_grid_portrait'); ?>
									<figure>
										<a href="<?php the_permalink(); ?>">
											<picture>
											  <source media="(min-width: 1800px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_portrait' )[0]; ?>">
												<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_portrait' )[0]; ?>">
											  <img src="<?php echo wp_get_attachment_image_src( $image, 'thumb_portrait' )[0]; ?>">
											</picture>
										</a>
									</figure>
								<?php endif; ?>
							</div>
						<?php $count++; ?>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</div>
			</section>

		</section>

	</main>

	<script>

		(function ($, root, undefined) {

			$(function () {

				$(window).load(function() {
					init();
				});

			 var init = function(time) {
				 initCarousel();
				 initMasonry();
 				 animate();
 				}

				 var initCarousel = function() {
					 // Set varialbes
					 var $carousel, $threshold, $slideWidth, $dragStart, $dragEnd;
					 $carousel = $('.carousel');
					 $threshold = 150;
					 $slideWidth = $(".slide").innerWidth();

					$('.next button').click(function(){ shiftSlide(-1) });
					$('.prev button').click(function(){ shiftSlide(1) });

					// Add control functionality
					// $carousel.on('mousedown', function(){
					//   if ($carousel.hasClass('transition')) return;
					//   $dragStart = event.pageX;
					//   $(this).on('mousemove', function(){
					//     $dragEnd = event.pageX;
					//     $(this).css('transform','translateX('+ dragPos() +'px)')
					//   });
					//   $(document).on('mouseup', function(){
					//     if (dragPos() > $threshold) { return shiftSlide(1) }
					//     if (dragPos() < -$threshold) { return shiftSlide(-1) }
					//     shiftSlide(0);
					//   });
					// });

					// Set responsive slide width
					$(window).resize(function() {
						$slideWidth = $(".slide").innerWidth();
					});

					function dragPos() {
					  return $dragEnd - $dragStart;
					}

					function shiftSlide(direction) {
					  if ($carousel.hasClass('transition')) return;
					  $dragEnd = $dragStart;
					  $(document).off('mouseup')
					  $carousel.off('mousemove')
					          .addClass('transition')
					          .css('transform','translateX(' + (direction * $slideWidth) + 'px)');
					  setTimeout(function(){
					    if (direction === 1) {
					      $('.slide:first').before($('.slide:last'));
					    } else if (direction === -1) {
					      $('.slide:last').after($('.slide:first'));
					    }
					    $carousel.removeClass('transition')
							$carousel.css('transform','translateX(0px)');
					  }, 880)
					}
				}

				var initMasonry = function() {
					// Init masonry grid and reload on imagesLoaded
					var $grid;
					$grid = $('.grid').filterMasonry({
					  itemSelector: '.grid-item',
						filtersGroupSelector:'.filters',
					  percentPosition: true,
					});
					$grid.imagesLoaded().progress( function() {
					  $grid.masonry('layout');
					});
				}

				var animate = function(time) {
					var $scrollTop;
					$scrollTop = $(document).scrollTop();
					requestAnimationFrame( animate );

					if($scrollTop > $(window).height()*.25) {
						$(".sub-menu-left, .sub-menu-right").addClass("show");
					} else {
						$(".sub-menu-left, .sub-menu-right").removeClass("show");
					}
				}

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

			});

		})(jQuery, this);

	</script>

<?php get_footer(); ?>
