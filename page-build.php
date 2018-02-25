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
									<?php $image = get_field( "home_feature_slider_image" ); ?>
									<img
										draggable="false"
										alt=""
										src="<?php echo wp_get_attachment_image_src($image, 'micro')[0]; ?>"
										sizes="auto"
										data-srcset="<?php echo wp_get_attachment_image_srcset($image, 'large'); ?>"
										class="lazyload blur-up" />
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
											<img
												draggable="false"
												alt=""
												src="<?php echo wp_get_attachment_image_src($image, 'thumb_landscape_micro')[0]; ?>"
												sizes="auto"
												data-srcset="<?php echo wp_get_attachment_image_srcset($image, 'thumb_landscape'); ?>"
												class="lazyload blur-up" />
											<div class="title">
												<p><?php the_title(); ?></p>
											</div>
										</a>
									</figure>
								<?php elseif(($count+1) % 3 == 0): ?>
									<?php $image = get_field('home_grid_landscape'); ?>
									<figure>
										<a href="<?php the_permalink(); ?>">
											<img
												draggable="false"
												alt=""
												src="<?php echo wp_get_attachment_image_src($image, 'thumb_square_micro')[0]; ?>"
												sizes="auto"
												data-srcset="<?php echo wp_get_attachment_image_srcset($image, 'thumb_square'); ?>"
												class="lazyload blur-up" />
											<div class="title">
												<p><?php the_title(); ?></p>
											</div>
										</a>
									</figure>
								<?php elseif(($count+2) % 3 == 0): ?>
									<?php
										$image = get_field('home_grid_portrait');
										if(!$image):
											$image = get_field('home_grid_landscape');
										endif;
									?>
									<figure>
										<a href="<?php the_permalink(); ?>">
											<img
												draggable="false"
												alt=""
												src="<?php echo wp_get_attachment_image_src($image, 'thumb_portrait_micro')[0]; ?>"
												sizes="auto"
												data-srcset="<?php echo wp_get_attachment_image_srcset($image, 'thumb_portrait'); ?>"
												class="lazyload blur-up" />
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

				var images, query;

				$(window).load(function() {
					init();
				});

			 var init = function(time) {
				 initCarousel();
				 initMasonry();
				 // initScroll();
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
 						lazyLoad: false,
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
				var initScroll = function() {
					images = [];
 					query = $q('img.lazy');
 				 // Array.prototype.slice.call is not callable under our lovely IE8
 				 for (var i = 0; i < query.length; i++) {
 					 images.push(query[i]);
 				 };
 				 processScroll();
 				 addEventListener('scroll',processScroll);
				}

				var processScroll = function(){
					for (var i = 0; i < images.length; i++) {
						if (elementInViewport(images[i])) {
							loadImage(images[i], function () {
								images.splice(i, i);
							});
						}
					};
				};

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
					if(!hasClass(el, "lazyLoading")) {
				    var img = new Image();
				    var src = el.getAttribute('data-src');

				    img.onload = function() {
				      if (!! el.parent) {
				        el.parent.replaceChild(img, el);
				      } else {
				        el.src = src;
								removeClass(el, "lazyLoading");
								el.className += " lazyLoaded";
								remove(images, el);
							}

				      fn? fn() : null;
				    }
				    img.src = src;
						el.className += " lazyLoading";
					}
			  }

			  function elementInViewport(el) {
			    var rect = el.getBoundingClientRect()

			    return (
			       rect.top    >= 0
			    && rect.left   >= 0
			    && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
			    )
			  }

				function hasClass(el, cls) {
			    return (' ' + el.className + ' ').indexOf(' ' + cls + ' ') > -1;
				}

				function removeClass(el, cls) {
	        if(hasClass(el, cls)) {
            var reg = new RegExp('(\\s|^)'+cls+'(\\s|$)');
            el.className = el.className.replace(reg,' ');
	        }
		    }

				function remove(array, element) {
			    const index = array.indexOf(element);
			    if (index !== -1) {
			        array.splice(index, 1);
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
