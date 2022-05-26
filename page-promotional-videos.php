<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clean
 */

get_header();
?>
	<?php include 'top-page-block.php';?>

	<main id="primary" class="site-main">
		<div class="container">
			<section class="prod-services">
				<h2><?php the_field('production_services_title'); ?></h2>
				<div class="prod-services__wrapper">
					<div class="prod-services__block">
						<?php
						$prod_services_block_img = get_field('production_services_block_image');
						if( !empty($prod_services_block_img) ): ?>
							<img src="<?php echo $prod_services_block_img['url']; ?>" alt="<?php echo $prod_services_block_img['alt']; ?>" />
						<?php endif; ?>
						<p><?php the_field('production_services_block_description'); ?></p>
					</div>
					<?php
					$prod_services_img = get_field('production_services_image');
					if( !empty($prod_services_img) ): ?>
						<img src="<?php echo $prod_services_img['url']; ?>" alt="<?php echo $prod_services_img['alt']; ?>"  class="prod-services__img" />
					<?php endif; ?>
					
				</div>
				<p class="prod-services__desc"><?php the_field('production_services_description'); ?></p>
			</section>

			<section class="provide">
				<h2><?php the_field('provide_title'); ?></h2>
				<div class="provide__wrapper">
					<?php
						$provide = get_field('provide_repeater');
						echo '<div class="provide__items">';
						foreach( $provide as $item ) {
						?>
						<div class="provide__item">
							<h3><?= $item['provide_block_title'] ?></h3>
							<p><?= $item['provide_block_description'] ?></p>
						</div>
						<?php
						}
						echo '</div>';
					?>
					<?php
						$purpose_img = get_field('provide_image');
						if( !empty($purpose_img) ): ?>
							<img src="<?php echo $purpose_img['url']; ?>" alt="<?php echo $purpose_img['alt']; ?>" />
					<?php endif; ?>
				</div>
			</section>
		</div>
		
		<section class="purpose" style="background-image: url(<?php the_field('purpose_background'); ?>);">
			<div class="container">
					<h2><?php the_field('purpose_title'); ?></h2>
					<p class="purpose__description"><?php the_field('purpose_description'); ?></p>
					<?php
					$purpose = get_field('purpose_repeater');
					echo '<ul class="purpose__list">';
					foreach( $purpose as $item ) {
					?>
					<li>
						<?php
						$provide_img = get_field('purpose_list_icon');
						if( !empty($provide_img) ): ?>
							<img src="<?php echo $provide_img['url']; ?>" alt="<?php echo $provide_img['alt']; ?>" />
						<?php endif; ?>
						<p><?= $item['purpose_list_item'] ?></p>
						</li>
					<?php
					}
					echo '</ul>';
				?>
			</div>
		</section>

		<div class="container">
			<section class="video-portfolio">
				<h2><?php the_field('video_portfolio_title'); ?></h2>
				<?php
				$video_portfolio = get_field('video_portfolio_repeater');
				echo '<div class="video-portfolio__items">';
				foreach( $video_portfolio as $item ) {
					?>
					<div class="video-portfolio__item">
						<video class="elementor-video" src="<?= $item['video_portfolio_repeater_video'] ?>" controls="" controlslist="nodownload" poster=""></video>
						<div class="video-portfolio__title"><?= $item['video_portfolio_repeater_title'] ?></div>
						<div class="video-portfolio__description"><?= $item['video_portfolio_repeater_description'] ?></div>
					</div>
					<?php
					}
					echo '</div>';
					?>
			</section>


		</div>
		<?php include 'contact-form.php';?>
	</main>
	<!-- #main -->
<script>
   jQuery(document).ready(function() {
   if (jQuery(window).width() < 550) {
      jQuery(".video-portfolio__items").addClass("slider");
      jQuery(".motion-graphics__items").addClass("slider");
    }
    jQuery('.motion-graphics__items.slider').slick({
      dots: true,
      arrow: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 4000,
    })
	 jQuery('.video-portfolio__items.slider').slick({
      dots: true,
      arrow: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 4000,
    })
})
</script>
<?php
get_footer();
