<?php get_header(); ?>

	<main role="main">

		<?php while (have_posts()) : the_post(); ?>

			<section class="left">
				<div class="container">
					<p class="set-back">contact</p>
					<small>
						<p><?php echo get_field("address"); ?></p>
						<p>
								<a href="mailto:<?php echo get_field("email"); ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo get_field("email"); ?></a>
						</p>
						<p><?php echo get_field("phone"); ?></p>
					</small>
				</div>
				<div class="container">
					<p class="set-back">Social</p>
					<small>
						<div class="social-links">
							<div>
								<p>
									<a href="<?php echo get_field("instagram"); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a><br>
									<a href="<?php echo get_field("twitter"); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a><br>
									<a href="<?php echo get_field("houzz"); ?>" target="_blank"><i class="fa fa-houzz" aria-hidden="true"></i> Houzz</a>
								</p>
							</div>
							<div>
								<p>
									<a href="<?php echo get_field("facebook"); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a><br>
									<a href="<?php echo get_field("linkedin"); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a>
								</p>
							</div>
						</div>
					</small>
				</div>
			</section>

			<section class="right">
				<p class="set-back">news</p>
				<?php $count = 0; ?>
				<?php
				$args = array(
				'post_type'=> 'news',
				'order'    => 'ASC',
				'posts_per_page' => -1
				);
				$the_query = new WP_Query( $args );
				if($the_query->have_posts() ) : while ( $the_query->have_posts() ) :
					$the_query->the_post();
					$title = get_the_title();
					$content = get_the_content();
					$thumb = get_post_thumbnail_id();
					$date = get_the_date("m.d.Y");
				?>
					<div class="news-post">
						<p>
							<small class="double set-back"><?php echo $date; ?></small>
						</p>
						<p class="title"><?php echo $title; ?></p>
						<p>
							<picture>
								<source media="(min-width: 1800px)" srcset="<?php echo wp_get_attachment_image_src( $thumb, 'large' )[0]; ?>">
								<source media="(min-width: 1000px)" srcset="<?php echo wp_get_attachment_image_src( $thumb, 'medium' )[0]; ?>">
								<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $thumb, 'small' )[0]; ?>">
								<img src="<?php echo wp_get_attachment_image_src( $thumb, 'medium' )[0]; ?>">
							</picture>
						</p>
						<p><small><button class="more-toggle">read more</button></small></p>
						<div class="more">
							<?php echo $content; ?>
						</div>
					</div>
				<?php endwhile; endif; ?>
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
					$(".more-toggle").on("click", function() {
						$(this).closest(".news-post").find(".more").slideToggle();
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
