<?php
// Custom Fields
$home_head_title	= get_field( 'home_heading_title' );
$home_head_body	= get_field( 'home_heading_body' );
$home_head_bg_img	= get_field( 'home_heading_bg_img' );


?>

<!-- HOME HEADING SECTION -->
<section id="home-heading" class="p-5" style="background-image:url('<?php echo $home_head_bg_img; ?>')">
	<div class="dark-overlay">
		<div class="container pt-5">
			<div class="row">
				<div class="col">
					<h1><?php echo $home_head_title; ?></h1>
					<p class="d-none d-md-block"><?php echo $home_head_body; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
