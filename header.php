<?php
/* Main Header File*/
?>


<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400i|Arapey" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sacramento|Yantramanav:100" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css">

<?php wp_head(); ?>

<body>


  <div class="animated bounceInDown" id="popup">
    <div class="inner-banner">
      <i class="close-button fa fa-times" aria-hidden="true"></i>
      <h1>Pssssst, over here.</h1>
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
  </div>

<div class="nav-bar">
  <div class="menu">
     <div class="menu-box">
       <span class="alice">Alice</span><span class="benham">Benham</span>
       <p>Digital Marketing Strategist</p>
       <div class="menu-box-inner">
       </div>
       <div class="menu-box-opaque opaque"></div>
     </div>
  </div>
  <div class="menu-nav">
    <div class="menu-social">
      <i class="fa fa-facebook" aria-hidden="true"></i>
      <i class="fa fa-instagram" aria-hidden="true"></i>
      <i class="fa fa-twitter" aria-hidden="true"></i>
    </div>
    <!-- <ul>
      <li>Home</li>
      <li>About</li>
      <li>Blog</li>
      <li>Contact</li>
    </ul> -->
    <?php
      wp_nav_menu( $arg = array(
                  'menu_class' => 'menu-item',
                  'theme_location' => 'primary'
      ));
    ?>
  </div>
</div>
