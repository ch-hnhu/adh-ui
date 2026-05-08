/* ============================================================
   main.js — Away Digital Home
============================================================ */
(function () {
  'use strict';

  /* ----------------------------------------------------------
     HAMBURGER NAV TOGGLE
  ---------------------------------------------------------- */
  var hamburgerBtn = document.getElementById('hamburger-btn');
  var navMenu = document.getElementById('nav-menu');

  if (hamburgerBtn && navMenu) {
    hamburgerBtn.addEventListener('click', function () {
      var isOpen = navMenu.classList.toggle('nav__menu--open');
      hamburgerBtn.classList.toggle('nav__hamburger--active', isOpen);
      hamburgerBtn.setAttribute('aria-expanded', String(isOpen));
    });

    navMenu.querySelectorAll('.nav__link, .nav__cta').forEach(function (link) {
      link.addEventListener('click', function () {
        navMenu.classList.remove('nav__menu--open');
        hamburgerBtn.classList.remove('nav__hamburger--active');
        hamburgerBtn.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* ----------------------------------------------------------
     SLIDESHOW — static 3-up display (portrait | main video | portrait)
     Navigation buttons cycle through alternative views on smaller screens.
  ---------------------------------------------------------- */
  var slidePrev = document.getElementById('slide-prev');
  var slideNext = document.getElementById('slide-next');
  var slideTrack = document.getElementById('slideshow-track');

  if (slidePrev && slideNext && slideTrack) {
    /* On large screens the layout is static — buttons hidden unless needed */
    function updateSlideButtons() {
      var hidden = window.innerWidth > 900;
      slidePrev.style.opacity = hidden ? '0' : '1';
      slideNext.style.opacity = hidden ? '0' : '1';
      slidePrev.style.pointerEvents = hidden ? 'none' : 'auto';
      slideNext.style.pointerEvents = hidden ? 'none' : 'auto';
    }
    updateSlideButtons();
    window.addEventListener('resize', updateSlideButtons);
  }

  /* ----------------------------------------------------------
     FAQ ACCORDION
  ---------------------------------------------------------- */
  document.querySelectorAll('.faq__item').forEach(function (item) {
    var btn    = item.querySelector('.faq__question');
    var answer = item.querySelector('.faq__answer');
    var icon   = item.querySelector('.faq__icon');

    if (!btn || !answer) return;

    btn.addEventListener('click', function () {
      var isOpen = item.classList.toggle('faq__item--open');
      btn.setAttribute('aria-expanded', String(isOpen));
      if (icon) {
        if (isOpen) {
          icon.classList.remove('faq__icon--plus');
          icon.classList.add('faq__icon--minus');
        } else {
          icon.classList.remove('faq__icon--minus');
          icon.classList.add('faq__icon--plus');
        }
      }
    });
  });

  /* ----------------------------------------------------------
     TESTIMONIAL — PLAY BUTTON
  ---------------------------------------------------------- */
  var testimonialPlaceholder = document.getElementById('testimonial-placeholder');
  var testimonialPlayBtn     = document.getElementById('testimonial-play-btn');
  var testimonialVideo       = document.getElementById('testimonial-video');

  if (testimonialPlayBtn && testimonialPlaceholder && testimonialVideo) {
    function showTestimonialVideo() {
      testimonialPlaceholder.style.display = 'none';
      testimonialVideo.style.display = 'block';
      testimonialVideo.play();
    }
    testimonialPlayBtn.addEventListener('click', showTestimonialVideo);
    testimonialPlaceholder.addEventListener('click', showTestimonialVideo);
  }

  /* ----------------------------------------------------------
     BACK TO TOP
  ---------------------------------------------------------- */
  var backToTop = document.getElementById('back-to-top');
  if (backToTop) {
    backToTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

})();
