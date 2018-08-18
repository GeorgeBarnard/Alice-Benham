<?php
/* Template Name: Content Page */
get_header();

?>
<div id="services">
  <!-- <div class="services-intro">
    <img class="services-writing" src="<?php bloginfo('template_url') ?>/img/hello.png" alt="alice">
    <h1>I'm</h1>
    <img class="services-writing services-alice" src="<?php bloginfo('template_url') ?>/img/alice-logo.png" alt="alice">
    <h3><?php the_field('service_introduction'); ?></h3>
  </div> -->
  <div class="free-content">
    <h3 class='main-content-title'><?php the_field('main_content_title'); ?></h3>
    <h4 class='content-title'><?php the_field('content_title'); ?></h4>
    <p><?php the_field('content_description'); ?></p>
    <div class='free-content-div'>
      <h2><?php the_field('content_section_1_title'); ?></h2>
      <img src='<?php the_field('content_section_1_image'); ?>'></img>
      <a target="_blank" href='<?php the_field('content_section_1_link'); ?>'><div class='free-download-link'><?php the_field('content_section_button_text'); ?><i class="fa fa-headphones" aria-hidden="true"></i></div></a>
    </div>
    <div class='free-content-div'>
      <h2><?php the_field('content_section_2_title'); ?></h2>
      <img src='<?php the_field('content_section_2_image'); ?>'></img>
      <a target="_blank" href='<?php the_field('content_section_2_link'); ?>'><div class='free-download-link'><?php the_field('content_section_button_text'); ?><i class="fa fa-headphones" aria-hidden="true"></i></div></a>
    </div>
    <div class='free-content-div'>
      <h2><?php the_field('content_section_3_title'); ?></h2>
      <img src='<?php the_field('content_section_3_image'); ?>'></img>
      <a target="_blank" href='<?php the_field('content_section_3_link'); ?>'><div class='free-download-link'><?php the_field('content_section_button_text'); ?><i class="fa fa-headphones" aria-hidden="true"></i></div><a/>
    </div>
    <a class='more-episodes-link' target="_blank" href='<?php the_field('content_section_more_button_link'); ?>'><div class='free-download-link more-episodes'><?php the_field('content_section_more_button_text'); ?><i class="fa fa-headphones" aria-hidden="true"></i></div><a/>
  </div>


  <div class="services-cta-background">
    <div class="services-cta">
      <div class="services-contact">
        <h2><?php the_field('content_box_1_title'); ?></h2>
        <!-- <h2>Get In Touch</h2> -->
        <h3><?php the_field('content_box_1'); ?></h3>
        <!-- <h3>As each client is unique, so is the way I work with them. Whether you want a one-off tutorial on Social Media or are looking for on-going hands on support - I'd <span>LOVE</span> to work with you. </h3> -->
        <a href="/<?php the_field('content_box_button_1_link'); ?>"><button class="button" type="button" name="button"><?php the_field('content_box_button_1'); ?></button></a>
      </div>
      <div class="services-signup">
        <h2><?php the_field('content_box_2_title'); ?></h2>
        <!-- <h2>Want More?</h2> -->
        <h3><?php the_field('content_box_2'); ?></h3>
        <!-- <h3>If you're just looking for some hints and tips along the way, why not join my mailing list and receive regular blog posts, relevant FREE resources and updates you may be interested in?</h3> -->
        <button class="button signup-button" type="button" name="button"><?php the_field('content_box_button_2'); ?></button>
      </div>
    </div>
</div>
</div>


<?php get_footer(); ?>
