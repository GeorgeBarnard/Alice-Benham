<?php
/* Template Name: Courses Page */
get_header();

?>
<div id="courses">
  <img class='courses-img' src='<?php bloginfo('template_url') ?>/img/alicebackgroundtest.jpg'>
  <div class='courses-intro-div'>
    <h1 class='courses-intro-title'>NEW COURSE</h1>
    <h2 class='courses-intro-title-2'>The Fundamentals</h2>
    <div class='courses-quote-div'>
      <span class='courses-quote-div-span'>
        <span class='courses-quotes'>"</span>  Grow your business through the power of digital marketing <span class='courses-quotes'>"</span>
      </span>
    </div>
    <div class='courses-sub-tagline'>
      <span>Blogging, Social Media, Mailing Lists, Web Design & More!</span>
    </div>
    <div class='courses-book-consultation-div'>
      <div class='courses-book-button'>
        <span>BOOK A FREE CONSULTATION</span>
      </div>
    </div>
    <section class='courses-content'>
      <div class='courses-box courses-box-1-div'>
        <span class='courses-box-tag'>Who</span>
        <div class='courses-box-inner courses-box-1-inner'>
          <p>Whether you’re small business or corporate charity, this course is
              designed to empower you with the best practice methods in order to
              establish and maintain a Digital Marketing Strategy which actively
              grows your business!</p>
          <p class='courses-box-1-points'><i class="fa fa-circle courses-dot" aria-hidden="true"></i> You want an effective online presence but don’t know where to start</p>
          <p class='courses-box-1-points'><i class="fa fa-circle courses-dot" aria-hidden="true"></i> You’re using social media but it doesn’t seem to be working</p>
          <p class='courses-box-1-points'><i class="fa fa-circle courses-dot" aria-hidden="true"></i> You’ve got a great product/service and want to promote</p>
          <p>If you said “Yep, that’s us...” to any of those statements then this course
              is for YOU.</p>
        </div>
      </div>
      <div class='courses-box courses-box-2-div'>
        <span class='courses-box-tag'>What</span>
        <div class='courses-box-inner courses-box-2-inner'>
          <p>As the title indicates, this course truly covers the ‘fundamentals’ of
          Digital Marketing. It’s my intention that by the end of the course, you’ll
          feel confident in what you need to be doing to grow your business
          through the power of all things online.</p>
          <p class='box-2-subheading'>It’s split up into 7 chapters:</p>
          <div class="courses-chapters">
            <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i> Inbound Methodology</p>
            <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i> Blogging</p>
            <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i> Social Media</p>
            <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i> Mailing Lists</p>
            <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i> Calls To Actions</p>
            <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i> Web Design</p>
            <p class='long-course'><i class="fa fa-circle courses-dot" aria-hidden="true"></i> Branding and
            analysing results for adaptability and improvement.</P>
          </div>
        </div>
        <span class='courses-box-2-quote'>
            <a target="_blank" href='<?php the_field('courses_page_link'); ?>'><span class='courses-quotes'>"</span> <?php the_field('courses_page_link_text'); ?> <span class='courses-quotes'>"</span></a>
        </span>
      </div>
      <div class='courses-content-divider'>
        <span>HOW DOES IT WORK?</span>
      </div>
      <div class='courses-content-row-2'>
        <div class='courses-row-block courses-row-2-block-1'>
          <span class='courses-prices-tag'>REMOTE<br><span class='courses-prices'>From £195</span></span>
        </div>
        <div class='courses-row-2-block-2'>
          <p>There are two ways to take the course!<br>
          If you're unsure which is right for you, get in touch<br>
          and I'd love to discuss which is best for your business!</p>
        </div>
        <div class='courses-row-block courses-row-2-block-3'>
          <span class='courses-prices-tag'>PERSONAL<br><span class='courses-prices'>From £595</span></span>
        </div>
      </div>
      <div class='courses-content-row-3'>
        <div class='courses-row-3-box courses-row-3-box-1'>
          <div class=''>
            <span class='row-3-tag'>REMOTE<br><span class='row-3-tag-prices'>From £195</span></span>
          </div>
          <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i>  Lifetime access to the full video course</p>
          <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i>  Lifetime access to the digital downloads and workbook</p>
        </div>
        <div class='courses-row-3-box courses-row-3-box-2'>
          <div class=''>
            <span class='row-3-tag'>PERSONAL<br><span class='row-3-tag-prices'>From £595</span></span>
          </div>
          <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i>  A personalised version of the course delivered in person (by myself) at your offices, 7 hours of training, specific to your company</p>
          <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i>  Lifetime access to the full video course</p>
          <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i>  Lifetime access to the digital downloads and workbook</p>
          <p><i class="fa fa-circle courses-dot" aria-hidden="true"></i>  4, 6 or 8 weeks of follow up coaching, supporting you as you implement course content</p>
        </div>
      </div>
      <div class='courses-content-row-4'>
        <img class='courses-img' src='<?php bloginfo('template_url') ?>/img/alicebackgroundtest.jpg'>
        <div class='courses-contact-subheading'><span>
          To find out more about the course and to explore which option is right for you, please get in touch!
        </span></div>
        <a style='text-decoration: none' href='\contact'><div class='courses-contact-button'>
          Contact Me Today
        </div></a>
      </div>
    </section>
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
