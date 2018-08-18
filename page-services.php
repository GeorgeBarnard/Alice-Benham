<?php
/* Template Name: Services Page */
get_header();

?>
<div id="services">
  <div class="services-intro">
    <img class="services-writing" src="<?php bloginfo('template_url') ?>/img/hello.png" alt="alice">
    <h1>I'm</h1>
    <img class="services-writing services-alice" src="<?php bloginfo('template_url') ?>/img/alice-logo.png" alt="alice">
    <h3><?php the_field('service_introduction'); ?></h3>
  </div>
  <div class="services-content">
    <h4>I can empower you to:</h4>
   <div class="services-block">
      <h3><?php the_field('service_block_1'); ?></h3>
   </div>
   <div class="services-block">
      <h3><?php the_field('service_block_2'); ?></h3>
   </div>
   <div class="services-block">
      <h3><?php the_field('service_block_3'); ?></h3>
   </div>
   <div class="services-block">
      <h3><?php the_field('service_block_4'); ?></h3>
   </div>
   <div class="services-block">
      <h3><?php the_field('service_block_5'); ?></h3>
   </div>
   <div class="services-block">
      <h3><?php the_field('service_block_6'); ?></h3>
   </div>
  </div>
    <div class="services-cta-background">
      <div class="services-cta">
        <div class="services-contact">
          <h2><?php the_field('service_box_1_title'); ?></h2>
          <!-- <h2>Get In Touch</h2> -->
          <h3><?php the_field('service_box_1'); ?></h3>
          <!-- <h3>As each client is unique, so is the way I work with them. Whether you want a one-off tutorial on Social Media or are looking for on-going hands on support - I'd <span>LOVE</span> to work with you. </h3> -->
          <a href="/<?php the_field('service_box_button_1_link'); ?>"><button class="button" type="button" name="button"><?php the_field('service_box_button_1'); ?></button></a>
        </div>
        <div class="services-signup">
          <h2><?php the_field('service_box_2_title'); ?></h2>
          <!-- <h2>Want More?</h2> -->
          <h3><?php the_field('service_box_2'); ?></h3>
          <!-- <h3>If you're just looking for some hints and tips along the way, why not join my mailing list and receive regular blog posts, relevant FREE resources and updates you may be interested in?</h3> -->
          <button class="button signup-button" type="button" name="button"><?php the_field('service_box_button_2'); ?></button>
        </div>
      </div>
  </div>
</div>


<div class="blog-div-title"><h1>Blog</h1></div>
<div class="section4">
  <div class="section4-inner">

  <?php
$args = array(
	'numberposts' => 3,
	'offset' => 0,
	'category' => 0,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' =>'',
	'post_type' => 'post',
	'post_status' => 'draft, publish, future, pending, private',
	'suppress_filters' => true
);
$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>
<?php

$recent_posts = wp_get_recent_posts();
$i = 1;
foreach( $recent_posts as $recent ){
  echo '
      <div class="blog-post">
          <div class="inner-blog blog1">
            <div class="blog-border"></div>
            <div class="blog-title-box">
            <a href="' . get_permalink($recent["ID"]) . '"> <h3>' .   $recent["post_title"].'</h3></a>
              <i class="fa fa-window-minimize dash" aria-hidden="true"></i>
              <h6>'. date('j-n-Y', strtotime($recent['post_date'])) .'</h6>
            </div>
            <img src="' . get_the_post_thumbnail_url($recent["ID"],'full')  . '" alt="">
          </div>
      </div>';
    if ($i++ == 3) break;
}
wp_reset_query();
?>

    </div>
</div>
<?php get_footer(); ?>
