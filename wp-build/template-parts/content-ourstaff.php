<!-- STAFF SECTION -->
<section id="staff" class="py-5 text-center bg-dark text-white">
	<div class="container">
		<h1>Our Staff</h1>
		<hr>
		<div class="row">

		<?php $loop = new WP_Query( array( 'post_type' => 'our_staff', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
		<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

			<?php
				$photo	= get_field('person_photo');
			?>

			<div class="col-md-3">
				<img src="<?php echo $photo['url']; ?>" class="img-fluid rounded-circle mb-2" alt="<?php echo $photo['alt']; ?>">
				<h4><?php the_field( 'person_name' ); ?></h4>
				<small><?php the_field( 'person_position' ); ?></small>
			</div>

		<?php endwhile; wp_reset_query(); ?>


		</div>
	</div>
</section>
