<!-- ICON BOXES -->
<section id="icon-boxes" class="p-5">
	<div class="container">
		<div class="row">

		<?php $loop = new WP_Query( array( 'post_type' => 'about_boxes', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
		<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="col-md-6 col-lg-4 mb-4">
				<div class="card bg-danger text-center text-white">
					<div class="card-body">
						<i class="<?php the_field( 'about_box_icon' ); ?>"></i>
						<h3><?php the_field( 'about_box_title' ); ?></h3>
						<p><?php the_field( 'about_box_text' ); ?></p>
					</div>
				</div>
			</div>

		<?php endwhile; wp_reset_query(); ?>

		</div>

	</div>
</section>
