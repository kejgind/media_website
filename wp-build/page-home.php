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

	<?php get_template_part( 'template-parts/content', 'newsletter' ); ?>

<?php get_footer(); ?>
