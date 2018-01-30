<?php get_header(); ?>

	<main role="main">

		<section>

			<section class="slider">
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
				<div class="slider-viewport animate">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<figure class="project" data-index="<?php echo $count++; ?>">
							<a href="<?php the_permalink(); ?>">
								<picture>
									<?php $image = get_field( "home_feature_slider_image" ); ?>
									<source media="(min-width: 2000px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'x-large' )[0]; ?>">
								  <source media="(min-width: 1600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'large' )[0]; ?>">
									<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'medium' )[0]; ?>">
								  <img src="<?php echo wp_get_attachment_image_src( $image, 'thumb_square' )[0]; ?>">
								</picture>
								<div class="title">
									<div class="text">
										<?php the_title(); ?>
									</div>
								</div>
							</a>
						</figure>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_query(); ?>
			</section>

			<section class="sub-menu">
				<ul class="filter">
					<li class="all"><button class="current" data-filter="*"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> All</button></li>
					<li class="residence"><button data-filter=".Residence"><i class="fa fa-circle-o" aria-hidden="true"></i> Residence</button></li>
					<li class="non-residence"><button data-filter=".Non-Residence"><i class="fa fa-circle-o" aria-hidden="true"></i> Non-Residence</button></li>
					<li class="in-progress"><button data-filter=".In-Progress"><i class="fa fa-circle-o" aria-hidden="true"></i> In-Progress</button></li>
				<ul>
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
						<div class="grid-item <?php echo esc_html( $categories[0]->name ); ?>" data-category="<?php echo esc_html( $categories[0]->name ); ?>">
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
								<div class="title">
									<div class="text">
										<?php the_title(); ?>
									</div>
								</div>
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

				var $scrollTop;

				$(window).load(function() {
					init();
				});

			 var init = function(time) {

				 initSlider();

					$('.filter button').on( 'click', function() {
						var filterValue = $(this).attr('data-filter');
						// $iso.isotope({ filter: filterValue });
						$(".current").removeClass("current");
						$(this).addClass("current");
					});

 				 animate();
 				}

				var animate = function(time) {
					requestAnimationFrame( animate );
					$scrollTop = $(document).scrollTop();

					if($scrollTop > $(window).height()*.25) {
						$(".sub-menu").addClass("show");
					} else {
						$(".sub-menu").removeClass("show");
					}
				}

				function initSlider() {

					// Set initial selected
					$(".project").eq(0).addClass("is-selected");
					$(".project").eq(3).addClass("hide");
					$(".project").eq(4).addClass("hide");

					$('.grid').masonry({
					  itemSelector: '.grid-item',
					  percentPosition: true,
					});

					// Set click event
					$(document).on("click", ".project a", function (ev) {
						var proj = $(this).closest(".project");
						if(!$(proj).hasClass("is-selected")){
							ev.preventDefault();
							sliderSelect();
						}
					});

				}

				function sliderSelect() {

					var deltaX = $(".project").innerWidth();

					$(".slider-viewport").append($(".project").eq(0).clone().addClass("hide"));
					$(".is-selected").removeClass("is-selected");
					$(".slider-viewport").css("transform", "translate3d(-"+deltaX+"px, 0, 0)");

					setTimeout(function(){
						$(".slider-viewport").removeClass("animate");
						$(".slider-viewport").css("transform", "translate3d(0, 0, 0)");
						$(".project").eq(0).remove();
						setTimeout(function(){
							$(".slider-viewport").addClass("animate");
							$(".project").eq(0).addClass("is-selected");
							$(".project").eq(2).removeClass("hide");
						}, 10);
					}, 880);

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
