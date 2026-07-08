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
                    <h2 class="tj-page-title mt-2"><b>Terms and Conditions</b></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Privacy Policy Section -->
<section class="terms-and-conditions section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="terms-and-conditions-wrapper">

                    <!-- 1 -->
                    <div id="acceptance-of-terms">
                        <h3 class="title title-anim">1. Acceptance of Terms</h3>
                        <p>
                            By accessing the website at
                            <a href="https://www.nxtlevel.nz" target="_blank">www.nxtlevel.nz</a>
                            or engaging our professional services, you confirm that you have read,
                            understood, and agree to be bound by these Terms & Conditions.
                            Continued use of our services constitutes ongoing acceptance of any updates.
                        </p>
                    </div>

                    <!-- 2 -->
                    <div id="use-of-services">
                        <h3 class="title title-anim">2. Use of Our Services</h3>

                        <p>You agree to use our services only for lawful purposes. You shall not:</p>

                        <ul>
                            <li>Violate any applicable local, national, or international laws.</li>
                            <li>Infringe upon the rights of others or interfere with the security and performance of our
                                systems.</li>
                            <li>Reverse engineer or attempt to extract source code from our digital assets.</li>
                        </ul>
                    </div>

                    <!-- 3 -->
                    <div id="intellectual-property">
                        <h3 class="title title-anim">3. Intellectual Property</h3>

                        <ul>
                            <li>
                                <strong>Company Ownership:</strong>
                                All branding, text, and original design elements on this website are the exclusive
                                property of Nxtlevel Limited.
                            </li>

                            <li>
                                <strong>Client Deliverables:</strong>
                                Upon receipt of full payment for design or consulting services, the agreed-upon final
                                deliverables shall be transferred to the client.
                                Nxtlevel Limited retains a non-exclusive right to feature these works in our
                                professional portfolio.
                            </li>
                        </ul>
                    </div>

                    <!-- 4 -->
                    <div id="privacy">
                        <h3 class="title title-anim">4. Data Collection & Privacy</h3>

                        <p>
                            Use of our services is subject to our Privacy Policy. We collect personal
                            data to deliver our services, measure engagement, and improve website performance.
                            You have the right to request access to or correction of any personal information
                            we hold by contacting
                            <a href="mailto:info@nxtlevel.nz">info@nxtlevel.nz</a>.
                        </p>
                    </div>

                    <!-- 5 -->
                    <div id="limitation-liability">
                        <h3 class="title title-anim">5. Limitation of Liability</h3>

                        <p>
                            To the maximum extent permitted by law, Nxtlevel Limited and its affiliates
                            shall not be held liable for any indirect, incidental, or consequential damages,
                            including but not limited to loss of profits, data, or business opportunities
                            arising from the use of our services or website.
                        </p>
                    </div>

                    <!-- 6 -->
                    <div id="analytics-cookies">
                        <h3 class="title title-anim">6. Use of Analytics, Cookies & Third-Party Services</h3>

                        <p>We use cookies, analytics, and tracking technologies to:</p>

                        <ul>
                            <li>Improve website performance.</li>
                            <li>Measure engagement and website traffic.</li>
                            <li>Understand user behaviour.</li>
                        </ul>

                        <p>
                            Our platform may contain links to third-party tools (such as Google Analytics).
                            We are not responsible for the privacy practices, content, or security of these external
                            platforms.
                        </p>
                    </div>

                    <!-- 7 -->
                    <div id="suspension-termination">
                        <h3 class="title title-anim">7. Suspension & Termination</h3>

                        <p>
                            We reserve the right to suspend or terminate your access to our website
                            or services immediately and without notice if we consider that you have
                            breached these Terms or engaged in conduct detrimental to the brand.
                        </p>
                    </div>

                    <!-- 8 -->
                    <div id="general-provisions">
                        <h3 class="title title-anim">8. General Provisions</h3>

                        <ul>
                            <li>
                                <strong>Governing Law:</strong>
                                These Terms are governed by and must be interpreted in accordance
                                with the laws of New Zealand. Each party submits to the jurisdiction
                                of the Courts of New Zealand.
                            </li>

                            <li>
                                <strong>Severability:</strong>
                                If any provision of these Terms is found to be unenforceable,
                                that provision shall be severed and the remainder of the Terms
                                shall remain in full force.
                            </li>

                            <li>
                                <strong>Entire Agreement:</strong>
                                These Terms constitute the entire agreement between the parties
                                and supersede all prior discussions or representations.
                            </li>
                        </ul>
                    </div>

                    <!-- 9 -->
                    <div id="contact-information">
                        <h3 class="title title-anim">9. Contact Information</h3>

                        <p>
                            For questions regarding these Terms or to submit a data request,
                            please contact:
                        </p>

                        <p><strong>Nxtlevel Limited</strong></p>

                        <ul>
                            <li>
                                <strong>Email:</strong>
                                <a href="mailto:info@nxtlevel.nz">info@nxtlevel.nz</a>
                            </li>

                            <li>
                                <strong>Phone:</strong>
                                <a href="tel:+64204504050">+64 20 450 4050</a>
                            </li>

                            <li>
                                <strong>Address:</strong>
                                <a href="https://maps.app.goo.gl/jMi6AVPxyyN9GiNX6" target="_blank">
                                    47 Union Street, Auckland CBD, Auckland, New Zealand 1010
                                </a>
                            </li>
                        </ul>
                    </div>

                    <p class="muted mt-4">
                        <small>
                            These Terms & Conditions are provided for general informational purposes
                            and may be updated periodically. Please review this page regularly for any changes.
                        </small>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Privacy Policy Section -->

<?php
$content = ob_get_clean();
include 'layout.php';
?>