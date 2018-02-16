<?php get_header(); ?>

	<main role="main">

		<?php while (have_posts()) : the_post(); ?>

			<section class="image">
				<figure>
					<picture>
						<?php $thumb = get_post_thumbnail_id(); ?>
						<source media="(min-width: 1800px)" srcset="<?php echo wp_get_attachment_image_src( $thumb, 'large' )[0]; ?>">
						<source media="(min-width: 600px)" srcset="<?php echo wp_get_attachment_image_src( $thumb, 'medium' )[0]; ?>">
						<img src="<?php echo wp_get_attachment_image_src( $thumb, 'medium' )[0]; ?>">
					</picture>
				</figure>
			</section>

			<section class="content">
				<h1 class="set-back">about</h1>
				<?php the_content(); ?>
			</section>

		<?php endwhile; ?>

	</main>

<?php get_footer(); ?>
