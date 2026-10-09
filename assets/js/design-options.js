(() => {
  const themes = [
    { id: 'signature', label: 'Signature', swatch: '#aa8150' },
    { id: 'minimal', label: 'Minimal', swatch: '#b85c3f' },
    { id: 'contemporary', label: 'Contemporary', swatch: '#9fc7ba' }
  ];

  const saved = localStorage.getItem('abssolute-design') || 'signature';
  const panel = document.createElement('aside');
  panel.className = 'design-switcher';
  panel.setAttribute('aria-label', 'Preview design options');
  panel.innerHTML = `
    <button class="design-switcher-toggle" type="button" aria-expanded="true">
      <span>Design options</span><span aria-hidden="true">&times;</span>
    </button>
    <div class="design-switcher-panel">
      <p>Choose a direction</p>
      ${themes.map(theme => `<button type="button" data-theme-option="${theme.id}"><i style="--swatch:${theme.swatch}"></i><span>${theme.label}</span><small>${theme.id === 'signature' ? 'Warm & refined' : theme.id === 'minimal' ? 'Light & editorial' : 'Dark & modern'}</small></button>`).join('')}
    </div>`;

  document.body.appendChild(panel);
  const toggle = panel.querySelector('.design-switcher-toggle');

  function selectTheme(theme) {
    document.body.dataset.theme = theme;
    localStorage.setItem('abssolute-design', theme);
    panel.querySelectorAll('[data-theme-option]').forEach(button => {
      const active = button.dataset.themeOption === theme;
      button.classList.toggle('active', active);
      button.setAttribute('aria-pressed', String(active));
    });
  }

  toggle.addEventListener('click', () => {
    const open = panel.classList.toggle('collapsed');
    toggle.setAttribute('aria-expanded', String(!open));
  });

  panel.addEventListener('click', event => {
    const button = event.target.closest('[data-theme-option]');
    if (button) selectTheme(button.dataset.themeOption);
  });

  selectTheme(saved);
})();
