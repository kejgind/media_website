<?php
/*
	Template Name: Blog Page
*/

get_header();
?>

	<?php get_template_part( 'template-parts/content', 'pageshero' ); ?>


	<!-- BLOG SECTION -->
	<section id="blog" class="py-3">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="card-columns">

					<?php $loop = new WP_Query( array( 'post_type' => 'blog_posts', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

						<?php $blog_image	= get_field('blog_post_image'); ?>

						<div class="card">
							<img src="<?php echo $blog_image['url']; ?>" alt="<?php echo $blog_image['alt']; ?>" class="card-img-top img-fluid">
							<div class="card-body">
								<h4 class="card-title"><?php the_field('blog_post_title'); ?></h4>
								<small class="text-muted">Written by <?php the_field('blog_post_author'); ?> on <?php the_field('blog_post_date'); ?></small>
								<hr>
								<p class="card-text"><?php the_field('blog_post_text'); ?></p>
							</div>
						</div>

						<div class="card p-3 <?php the_field( 'post_bg_color' ); ?>">
							<blockquote class="card-body card-blockquote">
								<p><?php the_field('blog_post_quote'); ?></p>
								<footer>
									<small class="<?php the_field( 'post_bg_color' ); ?>"><?php the_field('blog_post_quote_author'); ?> in
										<cite title="Source Title"><?php the_field('blog_post_quote_source'); ?></cite>
									</small>
								</footer>
							</blockquote>
						</div>

						<?php endwhile; wp_reset_query(); ?>


					</div>
				</div>
			</div>
		</div>
	</section>



<?php get_footer(); ?>
