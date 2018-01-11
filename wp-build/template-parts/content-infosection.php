<?php
// Custom Fields
$info_title		= get_field( 'info_title' );
$info_body		= get_field( 'info_body' );
$info_button	= get_field( 'info_button' );
$info_image		= get_field( 'info_image' );

?>

<!-- INFO SECTION -->
<section id="info" class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-6 align-self-center">
				<h3><?php echo $info_title; ?></h3>
				<p><?php echo $info_body; ?></p>
				<a href="#" class="btn btn-outline-danger btn-large"><?php echo $info_button; ?></a>
			</div>
			<div class="col-md-6">
				<img src="<?php echo $info_image['url']; ?>" class="img-fluid" alt="<?php echo $info_image['alt']; ?>">
			</div>
		</div>
	</div>
</section>
