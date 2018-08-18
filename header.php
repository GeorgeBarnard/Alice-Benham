<?php
/* Main Header File */
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora:400i|Arapey|Sacramento|Yantramanav:100,300,500,700" rel="stylesheet">

<?php wp_head(); ?>

</head>
<body class="body">


  <div class="animated bounceInDown" id="popup">
    <div class="inner-banner">
      <i class="close-button fa fa-times" aria-hidden="true"></i>
      <h1>Pssssst, over here.</h1>
      <h5>
      Want to receive valuable knowledge about social media blogging and all things digital? Start growing your business today and sign up to my mailing list!
      </h5>
      <div class="newsletter">
        <?php the_field('newsletter'); ?>
      </div>
      <h6>Your email is always safe with me!</h6>
    </div>
  </div>
<div class="animated slideInDown mobile-nav-bar">
  <?php
    wp_nav_menu( $arg = array(
                'menu_class' => 'menu-item',
                'theme_location' => 'primary'
    ));
  ?>
  <div class="small-menu-social">
    <!-- <a target="_blank" href="https://www.facebook.com/alicebenham.co.uk/"><i class="fa fa-facebook" aria-hidden="true"></i></a> -->
    <a target="_blank" href="https://www.instagram.com/alice_benham/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <!-- <a target="_blank" href="https://twitter.com/alicebenham1998"><i class="fa fa-twitter" aria-hidden="true"></i></a> -->
  </div>
</div>
<div class="nav-bar">
  <i class="small-bars fa fa-bars" aria-hidden="true"></i>
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
      <!-- <a target="_blank" href=" https://www.facebook.com/alicebenham.co.uk/"><i class="fa fa-facebook" aria-hidden="true"></i></a> -->
      <a target="_blank" href="https://www.instagram.com/alice_benham/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <!-- <a target="_blank" href="https://twitter.com/alicebenham1998"><i class="fa fa-twitter" aria-hidden="true"></i></a> -->
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
