// ── NAV SCROLL ──
window.addEventListener('scroll', () => {
  document.getElementById('nav')?.classList.toggle('s', scrollY > 60);
}, {passive:true});

// ── MOBILE MENU ──
function mm() {
  document.getElementById('mm')?.classList.toggle('on');
}

// ── SCROLL REVEAL ──
const obs = new IntersectionObserver((entries) => {
  entries.forEach((e, i) => {
    if (!e.isIntersecting) return;
    setTimeout(() => e.target.classList.add('v'), i * 90);
    obs.unobserve(e.target);
  });
}, {threshold: 0.1});
document.querySelectorAll('.rv,.chif,.proc-step,.arg,.temo').forEach(el => obs.observe(el));

// ── COUNTER ──
const cObs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (!e.isIntersecting) return;
    const el = e.target.querySelector('[data-c]');
    if (!el) return;
    const t = +el.dataset.c;
    let c = 0;
    const step = t / 70;
    const timer = setInterval(() => {
      c = Math.min(c + step, t);
      el.textContent = Math.floor(c).toLocaleString('fr-FR') + '+';
      if (c >= t) clearInterval(timer);
    }, 18);
    cObs.unobserve(e.target);
  });
}, {threshold: 0.3});
document.querySelectorAll('.chif').forEach(el => cObs.observe(el));

// ── PARALLAX ──
(function () {
  var bgs = [];     // backgrounds : translateY absolu
  var contents = []; // rubriques : translateY relatif au viewport
  var raf = null;

  function collect() {
    bgs = [];
    contents = [];

    var heroBg = document.getElementById('hero-bg');
    if (heroBg) bgs.push({ el: heroBg, speed: 0.4 });

    document.querySelectorAll('.par-block').forEach(function (block) {
      var bg = block.querySelector('.par-block-bg');
      if (bg) bgs.push({ el: bg, speed: 0.45 });
    });

    var whyBg = document.getElementById('why-bg');
    if (whyBg) bgs.push({ el: whyBg, speed: 0.35 });

    // Rubriques : ajouter la classe px + collecter
    document.querySelectorAll('h1,h2,.lbl,.hero-sub,.par-block-c h2,.par-block-c p').forEach(function (el) {
      el.classList.add('px');
      var speed = el.matches('h1') ? 0.12
                : el.matches('h2') ? 0.09
                : el.matches('.lbl') ? 0.06
                : 0.05;
      contents.push({ el: el, speed: speed });
    });
  }

  function tick() {
    var sy = window.scrollY;
    var vh = window.innerHeight;
    var mobile = window.innerWidth <= 800;

    // Backgrounds : déplacement relatif au centre du viewport
    bgs.forEach(function (l) {
      var parent = l.el.parentElement;
      var rect = parent.getBoundingClientRect();
      // distCenter : 0 quand le parent est centré dans le viewport
      var distCenter = rect.top + rect.height / 2 - vh / 2;
      var v = distCenter * l.speed * (mobile ? 0.3 : 1);
      l.el.style.transform = 'translateY(' + v + 'px) translateZ(0)';
    });

    // Rubriques — désactivé sur mobile (évite saccades)
    if (!mobile) {
      contents.forEach(function (l) {
        var rect = l.el.getBoundingClientRect();
        var center = rect.top + rect.height / 2 - vh / 2;
        // quand l'élément est en bas du viewport → décalé vers le bas
        // quand il passe au centre → revient à 0 → effet d'aspiration
        var v = center * l.speed;
        l.el.style.setProperty('--py', v + 'px');
      });
    }

    raf = null;
  }

  window.addEventListener('scroll', function () {
    if (!raf) raf = requestAnimationFrame(tick);
  }, { passive: true });

  window.addEventListener('resize', function () {
    collect();
    requestAnimationFrame(tick);
  }, { passive: true });

  function init() { collect(); tick(); }
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
