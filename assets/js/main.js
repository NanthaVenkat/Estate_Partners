/* Estate Partners — homepage interactions */
(function () {
  'use strict';

  function init() {
    var gsap = window.gsap;
    var ScrollTrigger = window.ScrollTrigger;
    if (gsap && ScrollTrigger) gsap.registerPlugin(ScrollTrigger);

    /* ---------- Sticky header shadow ---------- */
    var header = document.getElementById('site-header');
    if (header && gsap && ScrollTrigger) {
      ScrollTrigger.create({
        start: 8,
        onEnter: function () { header.classList.add('scrolled'); },
        onLeaveBack: function () { header.classList.remove('scrolled'); }
      });
    }

    /* ---------- Mobile menu ---------- */
    var menuBtn = document.getElementById('menu-btn');
    var mobileMenu = document.getElementById('mobile-menu');
    var menuOpenIcon = document.getElementById('menu-open-icon');
    var menuCloseIcon = document.getElementById('menu-close-icon');

    function setMenu(open) {
      if (!mobileMenu) return;
      mobileMenu.classList.toggle('hidden', !open);
      document.body.style.overflow = open ? 'hidden' : '';
      if (menuOpenIcon) menuOpenIcon.classList.toggle('hidden', open);
      if (menuCloseIcon) menuCloseIcon.classList.toggle('hidden', !open);
    }

    if (menuBtn) {
      menuBtn.addEventListener('click', function () {
        setMenu(mobileMenu.classList.contains('hidden'));
      });
    }
    if (mobileMenu) {
      mobileMenu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () { setMenu(false); });
      });
    }

    /* ---------- Swiper sliders ---------- */
    if (window.Swiper) {
      // Hero
      if (document.querySelector('.hero-swiper')) {
        new Swiper('.hero-swiper', {
          slidesPerView: 1,
          spaceBetween: 0,
          loop: true,
          effect: 'fade',
          fadeEffect: { crossFade: true },
          speed: 900,
          autoplay: { delay: 6000, disableOnInteraction: false },
          pagination: { el: '.hero-swiper .swiper-pagination', clickable: true },
          navigation: {
            nextEl: '.hero-swiper .swiper-button-next',
            prevEl: '.hero-swiper .swiper-button-prev'
          }
        });
      }

      // Featured projects
      if (document.querySelector('.projects-swiper')) {
        new Swiper('.projects-swiper', {
          slidesPerView: 1,
          spaceBetween: 24,
          loop: false,
          speed: 600,
          pagination: { el: '.projects-swiper .swiper-pagination', clickable: true },
          navigation: {
            nextEl: '.projects-next',
            prevEl: '.projects-prev'
          },
          breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
          }
        });
      }

      // Testimonials
      if (document.querySelector('.testimonials-swiper')) {
        var testSlides = document.querySelectorAll('.testimonials-swiper .swiper-slide').length;
        new Swiper('.testimonials-swiper', {
          slidesPerView: 1,
          spaceBetween: 24,
          loop: testSlides >= 3,
          speed: 600,
          autoplay: testSlides >= 3 ? { delay: 5500, disableOnInteraction: false } : false,
          pagination: { el: '.testimonials-swiper .swiper-pagination', clickable: true },
          breakpoints: {
            768: { slidesPerView: 2 },
            1280: { slidesPerView: Math.min(3, testSlides) }
          }
        });
      }

      // Insights
      if (document.querySelector('.insights-swiper')) {
        new Swiper('.insights-swiper', {
          slidesPerView: 1,
          spaceBetween: 24,
          loop: false,
          speed: 600,
          pagination: { el: '.insights-swiper .swiper-pagination', clickable: true },
          navigation: {
            nextEl: '.insights-next',
            prevEl: '.insights-prev'
          },
          breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
          }
        });
      }
    }

    /* ---------- Project status tabs ---------- */
    var tabs = document.querySelectorAll('.status-tab');
    var panels = document.querySelectorAll('.status-panel');
    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        tabs.forEach(function (t) { t.classList.remove('active'); });
        tab.classList.add('active');
        var target = tab.getAttribute('data-target');
        panels.forEach(function (panel) {
          panel.classList.toggle('hidden', panel.id !== target);
        });
      });
    });

    /* ---------- Reveal on scroll ---------- */
    var revealEls = document.querySelectorAll('.reveal');
    if (gsap && ScrollTrigger && revealEls.length && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      gsap.utils.toArray(revealEls).forEach(function (el) {
        gsap.fromTo(el, {
          autoAlpha: 0,
          y: 28
        }, {
          autoAlpha: 1,
          y: 0,
          duration: 0.7,
          ease: 'power2.out',
          scrollTrigger: {
            trigger: el,
            start: 'top 88%',
            once: true
          }
        });
      });
    }

    /* ---------- Footer year ---------- */
    var yearEl = document.getElementById('year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
