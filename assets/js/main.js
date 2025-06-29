document.addEventListener('DOMContentLoaded', function () {
  // Copy class name to clipboard
  document.querySelectorAll('.copy-class').forEach(function (el) {
    el.addEventListener('click', function () {
      var text = el.textContent;
      if (navigator.clipboard) {
        navigator.clipboard.writeText(text).then(function () {
          el.classList.add('copied');
          setTimeout(function () {
            el.classList.remove('copied');
          }, 800);
        });
      }
    });
  });

  // Dark/light mode toggle
  var toggle = document.getElementById('mode-toggle');
  if (toggle) {
    var body = document.body;
    body.classList.add('light-mode');
    toggle.addEventListener('click', function () {
      body.classList.toggle('dark-mode');
      body.classList.toggle('light-mode');
    });
  }

  // Main branch message
  console.log('Main JS loaded.');
});

