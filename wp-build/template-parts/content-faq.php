<?php
// Custom Fields
$faq_title	= get_field( 'faq_services_title' );
$faq_bg_img	= get_field( 'faq_services_bg_img' );

?>

<!-- FAQ -->
<section id="faq" class="p-5 bg-dark text-white" style="background-image:url('<?php echo $faq_bg_img; ?>'); background-size:cover; background-attachment: fixed; background-repeat: no-repeat; background-position: center;">
	<div class="container">
		<h1 class="text-center"><?php echo $faq_title; ?></h1>
		<br>


		<div class="row">
			<div class="col-md-6">
				<div id="accordion" role="tablist">

					<?php $loop = new WP_Query( array( 'post_type' => 'faq', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="card">
						<div class="card-header" role="tab" id="heading<?php echo get_the_ID(); ?>">
							<h5 class="mb-0">
								<a href="#collapse<?php echo get_the_ID(); ?>" data-toggle="collapse" role="button"><?php the_field('faq_question'); ?></a>
							</h5>
						</div>
						<div id="collapse<?php echo get_the_ID(); ?>" class="collapse" data-parent="#accordion" role="tabpanel">
							<div class="card-body">
								<?php the_field('faq_answer'); ?>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_query(); ?>

				</div>
			</div>

			<div class="col-md-6">
				<div id="accordion" role="tablist">

					<?php $loop = new WP_Query( array( 'post_type' => 'faq_2', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="card">
						<div class="card-header" role="tab" id="heading<?php echo get_the_ID(); ?>">
							<h5 class="mb-0">
								<a href="#collapse<?php echo get_the_ID(); ?>" data-toggle="collapse" role="button"><?php the_field('faq_question'); ?></a>
							</h5>
						</div>
						<div id="collapse<?php echo get_the_ID(); ?>" class="collapse" data-parent="#accordion" role="tabpanel">
							<div class="card-body">
								<?php the_field('faq_answer'); ?>
							</div>
						</div>
					</div>
					<?php endwhile; wp_reset_query(); ?>

				</div>
			</div>


		</div>
	</div>
</section>
