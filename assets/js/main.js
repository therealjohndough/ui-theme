document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.getElementById('mode-toggle');
  if (toggle) {
    document.body.classList.add('light-mode');
    toggle.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      document.body.classList.toggle('light-mode');
    });
  }

  const filters = document.querySelectorAll('[data-filter]');
  const items = document.querySelectorAll('[data-category]');
  filters.forEach(btn => {
    btn.addEventListener('click', () => {
      const category = btn.getAttribute('data-filter');
      items.forEach(item => {
        item.style.display = !category || item.getAttribute('data-category') === category ? '' : 'none';
      });
    });
  });

  document.querySelectorAll('.copy-class').forEach(el => {
    el.addEventListener('click', () => {
      navigator.clipboard.writeText(el.textContent).then(() => {
        el.classList.add('copied');
        setTimeout(() => el.classList.remove('copied'), 800);
      });
    });
  });
});
