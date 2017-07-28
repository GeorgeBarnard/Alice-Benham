<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<img class="sidebar-logo" src="<?php bloginfo('template_url') ?>/img/hello.png" alt="alice">
	<h1>I'm</h1>
	<img class="sidebar-logo" src="<?php bloginfo('template_url') ?>/img/alice-logo.png" alt="alice">
	<p>When I'm not planning my next adventure, you'll find me at my desk, empowering companies to use Digital Media to grow their business!</p>
	<img class="sidebar-portrait" src="<?php bloginfo('template_url') ?>/img/alice2.jpg" alt="alice">
	<aside id="secondary" class=" widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
	<div id="sidebar-signup-div">
		<h2>Want more?</h2>
		<p>fancy receiving FREE resources and valuable content delivered straight to your inbox?</p>
		<button id="sidebar-signup">Yes Please!</button>
	</div>
<?php endif; ?>
