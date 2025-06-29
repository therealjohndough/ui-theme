document.addEventListener('DOMContentLoaded', function () {
  // Dark/light mode toggle
  const toggle = document.getElementById('mode-toggle');
  if (toggle) {
    document.body.classList.add('light-mode');
    toggle.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      document.body.classList.toggle('light-mode');
    });
  }

  // Filtering
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

  // Copy class name
  document.querySelectorAll('.copy-class').forEach(el => {
    el.addEventListener('click', () => {
      const text = el.textContent;
      navigator.clipboard.writeText(text).then(() => {
        el.classList.add('copied');
        setTimeout(() => el.classList.remove('copied'), 800);
      });
    });
  });
});
