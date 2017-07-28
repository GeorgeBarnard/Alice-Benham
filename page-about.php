<?php
/* Template Name: About Page */
get_header();

?>

<div id="about-page" class="">
  <div class="about-image">
    <img src="<?php bloginfo('template_url') ?>/img/alice.jpg" alt="">
  </div>
  <div class="about-content">
    <div class="about-content-inner">
      <img class="about-writing" src="<?php bloginfo('template_url') ?>/img/hello.png" alt="alice">
      <h1>I'm</h1>
      <img class="about-writing about-alice" src="<?php bloginfo('template_url') ?>/img/alice-logo.png" alt="alice">
    </div>
  </div>
  <div id="blocks">

  <div class="about-block firstRow animated slideInLeft">
    <h1>About Me</h1>
    <p class="about-block-text">
    Most days, you’ll find me in yoga pants, working on the couch with a smile on my face and rescue pups in my lap -- or making googly eyes at my hunky husband Drew from across the room. I’m a wedding blogger, a watercolor artist, and an educator -- plus, I’ve always got my bags packed for my next wheels-up adventure. I’m a storyteller, dog-rescuer, mac-and-cheese connoisseur, and championship napper.
    </p>
  </div>
  <div class="about-block firstRow animated slideInUp">
    <img class="about-photo" src="<?php bloginfo('template_url') ?>/img/dog.jpg" alt="">
  </div>
  <div class="about-block ab2 firstRow animated slideInRight">
    <!-- <div class="about-block-title">
      <p>My Daily Tools</p>
    </div> -->
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
  <div class="about-block secondRow animated slideInLeft">
        <div class="about-border border-3"></div>
    <img class="about-photo" src="<?php bloginfo('template_url') ?>/img/mac.jpg" alt="">
  </div>
  <div class="about-block ab3 secondRow animated slideInUp">
    <img class="about-block-alice" src="<?php bloginfo('template_url') ?>/img/alice-logo.png" alt="alice">
  </div>
  <div class="about-block secondRow animated slideInRight">
    <div class="about-border border-2"></div>
    <img class="about-photo" src="<?php bloginfo('template_url') ?>/img/photo.jpg" alt="">
  </div>
  <div class="about-block ab2 thirdRow animated slideInLeft">
    <div class="about-block-list">
      <h3>My Top 10 Favourite Dog Names</h3>
      <ul>
        <li>Doug</li>
        <li>Allen</li>
        <li>Steve</li>
        <li>Owen</li>
        <li>Keith</li>
        <li>Clive</li>
        <li>Greg</li>
        <li>Gary</li>
        <li>carl</li>
        <li>Fabio</li>
      </ul>
    </div>
  </div>
  <div class="about-block thirdRow animated slideInUp">
    <img class="about-photo" src="<?php bloginfo('template_url') ?>/img/paint.jpg" alt="">
  </div>
  <div class="about-block thirdRow animated slideInRight">
    <div id="about-block-signup-div">
      <h2>Want more?</h2>
      <p>fancy receiving FREE resources and valuable content delivered straight to your inbox?</p>
      <button id="sidebar-signup">Yes Please!</button>
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
                <h6>27/09/1993</h6>
              </div>
              <img src="' . get_the_post_thumbnail( $recent["ID"], 'small' ) . '" alt="">
            </div>
        </div>';
      if ($i++ == 3) break;
	}
	wp_reset_query();
?>

    </div>
</div>
<?php get_footer(); ?>
