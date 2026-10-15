/* Estate Partners — homepage interactions */
(function () {
  'use strict';

  function init() {
    /* ---------- Sticky header shadow ---------- */
    var header = document.getElementById('site-header');
    function onScrollHeader() {
      if (!header) return;
      if (window.scrollY > 8) header.classList.add('scrolled');
      else header.classList.remove('scrolled');
    }
    window.addEventListener('scroll', onScrollHeader, { passive: true });
    onScrollHeader();

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

    /* ---------- Enquiry form (demo) ---------- */
    var form = document.getElementById('enquiry-form');
    if (form) {
      form.addEventListener('submit', function (e) {
        e.preventDefault();
        var phone = document.getElementById('enquiry-phone');
        var msg = document.getElementById('enquiry-msg');
        var digits = phone ? phone.value.replace(/\D/g, '') : '';
        if (digits.length < 10) {
          if (msg) {
            msg.textContent = 'Please enter a valid 10-digit phone number.';
            msg.classList.remove('hidden', 'text-green-700');
            msg.classList.add('text-red-600');
          }
          if (phone) phone.focus();
          return;
        }
        if (msg) {
          msg.textContent = 'Thank you! Our property expert will get in touch with you shortly.';
          msg.classList.remove('hidden', 'text-red-600');
          msg.classList.add('text-green-700');
        }
        form.reset();
      });
    }

    /* ---------- Newsletter (demo) ---------- */
    var newsForm = document.getElementById('newsletter-form');
    if (newsForm) {
      newsForm.addEventListener('submit', function (e) {
        e.preventDefault();
        var note = document.getElementById('newsletter-note');
        if (note) {
          note.textContent = 'Registered! You will now receive exclusive offers.';
          note.classList.remove('hidden');
        }
        newsForm.reset();
      });
    }

    /* ---------- Reveal on scroll ---------- */
    var revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && revealEls.length) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });
      revealEls.forEach(function (el) { observer.observe(el); });
    } else {
      revealEls.forEach(function (el) { el.classList.add('visible'); });
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
