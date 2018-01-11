<?php
// Custom Fields
$about_title	=	get_field( 'about_title' );
$about_body		=	get_field( 'about_body' );
$about_img		=	get_field( 'about_image' );

?>

<!-- ABOUT SECTION -->
<section id="about" class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>
					<?php echo $about_title; ?>
				</h1>
				<?php echo $about_body; ?>
			</div>
			<div class="col-md-6">
				<img src="<?php echo $about_img['url']; ?>" alt="<?php echo $about_img['alt']; ?>" class="about-img img-fluid rounded-circle d-none d-md-block">
			</div>
		</div>
	</div>
</section>
