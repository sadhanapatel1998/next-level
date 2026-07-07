<?php
$pageTitle = "Home | NextLevel";
include 'config.php';
ob_start();
?>

<div class="top-space-15"></div>

<style>
    /* Default description color */
    .h5-service-section .service-item.style-6 .desc {
        color: #000;
        transition: color 0.3s ease;
    }

    /* Change description color when card is hovered */
    .h5-service-section .service-item.style-6:hover .desc {
        color: #fff;
    }
</style>


<!-- start: Breadcrumb Section -->
<section class="con-page-header section-gap-x" data-bg-image="assets/images/about/newzland.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="con-page-header-content text-left">

                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span><a href="index.php">Home</a></span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span><span>About Us</span></span>
                    </div>

                </div>

                <h2 class="tj-page-title mt-2"><b>Our Story</b></h2>

            </div>
        </div>
    </div>
    <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.png"></div>
</section>
<!-- end: Breadcrumb Section -->



<!-- start: Why Choose Us Section -->
<section id="choose" class="tj-choose-section section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-heading-wrap">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                        <i class="tji-box"></i>Why Choose NXT Level
                    </span>

                    <div class="heading-wrap-content">
                        <div class="sec-heading">
                            <h2 class="sec-title title-anim">
                                Empowering Businesses with
                                <span>Smart, Scalable Solutions.</span>
                            </h2>
                        </div>

                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
                            <a class="tj-primary-btn" href="contact.php">
                                <span class="btn-text"><span>Talk to Our Team</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-gap-4 rightSwipeWrap">

            <!-- Mission -->
            <div class="col-lg-4 col-md-6">
                <div class="choose-box right-swipe h-100">
                    <div class="choose-content">
                        <div class="choose-icon" aria-hidden="true">
                            <i class="tji-innovative"></i>
                        </div>
                        <h4 class="title">Our Mission</h4>
                        <p class="desc">
                            To support businesses with reliable back-office, shared services, and consulting
                            solutions that improve efficiency, reduce operational burden, and enable
                            sustainable growth.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision -->
            <div class="col-lg-4 col-md-6">
                <div class="choose-box right-swipe h-100">
                    <div class="choose-content">
                        <div class="choose-icon" aria-hidden="true">
                            <i class="tji-eye-box"></i>
                        </div>
                        <h4 class="title">Our Vision</h4>
                        <p class="desc">
                            To be a trusted global partner for businesses seeking scalable operational
                            support, strategic guidance, and long-term performance improvement.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Why Us -->
            <div class="col-lg-4 col-md-6">
                <div class="choose-box right-swipe h-100">
                    <div class="choose-content">
                        <div class="choose-icon" aria-hidden="true">
                            <i class="tji-award"></i>
                        </div>
                        <h4 class="title">Why NXT Level</h4>
                        <p class="desc">
                            We work as an extension of your team — combining domain expertise, structured
                            processes, and a people-first approach to deliver consistent, measurable
                            business outcomes.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- start: Service Section -->
<section class="h5-service-section overflow-hidden section-gap" style="background-color:white;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-heading-wrap style-3">
                    <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                        <i class="tji-box"></i>Our Solutions
                    </span>
                    <div class="heading-wrap-content">
                        <div class="sec-heading style-3">
                            <h3 class="sec-title text-anim">Tailored Business Solutions for Modern Teams</h3>
                        </div>
                        <div class="btn-area wow fadeInUp" data-wow-delay=".8s">
                            <a class="tj-primary-btn" href="admin-services.php">
                                <span class="btn-text"><span>Explore More</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-wrapper wow fadeInUp" data-wow-delay=".4s">
                    <div class="swiper service-slider-2">
                        <div class="swiper-wrapper">

                            <!-- Service 1 -->
                            <div class="swiper-slide">
                                <div class="service-item style-6">
                                    <h4 class="title"><a href="admin-services.php">Back-office Support </a></h4>
                                    <div class="service-icon">
                                        <i class="tji-service-1"></i>
                                    </div>
                                    <div class="service-content">
                                        <p class="desc">End-to-end outsourcing solutions that help businesses reduce
                                            operational workload and increase efficiency.</p>
                                        <a class="text-btn" href="admin-services.php">
                                            <span class="btn-text"><span>Learn More</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 2 -->
                            <div class="swiper-slide">
                                <div class="service-item style-6">
                                    <h4 class="title"><a href="shared-services-outsourcing.php">Shared Services Outsourcing</a>
                                    </h4>
                                    <div class="service-icon">
                                        <i class="tji-service-2"></i>
                                    </div>
                                    <div class="service-content">
                                        <p class="desc">Streamlined support functions such as HR, finance, admin, and
                                            operations under one efficient shared-service model.</p>
                                        <a class="text-btn" href="shared-services-outsourcing.php">
                                            <span class="btn-text"><span>Learn More</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 3 -->
                            <div class="swiper-slide">
                                <div class="service-item style-6">
                                    <h4 class="title"><a href="partnered-support-model.php">Partnered Support Model</a>
                                    </h4>
                                    <div class="service-icon">
                                        <i class="tji-service-3"></i>
                                    </div>
                                    <div class="service-content">
                                        <p class="desc">Build a global workforce with dedicated supported professionals
                                            who integrate seamlessly with your local team.</p>
                                        <a class="text-btn" href="partnered-support-model.php">
                                            <span class="btn-text"><span>Learn More</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Service 4 -->
                            <div class="swiper-slide">
                                <div class="service-item style-6">
                                    <h4 class="title"><a href="web-design-and-development.php">App & Website Development</a></h4>
                                    <div class="service-icon">
                                        <i class="tji-service-4"></i>
                                    </div>
                                    <div class="service-content">
                                        <p class="desc">We build modern, secure, and scalable apps and websites that power business growth and deliver seamless digital experiences.</p>
                                        <a class="text-btn" href="web-design-and-development.php">
                                            <span class="btn-text"><span>Learn More</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="swiper-pagination-area"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Service Section -->
<?php include 'pages/home/why-choose-us.php'; ?>



<?php
$content = ob_get_clean();
include 'layout.php';
?>