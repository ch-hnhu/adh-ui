const header = document.getElementById('site-header');
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const scrollTopBtn = document.getElementById('scroll-top-btn');

if (header) {
  const onScroll = () => {
    if (window.scrollY > 10) {
      header.classList.add('is-scrolled');
    } else {
      header.classList.remove('is-scrolled');
    }
  };
  onScroll();
  window.addEventListener('scroll', onScroll);
}

if (mobileMenuToggle && mobileMenu) {
  mobileMenuToggle.addEventListener('click', () => {
    const isOpen = mobileMenu.classList.toggle('hidden');
    mobileMenuToggle.setAttribute('aria-expanded', String(!isOpen));
  });
}

document.querySelectorAll('[data-faq-button]').forEach((button) => {
  button.addEventListener('click', () => {
    const item = button.closest('[data-faq-item]');
    const content = item ? item.querySelector('[data-faq-content]') : null;
    const iconPlus = button.querySelector('[data-icon-plus]');
    const iconMinus = button.querySelector('[data-icon-minus]');
    if (!content) return;

    const isOpen = !content.classList.contains('hidden');
    document.querySelectorAll('[data-faq-content]').forEach((node) => node.classList.add('hidden'));
    document.querySelectorAll('[data-icon-plus]').forEach((node) => node.classList.remove('hidden'));
    document.querySelectorAll('[data-icon-minus]').forEach((node) => node.classList.add('hidden'));

    if (!isOpen) {
      content.classList.remove('hidden');
      if (iconPlus) iconPlus.classList.add('hidden');
      if (iconMinus) iconMinus.classList.remove('hidden');
    }
  });
});

if (scrollTopBtn) {
  scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}
