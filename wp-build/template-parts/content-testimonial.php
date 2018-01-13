<!-- TESTIMONIALS -->
<section id="testimonial-section" class="p-4 bg-dark text-white">
	<div class="container">
		<h2 class="text-center">Testimonials</h2>
		<div class="row">
			<div class="col">
				<div class="slider">


					<?php $loop = new WP_Query( array( 'post_type' => 'testimonials', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

					<div>
						<blockquote class="blockquote text-center">
							<p class="mb-0"><?php the_field( 'testimonial_text' ); ?></p>
							<footer class="blockquote-footer"><?php the_field( 'testimonial_author' ); ?> from
								<cite title="Company 1"><?php the_field( 'testimonial_company' ); ?></cite>
							</footer>
						</blockquote>
					</div>

					<?php endwhile; wp_reset_query(); ?>


				</div>
			</div>
		</div>
	</div>
</section>
