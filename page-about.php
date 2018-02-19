<?php get_header(); ?>

	<main role="main">

		<?php while (have_posts()) : the_post(); ?>

			<section class="image">
				<figure>
					<picture>
						<source media="(min-width: 1800px)" srcset="<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>">
						<source media="(min-width: 600px)" srcset="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>">
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
