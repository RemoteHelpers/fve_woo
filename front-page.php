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
			$image = get_field('inner_block_img');
			if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
         <p><?php the_field('inner_block_text'); ?></p>
      </div>
   </div>
</section>

<section class="improve">
   <h2>Improve your content with our video processing services</h2>
   <div class="improve__wrapper">
      <div class="improve__item">
         <a href="#">
            <img src="/wp-content/uploads/2022/05/games.png" alt="games">
            <p>Video editing</p>
         </a>
      </div>
      <div class="improve__item">
         <a href="#">
            <img src="/wp-content/uploads/2022/05/Webinar.png" alt="Webinar">
            <p>Video production</p>
         </a>
      </div>
      <div class="improve__item">
         <a href="#">
            <img src="/wp-content/uploads/2022/05/audio.png" alt="audio">
            <p>Audio editing</p>
         </a>
      </div>
      <div class="improve__item">
         <a href="#">
            <img src="/wp-content/uploads/2022/05/animation.png" alt="animation">
            <p>Animation</p>
         </a>
      </div>
      <div class="improve__item">
         <a href="#">
            <img src="/wp-content/uploads/2022/05/fireworks.png" alt="fireworks">
            <p>Visual effects</p>
         </a>
      </div>
   </div>
</section>
<section class="video-types">
   <h2>Have a look at  the types of video specialists you can get</h2>
   <div class="video-types__info">
      <div class="video-types__block">
         <p>At our site, you can hire full-time or part-time video editors who provide complex video and audio editing and animation work altogether.</p>
      </div>
      <img src="/wp-content/uploads/2022/05/part-time.png" alt="time">
   </div>
   <div class="video-types__wrapper">
      <div class="video-types__item">
         <img src="/wp-content/uploads/2022/05/wind.png" alt="Animation creators">
         <h3>Animation creators</h3>
         <p>Work with 2D animation and Motion design, use visual effects, animation, and other cinematic techniques. It includes</p>
      </div>
      <div class="video-types__item">
         <img src="/wp-content/uploads/2022/05/volume-2.png" alt="Audio editors">
         <h3>Audio editors</h3>
         <p>Specialize in making promo videos for products, services, and events and create video content for your Website or Social</p>
      </div>
      <div class="video-types__item">
         <img src="/wp-content/uploads/2022/05/video-1.png" alt="Video editors">
         <h3>Video editors</h3>
         <p>Specialize in making promo videos for products, services, and events and create video content for your Website or Social</p>
      </div>
      <div class="video-types__item">
         <img src="/wp-content/uploads/2022/05/film.png" alt="Video creators">
         <h3>Video creators</h3>
         <p>Can help with all types of special effects: SFX, VFX, and CGI.</p>
      </div>
      <div class="video-types__item">
         <img src="/wp-content/uploads/2022/05/menu.png" alt="Titration specialists">
         <h3>Titration specialists</h3>
         <p>Add subtitles, captions, credits, and film titles.</p>
      </div>
      <div class="video-types__item">
         <img src="/wp-content/uploads/2022/05/crop.png" alt="Video framing">
         <h3>Video framing</h3>
         <p>Specialist, who can help to create new video frames fast and efficiently.</p>
      </div>
   </div>
</section>
		</div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
