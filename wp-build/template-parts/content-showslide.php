<?php
// Custom Fields
$hps_1_image				= get_post_meta( 16, 'hps_1_image', true );
$hps_1_header				= get_post_meta( 16, 'hps_1_header', true );
$hps_1_subtitle			= get_post_meta( 16, 'hps_1_subtitle', true );
$hps_1_btn					= get_post_meta( 16, 'hps_1_btn', true );

$hps_2_image				= get_post_meta( 16, 'hps_2_image', true );
$hps_2_header				= get_post_meta( 16, 'hps_2_header', true );
$hps_2_subtitle			= get_post_meta( 16, 'hps_2_subtitle', true );
$hps_2_btn					= get_post_meta( 16, 'hps_2_btn', true );

$hps_3_image				= get_post_meta( 16, 'hps_3_image', true );
$hps_3_header				= get_post_meta( 16, 'hps_3_header', true );
$hps_3_subtitle			= get_post_meta( 16, 'hps_3_subtitle', true );
$hps_3_btn					= get_post_meta( 16, 'hps_3_btn', true );
?>

<!-- SHOWCASE SLIDER -->
<section id="showcase">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">

			<div class="carousel-item carousel-image-1 active">
				<div class="container">
					<div class="carousel-caption d-none d-sm-block text-right mb-5">
						<h1 class="display-3"><?php echo $hps_1_header; ?></h1>
						<p class="lead"><?php echo $hps_1_subtitle; ?></p>
						<a href="#" class="btn btn-danger btn-lg"><?php echo $hps_1_btn; ?></a>
					</div>
				</div>
			</div>
			<div class="carousel-item carousel-image-2">
				<div class="container">
					<div class="carousel-caption d-none d-sm-block text-right mb-5">
						<h1 class="display-3"><?php echo $hps_2_header; ?></h1>
						<p class="lead"><?php echo $hps_2_subtitle; ?></p>
						<a href="#" class="btn btn-primary btn-lg"><?php echo $hps_2_btn; ?></a>
					</div>
				</div>
			</div>
			<div class="carousel-item carousel-image-3">
				<div class="container">
					<div class="carousel-caption d-none d-sm-block text-right mb-5">
						<h1 class="display-3"><?php echo $hps_3_header; ?></h1>
						<p class="lead"><?php echo $hps_3_subtitle; ?></p>
						<a href="#" class="btn btn-success btn-lg"><?php echo $hps_3_btn; ?></a>
					</div>
				</div>
			</div>

		</div>

		<a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a href="#myCarousel" data-slide="next" class="carousel-control-next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>
</section>
