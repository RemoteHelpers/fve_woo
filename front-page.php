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
		<section class="find-info">
      <h2><?php the_field('improve_title'); ?></h2>
      <div class="find-info__wrapper">
         <p class="find-info__text"><?php the_field('improve_description'); ?></p>
         <img src="<?php echo esc_url($image_array['url']); ?>" >
         <?php 
         $image = get_field('improve_img');
         if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="find-info__img"/>
         <?php endif; ?>
         <div class="find-info__block">
            <?php 
            $image_info = get_field('inner_block_img');
            if( !empty($image_info) ): ?>
               <img src="<?php echo $image_info['url']; ?>" alt="<?php echo $image_info['alt']; ?>" />
            <?php endif; ?>
            <p><?php the_field('inner_block_text'); ?></p>
         </div>
      </div>
   </section>

   <section class="improve">
      <h2><?php the_field('processing_services_title'); ?></h2>
      <?php
      $processing = get_field('processing_services_repeater');
      echo '<div class="improve__wrapper">';
      foreach( $processing as $item ) {
         ?>
         <div class="improve__item">
            <a href="<?= $item['anchor_link'] ?>">
               <?php 
               $processing_image = $item['processing_services_image'];
               if( !empty($processing_image) ): ?>
                  <img src="<?php echo $processing_image['url']; ?>" alt="<?php echo $processing_image['alt']; ?>" />
               <?php endif; ?>
               <p><?= $item['processing_item_title'] ?></p>
            </a>
         </div>
         <?php
      }
      echo '</div>';
      ?>
   </section>

   <section class="video-types">
      <h2><?php the_field('specialists_title'); ?></h2>
      <div class="video-types__info">
         <div class="video-types__block">
            <p><?php the_field('specialists_description'); ?></p>
         </div>
         <?php 
               $specialists_image = get_field('specialists_image');
               if( !empty($specialists_image) ): ?>
                  <img src="<?php echo $specialists_image['url']; ?>" alt="<?php echo $specialists_image['alt']; ?>" />
         <?php endif; ?>
      </div>
      <?php
      $specialists = get_field('specialists_items');
      echo '<div class="video-types__wrapper">';
      foreach( $specialists as $item ) {
         ?>
         <div class="video-types__item">
            <?php 
               $specialist_image = $item['specialists_item_img'];
               if( !empty($specialist_image) ): ?>
                  <img src="<?php echo $specialist_image['url']; ?>" alt="<?php echo $specialist_image['alt']; ?>" />
            <?php endif; ?>
            <h3><?= $item['specialists_item_title'] ?></h3>
            <p><?= $item['specialists_item_description'] ?></p>
         </div>
         <?php
      }
      echo '</div>';
      ?>
   </section>

   <section class="start-working">
      <h2><?php the_field('start_working_title'); ?></h2>
      <div class="start-working__wrapper">
         <div class="start-working__img">
            <?php 
               $start_working_image = get_field('start_working_image');
               if( !empty($start_working_image) ): ?>
                  <img src="<?php echo $start_working_image['url']; ?>" alt="<?php echo $start_working_image['alt']; ?>" />
            <?php endif; ?>
         </div>
         
         <?php
         $start_working = get_field('start_working_repeater');
         echo '<div class="start-working__items">';
         foreach( $start_working as $item ) {
            ?>
            <div class="start-working__item">
               <div class="start-working__text"><?= $item['start_working_text'] ?></div>
               <div class="start-working__number"><?= $item['start_working_number'] ?></div>
            </div>
            <?php
         }
         echo '
            <div class="progress-container">
               <div class="progress-bar" id="myBar"></div>
            </div>
         </div>
         ';
         ?>
      </div>
   </section>

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

   <section class="contact-form">
      <div class="container">
         <div class="contact-form__info">
            <h2><?php the_field('contact_form_title'); ?></h2>
            <p><?php the_field('contact_form_description'); ?></p>
            <?php 
            $contact_form_image = get_field('contact_form_image');
            if( !empty($contact_form_image) ): ?>
               <img src="<?php echo $contact_form_image['url']; ?>" alt="<?php echo $contact_form_image['alt']; ?>" />
            <?php endif; ?>
         </div>

         <div class="contact-form__form">
            <?php echo do_shortcode('[contact-form-7 id="114" title="Contact form 1"]'); ?>
         </div>
      </div>
            
   </section>


</main>
<!-- #main -->

<?php
//get_sidebar();
get_footer();
