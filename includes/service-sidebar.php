<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- RIGHT SIDEBAR -->
<div class="col-lg-4">
    <div class="tj-main-sidebar slidebar-stickiy">
        <div class="tj-sidebar-widget service-categories wow fadeInUp" data-wow-delay=".1s">
            <h4 class="widget-title">Other Services</h4>
            <ul>
                <li>
                    <a href="admin-services.php"
                        class="<?= ($current_page == 'admin-services.php') ? 'active' : ''; ?>">
                        Admin Services
                        <span class="icon"><i class="tji-arrow-right"></i></span>
                    </a>
                </li>

                <li>
                    <a href="shared-services-outsourcing.php"
                        class="<?= ($current_page == 'shared-services-outsourcing.php') ? 'active' : ''; ?>">
                        Shared Services Outsourcing
                        <span class="icon"><i class="tji-arrow-right"></i></span>
                    </a>
                </li>

                <li>
                    <a href="partnered-support-model.php"
                        class="<?= ($current_page == 'partnered-support-model.php') ? 'active' : ''; ?>">
                        Partnered Support Model
                        <span class="icon"><i class="tji-arrow-right"></i></span>
                    </a>
                </li>

                <li>
                    <a href="web-design-and-development.php"
                        class="<?= ($current_page == 'web-design-and-development.php') ? 'active' : ''; ?>">
                        App & Website Development
                        <span class="icon"><i class="tji-arrow-right"></i></span>
                    </a>
                </li>

                <li>
                    <a href="creative-communication.php"
                        class="<?= ($current_page == 'creative-communication.php') ? 'active' : ''; ?>">
                        Creative Communication
                        <span class="icon"><i class="tji-arrow-right"></i></span>
                    </a>
                </li>

                <li>
                    <a href="seo.php"
                        class="<?= ($current_page == 'seo.php') ? 'active' : ''; ?>">
                        SEO Services
                        <span class="icon"><i class="tji-arrow-right"></i></span>
                    </a>
                </li>

                <li>
                    <a href="social-media.php"
                        class="<?= ($current_page == 'social-media.php') ? 'active' : ''; ?>">
                        Social Media
                        <span class="icon"><i class="tji-arrow-right"></i></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>