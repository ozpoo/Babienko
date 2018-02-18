<?php get_header(); ?>

	<main role="main">

		<section>

			<section class="wrap">
			  <div class="window">
			    <div class="flky">
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
										<!-- <source media="(min-width: 2000px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'x-large' )[0]; ?>">
									  <source media="(min-width: 1600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'large' )[0]; ?>">
										<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'medium' )[0]; ?>"> -->
									  <img draggable="false" data-flickity-lazyload="<?php echo wp_get_attachment_image_src( $image, 'large' )[0]; ?>">
									</picture>
									<div class="title">
										<p><?php the_title(); ?></p>
									</div>
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
					<li class="contact-toggle"><a href="mailto:contact@studiobarc.com">contact@studiobarc.com <i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				</ul>
			</section>

			<section class="grid-wrap">
				<div class="grid">
					<?php
						$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
						$args = array(
							'post_type'				=> 'build',
							'posts_per_page'	=> -1,
							'paged' => $paged
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
											  <!-- <source media="(min-width: 1800px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_landscape' )[0]; ?>">
												<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_landscape' )[0]; ?>"> -->
											  <img
													class="lazy"
													data-src="<?php echo wp_get_attachment_image_src( $image, 'thumb_landscape' )[0]; ?>"
													src="<?php echo wp_get_attachment_image_src( $image, 'thumb_landscape_micro' )[0]; ?>">
											</picture>
											<div class="title">
												<p><?php the_title(); ?></p>
											</div>
										</a>
									</figure>
								<?php elseif(($count+1) % 3 == 0): ?>
									<?php $image = get_field('home_grid_landscape'); ?>
									<figure>
										<a href="<?php the_permalink(); ?>">
											<picture>
											  <!-- <source media="(min-width: 1800px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_square' )[0]; ?>">
												<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_square' )[0]; ?>"> -->
											  <img
													class="lazy"
													data-src="<?php echo wp_get_attachment_image_src( $image, 'thumb_square' )[0]; ?>"
													src="<?php echo wp_get_attachment_image_src( $image, 'thumb_square_micro' )[0]; ?>">
											</picture>
											<div class="title">
												<p><?php the_title(); ?></p>
											</div>
										</a>
									</figure>
								<?php elseif(($count+2) % 3 == 0): ?>
									<?php $image = get_field('home_grid_portrait'); ?>
									<figure>
										<a href="<?php the_permalink(); ?>">
											<picture>
											  <!-- <source media="(min-width: 1800px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_portrait' )[0]; ?>">
												<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $image, 'thumb_portrait' )[0]; ?>"> -->
											  <img
													class="lazy"
													data-src="<?php echo wp_get_attachment_image_src( $image, 'thumb_portrait' )[0]; ?>"
													src="<?php echo wp_get_attachment_image_src( $image, 'thumb_portrait_micro' )[0]; ?>">
											</picture>
											<div class="title">
												<p><?php the_title(); ?></p>
											</div>
										</a>
									</figure>
								<?php endif; ?>
							</div>
						<?php $count++; ?>
					<?php endwhile; ?>
				</div>
			</section>

			<?php
				$total = $the_query->max_num_pages;
				if ( $total > 1 )  {
					if ( !$current_page = get_query_var('paged') ) {
						$current_page = 1;
					}
					$format = 'page/%#%/';
					echo paginate_links(array(
						'base'     => get_pagenum_link(1) . '%_%',
						'format'   => $format,
						'current'  => $current_page,
						'total'    => $total,
						'mid_size' => 4,
						'type'     => 'list'
					));
				}
			?>
			<?php wp_reset_query(); ?>

		</section>

	</main>

	<script>

		(function ($, root, undefined) {

			$(function () {

				$(window).load(function() {
					init();
					lazyLoad();
				});

			 var init = function(time) {
				 initCarousel();
				 initMasonry();
 				 animate();
 				}

				 var initCarousel = function() {

					 var flky = new Flickity( '.flky', {
 						accessibility: true,
 						adaptiveHeight: true,
 						autoPlay: false,
 						cellAlign: 'center',
 						cellSelector: undefined,
 						contain: false,
 						draggable: false,
 						dragThreshold: 3,
 						freeScroll: false,
 						selectedAttraction: 0.1,
 						friction: 1,
 						groupCells: false,
 						initialIndex: 1,
 						lazyLoad: 1,
 						percentPosition: true,
 						prevNextButtons: false,
 						pageDots: true,
 						resize: true,
 						rightToLeft: false,
 						setGallerySize: true,
 						watchCSS: false,
 						wrapAround: true
 					});

 					$(".project a").on("click", function(ev){
 		        ev.preventDefault();
 						var el = $(this).closest(".project");
 						var projects = $(".project ");
 						var length = flky.slides.length;
 						var current = flky.selectedIndex;
 						var next = $(projects).index($(el));

 						if(next == current) {
							window.location.href = $(this).attr("href");
 							// Special case
 						} else if(current == 0) {
 							if(next == (length-1)) {
 								flky.previous();
 							} else {
 								flky.next();
 							}
 							// Special case
 						} else if(current == (length-1)) {
 							if(next == 0 ) {
 								flky.next();
 							} else {
 								flky.previous();
 							}
 						} else if(next < current) {
 							flky.previous();
 						} else if(next > current) {
 							flky.next();
 						}
 			    });

					 // Set varialbes
					//  var $carousel, $threshold, $slideWidth, $dragStart, $dragEnd;
					//  $carousel = $('.carousel');
					//  $threshold = 150;
					//  $slideWidth = $(".slide").innerWidth();
					//
					// $('.next button').click(function(){ shiftSlide(-1) });
					// $('.prev button').click(function(){ shiftSlide(1) });
					//
					// $(document).on("click", ".left a", function(ev){
					// 	ev.preventDefault();
					// 	shiftSlide(1);
					// });
					//
					// $(document).on("click", ".right a", function(ev){
					// 	ev.preventDefault();
					// 	shiftSlide(-1);
					// });
					//
					// $('.slide').eq(0).addClass("left");
					// $('.slide').eq(2).addClass("right");
					//
					// // Set responsive slide width
					// $(window).resize(function() {
					// 	$slideWidth = $(".slide").innerWidth();
					// });
					//
					// function shiftSlide(direction) {
					//   if ($carousel.hasClass('transition')) return;
					//   $dragEnd = $dragStart;
					//   $carousel.addClass('transition').css('transform','translateX(' + (direction * $slideWidth) + 'px)');
					//   setTimeout(function(){
					//     if (direction === 1) {
					//       $('.slide:first').before($('.slide:last'));
					//     } else if (direction === -1) {
					//       $('.slide:last').after($('.slide:first'));
					//     }
					//     $carousel.removeClass('transition')
					// 		$carousel.css('transform','translateX(0px)');
					// 		$('.slide').removeClass("left");
					// 		$('.slide').removeClass("right");
					// 		$('.slide').eq(0).addClass("left");
					// 		$('.slide').eq(2).addClass("right");
					//   }, 880);
					// }
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

			  var $q = function(q, res){
			        if (document.querySelectorAll) {
			          res = document.querySelectorAll(q);
			        } else {
			          var d=document
			            , a=d.styleSheets[0] || d.createStyleSheet();
			          a.addRule(q,'f:b');
			          for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
			            l[b].currentStyle.f && c.push(l[b]);

			          a.removeRule(0);
			          res = c;
			        }
			        return res;
			      }
			    , addEventListener = function(evt, fn){
			        window.addEventListener
			          ? this.addEventListener(evt, fn, false)
			          : (window.attachEvent)
			            ? this.attachEvent('on' + evt, fn)
			            : this['on' + evt] = fn;
			      }
			    , _has = function(obj, key) {
			        return Object.prototype.hasOwnProperty.call(obj, key);
			      }
			    ;

			  function loadImage (el, fn) {
			    var img = new Image()
			      , src = el.getAttribute('data-src');
			    img.onload = function() {
			      if (!! el.parent)
			        el.parent.replaceChild(img, el)
			      else
			        el.src = src;

			      fn? fn() : null;
			    }
			    img.src = src;
			  }

			  function elementInViewport(el) {
			    var rect = el.getBoundingClientRect()

			    return (
			       rect.top    >= 0
			    && rect.left   >= 0
			    && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
			    )
			  }

			    var images = new Array()
			      , query = $q('img.lazy')
			      , processScroll = function(){
			          for (var i = 0; i < images.length; i++) {
			            if (elementInViewport(images[i])) {
			              loadImage(images[i], function () {
			                images.splice(i, i);
			              });
			            }
			          };
			        }
			      ;
			    // Array.prototype.slice.call is not callable under our lovely IE8
			    for (var i = 0; i < query.length; i++) {
			      images.push(query[i]);
			    };

			    processScroll();
			    addEventListener('scroll',processScroll);

			});

		})(jQuery, this);

	</script>

<?php get_footer(); ?>
