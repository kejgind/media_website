<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Media_2_WordPress
 */

get_header(); ?>

<section class="hero bg-warning py-5" id="page-404">
	<div class="container text-center">
		<h1>Bummer! That page can't be found.</h1>
	</div>
</section>

<section class="py-5 bg-light">
	<div class="container text-center">
		<h3 class="">If You got here, You probably took a wrong turn somewhere. Let's get You back on track.</h3>
	</div>
</section>

<section class="py-5">
	<div class="container text-center">
		<div class="row justify-content-center">
			<div class="col-sm-8">
					<h2 class="">Now look at that...</h2>
					<h2 class="">...or better yet, head back to <a href="<?php echo esc_url( home_url( '/') ); ?>">home page</a>.</h2>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
