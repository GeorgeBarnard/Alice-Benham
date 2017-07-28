<?php
/* Template Name: Blog Page */
get_header();

?>
<div class="top-banner">
<h1>Latest Blog Posts</h1>
</div>
<div class="blog-template-container">
  <div class="sidebar">
  <?php get_sidebar(); ?>
  </div>
  <div class="blog-container">
        <?php // Display blog posts on any page @ http://m0n.co/l
      $temp = $wp_query; $wp_query= null;
      $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <?php $excerpt = get_the_excerpt() ?>
      <?php $postid = get_the_ID(); ?>

      <div class="post-outer">
        <!-- <i class="fa fa-coffee coffee-icon-cb" aria-hidden="true"></i> -->
          <div class="title-border">
            <div class="blog-image">
                <h4 class="blog-date"><?php echo get_the_date(); ?></h4>
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="blog-under">
            <?php echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>'; ?>
            <a href=""><h1 class="rancho"><?php $postid; ?></h1></a>
          </div>
          </div>
          <h4 class="text-center blog-text">
            <?php echo $excerpt; ?>
          </h4>
          <div class="blog-link-div">
            <?php echo '<a href="'. get_permalink() .'">Read Now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>'; ?>
          </div>
      </div>
      <!-- <div class="post-divide">
        <i class="fa fa-bullseye" aria-hidden="true"></i>
      </div> -->
      <?php endwhile; ?>
      <?php if ($paged > 1) { ?>
      <nav id="nav-posts">
        <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
        <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
      </nav>
      <?php } else { ?>
      <nav id="nav-posts">
        <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
      </nav>
      <?php } ?>
      <?php wp_reset_postdata(); ?>
  </div>
</div>

<?php get_footer(); ?>
