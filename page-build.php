<?php get_header(); ?>

	<main role="main">

		<section>

			<section class="flky">
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
				<?php wp_reset_query(); ?>
			</section>

			<section class="sub-menu">
				<ul class="filter">
					<li class="all"><button class="current" data-filter="*">All</button></li>
					<li class="residence"><button data-filter=".Residence">Residence</button></li>
					<li class="non-residence"><button data-filter=".Non-Residence">Non-Residence</button></li>
					<li class="in-progress"><button data-filter=".In-Progress">In-Progress</button></li>
				<ul>
			</section>

			<section class="iso-wrap">
				<div class="iso">
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
						<div class="iso-cell <?php echo esc_html( $categories[0]->name ); ?>" data-category="<?php echo esc_html( $categories[0]->name ); ?>">
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

				var $scrollTop, $flky, $iso;

				$(window).load(function() {
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
					 $flky = new Flickity( '.flky', {
		 			  accessibility: true,
		 			  adaptiveHeight: false,
		 			  autoPlay: false,
		 			  cellAlign: 'left',
		 			  cellSelector: undefined,
		 			  contain: false,
		 			  draggable: false,
		 			  dragThreshold: 3,
		 			  freeScroll: false,
						selectedAttraction: 0.12,
		 			  friction: 1,
		 			  groupCells: false,
		 			  initialIndex: 0,
		 			  lazyLoad: false,
		 			  percentPosition: true,
		 			  prevNextButtons: false,
		 			  pageDots: false,
		 			  resize: true,
		 			  rightToLeft: false,
		 			  setGallerySize: false,
		 			  watchCSS: false,
		 			  wrapAround: true
		 			});

					$(".project").removeClass("left");
					$(".project").removeClass("right");

					if(($flky.selectedIndex-1) < 0){
						$(".project").eq($flky.slides.length-1).addClass("left");
					} else {
						$(".project").eq($flky.selectedIndex-1).addClass("left");
					}
					if(($flky.selectedIndex+1) > ($flky.slides.length-1)) {
						$(".project").eq(0).addClass("right");
					} else {
						$(".project").eq($flky.selectedIndex+1).addClass("right");
					}

					$(".project a").on("click", function (ev) {
						if(!$(this).closest(".project").hasClass("is-selected")){
							ev.preventDefault();
							var index = $(this).closest("figure").data("index");
							$flky.select(index);
						} else {
							ev.preventDefault();
							$("body").removeClass("show");
							window.location.href = $(this).attr("href");
						}
					});

		 			$iso = $('.iso').isotope({
		 			  itemSelector: '.iso-cell',
		 				percentPosition: true,
		 				masonry: {
		 			    columnWidth: '.iso-cell'
		 			  }
		 			});

		 			$iso.imagesLoaded().progress( function() {
		 			  $iso.isotope('layout');
		 			});

					$('.filter button').on( 'click', function() {
						var filterValue = $(this).attr('data-filter');
						$iso.isotope({ filter: filterValue });
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

			});

		})(jQuery, this);

	</script>

<?php get_footer(); ?>
