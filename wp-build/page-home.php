<?php
/*
	Template Name: Home Page
*/

get_header(); ?>

	<?php get_template_part( 'template-parts/content', 'showslide' ); ?>

	<?php get_template_part( 'template-parts/content', 'homeicon' ); ?>

	<?php get_template_part( 'template-parts/content', 'homehead' ); ?>

	<?php get_template_part( 'template-parts/content', 'infosection' ); ?>





	<!-- VIDEO PLAY SECTION -->
	<section id="video-play">
		<div class="dark-overlay">
			<div class="container p-5">
				<div class="row">
					<div class="col">
						<a href="#" class="video" data-video="https://www.youtube.com/embed/UMwunYQGvhs" data-toggle="modal" data-target="#videoModal">
							<i class="fas fa-play fa-4x"></i>
						</a>
						<h1>See What We Do</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- PHOTO GALLERY -->
	<section id="gallery" class="py-5">
		<div class="container">
			<h1 class="text-center">Photo Gallery</h1>
			<p class="text-center">Check out our photos</p>
			<div class="row text-center mb-4">
				<div class="col-md-4">
					<a href="http://lorempixel.com/560/560/business/1" data-toggle="lightbox" data-gallery="img-gallery" data-type="image">
						<img src="http://lorempixel.com/400/400/business/1" class="img-fluid" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a href="http://lorempixel.com/560/560/business/2" data-toggle="lightbox" data-gallery="img-gallery" data-type="image">
						<img src="http://lorempixel.com/400/400/business/2" class="img-fluid" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a href="http://lorempixel.com/560/560/business/3" data-toggle="lightbox" data-gallery="img-gallery" data-type="image">
						<img src="http://lorempixel.com/400/400/business/3" class="img-fluid" alt="">
					</a>
				</div>
			</div>
			<div class="row text-center mb-4">
				<div class="col-md-4">
					<a href="http://lorempixel.com/560/560/business/4" data-toggle="lightbox" data-gallery="img-gallery" data-type="image">
						<img src="http://lorempixel.com/400/400/business/4" class="img-fluid" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a href="http://lorempixel.com/560/560/business/5" data-toggle="lightbox" data-gallery="img-gallery" data-type="image">
						<img src="http://lorempixel.com/400/400/business/5" class="img-fluid" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a href="http://lorempixel.com/560/560/business/6" data-toggle="lightbox" data-gallery="img-gallery" data-type="image">
						<img src="http://lorempixel.com/400/400/business/6" class="img-fluid" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- NEWSLETTER SECTION -->
	<section id="newsletter" class="text-center p-5 bg-dark text-white">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Sign Up for Our Newsletter</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, minus?</p>
					<form class="form-inline justify-content-center">
						<label class="sr-only" for="name">Name</label>
						<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Enter Name">

						<label class="sr-only" for="email">Email</label>
						<input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Enter Email">

						<button class="btn btn-primary" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>



	<?php get_footer(); ?>
