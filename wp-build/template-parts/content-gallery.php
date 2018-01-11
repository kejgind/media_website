<?php
// Custom Fields
$gallery_title		= get_field( 'gallery_title' );
$gallery_subtitle	= get_field( 'gallery_subtitle' );


?>

<!-- PHOTO GALLERY -->
<section id="gallery" class="py-5">
	<div class="container">
		<h1 class="text-center"><?php echo $gallery_title; ?></h1>
		<p class="text-center"><?php echo $gallery_subtitle; ?></p>
		<div class="row text-center mb-4">

			<?php $loop = new WP_Query( array( 'post_type' => 'image_gallery', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="col-md-4 mb-4">

				<?php
					$image	= get_field('gallery_image');
				?>

				<a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="img-gallery" data-type="image">
					<img src="<?php echo $image['url']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>">
				</a>

			</div>

			<?php endwhile; wp_reset_query(); ?>

		</div>
	</div>
</section>
