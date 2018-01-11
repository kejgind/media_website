<?php
// Custom Fields
$signup_title			= get_field( 'signup_title' );
$signup_subtitle	= get_field( 'signup_subtitle' );
$signup_form			= get_field( 'signup_form' );

?>


<!-- NEWSLETTER SECTION -->
<section id="newsletter" class="text-center p-5 bg-dark text-white">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1><?php echo $signup_title; ?></h1>
				<p><?php echo $signup_subtitle; ?></p>
				<?php echo $signup_form; ?>
			</div>
		</div>
	</div>
</section>
