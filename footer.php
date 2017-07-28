<?php
/*Main Footer File*/
?>



<div class="footer">
<h1>Alice Benham</h1>
<h4>hello@alicebenham.co.uk</h4>
<div class="footer-menu">
  <!-- <ul>
    <li>Home</li>
    <li>About</li>
    <li>Blog</li>
    <li>Contact</li>
  </ul> -->
  <div class="bottomMenu">
            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
  </div>
</div>
<div class="footer-social">
  <i class="fa fa-facebook" aria-hidden="true"></i>
  <i class="fa fa-instagram" aria-hidden="true"></i>
  <i class="fa fa-twitter" aria-hidden="true"></i>
</div>
<div class="copyright">
  <h5>
    Copyright Alice Benham &#169;
    <script type="text/javascript">
    var d = new Date()
    document.write(d.getFullYear())
    </script>
  </h5>
</div>
<div class="credit">
  <h3><span>Web design by </span>FoldedGroup</h3>
</div>
</div>

<div class="section5">
<section class="feed"></section>
</div>
<?php wp_footer(); ?>
</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- <script src="<?php bloginfo('template_url') ?>/js/spectragram.js" type="text/javascript"></script> -->
<!-- <script src="<?php bloginfo('template_url') ?>/js/style.js" type="text/javascript"></script> -->
</html>
