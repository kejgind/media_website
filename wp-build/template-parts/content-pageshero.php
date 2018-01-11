<?php

$thumbnail_url 	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
$page_subtitle	= get_field( 'page_subtitle' );

?>

<?php if( has_post_thumbnail() ) {?>
<section id="page-header" style="background-image:url('<?php echo $thumbnail_url; ?>')">
	<div class="container">
		<div class="row">
			<div class="col-md-6 m-auto text-center">
				<h1><?php the_title(); ?></h1>
				<p><?php echo $page_subtitle; ?></p>
			</div>
		</div>
	</div>
</section>

<?php } else { ?>

<section id="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-6 m-auto text-center">
				<h1><?php the_title(); ?></h1>
				<p>Mamo</p>
			</div>
		</div>
	</div>
</section>

<?php } ?>
