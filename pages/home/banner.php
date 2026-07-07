
<section class="h5-banner-section section-gap-x">

  <div class="banner-bg">
    <video autoplay muted loop playsinline class="banner-video">
      <source src="assets/videos/banner-video.mov" type="video/mp4">
    </video>
     <div class="video-overlay"></div> 
  </div>

  <div class="h5-banner-area  text-center">
    <div class="h5-banner-content justify-content-center  text-center">
     <div class="heading-banner text-center d-flex justify-content-center">
    <h1 class="typing-headline">
       <span class="row-1">Your Partner for Exceptional</span>
<span class="row-2">
  <span id="typing-text"></span>
  <span class="cursor">|</span>
</span>

   
    </h1>
</div>


    </div>

   
  </div>
  <div class="bg-shape-1">
    <img src="assets/images/shape/pattern-2-1.svg" alt="">
  </div>
  <div class="bg-shape-2">
    <img src="assets/images/shape/pattern-3-1.svg" alt="">
  </div>
  <div class="banner-scroll wow fadeInDown" data-wow-delay="1.5s">
    <a href="#choose" class="scroll-down">
      <span><i class="tji-arrow-down-long"></i></span>
      Scroll Down
    </a>
  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const words = [
        "Back-office Support ",
        "Global Talent",
        "Consulting",
        "Shared Services"
    ];

    let i = 0;    
    let j = 0;    
    let isDeleting = false;
    const speed = 120;
    const delay = 1500;
    const typingText = document.getElementById("typing-text");

    function typeEffect() {
        let currentWord = words[i];

        if (!isDeleting) {
            typingText.textContent = currentWord.substring(0, j + 1);
            j++;

            if (j === currentWord.length) {
                isDeleting = true;
                setTimeout(typeEffect, delay);
                return;
            }
        } 
        else {
            typingText.textContent = currentWord.substring(0, j - 1);
            j--;

            if (j === 0) {
                isDeleting = false;
                i = (i + 1) % words.length;
            }
        }

        setTimeout(typeEffect, isDeleting ? 60 : speed);
    }

    typeEffect();
});
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>