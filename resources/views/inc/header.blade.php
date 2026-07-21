<style>
  @media (max-width: 768px) {
    .nav-cta {
         width: 210px !important;
    }
}
</style>


<a href="#main" class="skip-link">Skip to content</a>
<div class="scroll-progress" id="scrollProgress"></div>
<div class="bg-orbs" aria-hidden="true"><span class="orb orb-1"></span><span class="orb orb-2"></span><span class="orb orb-3"></span></div>

<!-- ============================= NAV ============================= -->
<header class="nav">
  <div class="container nav-inner">
    <a href="#main" class="logo" aria-label="Advento Digital home">
      {{--<svg class="logo-mark" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <defs><linearGradient id="logoGrad" x1="0" y1="0" x2="36" y2="36"><stop offset="0" stop-color="#4F46E5"/><stop offset="1" stop-color="#13B8A6"/></linearGradient></defs>
        <rect width="36" height="36" rx="10" fill="url(#logoGrad)"/>
        <circle cx="11" cy="24" r="2.6" fill="#fff" opacity=".55"/>
        <circle cx="18" cy="13" r="2.6" fill="#fff" opacity=".8"/>
        <circle cx="26" cy="20" r="3.1" fill="#fff"/>
        <path d="M11 24 L18 13 L26 20" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" opacity=".85"/>
      </svg>--}}
      <img src="{{ asset('img/logo.jpg') }}" alt="logo">
      Advento Agency
    </a>
    <nav class="nav-links" aria-label="Primary">
      <a href="#services">Services</a>
      <a href="#results">Results</a>
      {{--<a href="#testimonials">Testimonials</a>
      <a href="#blog">Blog</a>--}}
      <a href="#about ">About </a>
      <a href="#faq">FAQ</a>
      <a href="#contact">Contact</a>
    </nav>
    <div class="nav-cta">
      <a href="#contact" class="btn btn-secondary btn-sm">Book a Free Call</a>
      <a href="#contact" class="btn btn-primary btn-sm">Get Free Tracking Audit</a>
      <button class="nav-toggle" id="navToggle" aria-label="Toggle menu" aria-expanded="false"><span></span></button>
    </div>
  </div>
</header>