<section class="people">

	<?php while (have_posts()) : the_post(); ?>

		<div class="person">
			<?php $cred = get_field('credentials'); ?>
			<div class="name">
				<p class="set-back"><?php the_title(); ?><?php if($cred): ?> &mdash; <small><?php echo $cred; ?><?php endif; ?></small></p>
			</div>
			<div class="portrait modal-toggle">
				<p>
					<button>
						<picture>
							<?php $thumb = get_post_thumbnail_id(); ?>
							<img src="<?php echo wp_get_attachment_image_src( $thumb, 'thumb_square' )[0]; ?>">
						</picture>
					</button>
				</p>
			</div>
			<div class="modal">
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
					<div class="name">
						<p><?php the_title(); ?><?php if($cred): ?> &mdash; <small><?php echo $cred; ?></small><?php endif; ?></p>
					</div>
					<div class="bio">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>

<?php endwhile; ?>

</section>
