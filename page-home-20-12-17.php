<?php
/* Template Name: Front page template */

      get_header();
?>



<div class="homepage-body">

  <!-- <i class="material-icons arrow arrow-left">keyboard_arrow_left</i>
  <i class="material-icons arrow arrow-right">keyboard_arrow_right</i> -->
  <img class="upper-image" src="<?php the_field('fullscreen_image'); ?>" alt="">

  <div class="home-content">
    <div class="home-display-box">
      <span class="home-content-title title1">'Story'</span>
      <span class="home-content-description description1">Tell the story of your business</span>
      <div class="home-display-box-opaque opaque"></div>
    </div>
  </div>
</div>

<div class="section1">
  <div class="about-text-div">
    <h1>About Me</h1>
  </div>
<div class='section1-inner'>
<div class="left-image">
<img src="<?php bloginfo('template_url') ?>/img/alice-profile.jpg" alt="">
</div>
<div class="right-text">
  <div class="border"></div>
  <!-- <span class="about-me">About Me</span> -->
  <div class="about-logo-row"><p class="paragraph paragraph-1"><img class="hello" src="<?php bloginfo('template_url') ?>/img/hello.png" alt="signature">I’m<img class="alice" src="<?php bloginfo('template_url') ?>/img/alice-logo.png" alt="signature"></p></div>
  <p class="about-subtitle">Let me introduce myself!</p>
  <!-- <div class="paragraph line"></div> -->
  <p class="paragraph paragraph-2">
    <?php the_field('introduction'); ?></P>
    <h4>Interested?</h4> <a href="http://www.alicebenham.co.uk/about/"><button class="button">Read More!</button></a>
</div>
</div>
</div>

<div class="section2">
  <div class="section2-content">
    <div class="services-text-div">
      <h1>What can I do for you?</h1>
          <p><?php the_field('services_title'); ?></p>
    </div>
      <div class="circle-outer">
          <div class="circle">
              <img src="<?php the_field('services_tile_1'); ?>" alt="product-image">
              <a href="http://www.alicebenham.co.uk/services/"><h2>Services</h2></a>
          </div>
          <div class="circle">
              <img src="<?php the_field('services_tile_2'); ?>" alt="brand-image">
              <a href="http://www.alicebenham.co.uk/courses/"><h2>Courses</h2></a>
          </div>
          <div class="circle">
              <img src="<?php the_field('services_tile_3'); ?>" alt="service-image">
              <a href="http://www.alicebenham.co.uk/about/"><h2>About</h2></a>
          </div>
      </div>
    <div class="section2-content-border">
    </div>
  </div>
</div>

<div class="testimonial-div-title"><h1>Meet My Happy Customers</h1></div>
<div class="section6">
  <div class="testimonial">
    <div class="icon-outer">
    <i class="fa fa-quote-left" aria-hidden="true"></i>
    </div>
    <p class="testimonial-text"><?php the_field('testimonial_1'); ?></p>
    <p class="testimonial-name">- <?php the_field('testimonial_name_1'); ?></p>
    <img src="<?php the_field('testimonial_image_1'); ?>" alt="">
  </div>

  <div class="testimonial">
    <div class="icon-outer">
    <i class="fa fa-quote-left" aria-hidden="true"></i>
    </div>
    <p class="testimonial-text"><?php the_field('testimonial_2'); ?></p>
    <p class="testimonial-name">- <?php the_field('testimonial_name_2'); ?></p>
    <img src="<?php the_field('testimonial_image_2'); ?>" alt="">
  </div>
  <div class="testimonial">
    <div class="icon-outer">
    <i class="fa fa-quote-left" aria-hidden="true"></i>
    </div>
    <p class="testimonial-text"><?php the_field('testimonial_3'); ?></p>
    <p class="testimonial-name">- <?php the_field('testimonial_name_3'); ?></p>
    <img src="<?php the_field('testimonial_image_3'); ?>" alt="">
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

<div class="section3">
  <div class="inner-banner">
    <h1>Oh, you want more?</h1>
    <h5>
    Want to receive valuable knowledge about social media blogging and all things digital? Start growing your business today and sign up to my mailing list!
    </h5>
    <!-- <i class="fa fa-window-minimize dash" aria-hidden="true"></i>
    <label for="Name">Name</label>
    <input type="text" name="signup" id='name' value=""><br>
    <label for="Name">Email</label>
    <input type="text" name="signup" id='name' value=""><br>
    <button name="signup" id="Submit">  <i class="fa fa-envelope-o email-icon" aria-hidden="true"></i> COUNT ME IN!</button> -->
    <div class="newsletter">
      <?php the_field('newsletter'); ?>
    </div>
    <h6>Your email is always safe with me!</h6>
  </div>
  <!-- <img src="/img/banner.jpg" alt=""> -->
</div>

<?php
    get_footer();
?>
