<?php
error_reporting(0);
    session_start();
    $userID = $_SESSION['userID'];
    include 'displaypostscript.php'
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="header.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="footer.css">
  </head>
  <div>
      <div class="header">
        <div class="logo-image-container">
          <img class="logo-image" src="logo.png" />
        </div>
      <div class="navigation-tabs">
        <div class="home-tab">
          <img class="home-tab-icon" src="home-icon.png" />
          <p>Home</p>
        </div>
        <div class="forum-tab">
          <img class="forum-tab-icon" src="forum-icon.png" />
          <p>Forum</p>
        </div>
        <div class="faq-tab">
          <img class="faq-tab-icon" src="faq-icon.png" />
          <p>FAQ</p>
        </div>
        <div class="login-tab">
          <img class="login-tab-icon" src="login-icon.png" />
          <p>Log In</p>
        </div>
      </div>
    </div>
  </div>


  <div>
    <?php displayPosts();?>

  </div>


  <div class="footer">
    <div class="copyright-protection">
      <p class="copyright-protection-text">
        &#169; 2022 Flop&Go. All Rights Reserved
      </p>
    </div>
    <div class="about-us">
      <p>About Us</p>
      <p>Contact</p>
      <p>Staff</p>
    </div>
    <div class="social-media">
      <p class="social-media-text">Social Media</p>
      <div class="social-media-icons">
        <img
          class="social-media-icon-image"
          src="instagram.png"
        />
        <img class="social-media-icon-image" src="twitter.png" />
        <img
          class="social-media-icon-image"
          src="facebook.png"
        />
      </div>
    </div>
  </div>

  </body>
</html>