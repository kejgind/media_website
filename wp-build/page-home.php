<?php
/*
	Template Name: Home Page
*/

get_header(); ?>

	<?php get_template_part( 'template-parts/content', 'showslide' ); ?>

	<?php get_template_part( 'template-parts/content', 'homeicon' ); ?>

	<?php get_template_part( 'template-parts/content', 'homehead' ); ?>

	<?php get_template_part( 'template-parts/content', 'infosection' ); ?>

	<?php get_template_part( 'template-parts/content', 'videoplay' ); ?>

	<?php get_template_part( 'template-parts/content', 'gallery' ); ?>





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
