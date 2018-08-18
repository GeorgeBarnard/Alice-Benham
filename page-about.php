<?php
/* Template Name: About Page */
get_header();

?>

<div id="about-page" class="">
  <div class="about-image">
    <img src="<?php the_field('about_intro_image'); ?>" alt="">
  </div>
  <div class="about-content">
    <div class="about-content-inner">
      <img class="about-writing" src="<?php bloginfo('template_url') ?>/img/hello.png" alt="alice">
      <h1>I'm</h1>
      <img class="about-writing about-alice" src="<?php bloginfo('template_url') ?>/img/alice-logo.png" alt="alice">
    </div>
  </div>
  <div id="blocks">

  <div class="about-block firstRow animated slideInLeft largeBlock">
    <h1>About Me</h1>
    <p class="about-block-text">
    <?php the_field('about_block'); ?>
    </p>
  </div>
  <div class="about-block firstRow animated slideInUp">
    <img class="about-photo" src="<?php the_field('about_first_image'); ?>" alt="">
  </div>
  <div class="about-block ab2 firstRow animated slideInRight">
    <!-- <div class="about-block-title">
      <p>My Daily Tools</p>
    </div> -->
    <div class="about-blog">
      <h1>I'm Back!</h1>
      <h2> Read my intro Blog</h2>
      <div class="about-blog-image-div">
        <a href="http://www.alicebenham.co.uk/guess-whos-back-back-again/"><button class="button" type="button" name="button">Read</button></a>
        <img src="<?php bloginfo('template_url') ?>/img/alice2.jpg" alt="Alice introduces herself">
      </div>
    </div>
  </div>
  <div class="about-block secondRow secondRowSmall animated slideInLeft">
        <div class="about-border border-3"></div>
    <img class="about-photo" src="<?php the_field('about_second_image'); ?>" alt="">
  </div>
  <div class="about-block ab3 secondRow secondRowSmall animated slideInUp">
    <img class="about-block-alice" src="<?php bloginfo('template_url') ?>/img/alice-logo.png" alt="alice">
  </div>
  <div class="about-block secondRow thirdRowSmall animated slideInRight">
    <div class="about-border border-2"></div>
    <img class="about-photo" src="<?php the_field('about_third_image'); ?>" alt="">
  </div>
  <div class="about-block ab2 thirdRow thirdRowSmall animated slideInLeft">
    <div class="about-icon-div">
      <h2>5 x </h2>
      <img class="about-icon" src="<?php bloginfo('template_url') ?>/img/coffee.png" alt="">
    </div>
    <div class="about-icon-div">
      <h2>1 x </h2>
      <img class="about-icon" src="<?php bloginfo('template_url') ?>/img/camera.png" alt="">
    </div>
    <div class="about-icon-div">
      <h2>3 x </h2>
      <img class="about-icon" src="<?php bloginfo('template_url') ?>/img/pencil.png" alt="">
    </div>
    <div class="about-icon-div">
      <h2>1 x </h2>
      <img class="about-icon" src="<?php bloginfo('template_url') ?>/img/laptop.png" alt="">
    </div>
  </div>
  <div class="about-block thirdRow animated slideInUp hideBlock">
    <img class="about-photo" src="<?php the_field('about_fourth_image'); ?>" alt="">
  </div>
  <div class="about-block thirdRow animated thirdRowSmall slideInRight largeBlock">
    <div id="about-block-signup-div">
      <h2><?php the_field('about_block_2_title'); ?></h2>
      <!-- <h2>Want more?</h2> -->
      <p><?php the_field('about_block_2'); ?></p>
      <!-- <p>fancy receiving FREE resources and valuable content delivered straight to your inbox?</p> -->
      <a style='text-decoration: none; color: black' href='\<?php the_field('about_block_location'); ?>'><button id="sidebar-signup">Yes Please!</button></a>
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

<script src="<?php bloginfo('template_url') ?>/js/aliceWaypoints.js"></script>
