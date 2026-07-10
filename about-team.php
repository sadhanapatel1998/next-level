<?php
$pageTitle = "Home | NextLevel";
include 'config.php';
ob_start();
?>

<div class="top-space-15"></div>

<!-- start: Breadcrumb Section -->
<section class="con-page-header section-gap-x" data-bg-image="assets/images/bg/services.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="con-page-header-content text-left">
                    <h2 class="tj-page-title mt-2"><b>OUR TEAM</b></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->
<!-- content start -->
<section id="choose" class="tj-choose-section section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content-area text-center mb-5">
                    <div class="sec-heading">
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                            <i class="tji-box"></i>Our Team
                        </span>
                        <h3 class="sec-title title-anim">
                            Meet our talented professionals
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-gap-4 rightSwipeWrap">

            <div class="col-lg-3 col-md-6 col-12">
                <div class="team-card">
                    <div class="team-info">
                        <h3>Harry Ghadiali</h3>
                        <span>Director</span>
                        <a href="mailto:harry@nxtlevel.nz" class="team-link">
                            harry@nxtlevel.nz
                        </a>
                        <a href="tel:0204504050" class="team-phone">
                            0204504050
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="team-card">
                    <div class="team-info">
                        <h3>Dylan Ferreira</h3>
                        <span>Director</span>
                        <a href="mailto:dylan@nxtlevel.nz" class="team-link">
                            dylan@nxtlevel.nz
                        </a>
                        <a href="tel:021952718" class="team-phone">
                            021952718
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="team-card">
                    <div class="team-info">
                        <h3>Tracy Berge</h3>
                        <span>Director</span>
                        <a href="mailto:tracy@nxtlevel.nz" class="team-link">
                            tracy@nxtlevel.nz
                        </a>
                        <a href="tel:021625201" class="team-phone">
                            021625201
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="team-card">
                    <div class="team-info">
                        <h3>Himadri Vyas</h3>
                        <span>Operations Manager</span>
                        <a href="mailto:info@nxtlevel.nz" class="team-link">
                            info@nxtlevel.nz
                        </a>
                        <!-- Phone number not visible in screenshot -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- content end -->



<?php
$content = ob_get_clean();
include 'layout.php';
?>