<?php get_header(); ?>

	<style>
		.single .intro {
			height: 100vh;
			width: 100vw;
		}
		.single .intro:after {
			display: none;
		}
		.single .intro figure {
			padding: 6vh 0;
		}
		.single .intro figure img {
			object-fit: contain;
		}
	</style>

	<main role="main">

		<section>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?>>

				<section class="intro">

					<figure>
						<picture>
							<?php
								$image = get_field( "single_project_hero" );
								if(!$image):
									$image = get_field('home_grid_landscape');
								endif;
							?>
							<img
								draggable="false"
								alt=""
								src="<?php echo wp_get_attachment_image_src($image, 'micro')[0]; ?>"
								sizes="auto"
								data-srcset="<?php echo wp_get_attachment_image_srcset($image, 'full'); ?>"
								class="lazyload blur-up" />
						</picture>
					</figure>
				</section>

				<?php
					// if filter parameter is set get next an previous posts with the same category
					$post_id = $post->ID; // current post ID
					if (isset($_GET['filter'])) {
						$cat = get_the_category();
						$current_cat_id = $cat[0]->cat_ID; // current category ID
						echo $current_cat_id;
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

				var $scrollTop;

				$(window).load(function(){
					init();
					setTimeout(function(){
						$(".sub-menu, .sub-menu-left, .sub-menu-middle, .sub-menu-right").addClass("show");
					}, 2400);
				});

				var init = function(time) {
					$(".description-toggle button").on("click", function() {
						$(".description").toggleClass("show");
					});

					$('.share-toggle').click(function(){
						$(".share").addClass("show");
					});
					$('.modal-close').click(function(){
						$(".share").removeClass("show");
					});
				}

			});

		})(jQuery, this);

	</script>

<?php get_footer(); ?>
