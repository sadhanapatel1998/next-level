<?php 
$pageTitle = "Home | NextLevel";
include 'config.php';
ob_start();
?>

<div class="top-space-15"></div>
<?php include 'pages/home/banner.php'; ?>
<?php include 'pages/home/about.php'; ?>
<?php include 'pages/home/services.php'; ?>
<?php include 'pages/home/process.php'; ?>
<?php // include 'pages/home/why-choose-us.php'; ?>
<?php // include 'pages/home/testimonials.php'; ?>
<?php include 'pages/home/faq.php'; ?>
<?php include 'pages/home/contact.php'; ?>

<?php
$content = ob_get_clean();
include 'layout.php';
?>  