<?php get_header(); ?>

	<main role="main">

		<?php while (have_posts()) : the_post(); ?>

			<section class="left">
				<div class="container">
					<p class="set-back">contact</p>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86099.1006992123!2d-122.39720878841203!3d47.59508218322076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906aa2d262c0a1%3A0x4371a70c6a931ad4!2sBabienko+Architects+Pllc!5e0!3m2!1sen!2sus!4v1518677596920" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

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
						<?php if(get_field("url")): ?>
							<p><small><a target="_blank" href="<?php echo get_field("url"); ?>" class="more-toggle">view now</button></small></a></p>
						<?php else: ?>
							<p><small><button class="more-toggle">read more</button></small></p>
						<?php endif; ?>
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
					$("button.more-toggle").on("click", function() {
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
