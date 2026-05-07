/* ============================================================
   main.js — Away Digital Home
   - Hamburger nav toggle
   - FAQ accordion
   - Slideshow
   - Back-to-top
============================================================ */

(function () {
  'use strict';

  /* ----------------------------------------------------------
     HAMBURGER NAV
  ---------------------------------------------------------- */
  const hamburgerBtn = document.getElementById('hamburger-btn');
  const navMenu = document.getElementById('nav-menu');

  if (hamburgerBtn && navMenu) {
    hamburgerBtn.addEventListener('click', function () {
      const isOpen = navMenu.classList.toggle('nav__menu--open');
      hamburgerBtn.classList.toggle('nav__hamburger--active', isOpen);
      hamburgerBtn.setAttribute('aria-expanded', String(isOpen));
    });

    // Close menu when a link is clicked
    navMenu.querySelectorAll('.nav__link, .nav__cta').forEach(function (link) {
      link.addEventListener('click', function () {
        navMenu.classList.remove('nav__menu--open');
        hamburgerBtn.classList.remove('nav__hamburger--active');
        hamburgerBtn.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* ----------------------------------------------------------
     FAQ ACCORDION
  ---------------------------------------------------------- */
  const faqItems = document.querySelectorAll('.faq__item');

  faqItems.forEach(function (item) {
    const btn = item.querySelector('.faq__question');
    const answer = item.querySelector('.faq__answer');
    const icon = item.querySelector('.faq__icon');

    if (!btn || !answer) return;

    btn.addEventListener('click', function () {
      const isOpen = item.classList.toggle('faq__item--open');
      btn.setAttribute('aria-expanded', String(isOpen));
      if (icon) {
        icon.src = isOpen ? 'assets/icon-minus.png' : 'assets/icon-plus.png';
      }
    });
  });

  /* ----------------------------------------------------------
     SLIDESHOW
  ---------------------------------------------------------- */
  const track = document.getElementById('slideshow-track');
  const prevBtn = document.getElementById('slide-prev');
  const nextBtn = document.getElementById('slide-next');

  if (track && prevBtn && nextBtn) {
    const slides = track.querySelectorAll('.slideshow__slide');
    const total = slides.length;
    let current = 0;

    function goTo(index) {
      current = (index + total) % total;
      track.style.transform = 'translateX(-' + (current * 100) + '%)';
    }

    prevBtn.addEventListener('click', function () { goTo(current - 1); });
    nextBtn.addEventListener('click', function () { goTo(current + 1); });
  }

  /* ----------------------------------------------------------
     BACK TO TOP
  ---------------------------------------------------------- */
  const backToTopBtn = document.getElementById('back-to-top');

  if (backToTopBtn) {
    backToTopBtn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

})();
