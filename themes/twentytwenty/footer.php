<?php
/**
 * The template for displaying the footer
 * 
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<?php
/*
Template Name: Footer
*/
?>

<?php wp_reset_query(); ?>

	<div class="pre-footer">

		<?php $arrow = get_field('svg_arrow'); ?>
		<div class="arrow">
			<img src="<?php echo $arrow['url']; ?>" alt="<?php echo $arrow['alt']; ?>">
		</div>

		<?php $footer = get_field('Footer', 'option');

			?> <pre> <?php
			var_dump($footer) ;
			?> </pre> <?php

			if($footer): ?> 
			<div class="footer">
				<img src="<?php echo esc_url($footer['image']['url']); ?>" alt="<?php echo esc_url($footer['image']['alt']); ?>">
				<p><?php echo esc_html($footer['text']); ?></p>
				<a href="<?php echo esc_url($footer['link']); ?>">Tissus et habillage maison<img src="<?php echo $arrow['url']; ?>" alt="<?php echo $arrow['alt']; ?>"></a>
			</div>

		<?php endif; ?>

	</div>

			<footer>
				
				

			</footer>

		<?php wp_footer(); ?>

	</body>
</html>
