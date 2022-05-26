<section class="contact-form">
   <div class="container">
      <div class="contact-form__wrapper">
         <div class="contact-form__info">
            <h2 class="desktop"><?php the_field('contact_form_title'); ?></h2>
            <p class="desktop"><?php the_field('contact_form_description'); ?></p>
            <?php 
            $contact_form_image = get_field('contact_form_image');
            if( !empty($contact_form_image) ): ?>
               <img src="<?php echo $contact_form_image['url']; ?>" alt="<?php echo $contact_form_image['alt']; ?>" />
            <?php endif; ?>
         </div>
         <div class="contact-form__form">
            <h2 class="mobile"><?php the_field('contact_form_title'); ?></h2>
            <p class="mobile"><?php the_field('contact_form_description'); ?></p>
            <?php echo do_shortcode('[contact-form-7 id="114" title="Contact form 1"]'); ?>
         </div>
      </div>
   </div>
</section>