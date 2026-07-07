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
                    <h2 class="tj-page-title mt-2"><b>Privacy Policy</b></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->
 <!-- start: Privacy Policy Section -->
<section class="terms-and-conditions ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="terms-and-conditions-wrapper">


          <!-- 1: Information We Collect -->
          <div id="info-we-collect">
            <h3 class="title title-anim">1. Introduction: </h3 class="title title-anim">
            <p>NXT Level Limited (“we,” “us,” “our”) is committed to protecting your privacy. This policy outlines how we collect, use,  and protect your personal information in compliance with the New Zealand Privacy Act 2020 and relevant  international data protection standards. </p>
          </div>

          <!-- 2: How We Use -->
          <div id="how-we-use">
            <h3 class="title title-anim">2. Information We Collect: </h3 class="title title-anim">
            <p>We collect information directly from you when you engage our services or visit our website:</p>
            <ul>
              <li><strong>Personal Information:</strong> Name, email, phone number, company name, and job title.</li>
              <li> <strong>Service Data:</strong> Information provided for business proposals, onboarding, or project support.</li>
              <li><strong>Technical Data:</strong> IP addresses, browser types, and usage behavior via cookies and analytics. </li>
              
            </ul>
          </div>

          <!-- 3: Data Sharing -->
          <div id="data-sharing">
            <h3 class="title title-anim">3. How We Use Your Information: </h3 class="title title-anim">
            <p>
              Your data allows us to: 
            </p>
            <ul>
              <li>Provide consultancy, design, and outsourcing services. </li>
              <li>Communicate updates, proposals, or service-related messages. </li>
              <li>Bill for services and, if necessary, undertake credit checks or collect outstanding debts.</li>
              <li> Analyse website performance to improve user experience. </li>
            </ul>
          </div>

          <!-- 4: Data Security -->
          <div id="data-security">
            <h3 class="title title-anim">4. Data Sharing & Disclosure:</h3 class="title title-anim">
            <p>
             We do not sell or trade your personal information. We may share data only with: 
            </p>
            <ul>
              <li><strong>Trusted Service Providers:</strong> Hosting, analytics, or communication tool partners who adhere to strict confidentiality standards. </li>
              <li><strong> Cross-Border Transfer:</strong>  As we operate in New Zealand and India, your data may be processed in either jurisdiction. We ensure a consistent level of protection regardless of location.</li>
              <li><strong>Legal Obligations:</strong> Regulatory authorities or law enforcement if required by law.</li>
             
            </ul>
          </div>

          <!-- 5: Your Rights -->
          <div id="your-rights">
            <h3 class="title title-anim">5. Data Security & Retention:</h3 class="title title-anim">
            <p>We implement industry-standard encryption and secure storage protocols to protect your data from unauthorized access. We retain your personal information only for as long as necessary to fulfill the purposes outlined in this policy or to meet legal requirements. </p>
            
          </div>

          <!-- 6: Right and choice-->
          <div id="cookies">
            <h3 class="title title-anim">6. Your Rights & Choices:</h3 class="title title-anim">
            <p>
              Under the Privacy Act, you have the right to: 
            </p>
            <ul>
              <li><strong> Access:</strong> Request a copy of the personal information we hold about you.</li>
              <li><strong>Correction:</strong> Request that we update or correct inaccurate information.</li>
              <li><strong>Opt-out:</strong> Unsubscribe from marketing communications at any time.  </li>
            </ul>
            <p>To exercise these rights, please contact us at <a href="mailto:info@nxtlevel.nz">info@nxtlevel.nz.</a></p>
          </div>

          <!-- 7: Contact -->
          <div id="contact">
            <h3 class="title title-anim">7. Cookies & Tracking: </h3 class="title title-anim">
            <p>We use cookies to monitor website usage and improve performance. You may disable cookies in your browser settings, though some features of our site may not function properly as a result.</p>
            
          </div>

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