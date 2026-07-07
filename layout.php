<?php
if (!isset($pageTitle)) {
  $pageTitle = "NextLevel";
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">

  <!-- Site Title -->
  <title><?php // echo $pageTitle; ?></title>

  <!-- Place favicon.ico in the root directory -->
  <!-- Standard Favicons -->
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="shortcut icon" href="favicon_io/favicon.ico" type="image/x-icon">

<!-- Apple Touch Icon -->
<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">

<!-- Android Chrome Icons -->
<link rel="icon" type="image/png" sizes="192x192" href="favicon_io/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="favicon_io/android-chrome-512x512.png">

<!-- Web App Manifest -->
<link rel="manifest" href="favicon_io/site.webmanifest">


  <!-- CSS here -->
  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome-pro.min.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/bexon-icons.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/swiper.min.css">
  <link rel="stylesheet" href="assets/css/venobox.min.css">
  <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
  <link rel="stylesheet" href="assets/css/meanmenu.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/main-1.css">
</head>

<body>
  <div class="body-overlay"></div>

  <!-- Preloader Start -->
  <!-- <div class="tj-preloader is-loading">
    <div class="tj-preloader-inner">
      <div class="tj-preloader-ball-wrap">
        <div class="tj-preloader-ball-inner-wrap">
          <div class="tj-preloader-ball-inner">
            <div class="tj-preloader-ball"></div>
          </div>
          <div class="tj-preloader-ball-shadow"></div>
        </div>
        <div id="tj-weave-anim" class="tj-preloader-text">Loading...</div>
      </div>
    </div>
    <div class="tj-preloader-overlay"></div>
  </div> -->
  <!-- Preloader end -->

  <!-- back to top start -->
  <div id="tj-back-to-top"><span id="tj-back-to-top-percentage"></span></div>
  <!-- back to top end -->
 <?php include 'includes/header.php'; ?>
 
<div id="smooth-wrapper">
  <div id="smooth-content">
    <main class="page-content">
      <?= $content ?? '' ?>
      <?php include 'includes/footer.php'; ?>
    </main>
  </div>
</div>




  <!-- JS here -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/gsap.min-1.js"></script>
  <script src="assets/js/ScrollSmoother-1.js"></script>
  <script src="assets/js/gsap-scroll-to-plugin.min-1.js"></script>
  <script src="assets/js/gsap-scroll-trigger.min-1.js"></script>
  <script src="assets/js/gsap-split-text.min.js"></script>
  <script src="assets/js/jquery.nice-select.min-1.js"></script>
  <script src="assets/js/swiper.min-1.js"></script>
  <script src="assets/js/odometer.min-1.js"></script>
  <script src="assets/js/venobox.min.js"></script>
  <script src="assets/js/appear.min-1.js"></script>
  <script src="assets/js/wow.min-1.js"></script>
  <script src="assets/js/meanmenu-1.js"></script>
  <script src="assets/js/main-1.js"></script>
  
</body>

</html>