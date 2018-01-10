<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Media_2_WordPress
 */

?>

<?php wp_footer();?>

	<footer id="main-footer" class="text-center p-4">
		<div class="container">
			<div class="row">
				<div class="col">
					<p>&copy; <?php echo date('Y'); ?> <?php the_author_link(); ?></p>
				</div>
			</div>
		</div>
	</footer>


	<!-- VIDEO MODAL -->
	<div class="modal fade" id="videoModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>
					<iframe src="" height="450" width="100%" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<script src="/wp-content/themes/media2wp/assets/js/jquery.min.js"></script>
	<script src="/wp-content/themes/media2wp/assets/js/popper.min.js"></script>
	<script src="/wp-content/themes/media2wp/assets/js/bootstrap.min.js"></script>
	<script src="/wp-content/themes/media2wp/assets/js/ekko-lightbox.min.js"></script>
	<script src="/wp-content/themes/media2wp/assets/js/scripts.js"></script>

	</body>

	</html>
