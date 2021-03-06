<?php
$video_title		= get_field( 'video_title' );
$video_link			= get_field( 'video_link' );
$video_bg_img			= get_field( 'video_bg_img' );

?>


<!-- VIDEO PLAY SECTION -->
<section id="video-play" style="background-image:url('<?php echo $video_bg_img; ?>')">
	<div class="dark-overlay">
		<div class="container p-5">
			<div class="row">
				<div class="col">
					<a href="#" class="video" data-video="<?php echo $video_link; ?>" data-toggle="modal" data-target="#videoModal">
						<i class="fas fa-play fa-4x"></i>
					</a>
					<h1><?php echo $video_title; ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
