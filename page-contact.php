<?php
/* Template Name: Contact Page */
get_header();
?>
<div class="top-banner">
<h1>Contact Me Today!</h1>
</div>
<div id="contact-form-section">
 <div class='contact-from-consult-div'>
      <h2>BOOK A CONSULTATION</h2>
      <p><?php the_field('contact_page_link_text'); ?></p>
      <a class='contact-button' target="_blank" href='<?php the_field('contact_page_link'); ?>'><?php the_field('contact_page_link_button_text'); ?></a>
  <h2>GET IN TOUCH</h2>
  <p><?php the_field('contact_introduction'); ?></p>
  </div>
  <?php the_field('contact_form'); ?>
  <h3>I'll get back to you as soon as possible</h3>
  <img src="<?php bloginfo('template_url') ?>/img/AB-logo.png" alt="logo">
</div>

<?php get_footer(); ?>
