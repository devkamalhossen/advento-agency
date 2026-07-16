
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
