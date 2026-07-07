<section class="nls-services-section">
    <div class="nls-container container">

        <!-- SECTION HEADER -->
        <div class="row nls-header-row">
            <div class="col-lg-12 nls-header-col">
                <div class="nls-sec-heading-wrap">

                    <span class="nls-sub-title nls-fade-up">OUR EXPERTISE</span>

                    <div class="nls-heading-inner">
                        <h2 class="nls-title nls-text-anim">
                            Back-Office Support <span>Solutions.</span>
                        </h2>
                    </div>

                    <p class="nls-desc nls-fade-up" data-delay="0.2">
                        At <strong> NXT Level,</strong> we deliver end-to-end back-office Support for your operational
                        precision
                    </p>

                </div>
            </div>
        </div>

        <!-- SERVICES GRID USING BOOTSTRAP -->
        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="nls-service-card nls-fade-up h-100">
                    <div class="nls-service-content">
                        <div class="nls-icon"><i class="tji-service-1"></i></div>
                        <a href="admin-services.php">
                            <h4>Admin Services</h4>
                        </a>
                        <p>
                            At <strong> NXT Level,</strong> we provide reliable and flexible admin services designed to
                            support
                            day-to-day business operations and improve overall efficiency.
                        </p>
                    </div>
                    <img src="assets/images/service/bpo1.jpg" alt="">
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="nls-service-card nls-fade-up h-100">
                    <div class="nls-service-content">
                        <div class="nls-icon"><i class="tji-service-2"></i></div>
                        <a href="shared-services-outsourcing.php">
                            <h4>Shared Services</h4>
                        </a>

                        <p><strong>NXT Level’s</strong> Shared Services Outsourcing model helps organisations streamline
                            internal support
                            functions </p>
                    </div>
                    <img src="assets/images/service/shared-services-outsourcing.jpg" alt="">
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="nls-service-card nls-fade-up h-100">
                    <div class="nls-service-content">
                        <div class="nls-icon"><i class="tji-manage"></i></div>
                        <a href="partnered-support-model.php">
                            <h4>Partnered Support Model </h4>
                        </a>

                        <p><strong>NXT Level</strong> provides premium Partnered Support Model services that help New
                            Zealand businesses
                            scale </p>
                    </div>
                    <img src="assets/images/service/staff-augmentation.jpg" alt="">
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="nls-service-card nls-fade-up h-100">
                    <div class="nls-service-content">
                        <div class="nls-icon"><i class="tji-service-4"></i></div>
                        <a href="web-design-and-development.php">
                            <h4>App & Website Development</h4>
                        </a>

                        <p>Smart, reliable app and web solutions designed to elevate your digital presence.</p>
                    </div>
                    <img src="assets/images/service/business-consultancy.jpg" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const cards = document.querySelectorAll(".nls-fade-up");

        const revealOnScroll = () => {
            const trigger = window.innerHeight * 0.85;

            cards.forEach(card => {
                const top = card.getBoundingClientRect().top;
                if (top < trigger) {
                    card.classList.add("nls-show");
                }
            });
        };

        window.addEventListener("scroll", revealOnScroll);
        revealOnScroll();
    });
</script>