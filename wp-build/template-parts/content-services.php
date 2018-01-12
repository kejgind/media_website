<!-- SERVICES SECTION -->
<section id="services" class="py-5">
	<div class="container">
		<div class="row">

		<?php $loop = new WP_Query( array( 'post_type' => 'service_plans', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

		<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="col-md-4">
			<div class="card text-center">
				<div class="card-header">
					<h3><?php the_field('service_plan_name'); ?></h3>
				</div>
				<div class="card-body">

					<h4 class="card-title">$<?php the_field('service_plan_price'); ?>/Month</h4>
					<p class="card-text"><?php the_field('service_plan_description'); ?></p>

					<?php $features = get_field('service_plan_feature');
					if($features) :?>
					<ul class="list-group">
						<?php foreach ($features as $feature) : ?>
						<li class="list-group-item"><i class="fas fa-check"></i>&ensp;<?php echo $feature; ?></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
					<a href="#" class="btn btn-danger btn-block mt-2"><?php the_field('service_plan_button'); ?></a>
				</div>
				<div class="card-footer text-muted">
					<?php the_field('service_plan_length'); ?>
				</div>
			</div>
		</div>

		<?php endwhile; wp_reset_query(); ?>

		</div>
	</div>
</section>
