<?php get_header(); ?>

	<main role="main">

		<section>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?>>

				<section class="intro">

						<div class="parent-container">
					    <div class="parent">
								<section class="header white">

									<div class="logo">
											<a href="<?php echo site_url( '/', 'http' ); ?>">
												<svg version="1.1"
													 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
													 x="0px" y="0px" width="131.4px" height="21.4px" viewBox="0 0 131.4 21.4" style="enable-background:new 0 0 131.4 21.4;"
													 xml:space="preserve">
													<path class="st0" d="M0,21V0.4h1.9v8.3c0.8-1,1.7-1.7,2.7-2.2c1-0.5,2.1-0.7,3.3-0.7c2.1,0,3.9,0.8,5.4,2.3
														c1.5,1.5,2.2,3.4,2.2,5.6c0,2.2-0.8,4-2.3,5.5c-1.5,1.5-3.3,2.3-5.4,2.3c-1.2,0-2.3-0.3-3.3-0.8s-1.9-1.3-2.6-2.3V21H0z M7.7,19.5
														c1.1,0,2-0.3,2.9-0.8c0.9-0.5,1.6-1.3,2.1-2.2c0.5-0.9,0.8-2,0.8-3c0-1.1-0.3-2.1-0.8-3c-0.5-1-1.3-1.7-2.2-2.2
														C9.7,7.7,8.7,7.5,7.7,7.5c-1,0-2,0.3-3,0.8C3.8,8.8,3,9.5,2.5,10.4s-0.8,1.9-0.8,3c0,1.7,0.6,3.2,1.7,4.3C4.6,19,6,19.5,7.7,19.5z"
														/>
													<path class="st0" d="M34.4,6.1V21h-1.9v-2.6c-0.8,1-1.7,1.7-2.7,2.2s-2.1,0.7-3.3,0.7c-2.1,0-3.9-0.8-5.4-2.3
														c-1.5-1.5-2.2-3.4-2.2-5.6c0-2.1,0.8-4,2.3-5.5c1.5-1.5,3.3-2.3,5.4-2.3c1.2,0,2.3,0.3,3.3,0.8c1,0.5,1.9,1.3,2.6,2.3V6.1H34.4z
														 M26.7,7.6c-1.1,0-2,0.3-2.9,0.8c-0.9,0.5-1.6,1.3-2.2,2.2c-0.5,0.9-0.8,1.9-0.8,3c0,1,0.3,2,0.8,3c0.5,1,1.3,1.7,2.2,2.2
														s1.9,0.8,2.9,0.8c1,0,2-0.3,3-0.8c0.9-0.5,1.7-1.2,2.2-2.1s0.8-1.9,0.8-3c0-1.7-0.6-3.2-1.7-4.3C29.8,8.2,28.4,7.6,26.7,7.6z"/>
													<path class="st0" d="M39.3,21V0.4h1.9v8.3C42.1,7.7,43,7,44,6.5c1-0.5,2.1-0.7,3.3-0.7c2.1,0,3.9,0.8,5.4,2.3
														c1.5,1.5,2.2,3.4,2.2,5.6c0,2.2-0.8,4-2.3,5.5c-1.5,1.5-3.3,2.3-5.4,2.3c-1.2,0-2.3-0.3-3.3-0.8s-1.9-1.3-2.6-2.3V21H39.3z
														 M47,19.5c1.1,0,2-0.3,2.9-0.8c0.9-0.5,1.6-1.3,2.1-2.2c0.5-0.9,0.8-2,0.8-3c0-1.1-0.3-2.1-0.8-3s-1.3-1.7-2.2-2.2S48.1,7.5,47,7.5
														c-1,0-2,0.3-3,0.8c-0.9,0.5-1.7,1.3-2.2,2.2c-0.5,0.9-0.8,1.9-0.8,3c0,1.7,0.6,3.2,1.7,4.3C44,19,45.3,19.5,47,19.5z"/>
													<path class="st0" d="M59.5,0c0.4,0,0.8,0.2,1.1,0.5c0.3,0.3,0.5,0.7,0.5,1.1c0,0.4-0.2,0.8-0.5,1.1C60.4,3,60,3.2,59.5,3.2
														c-0.4,0-0.8-0.2-1.1-0.5C58.1,2.4,58,2,58,1.6c0-0.4,0.2-0.8,0.5-1.1C58.8,0.2,59.1,0,59.5,0z M58.6,6.1h1.9V21h-1.9V6.1z"/>
													<path class="st0" d="M78.1,16.1l1.6,0.8c-0.5,1-1.1,1.9-1.8,2.5c-0.7,0.6-1.5,1.1-2.3,1.5s-1.8,0.5-2.9,0.5c-2.4,0-4.3-0.8-5.7-2.4
														c-1.4-1.6-2.1-3.4-2.1-5.4c0-1.9,0.6-3.6,1.7-5c1.5-1.9,3.4-2.8,5.9-2.8c2.5,0,4.6,1,6.1,2.9c1.1,1.4,1.6,3.1,1.6,5.1H66.9
														c0,1.7,0.6,3.1,1.7,4.2c1.1,1.1,2.4,1.7,4,1.7c0.8,0,1.5-0.1,2.2-0.4c0.7-0.3,1.3-0.6,1.8-1S77.5,17,78.1,16.1z M78.1,12.1
														c-0.3-1-0.6-1.8-1.1-2.4c-0.5-0.6-1.1-1.1-1.9-1.5c-0.8-0.4-1.6-0.6-2.5-0.6c-1.5,0-2.7,0.5-3.8,1.4c-0.8,0.7-1.3,1.7-1.7,3.1H78.1
														z"/>
													<path class="st0" d="M84.4,6.1h1.9v2.7c0.8-1,1.6-1.8,2.5-2.3s1.9-0.8,3-0.8c1.1,0,2.1,0.3,3,0.8c0.9,0.6,1.5,1.3,1.9,2.3
														s0.6,2.4,0.6,4.5V21h-1.9v-7.1c0-1.7-0.1-2.9-0.2-3.4c-0.2-1-0.6-1.7-1.3-2.2c-0.6-0.5-1.4-0.7-2.5-0.7c-1.2,0-2.2,0.4-3.1,1.1
														s-1.5,1.7-1.8,2.8c-0.2,0.7-0.3,2.1-0.3,4V21h-1.9V6.1z"/>
													<path class="st0" d="M102.5,0.4h1.9v11.7l6.9-6h2.8l-8.2,7.1l8.7,7.8H112l-7.5-6.7V21h-1.9V0.4z"/>
													<path class="st0" d="M123.7,5.7c2.3,0,4.2,0.8,5.7,2.5c1.4,1.5,2.1,3.3,2.1,5.4c0,2.1-0.7,3.9-2.2,5.4c-1.4,1.6-3.3,2.3-5.6,2.3
														c-2.3,0-4.1-0.8-5.6-2.3c-1.4-1.6-2.2-3.4-2.2-5.4c0-2.1,0.7-3.8,2.1-5.4C119.5,6.6,121.4,5.7,123.7,5.7z M123.7,7.6
														c-1.6,0-3,0.6-4.1,1.8c-1.1,1.2-1.7,2.6-1.7,4.3c0,1.1,0.3,2.1,0.8,3s1.2,1.6,2.1,2.2c0.9,0.5,1.9,0.8,2.9,0.8c1.1,0,2-0.3,2.9-0.8
														c0.9-0.5,1.6-1.2,2.1-2.2c0.5-0.9,0.8-1.9,0.8-3c0-1.7-0.6-3.1-1.7-4.3S125.2,7.6,123.7,7.6z"/>
												</svg>
											</a>
									</div>

									<div class="menu-toggle">
											<button>
												<svg version="1.1"
													 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
													 x="0px" y="0px" width="35px" height="19.3px" viewBox="0 0 35 19.3" style="enable-background:new 0 0 35 19.3;"
													 xml:space="preserve">

												<line class="st3" x1="0" y1="1" x2="35" y2="1"/>
												<line class="st3" x1="0" y1="9.7" x2="35" y2="9.7"/>
												<line class="st3" x1="0" y1="18.3" x2="35" y2="18.3"/>
												</svg>
											</button>
									</div>

								</section>
							</div>
						</div>

					<figure>
						<?php $image = get_field( "single_project_hero" ); ?>
						<img
							draggable="false"
							alt=""
							src="<?php echo wp_get_attachment_image_src($image, 'small')[0]; ?>"
							sizes="auto"
							data-srcset="<?php echo wp_get_attachment_image_srcset($image, 'large'); ?>"
							class="lazyload blur-up" />
					</figure>
				</section>

				<?php
					// if filter parameter is set get next an previous posts with the same category
					$post_id = $post->ID; // current post ID
					if (isset($_GET['filter'])) {
						$cat = get_the_category();
						$current_cat_id = $cat[0]->cat_ID; // current category ID
						$args = array(
					    'category' => $current_cat_id,
					    'orderby'  => 'menu_order',
					    'order'    => 'DESC',
							'post_type' => 'build',
							'posts_per_page' => -1
						);
						$filter = "?filter=" . $_GET['filter'];
					} else {
						$args = array(
					    'orderby'  => 'menu_order',
					    'order'    => 'DESC',
							'post_type' => 'build',
							'posts_per_page' => -1
						);
					}

					$posts = get_posts( $args );
					// get IDs of posts retrieved from get_posts
					$ids = array();
					foreach ( $posts as $thepost ) {
				    $ids[] = $thepost->ID;
					}
					// get and echo previous and next post in the same category
					$thisindex = array_search( $post_id, $ids );
					$previd    = isset( $ids[ $thisindex - 1 ] ) ? $ids[ $thisindex - 1 ] : $ids[ count($ids)-1 ];
					$nextid    = isset( $ids[ $thisindex + 1 ] ) ? $ids[ $thisindex + 1 ] : $ids[0];

					if ( $previd ) {
				    $prevPost = get_the_permalink($previd) . $filter;
					}
					if ( $nextid ) {
						$nextPost = get_the_permalink($nextid) . $filter;
					}
				?>

				<section class="sub-menu-left">
					<ul>
						<li class="mobile left"><a href="<?php echo $prevPost; ?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></li>
						<li class="description-toggle"><button><span class="not-mobile"><i class="fa fa-question" aria-hidden="true"></i> </span>Description</button></li>
						<li class="share-toggle"><button><span class="not-mobile"><i class="fa fa-share not-mobile" aria-hidden="true"></i> </span>Share</button></li>
						<li class="mobile right"><a href="<?php echo $nextPost; ?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
					</ul>
				</section>

				<section class="sub-menu-right">
					<ul>
						<li><a href="<?php echo $nextPost; ?>">Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo $prevPost; ?>">Previous <i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></li>
					</ul>
				</section>

				<section class="project-grid">
					<?php $images = get_field('single_project_grid'); ?>
	        <?php foreach( $images as $image ): ?>
						<figure>
							<img
								draggable="false"
								alt=""
								src="<?php echo wp_get_attachment_image_src($image[ID], 'micro')[0]; ?>"
								sizes="auto"
								data-srcset="<?php echo wp_get_attachment_image_srcset($image[ID], 'full'); ?>"
								class="lazyload blur-up" />
						</figure>
	        <?php endforeach; ?>
				</section>

			</article>

			<section class="description">
				<div class="content">
					<div class="description-toggle">
						<p>
							<span class="spin">
								<button class="spinner">
									<span class="one"></span>
									<span class="two"></span>
								</button>
							</span>
						</p>
					</div>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</section>

			<section class="share">
				<div class="share-container">
					<div class="content">
						<div class="modal-close">
							<p>
								<span class="spin">
									<button class="spinner">
										<span class="one"></span>
										<span class="two"></span>
									</button>
								</span>
							</p>
						</div>
						<ul>
							<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>">Facebook</a></li>
							<li><a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=Babienko">Twitter</a></li>
							<li><a href="https://pinterest.com/pin/create/bookmarklet/?media=[post-img]&url=<?php the_permalink(); ?>&description=<?php the_title(); ?>">Pinterest</a>
						</ul>
					</div>
				</div>
			</section>

		<?php endwhile; ?>

		</section>

	</main>

	<script>

		(function ($, root, undefined) {

			$(function () {

				var $scrollTop, images, query;

				$(window).load(function(){
					init();
				});

				var init = function(time) {
					setListeners();
					initScroll();
					reveal();
					animate();
				}

				var reveal = function() {
					setTimeout(function(){
						$(".intro img").addClass("color");
					}, 2660);
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

				var setListeners = function() {
					$(".description-toggle button").on("click", function() {
						$(".description").toggleClass("show");
					});

					$('.share-toggle').click(function(){
						$(".share").addClass("show");
					});
					$('.modal-close').click(function(){
						$(".share").removeClass("show");
					});
				};

				var animate = function(time) {
					requestAnimationFrame( animate );
					$scrollTop = $(document).scrollTop();

					if($scrollTop > $(window).height()*.5) {
						$(".sub-menu, .sub-menu-left, .sub-menu-middle, .sub-menu-right").addClass("show");

					} else {
						$(".sub-menu, .sub-menu-left, .sub-menu-middle, .sub-menu-right").removeClass("show");
					}
				};

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
		      }, addEventListener = function(evt, fn){
		        window.addEventListener
		          ? this.addEventListener(evt, fn, false)
		          : (window.attachEvent)
		            ? this.attachEvent('on' + evt, fn)
		            : this['on' + evt] = fn;
		      }, _has = function(obj, key) {
		        return Object.prototype.hasOwnProperty.call(obj, key);
		      };

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
			  };

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
