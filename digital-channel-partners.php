<?php
$pageTitle = "Digital Channel Partners | NXT Level";
include 'config.php';
ob_start();
?>

<!-- Improved CSS -->
<style>
/* ===== GLOBAL STYLES ===== */
:root {
  --primary: #00c6a9;
  --primary-dark: #00a88f;
  --secondary: #0b2f3a;
  --accent: #ff7a45;
  --light: #f8f9fb;
  --dark: #1a1a1a;
  --text: #333333;
  --text-light: #666666;
  --white: #ffffff;
  --border: #eaeaea;
  --shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
  --shadow-hover: 0 10px 30px rgba(0, 0, 0, 0.12);
}

/* ===== BREADCRUMB SECTION ===== */



/* ===== DCP SECTIONS ===== */
.nx-dcp-section {
  padding: 60px 0;
  position: relative;
}

.nx-dcp-light {
  background: #f8f9fb;
}

.nx-dcp-dark {
  background: #ffffff;
}

.nx-dcp-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.nx-dcp-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}

.nx-dcp-reverse .nx-dcp-content {
  order: 2;
}

.nx-dcp-reverse .nx-dcp-image {
  order: 1;
}

.nx-dcp-content h3 {
  font-size: 36px;
  font-weight: 700;
  line-height: 1.3;
  margin-bottom: 25px;
  color: #1a1a1a;
}

.nx-dcp-content p {
  font-size: 17px;
  line-height: 1.7;
  color: #444444;
  margin-bottom: 20px;
}

.nx-dcp-content ul {
  margin: 25px 0;
  padding-left: 0;
}

.nx-dcp-content li {
  list-style: none;
  margin-bottom: 12px;
  padding-left: 30px;
  position: relative;
  font-size: 16px;
  line-height: 1.6;
  color: #444444;
}

.nx-dcp-content li::before {
  content: "✓";
  position: absolute;
  left: 0;
  top: 0;
  width: 22px;
  height: 22px;
  background: #00c6a9;
  border-radius: 50%;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  font-weight: bold;
}

.nx-dcp-image {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.nx-dcp-image:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.nx-dcp-image img {
  width: 100%;
  height: auto;
  display: block;
  transition: transform 0.5s ease;
}

.nx-dcp-image:hover img {
  transform: scale(1.03);
}

/* ===== BUILDER SECTION ===== */
.builder-section {
  padding: 100px 0;
  background: linear-gradient(135deg, #0d1b2a 0%, #0b2f3a 100%);
  position: relative;
  overflow: hidden;
}

.builder-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="%2300c6a9" opacity="0.03"><circle cx="50" cy="50" r="2"/></svg>') repeat;
  background-size: 50px 50px;
}

.builder-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 30px;
  position: relative;
  z-index: 2;
}

.builder-card {
  background: #ffffff;
  border-radius: 16px;
  padding: 40px 30px;
  text-align: center;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}

.builder-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 5px;
}

.builder-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.builder-card h3 {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 15px;
  color: #1a1a1a;
}

.builder-line {
  width: 60px;
  height: 4px;
  margin: 0 auto 25px;
  border-radius: 2px;
}

.builder-icon {
  width: 80px;
  height: 80px;
  margin: 0 auto 25px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 32px;
  transition: transform 0.3s ease;
}

.builder-card:hover .builder-icon {
  transform: scale(1.1);
}

.builder-card p {
  font-size: 15px;
  line-height: 1.6;
  color: #555555;
  margin-bottom: 15px;
}

.builder-card h5 {
  margin: 25px 0 15px;
  font-size: 16px;
  font-weight: 600;
  color: #1a1a1a;
}

.builder-card ul {
  list-style: none;
  padding: 0;
  margin: 0 0 30px;
  text-align: left;
}

.builder-card ul li {
  font-size: 14px;
  margin-bottom: 10px;
  padding-left: 20px;
  position: relative;
  color: #555555;
  line-height: 1.5;
}

.builder-card ul li::before {
  content: "•";
  position: absolute;
  left: 0;
  color: #00c6a9;
  font-weight: bold;
  font-size: 18px;
}

.builder-btn {
  display: inline-block;
  padding: 12px 30px;
  border-radius: 30px;
  color: #ffffff;
  font-size: 14px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.builder-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}

/* Color Themes */
.green::before { background: #7bbe57; }
.green .builder-line { background: #7bbe57; }
.green .builder-icon { background: #dff1d6; color: #5fa146; }
.green .builder-btn { background: #7bbe57; }
.green .builder-btn:hover { background: #6aaa4a; }

.orange::before { background: #f59b23; }
.orange .builder-line { background: #f59b23; }
.orange .builder-icon { background: #fde6c7; color: #f59b23; }
.orange .builder-btn { background: #f59b23; }
.orange .builder-btn:hover { background: #e08c1a; }

.blue::before { background: #23b0dc; }
.blue .builder-line { background: #23b0dc; }
.blue .builder-icon { background: #d7f0f9; color: #23b0dc; }
.blue .builder-btn { background: #23b0dc; }
.blue .builder-btn:hover { background: #1e9bc3; }

/* ===== MISSION SECTION ===== */
.mission-section {
  padding: 100px 0;
  background: #ffffff;
}

.mission-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: 60px;
  align-items: center;
}

.mission-content h3 {
  font-size: 36px;
  font-weight: 700;
  line-height: 1.3;
  color: #1a1a1a;
  margin-bottom: 0;
}

.mission-line {
  width: 80px;
  height: 5px;
  background: #00c6a9;
  margin: 20px 0 30px;
  border-radius: 3px;
}

.mission-content p {
  font-size: 16px;
  line-height: 1.7;
  color: #444444;
  margin-bottom: 20px;
}

.highlight-title {
  font-weight: 700;
  color: #1a1a1a;
  margin-top: 30px;
  font-size: 18px;
}

/* Logo Visual */
.mission-visual {
  display: flex;
  justify-content: center;
  align-items: center;
}

.logo-blob {
  width: 360px;
  height: 360px;
  background: linear-gradient(135deg, #00c6a9 0%, #0acffe 100%);
  border-radius: 63% 37% 47% 53% / 55% 43% 57% 45%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  box-shadow: 0 20px 40px rgba(0, 198, 169, 0.2);
  animation: float 6s ease-in-out infinite;
}

@keyframes float {
  0% { transform: translateY(0px); }
  50% { transform: translateY(-15px); }
  100% { transform: translateY(0px); }
}

.logo-blob img {
  width: 100%;
  background: #ffffff;
  border-radius: 20px;
  padding: 30px;
  object-fit: contain;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

/* ===== RESPONSIVE DESIGN ===== */
@media (max-width: 991px) {
  .tj-page-title {
    font-size: 36px;
  }
  
  .nx-dcp-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  
  .nx-dcp-reverse .nx-dcp-content {
    order: 1;
  }
  
  .nx-dcp-reverse .nx-dcp-image {
    order: 2;
  }
  
  .mission-container {
    grid-template-columns: 1fr;
    text-align: center;
    gap: 40px;
  }
  
  .mission-line {
    margin: 20px auto 30px;
  }
  
  .logo-blob {
    width: 280px;
    height: 280px;
    margin-top: 20px;
  }
}

@media (max-width: 768px) {
  .con-page-header {
    padding: 60px 0 40px;
  }
  
  .tj-page-title {
    font-size: 32px;
  }
  
  .nx-dcp-section {
    padding: 70px 0;
  }
  
  .nx-dcp-content h3 {
    font-size: 28px;
  }
  
  .builder-section {
    padding: 70px 0;
  }
  
  .builder-container {
    grid-template-columns: 1fr;
  }
  
  .mission-section {
    padding: 70px 0;
  }
  
  .mission-content h3 {
    font-size: 28px;
  }
}

@media (max-width: 480px) {
  .tj-page-title {
    font-size: 28px;
  }
  
  .nx-dcp-content h3 {
    font-size: 24px;
  }
  
  .builder-card {
    padding: 30px 20px;
  }
  
  .logo-blob {
    width: 240px;
    height: 240px;
    padding: 30px;
  }
}
</style>

<div class="top-space-15"></div>

<!-- start: Breadcrumb Section -->
<section class="con-page-header section-gap-x" data-bg-image="assets/images/bg/services.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="con-page-header-content text-left">

                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span><a href="index.php">Home</a></span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span><span>Service</span></span>
                    </div>

                </div>

                <h2 class="tj-page-title mt-2"><b>Digital Channel Partners</b></h2>

            </div>
        </div>
    </div>
    <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.png"></div>
</section>
<!-- end: Breadcrumb Section -->

<!-- SECTION 1 -->
<section class="nx-dcp-section nx-dcp-light">
  <div class="nx-dcp-container nx-dcp-grid">
    <div class="nx-dcp-content">
      <h3>Accelerate your growth with smarter digital partnerships.</h3>
      <p>
        At <b>NXT Level</b>, we help businesses unlock new opportunities through powerful digital channel partnerships that enhance visibility, strengthen customer engagement, and drive sustainable revenue growth. Our strategic digital solutions are designed to save your time, reduce operational burden, and maximize performance—so you can focus on what matters most: scaling your business with confidence.
      </p>
    </div>
    <div class="nx-dcp-image">
      <img src="assets/images/new/fav-1.png" alt="Digital Partners">
    </div>
  </div>
</section>

<!-- SECTION 2 -->
<section class="nx-dcp-section nx-dcp-dark">
  <div class="nx-dcp-container nx-dcp-grid nx-dcp-reverse">
    <div class="nx-dcp-content">
      <h3>Make your brand stand out with clarity and impact.</h3>
      <p>You already have a strong business, but your brand story may not yet be reaching the right audience with the right message. Without clear positioning, even great businesses struggle to stand out in competitive markets.</p>
      <p>Our <b>Brand Builder Program</b> at NXT Level begins with a deep understanding of your business, values, and goals. We refine your brand messaging to ensure it speaks directly to your ideal customers and reflects your true market potential.</p>
      <p>We will help you…</p>
      <ul>
        <li>Develop a clear and powerful brand strategy</li>
        <li>Refresh and strengthen your brand identity</li>
        <li>Create professional brand assets that inspire trust and loyalty</li>
      </ul>
    </div>
    <div class="nx-dcp-image">
      <img src="assets/images/new/2.png" alt="Service Integration">
    </div>
  </div>
</section>

<!-- SECTION 3 -->
<section class="nx-dcp-section nx-dcp-light">
  <div class="nx-dcp-container nx-dcp-grid">
    <div class="nx-dcp-content">
      <h3>Move faster from strategy to revenue generation.</h3>
      <p>You may already serve loyal clients, but acquiring new customers consistently is a common challenge for growing businesses. Without the right systems in place, revenue growth can feel unpredictable.</p>
      <p> With our  <b>Revenue Builder</b>, <strong>NXT Level</strong> designs intelligent, data-driven growth frameworks tailored to your business. We analyze your audience behavior, structure your sales funnels, and implement marketing automation that works around the clock to generate qualified leads.
</p>
<p>We will help you…</p>
<ul>
        <li>Define accurate customer personas</li>
        <li>Map complete buyer journeys</li>
        <li>Automate marketing for continuous lead generation</li>
      </ul>
    </div>
    <div class="nx-dcp-image">
      <img src="assets/images/new/3.png" alt="Who Can Partner">
    </div>
  </div>
</section>

<!-- SECTION 4 -->
<section class="nx-dcp-section nx-dcp-dark">
  <div class="nx-dcp-container nx-dcp-grid nx-dcp-reverse">
    <div class="nx-dcp-content">
      <h3>Build predictable profits without increasing your workload.</h3>
<p>Our <b>Profit Builder Program</b> focuses on strengthening your operational performance. We optimize your marketing investments, streamline internal processes, and improve conversion performance—so your profits increase without increasing your operational strain.</p>
<p>Our <b>Profit Builder</b> program will analyze your marketing efforts and streamline your routine tasks to drive profits. That way your business grows but your work hours don't.
</p>
<p>We will help you…</p>
      <ul>
        <li>Design high-performance campaigns and content</li>
        <li>Improve lead-to-customer conversion rates</li>
        <li>Monitor, measure, and optimize performance continuously</li>
      </ul>
    </div>
    <div class="nx-dcp-image">
      <img src="assets/images/new/4.png" alt="Partnership Models">
    </div>
  </div>
</section>

<!-- BUILDER SECTION -->
<section class="builder-section">
  <div class="builder-container">
    <?php
    $cards = [
      [
        "title" => "Brand Builder",
        "color" => "green",
        "icon"  => "🎯",
        "desc1" => "Let NXT Level reshape your brand into a market-ready identity that connects deeply with your ideal audience.",
        "desc2" => "We extract your vision, align it with market demand, and build a strong foundation for long-term brand authority.",
        "points" => [
          "Define your brand strategy",
          "Revitalize your brand identity",
          "Create impactful brand assets"
        ],
        "button" => "Learn More"
      ],
      [
        "title" => "Revenue Builder",
        "color" => "orange",
        "icon"  => "📈",
        "desc1" => "We help you gain complete clarity on who your customers are and how to reach them effectively.",
        "desc2" => "Our targeted strategies ensure that your brand message reaches the right audience at the right time—automatically.",
        "points" => [
          "Identify accurate customer personas",
          "Design effective buyer journeys",
          "Implement marketing automation systems"
        ],
        "button" => "Learn More"
      ],
      [
        "title" => "Profit Builder",
        "color" => "blue",
        "icon"  => "💲",
        "desc1" => "NXT Level strengthens your profitability by optimizing your operations and marketing efficiency.",
        "desc2" => "We track what works, eliminate what slows you down, and amplify what drives sustainable growth.",
        "points" => [
          "Launch results-driven campaigns and content",
          "Boost conversion performance",
          "Continuously optimize business processes"
        ],
        "button" => "Learn More"
      ]
    ];

    foreach ($cards as $card) { ?>
      <div class="builder-card <?php echo $card['color']; ?>">
        <h3><?php echo $card['title']; ?></h3>
        <div class="builder-line"></div>
        <div class="builder-icon"><?php echo $card['icon']; ?></div>
        <p><?php echo $card['desc1']; ?></p>
        <p><?php echo $card['desc2']; ?></p>
        <h5>Together we will...</h5>
        <ul>
          <?php foreach ($card['points'] as $point) { ?>
            <li><?php echo $point; ?></li>
          <?php } ?>
        </ul>
        <a href="#" class="builder-btn"><?php echo $card['button']; ?></a>
      </div>
    <?php } ?>
  </div>
</section>

<!-- MISSION SECTION -->
<section class="mission-section">
  <div class="mission-container">
    <div class="mission-content">
      <h3>A partner who believes in your mission.</h3>
      <div class="mission-line"></div>
      <p>
        At Digital Service Partners, we are highly selective about the clients we serve. We are committed to working with clients who are making the world a better place.
      </p>
      <p>
        When like-minded people work together toward the betterment of humanity, something remarkable happens: clients and vendors become friends and collaborators. The transformative work that we produce as a result far outperforms what could be achieved through a transactional mindset.
      </p>
      <p class="highlight-title">Why do we operate this way?</p>
      <p>
        We know from our own experience—as business people, designers, and technologists—that it's never fun to work with so-called experts who try to make you feel uninformed and shove what they know in your face.
      </p>
      <p>
        We are different and empoweringly collaborative because we don't assume you don't know what we know. We consider you the expert. We find out who you need around you to extend your expertise into areas that would consume too much of your time to master or manage.
      </p>
      <p>
        In short, we ensure everything we do supports you and advances your worthy mission.
      </p>
    </div>
    <div class="mission-visual">
      <div class="logo-blob">
        <img src="assets/images/logos/ll.png" alt="Company Logo">
      </div>
    </div>
  </div>
</section>

<?php
$content = ob_get_clean();
include 'layout.php';
?>