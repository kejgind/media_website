<!-- HOME ICON SECTION -->
<section id="home-icons" class="py-5">
	<div class="container">
		<div class="row">

			<?php $loop = new WP_Query( array( 'post_type' => 'home_icons', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="col-md-4 mb-4 text-center">
				<i class="<?php the_field('home_icons'); ?>"></i>
				<h3><?php the_title(); ?></h3>
				<p><?php the_field('home_icons_message'); ?></p>
			</div>

			<?php endwhile; wp_reset_query(); ?>


		</div>
	</div>
</section>
