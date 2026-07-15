<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Advento Digital — Tracking &amp; Attribution Architects | GTM, GA4, Meta CAPI, GoHighLevel</title>
<meta name="description" content="Advento Digital rebuilds broken GA4, GTM, Meta Pixel and Google Ads tracking into one connected attribution system, so you scale ad spend on real data — not guesswork. Based in Dhaka, Bangladesh.">
<meta name="keywords" content="tracking and attribution agency, GTM setup, GA4 server-side tracking, Meta Conversions API, Google Ads enhanced conversions, GoHighLevel tracking, Dhaka Bangladesh">
<link rel="canonical" href="https://www.adventodigital.com/">
<meta name="robots" content="index, follow">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="Advento Digital">
<meta property="og:title" content="Advento Digital — Tracking & Attribution Architects">
<meta property="og:description" content="We rebuild broken GA4, GTM, Meta Pixel and Google Ads tracking into one connected attribution system — so you scale on real data, not guesswork.">
<meta property="og:url" content="https://www.adventodigital.com/">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Advento Digital — Tracking & Attribution Architects">
<meta name="twitter:description" content="We rebuild broken GA4, GTM, Meta Pixel and Google Ads tracking into one connected attribution system.">

<!-- Structured data: replace placeholder values (telephone, address, sameAs) with real details before publishing -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "ProfessionalService",
  "name": "Advento Digital",
  "description": "Tracking and attribution agency specializing in GoHighLevel, Google Tag Manager, GA4, Meta Conversions API and Google Ads conversion tracking.",
  "url": "https://www.adventodigital.com/",
  "areaServed": "Worldwide",
  "address": {
    "@@type": "PostalAddress",
    "addressLocality": "Dhaka",
    "addressCountry": "BD"
  },
  "telephone": "+880-XXX-XXX-XXXX",
  "priceRange": "$$"
}
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;1,500&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/premium-enhance.css">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
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

<main id="main">

<!-- ============================= HERO ============================= -->
<section class="hero">
  <div class="container hero-grid">
    <div class="hero-copy reveal">
      <div class="eyebrow"><span class="dot"></span>Tracking & Attribution Agency</div>
      <h1 class="custome_heading_one">  You're Spending on Ads. But Do You Actually Know What's Working?  <span class="grad"> We fix that.</span> </h1>
      <p class="lead">We fix broken tracking, rebuild your attribution, and connect all your platforms, so for the first time, your data actually tells you the truth. Not what the algorithm wants you to believe.</p>
      <div class="hero-actions">
        <a href="#contact" class="btn btn-primary">
          Get My Free Tracking Audit
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a href="#contact" class="btn btn-secondary">Book a Free Call</a>
      </div>
      <div class="hero-trust">
        <div class="avatar-stack" aria-hidden="true">
          <span>AD</span><span>EC</span><span>SB</span><span>GH</span>
        </div>
        <div>
          <div class="stars">★★★★★</div>
          <div class="trust-text"> Trusted by 100+ businesses across eCommerce, SaaS, Coaching & Agencies</div>
        </div>
      </div>
    </div>

    {{--<div class="hero-visual reveal">
      <div class="signal-card">
        <svg viewBox="0 0 560 280" role="img" aria-label="Illustration of disconnected tracking data points becoming one connected, traceable path">
          <defs>
            <linearGradient id="pathGrad" x1="245" y1="215" x2="510" y2="120" gradientUnits="userSpaceOnUse">
              <stop offset="0" stop-color="#4F46E5"/>
              <stop offset="1" stop-color="#13B8A6"/>
            </linearGradient>
          </defs>
          <path d="M30,225 L150,165 L245,215" stroke="#D6D3F5" stroke-width="2.5" stroke-dasharray="5 7" fill="none" stroke-linecap="round"/>
          <path id="gpath" class="gp-draw" d="M245,215 L330,150 L420,195 L510,120" stroke="url(#pathGrad)" stroke-width="3.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
          <circle cx="30" cy="225" r="6" fill="#fff" stroke="#C7C3F2" stroke-width="2"/>
          <circle cx="150" cy="165" r="6" fill="#fff" stroke="#C7C3F2" stroke-width="2"/>
          <circle cx="245" cy="215" r="7" fill="#FFFBEB" stroke="#F59E0B" stroke-width="2.5"/>
          <circle cx="330" cy="150" r="6" fill="#fff" stroke="#4F46E5" stroke-width="2.5"/>
          <circle cx="420" cy="195" r="6" fill="#fff" stroke="#13B8A6" stroke-width="2.5"/>
          <circle class="node-glow" cx="510" cy="120" r="11" fill="url(#pathGrad)"/>
          <path d="M504,120 l4,5 l9,-10" stroke="#fff" stroke-width="2.4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
          <circle class="travel-dot" r="4" fill="#fff" style="offset-path:path('M245,215 L330,150 L420,195 L510,120');"/>
        </svg>
        <div class="signal-caption">
          <span class="tag-bad">⚠ signal lost</span>
          <span class="tag-good">✓ fully tracked → converted</span>
        </div>
      </div>
      <div class="achieve-card">
        <div class="achieve-title">What You Get</div>
        <ul>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>Broken GA4 &amp; GTM tracking fixed</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>Meta Pixel + CAPI dual-tracking</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>Google Ads enhanced conversions</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>Full-funnel attribution restored</li>
        </ul>
      </div>
    </div>--}}
  </div>
</section>

<!-- Stats -->
<div class="stats-bar">
  <div class="container stats-grid reveal-stagger">
    <div><div class="stat-num"><span class="grad">120+</span></div><div class="stat-label">Tracking Projects</div></div>
    <div><div class="stat-num"><span class="grad">97%</span></div><div class="stat-label">Client Satisfaction</div></div>
    <div><div class="stat-num"><span class="grad">10+</span></div><div class="stat-label">Platforms Mastered</div></div>
    <div><div class="stat-num"><span class="grad">48h</span></div><div class="stat-label">Avg. Audit Turnaround</div></div>
  </div>
</div>

<!-- Industries -->
{{--<div class="industries">
  <div class="container">
    <div class="industries-label">Built for teams running real ad spend in</div>
    <div class="industries-row reveal-stagger">
      <span class="industry-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l1-5h16l1 5M4 9v9a1 1 0 001 1h14a1 1 0 001-1V9M9 13h6"/></svg>E-commerce</span>
      <span class="industry-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14a4 4 0 100-8 4 4 0 000 8zM4 21c0-3.3 3.6-6 8-6s8 2.7 8 6"/></svg>Coaching &amp; Info Products</span>
      <span class="industry-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 17l4-9 4 6 3-4 5 7H4z"/></svg>SaaS &amp; Funnels</span>
      <span class="industry-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 21V10l8-6 8 6v11M9 21v-6h6v6"/></svg>Real Estate</span>
      <span class="industry-chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V8l7-4 7 4v13M9 21v-5h6v5"/></svg>Agencies &amp; GHL Experts</span>
    </div>
  </div>
</div>--}}

<!-- ============================= PROBLEM ============================= -->
<section class="section bg-white" id="problem">
  <div class="container">
    <div class="section-head center reveal">
      <div class="eyebrow"><span class="dot"></span>Why Tracking Breaks</div>
      <h2>More Ad Spend Won't Save a Funnel That Can't  <span class="accent">Prove Itself.</span></h2>
      <p>You're spending money every day. Leads are coming in. But Google's reporting one number, Meta's reporting another, and your actual revenue tells a third story. Something's broken, and until you fix it, every budget decision you make is just an expensive guess.</p>
    </div>
    <div class="problem-grid reveal-stagger">
      <div class="problem-card">
        <div class="problem-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M9 18l-6-6 6-6M3 12h18"/></svg></div>
        <h3>Broken Attribution</h3>
        <p>Google claims 40 sales. Meta claims 35. Your orders show 26. Every platform is fighting for credit, and none of them are telling you the truth.</p>
      </div>
      <div class="problem-card">
        <div class="problem-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M21 12a9 9 0 11-2.64-6.36M21 3v6h-6"/></svg></div>
        <h3>Budget Going to the Wrong Campaigns</h3>
        <p>When the data is wrong, the algorithm learns the wrong things. It finds more people like your non-buyers and calls them conversions. You keep paying, for the wrong audience.</p>
      </div>
      <div class="problem-card">
        <div class="problem-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="12" cy="12" r="9"/><path d="M9.5 9a2.5 2.5 0 015 .5c0 1.5-2.5 2-2.5 3.5M12 17h.01"/></svg></div>
        <h3>Decisions Based on Guesswork</h3>
        <p>You're making real financial calls - scaling, cutting, pivoting - based on numbers you can't trust. That's not strategy. That's expensive guessing.</p>
      </div>
      <div class="problem-card">
        <div class="problem-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M3 17l6-6 4 4 8-8M21 7v6h-6"/></svg></div>
        <h3>Conversions Disappearing Silently</h3>
        <p>Leads fill out your form. Calls come in. Deals close. But none of it gets recorded, because your tracking has gaps nobody told you about.</p>
      </div>
    </div>
  </div>
</section>

{{--<div class="divider-signal reveal" aria-hidden="true">
  <svg viewBox="0 0 420 40">
    <defs><linearGradient id="divGrad" x1="0" y1="0" x2="420" y2="0"><stop offset="0" stop-color="#4F46E5"/><stop offset="1" stop-color="#13B8A6"/></linearGradient></defs>
    <path d="M0,20 L100,20 L150,8 L210,32 L270,8 L330,20 L420,20" stroke="url(#divGrad)" stroke-width="2" fill="none" stroke-dasharray="2 7" stroke-linecap="round"/>
  </svg>
</div>--}}

<!-- ============================= SOLUTION ============================= -->
<section class="section" id="solution">
  <div class="container">
    <div class="solution-card reveal">
      <div class="solution-copy">
        <div class="eyebrow"><span class="dot"></span>The Fix</div>
        <h2>We Don't Just Install a Pixel.  <span class="accent">We Build the</span> — Whole System.</h2>
        <p>Pixel is not a tracking system. It's one piece of a setup that, if done properly and should connect every platform you're running, capture every conversion that matters, and give you one honest picture of what's actually working.That's what we build not a quick setup that breaks the next time a browser updates. A proper, server-side tracking architecture tested, validated, and handed over with everything documented so you always know what's going on inside your own data.We've done this across eCommerce stores, coaching funnels, SaaS products, and agency setups. The platforms are different every time. The result is always the same: data you can finally trust.</p>
        <div class="tech-row">
          <span class="tech-tag">GoHighLevel</span>
          <span class="tech-tag">Google Tag Manager</span>
          <span class="tech-tag">GA4</span>
          <span class="tech-tag">Meta Pixel &amp; CAPI</span>
          <span class="tech-tag">Google Ads</span>
        </div>
        <a href="#services" class="btn btn-primary">See What We Do 
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
      <svg viewBox="0 0 280 280" aria-hidden="true">
        <circle cx="140" cy="140" r="120" fill="none" stroke="#fff" stroke-width="1.5" opacity=".5"/>
        <circle cx="140" cy="140" r="86" fill="none" stroke="#fff" stroke-width="1.5" stroke-dasharray="3 8" opacity=".7"/>
        <circle cx="140" cy="60" r="7" fill="#4F46E5"/>
        <circle cx="210" cy="140" r="7" fill="#13B8A6"/>
        <circle cx="140" cy="220" r="7" fill="#4F46E5"/>
        <circle cx="70" cy="140" r="7" fill="#13B8A6"/>
        <circle class="node-glow" cx="140" cy="140" r="20" fill="#fff"/>
        <path d="M140 140 L8 0M140 140" stroke="none"/>
        <g stroke="#fff" stroke-width="1.5" opacity=".8">
          <line x1="140" y1="140" x2="140" y2="60"/>
          <line x1="140" y1="140" x2="210" y2="140"/>
          <line x1="140" y1="140" x2="140" y2="220"/>
          <line x1="140" y1="140" x2="70" y2="140"/>
        </g>
        <svg x="124" y="124" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#4F46E5" stroke-width="2"><path d="M9 12l2 2 4-4M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
      </svg>
    </div>
  </div>
</section>

<!-- ============================= SERVICES ============================= -->
<section class="section bg-indigo" id="services">
  <div class="container">
    <div class="section-head center reveal">
      <div class="eyebrow"><span class="dot"></span>What We Do</div>
      <h2>Every Service We Offer Is Built Around One Thing —<span class="accent"> Data That Doesn't Lie</span></h2>
      <p>We work with eCommerce brands, coaches, agencies, and business owners who are tired of platforms telling them different stories. Pick the service that matches your situation or book a free call and we'll tell you exactly what you need.</p>
    </div>

    <div class="services-grid reveal-stagger">

      <article class="service-card">
        <div class="service-top">
          <div class="service-techs">
            {{--<span class="tech-tag">GHL</span><span class="tech-tag">META</span><span class="tech-tag">ADS</span>--}}
        </div>
          <span class="service-pill pill-popular">Most Popular</span>
        </div>
        <h3>GoHighLevel Tracking, Reporting &amp; Attribution</h3>
        <p class="desc">Complete lead-to-sale tracking inside GHL. Fix broken attribution and connect every conversion to the campaign that earned it.</p>
        <ul class="service-feats">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>Lead-to-sale tracking across every pipeline stage</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>GCLID &amp; FBCLID capture inside GHL forms</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>UTM parameter tracking (source, medium, campaign)</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>Automation-triggered conversion events</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>Offline conversion import to Google &amp; Meta</li>
        </ul>
        <a href="#contact" class="btn btn-outline btn-block btn-sm"> Fix My GHL Attribution  →</a>
      </article>

        <article class="service-card">
        <div class="service-top">
            <div class="service-techs">
            <span class="tech-tag">META</span>
            <span class="tech-tag">CAPI</span>
            </div>
            <span class="service-pill pill-demand">High Demand</span>
        </div>

        <h3>Meta Pixel &amp; Conversions API (CAPI) Setup</h3>

        <p class="desc">
            Your Facebook Pixel alone is only telling Meta half the story. Browser
            restrictions and ad blockers silently block a significant chunk of your
            conversion data, causing Meta's algorithm to lose valuable optimization
            signals. We implement the complete Meta tracking stack for maximum data
            accuracy.
        </p>

        <ul class="service-feats">
            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Meta Pixel install, audit &amp; clean reinstall via GTM
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Server-side Conversions API (CAPI) setup from scratch
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Event deduplication across browser and server layers
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            fbp / fbclid parameter capture and session-level matching
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            E-commerce events: ViewContent, AddToCart, InitiateCheckout &amp; Purchase
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Lead events: Lead, CompleteRegistration &amp; SubmitApplication
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Meta Offline Conversion Tracking
            </li>
        </ul>

        <a href="#contact" class="btn btn-outline btn-block btn-sm">
            Fix My Meta Tracking →
        </a>
        </article>

      {{--<article class="service-card">
        <div class="service-top">
          <div class="service-techs"><span class="tech-tag">ADS</span><span class="tech-tag">GCLID</span></div>
          <span class="service-pill pill-demand">High Demand</span>
        </div>
        <h3>Google Ads Enhanced Conversion Tracking</h3>
        <p class="desc">Precise conversion tracking with hashed user data, GCLID capture and dynamic value tracking, so every ad dollar is measured.</p>
        <ul class="service-feats">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>Enhanced conversions with hashed user data</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>GCLID capture &amp; offline conversion import</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>Call &amp; form-fill conversion tracking</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>Dynamic value tracking for accurate ROAS</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>UTM-to-GCLID matching across the funnel</li>
        </ul>
        <a href="#contact" class="btn btn-outline btn-block btn-sm">Get Started</a>
      </article>--}}

      <article class="service-card">
        <div class="service-top">
            <div class="service-techs">
            <span class="tech-tag">ADS</span>
            <span class="tech-tag">GCLID</span>
            </div>
            <span class="service-pill pill-demand">High Demand</span>
        </div>

        <h3>Google Ads Enhanced Conversion Tracking</h3>

        <p class="desc">
            Standard Google Ads conversion tracking misses a significant amount of
            valuable data, especially on iOS devices and privacy-focused browsers.
            Enhanced Conversions send hashed first-party user data directly to Google,
            giving Smart Bidding the accurate signals it needs to find more customers
            like your best ones. We set it up correctly or fix what's already broken.
        </p>

        <ul class="service-feats">
            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Enhanced Conversions with hashed first-party user data
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            GCLID capture and offline conversion import
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Call tracking &amp; form-fill conversion events
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Dynamic conversion value tracking to measure real revenue
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            UTM-to-GCLID matching across the full funnel
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Full testing and conversion verification before handover
            </li>
        </ul>

        <a href="#contact" class="btn btn-outline btn-block btn-sm">
            Set Up Enhanced Conversions →
        </a>
        </article>

            <article class="service-card">
        <div class="service-top">
            <div class="service-techs">
            <span class="tech-tag">GTM</span>
            <span class="tech-tag">GA4</span>
            </div>
        </div>

        <h3>Advanced GTM, GA4 &amp; Server-Side Tracking</h3>

        <p class="desc">
            Messy GTM containers and half-configured GA4 properties don't just create
            reporting issues—they undermine your marketing decisions. We build a clean,
            scalable tracking architecture with GTM, GA4, and server-side tagging for
            accurate data collection and privacy-friendly measurement.
        </p>

        <ul class="service-feats">
            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Full GTM container setup with clean structure, clear naming &amp; documentation
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            GA4 event tracking: form submissions, button clicks, scroll depth &amp; video plays
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Server-side GTM tagging to bypass ad blockers and browser restrictions
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Cross-domain tracking across multiple websites and subdomains
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Enhanced e-commerce tracking: View Item, Add to Cart, Checkout &amp; Purchase
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Consent Mode V2 implementation with GDPR compliance
            </li>
        </ul>

        <a href="#contact" class="btn btn-outline btn-block btn-sm">
            Build My Tracking Stack →
        </a>
        </article>



        <article class="service-card">
        <div class="service-top">
            <div class="service-techs">
            <span class="tech-tag">LOOKER</span>
            </div>
        </div>

        <h3>Looker Studio Dashboards &amp; Reporting</h3>

        <p class="desc">
            Your marketing data shouldn't be scattered across multiple platforms. We
            build custom Looker Studio dashboards that automatically combine Google Ads,
            Meta, GA4, and CRM data into one real-time reporting system, so you always
            know what's driving revenue.
        </p>

        <ul class="service-feats">
            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Custom dashboard built around your specific KPIs—not a template
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Multi-channel data: Google Ads, Meta, GA4 &amp; CRM in one view
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            ROAS, cost-per-lead &amp; revenue tracking by campaign
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Funnel drop-off analysis to identify where you're losing customers
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Automated daily, weekly &amp; monthly report delivery
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Fully shareable dashboards for your team or clients
            </li>
        </ul>

        <a href="#contact" class="btn btn-outline btn-block btn-sm">
            Build My Dashboard →
        </a>
        </article>


        <article class="service-card">
        <div class="service-top">
            <div class="service-techs">
            <span class="tech-tag">SHOPIFY</span>
            </div>
        </div>

        <h3>Shopify Tracking &amp; Attribution</h3>

        <p class="desc">
            Shopify's built-in analytics shows you orders and revenue, but it doesn't
            tell you which Facebook campaign, Google keyword, or email sequence actually
            generated those sales. We implement a complete Shopify tracking stack so
            every purchase is accurately attributed across your marketing channels.
        </p>

        <ul class="service-feats">
            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Meta Pixel + CAPI via Shopify Customer Events (no theme code required)
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Google Ads dynamic purchase-value tracking for real revenue
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            GA4 Enhanced E-commerce tracking from product view to purchase
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            GCLID &amp; FBCLID capture through checkout for full-funnel attribution
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Server-side and browser event deduplication with zero double-counting
            </li>

            <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                <path d="M5 12l4 4 10-10" />
            </svg>
            Full cross-channel attribution report included
            </li>
        </ul>

        <a href="#contact" class="btn btn-outline btn-block btn-sm">
            Fix My Shopify Tracking →
        </a>
      </article>



    </div>
  </div>
</section>

<!-- ============================= ABOUT ============================= -->
<section class="section bg-white" id="about">
  <div class="container about-grid">
    <div class="about-photo reveal">
      <div class="photo-placeholder">
        <div class="avatar-circle">AD</div>
        <p>FOUNDER PHOTO PLACEHOLDER<br>— replace with a real photo —</p>
      </div>
      <div class="about-stat-chip chip-1">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 17l4-9 4 6 3-4 5 7"/></svg>
        <div><div class="num">[3.x]×</div><div class="lbl">Avg. ROAS</div></div>
      </div>
      <div class="about-stat-chip chip-2">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="3.5"/><path d="M5 21c0-3.6 3.1-6.5 7-6.5s7 2.9 7 6.5"/></svg>
        <div><div class="num">[150]+</div><div class="lbl">Happy Clients</div></div>
      </div>
    </div>
    <div class="about-copy reveal">
      <div class="eyebrow"><span class="dot"></span>About Advento Agency</div>
      <h2>We built Advento because bad tracking was costing good businesses real money.</h2>
      {{--<p class="founder-line">[Founder Name] — Founder &amp; [Title], Advento Digital</p>--}}
      <p>Everywhere we looked, the same story kept coming up. A business would spend real money on ads, work hard on their product, and then sit down to check their numbers — and nothing would make sense. Google claiming one thing. Meta claiming another. Their CRM telling a third story.Not because they were doing anything wrong. But because the tracking underneath everything the foundation that all those numbers are supposed to be built on was broken. And nobody had told them.We built Advento to fix that. Not just for one business, but as a proper service one that takes tracking seriously, builds it properly, tests it rigorously, and hands it over with everything working the way it should.Today we work with eCommerce brands on Shopify, coaches running GoHighLevel funnels, marketing agencies managing multiple client accounts, and direct business owners who just want to know the truth about their own data. From a single pixel setup to a complete server-side attribution rebuild we do it properly, we test it thoroughly, and we don't hand it over until it's right.We're based in Dhaka, Bangladesh — but our clients are everywhere.
        </p>
      <div class="expertise-row">
        <span>Google Tag Manager</span><span>GA4</span><span>GoHighLevel CRM</span>
        <span>Meta Pixel &amp; CAPI</span><span>Server-Side Tracking</span><span>Looker Studio</span>
        <span>Shopify</span><span>Attribution Modeling</span>
      </div>
      <a href="#contact" class="btn btn-primary">Work With Advento Agency  →</a>
    </div>
  </div>
</section>

<!-- ============================= BOOKING ============================= -->
<section class="section bg-mint" id="booking">
  <div class="container">
    <div class="booking-card reveal">
      <div class="booking-info">
        <div class="eyebrow"><span class="dot"></span>Free Consultation</div>
        <h2>Book a Free Call With a Tracking Expert</h2>
        <p>15 minutes. No pitch deck, no pressure — just a straight conversation about what's broken in your tracking and what it would take to fix it.</p>
        <div class="booking-actions">
          <a href="#contact" class="btn btn-primary">Choose a Time Below</a>
        </div>
        <div class="booking-contact-row">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg>
          Prefer to talk first? Call or WhatsApp +8801880493614
        </div>
      </div>
      <div class="booking-visual">
        <div class="calendar-mock" aria-hidden="true">
          <div class="cal-head"><span>JUNE 2026</span><span>15 MIN · GOOGLE MEET</span></div>
          <div class="cal-grid">
            <span class="dim">S</span><span class="dim">M</span><span class="dim">T</span><span class="dim">W</span><span class="dim">T</span><span class="dim">F</span><span class="dim">S</span>
            <span class="dim">14</span><span class="dim">15</span><span class="dim">16</span><span class="dim">17</span><span class="dim">18</span><span class="active">19</span><span>20</span>
            <span>21</span><span>22</span><span>23</span><span>24</span><span>25</span><span>26</span><span>27</span>
          </div>
          <div class="cal-slot"><span>Next opening</span><b>Today, 4:00 PM</b></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================= RESULTS ============================= -->
{{--<section class="section bg-white" id="results">
  <div class="container">
    <div class="section-head center reveal">
      <div class="eyebrow"><span class="dot"></span>Example Scenarios</div>
      <h2>The Kind of Clarity a Proper Rebuild <span class="accent">Unlocks</span></h2>
      <p>Every account is different — but here's what a real tracking rebuild typically solves, by business type.</p>
    </div>
    <div class="results-grid reveal-stagger">
      <div class="result-card">
        <span class="result-tag">GHL + Google Ads</span>
        <h3>E-Commerce Brand</h3>
        <div class="result-sub">Tracking Fix</div>
        <div class="result-block"><div class="label">Problem</div><p>GoHighLevel attribution doesn't match ad-platform data, making scaling decisions unreliable.</p></div>
        <div class="result-block"><div class="label">Solution</div><p>Rebuild tracking with GCLID capture, GHL-to-Ads sync, and server-side CAPI deduplication.</p></div>
        <ul class="unlocks">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12l4 4 10-10"/></svg>One number for ad spend, one for revenue — and they finally agree</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12l4 4 10-10"/></svg>Confidence to scale winning campaigns, not just hope</li>
        </ul>
      </div>
      <div class="result-card">
        <span class="result-tag">Meta CAPI</span>
        <h3>Coaching Business</h3>
        <div class="result-sub">Deduplication Fix</div>
        <div class="result-block"><div class="label">Problem</div><p>Meta Pixel fires duplicate events, inflating conversion counts and skewing optimization.</p></div>
        <div class="result-block"><div class="label">Solution</div><p>Implement Conversions API with event-ID deduplication and a clean reporting dashboard.</p></div>
        <ul class="unlocks">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12l4 4 10-10"/></svg>Ad spend optimized toward audiences that actually convert</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12l4 4 10-10"/></svg>Real-time performance visibility, not month-end surprises</li>
        </ul>
      </div>
      <div class="result-card">
        <span class="result-tag">GTM + GA4</span>
        <h3>SaaS Funnel Builder</h3>
        <div class="result-sub">Funnel Visibility</div>
        <div class="result-block"><div class="label">Problem</div><p>No visibility into which funnel steps cause drop-offs — decisions are made with zero data.</p></div>
        <div class="result-block"><div class="label">Solution</div><p>Set up complete GA4 funnel tracking with custom events and a step-by-step conversion dashboard.</p></div>
        <ul class="unlocks">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12l4 4 10-10"/></svg>Exact drop-off points identified, not guessed at</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12l4 4 10-10"/></svg>Faster, evidence-based optimization cycles</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- ============================= TESTIMONIALS ============================= -->
<section class="section bg-indigo" id="testimonials">
  <div class="container">
    <div class="section-head center reveal">
      <div class="eyebrow"><span class="dot"></span>Client Feedback</div>
      <h2>Hear It From <span class="accent">Our Clients</span></h2>
      <p>Real results, real voices — once we have them recorded.</p>
    </div>

    <div class="sample-banner reveal">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v4M12 17h.01M10.29 3.86l-8.18 14.14A2 2 0 003.82 21h16.36a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/></svg>
      Sample layout — every name, quote and rating below is a placeholder. Swap in your real client testimonials before this site goes live.
    </div>

    <div class="video-grid reveal-stagger">
      <div class="video-card"><div class="video-thumb"><span class="play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span></div><div class="video-meta"><b>[Client Name]</b><span>[Service Used]</span></div></div>
      <div class="video-card"><div class="video-thumb"><span class="play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span></div><div class="video-meta"><b>[Client Name]</b><span>[Service Used]</span></div></div>
      <div class="video-card"><div class="video-thumb"><span class="play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span></div><div class="video-meta"><b>[Client Name]</b><span>[Service Used]</span></div></div>
      <div class="video-card"><div class="video-thumb"><span class="play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span></div><div class="video-meta"><b>[Client Name]</b><span>[Service Used]</span></div></div>
    </div>

    <div class="testi-grid reveal-stagger">
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p class="quote">"[Add a short, specific quote about the result you delivered for this client.]"</p>
        <div class="testi-person"><div class="testi-avatar">CN</div><div><b>[Client Name]</b><span>[Industry / Country]</span></div></div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p class="quote">"[Add a short, specific quote about the result you delivered for this client.]"</p>
        <div class="testi-person"><div class="testi-avatar">CN</div><div><b>[Client Name]</b><span>[Industry / Country]</span></div></div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p class="quote">"[Add a short, specific quote about the result you delivered for this client.]"</p>
        <div class="testi-person"><div class="testi-avatar">CN</div><div><b>[Client Name]</b><span>[Industry / Country]</span></div></div>
      </div>
    </div>
  </div>
</section>--}}

<!-- ============================= BLOG ============================= -->
{{--<section class="section bg-white" id="blog">
  <div class="container">
    <div class="section-head center reveal">
      <div class="eyebrow"><span class="dot"></span>Resources</div>
      <h2>Tracking &amp; Attribution <span class="accent">Insights</span></h2>
      <p>Practical, Bangladesh-relevant guides on GTM, GA4, Meta CAPI and GoHighLevel attribution.</p>
    </div>
    <div class="blog-grid reveal-stagger">
      <a href="#" class="blog-card" aria-disabled="true">
        <div class="blog-thumb"><span class="blog-soon">Coming Soon</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 17l3-3 3 3M12 14V3M3 17l3 4h12l3-4"/></svg></div>
        <div class="blog-body"><h3>GoHighLevel + Google Ads: The Complete UTM &amp; GCLID Tracking Setup</h3><span class="btn btn-outline btn-sm">Read Article</span></div>
      </a>
      <a href="#" class="blog-card" aria-disabled="true">
        <div class="blog-thumb"><span class="blog-soon">Coming Soon</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 19.5A2.5 2.5 0 016.5 17H20M4 4.5A2.5 2.5 0 016.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15z"/></svg></div>
        <div class="blog-body"><h3>Server-Side Tracking With GTM: A Practical 2026 Setup Guide</h3><span class="btn btn-outline btn-sm">Read Article</span></div>
      </a>
      <a href="#" class="blog-card" aria-disabled="true">
        <div class="blog-thumb"><span class="blog-soon">Coming Soon</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></div>
        <div class="blog-body"><h3>Meta Conversions API Explained: Fixing Duplicate Event Counting</h3><span class="btn btn-outline btn-sm">Read Article</span></div>
      </a>
    </div>
  </div>
</section>--}}

<!-- ============================= FAQ ============================= -->
<section class="section bg-mint" id="faq">
  <div class="container">
    <div class="section-head center reveal">
      <div class="eyebrow"><span class="dot"></span>FAQ</div>
      <h2>Frequently Asked <span class="accent">Questions</span></h2>
      <p>Everything you need to know about working with Advento Digital.</p>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item open">
        <button class="faq-q"><span><span class="num">01</span>How do you approach a new tracking project?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
        <div class="faq-a"><p>We start with a comprehensive audit of your entire ecosystem — GoHighLevel, GTM, GA4 and every ad platform you run. We map every gap, error and missed conversion, then implement a complete fix and test it before anything goes live.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q"><span><span class="num">02</span>How accurate will my tracking data be?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
        <div class="faq-a"><p>Our goal on every project is as close to fully accurate as the platform allows, validated against your CRM and ad-platform reporting before we call it done.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q"><span><span class="num">03</span>What access do you need to get started?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
        <div class="faq-a"><p>Typically admin or editor access to your GTM container, GA4 property, ad accounts and CRM/CMS. We'll send an exact checklist after your free audit call.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q"><span><span class="num">04</span>What's included in the free tracking audit?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
        <div class="faq-a"><p>A full review of your GTM, GA4, GoHighLevel and ad-platform tracking, a prioritized list of what's broken, and a revenue-leak estimate — with no obligation to hire us afterward.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q"><span><span class="num">05</span>How long does a typical project take?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
        <div class="faq-a"><p>Most single-platform fixes (Meta CAPI, GA4, Google Ads) are delivered within days. Full-funnel, multi-platform rebuilds typically take one to two weeks depending on scope.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q"><span><span class="num">06</span>Which CMS and platforms do you support?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
        <div class="faq-a"><p>GoHighLevel, WordPress, Shopify, and most custom-built sites that allow GTM container access.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q"><span><span class="num">07</span>Can you manage ads as well as tracking?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
        <div class="faq-a"><p>Yes — we offer Meta and Google Ads management as a separate service, built on top of the clean tracking foundation we set up for you.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-q"><span><span class="num">08</span>Do you offer support after delivery?</span><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg></button>
        <div class="faq-a"><p>Yes — every project includes a post-launch check-in window, with ongoing monthly support plans available for accounts that need continuous monitoring.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================= CONTACT ============================= -->
<section class="section bg-white" id="contact">
  <div class="container">
    <div class="section-head center reveal">
      <div class="eyebrow"><span class="dot"></span>Get Started</div>
      <h2>Let's Take an Honest Look at Your Tracking — <span class="accent"> For Free</span></h2>
      <p>Book a free 15-minute call. We'll go through your current setup, tell you exactly where the gaps are, and give you a clear picture of what needs fixing — and what it might be costing you.No pitch. No pressure. No 47-slide deck. Just a real conversation about your data.</p>
    </div>

    <div class="contact-grid reveal">
      <div class="contact-left">
        <h3>What You Get</h3>
        <div class="check-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>
          <div><b>Complete Tracking Audit</b><p>Full review of your GTM, GA4, GoHighLevel and ad-platform tracking.</p></div>
        </div>
        <div class="check-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>
          <div><b>Custom Action Plan</b><p>A prioritized list of exactly what needs fixing, and how.</p></div>
        </div>
        <div class="check-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>
          <div><b>Revenue Leak Analysis</b><p>A clear picture of what tracking errors may be costing you.</p></div>
        </div>
        <div class="check-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12l4 4 10-10"/></svg>
          <div><b>No Obligation</b><p>A genuinely free audit — no pressure, no hidden fees.</p></div>
        </div>

        <div class="contact-info">
          <div class="info-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg><span><span class="lbl">Phone</span>+8801880493614</span></div>
          <div class="info-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16v16H4V4z" opacity="0"/><path d="M22 6l-10 7L2 6"/><path d="M2 6h20v12H2V6z"/></svg><span><span class="lbl">Email</span>admin@adventoagency.com</span></div>
          <div class="info-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 6-9 13-9 13s-9-7-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg><span><span class="lbl">Location</span>Dhaka, Bangladesh</span></div>
        </div>
      </div>

      <div class="contact-form">
        <form id="auditForm">
          <div class="form-row"><label for="f-name">Your Name</label><input id="f-name" type="text" placeholder="Full name" required></div>
          <div class="form-grid-2">
            <div class="form-row"><label for="f-email">Email Address</label><input id="f-email" type="email" placeholder="you@business.com" required></div>
            <div class="form-row"><label for="f-url">Website URL</label><input id="f-url" type="text" placeholder="https://yourbusiness.com"></div>
          </div>
          <div class="form-row"><label for="f-msg">Message</label><textarea id="f-msg" placeholder="Tell us briefly what's not adding up in your tracking right now."></textarea></div>
          <button type="submit" class="btn btn-primary btn-block">Claim My Free Audit Now</button>
          <div class="form-success" id="formSuccess">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" style="width:18px;height:18px;"><path d="M5 12l4 4 10-10"/></svg>
            Thanks — this form is a front-end demo. Connect it to a real form handler before launch.
          </div>
        </form>
      </div>
    </div>

    {{--<div class="cta-banner reveal" style="margin-top:60px;">
      <div>
        <h3>Ready to fix your tracking?</h3>
        <p>Book your free audit today — limited spots each month.</p>
      </div>
      <a href="#" onclick="document.getElementById('f-name').focus();return false;" class="btn btn-secondary">Claim Free Audit
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>--}}
  </div>
</section>

</main>

<!-- ============================= FOOTER ============================= -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="#main" class="logo">
          {{--<svg class="logo-mark" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <rect width="36" height="36" rx="10" fill="url(#logoGrad)"/>
            <circle cx="11" cy="24" r="2.6" fill="#fff" opacity=".55"/>
            <circle cx="18" cy="13" r="2.6" fill="#fff" opacity=".8"/>
            <circle cx="26" cy="20" r="3.1" fill="#fff"/>
            <path d="M11 24 L18 13 L26 20" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" opacity=".85"/>
          </svg>--}}
          
          <img src="{{ asset('img/footer-logo.jpg') }}" alt="footer-logo" width="60px">
         We build tracking systems that tell the truth.
        </a>
        <p>We help eCommerce stores, coaches, agencies, and business owners build tracking they can actually trust — GA4, GTM, Meta CAPI, Google Ads Enhanced Conversions, GoHighLevel attribution, and Looker Studio dashboards. Done properly. Tested thoroughly. Supported after delivery.
        </p>
        <div class="footer-social">
          <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
          <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/><path d="M10 9h4v2.5c.6-1.2 2-2.5 4-2.5 3 0 5 2 5 5.5V21h-4v-6c0-1.5-.5-2.5-2-2.5s-2.5 1-2.5 2.5V21h-4V9z"/></svg></a>
          <a href="#" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="6" width="20" height="12" rx="3"/><path d="M11 10l5 2-5 2v-4z"/></svg></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#main">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#results">Results</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="#services">GoHighLevel Tracking</a></li>
          <li><a href="#services">Meta Pixel &amp; CAPI</a></li>
          <li><a href="#services">Google Ads Tracking</a></li>
          <li><a href="#services">GTM &amp; GA4 Setup</a></li>
          <li><a href="#services">Looker Studio Dashboards</a></li>
          <li><a href="#services">Ads Management</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact</h4>
        <div class="info-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 6-9 13-9 13s-9-7-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>Dhaka, Bangladesh</div>
        <div class="info-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg>[+880 XXX XXX XXXX]</div>
        <div class="info-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 6l-10 7L2 6"/><path d="M2 6h20v12H2V6z"/></svg>[hello@adventodigital.com]</div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 Advento Digital. All rights reserved.</span>
      <span><a href="#">Privacy Policy</a> · <a href="#">Terms of Service</a></span>
    </div>
  </div>
</footer>

<script>
// Mobile nav
const navToggle = document.getElementById('navToggle');
navToggle.addEventListener('click', () => {
  const isOpen = document.body.classList.toggle('nav-open');
  navToggle.setAttribute('aria-expanded', isOpen);
});
document.querySelectorAll('.nav-links a').forEach(a=>{
  a.addEventListener('click', ()=> document.body.classList.remove('nav-open'));
});

// FAQ accordion
document.querySelectorAll('.faq-item').forEach(item=>{
  const q = item.querySelector('.faq-q');
  const a = item.querySelector('.faq-a');
  if(item.classList.contains('open')){ a.style.maxHeight = a.scrollHeight + 'px'; }
  q.addEventListener('click', ()=>{
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(el=>{
      el.classList.remove('open');
      el.querySelector('.faq-a').style.maxHeight = null;
    });
    if(!isOpen){
      item.classList.add('open');
      a.style.maxHeight = a.scrollHeight + 'px';
    }
  });
});

// Scroll reveal
const revealEls = document.querySelectorAll('.reveal, .reveal-stagger');
const io = new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      entry.target.classList.add('in');
      io.unobserve(entry.target);
    }
  });
}, {threshold:0.15, rootMargin:'0px 0px -60px 0px'});
revealEls.forEach(el=>io.observe(el));

// Signal path draw-in (hero + solution graphics use .gp-draw)
document.querySelectorAll('.gp-draw').forEach(p=>{
  const len = p.getTotalLength ? p.getTotalLength() : 340;
  p.style.strokeDasharray = len;
  p.style.strokeDashoffset = len;
});
const pathIO = new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      entry.target.classList.add('in');
      pathIO.unobserve(entry.target);
    }
  });
},{threshold:0.4});
document.querySelectorAll('.gp-draw').forEach(p=>pathIO.observe(p));

// Demo form submit (no backend connected — replace with a real handler)
const form = document.getElementById('auditForm');
if(form){
  form.addEventListener('submit', function(e){
    e.preventDefault();
    document.getElementById('formSuccess').classList.add('show');
    form.querySelectorAll('input,textarea').forEach(el=>el.value='');
  });
}

// Scroll progress bar
const sp = document.getElementById('scrollProgress');
if(sp){
  window.addEventListener('scroll', ()=>{
    const h = document.documentElement;
    const scrolled = (h.scrollTop) / (h.scrollHeight - h.clientHeight) * 100;
    sp.style.width = scrolled + '%';
  }, {passive:true});
}

// Animated stat counters
const statEls = document.querySelectorAll('.stat-num .grad');
const animateCount = (el)=>{
  const raw = el.textContent.trim();
  const match = raw.match(/([0-9]+(?:\.[0-9]+)?)/);
  if(!match){ return; }
  const target = parseFloat(match[1]);
  const prefix = raw.slice(0, match.index);
  const suffix = raw.slice(match.index + match[1].length);
  const decimals = (match[1].split('.')[1]||'').length;
  let start = 0;
  const dur = 1400, t0 = performance.now();
  const step = (now)=>{
    const p = Math.min((now - t0)/dur, 1);
    const eased = 1 - Math.pow(1-p, 3);
    const val = (target * eased).toFixed(decimals);
    el.textContent = prefix + val + suffix;
    if(p < 1){ requestAnimationFrame(step); }
  };
  requestAnimationFrame(step);
};
const countIO = new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      animateCount(entry.target);
      countIO.unobserve(entry.target);
    }
  });
},{threshold:0.6});
if(!window.matchMedia('(prefers-reduced-motion: reduce)').matches){
  statEls.forEach(el=>countIO.observe(el));
}
</script>
</body>
</html>
