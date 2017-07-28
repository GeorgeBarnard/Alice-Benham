<?php
/**
 * The template for displaying all single posts and attachments
 */
get_header(); ?>
<div class="top-banner">
<h1>BLOG/<?php echo get_the_date(); ?></h1>
</div>
<div id="primary" class="content-area">

	<div class="sidebar">
	<?php get_sidebar(); ?>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-content" role="main">
		<div class="post-title-div">
			<div class="title-block">
				<h2 class="post-title"><?php the_title(); ?></h2>
				<h4><?php echo get_the_date(); ?></h4>
			</div>
		</div>
		<div class="post-thumbnail">
			    <?php the_post_thumbnail(); ?>
		</div>
		<div class="post-content-text">
				<p><?php the_content(); ?></p>
		</div>



	<div>
	<div><?php previous_post_link('&laquo; %link') ?></div>
	<div><?php next_post_link('%link &raquo;') ?></div>
	</div>

	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">


	<div>


	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

	<p>
	<!-- <small>
	This entry was posted
	<?php /* This is commented, because it requires a little adjusting sometimes.
	You'll need to download this plugin, and follow the instructions:
	http://binarybonsai.com/wordpress/time-since/ */
	/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
	on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
	and is filed under <?php the_category(', ') ?>.
	You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

	<?php if ( comments_open() && pings_open() ) {
	// Both Comments and Pings are open ?>
	You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

	<?php } elseif ( !comments_open() && pings_open() ) {
	// Only Pings are Open ?>
	Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

	<?php } elseif ( comments_open() && !pings_open() ) {
	// Comments are open, Pings are not ?>
	You can skip to the end and leave a response. Pinging is currently not allowed.

	<?php } elseif ( !comments_open() && !pings_open() ) {
	// Neither Comments, nor Pings are open ?>
	Both comments and pings are currently closed.

	<?php } edit_post_link('Edit this entry','','.'); ?>

	</small> -->
	</p>

	</div>
	</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

	<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

	</div>

</div><!-- .content-area -->

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

<?php get_footer(); ?>
