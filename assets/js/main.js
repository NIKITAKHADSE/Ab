const menu = document.querySelector('.menu-button');
const nav = document.querySelector('#nav');
menu?.addEventListener('click', () => {
    const open = menu.getAttribute('aria-expanded') === 'true';
    menu.setAttribute('aria-expanded', String(!open));
    nav?.classList.toggle('open', !open);
});

if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('visible');
    }), { threshold: .1 });
    document.querySelectorAll('.reveal').forEach(element => observer.observe(element));
} else {
    document.querySelectorAll('.reveal').forEach(element => element.classList.add('visible'));
}

const filterButtons = [...document.querySelectorAll('.filters [data-filter]')];
const galleryItems = [...document.querySelectorAll('.gallery-item[data-category]')];
const galleryStatus = document.querySelector('.gallery-status');

filterButtons.forEach(button => button.addEventListener('click', () => {
    const filter = button.dataset.filter;
    let visibleCount = 0;
    filterButtons.forEach(item => {
        const selected = item === button;
        item.classList.toggle('active', selected);
        item.setAttribute('aria-pressed', String(selected));
    });
    galleryItems.forEach(item => {
        const visible = filter === 'all' || item.dataset.category === filter;
        item.hidden = !visible;
        if (visible) visibleCount++;
    });
    if (galleryStatus) {
        const label = filter === 'all' ? 'all' : filter;
        galleryStatus.textContent = `Showing ${visibleCount} ${label} ${visibleCount === 1 ? 'image' : 'images'}`;
    }
}));

const dialog = document.querySelector('#lightbox');
const lightboxImage = dialog?.querySelector('.lightbox-image');
const lightboxCaption = dialog?.querySelector('.lightbox-caption');
galleryItems.forEach(item => item.addEventListener('click', () => {
    if (!dialog) return;
    if (lightboxImage) lightboxImage.style.backgroundImage = getComputedStyle(item).backgroundImage;
    if (lightboxCaption) lightboxCaption.textContent = item.dataset.title || item.textContent.trim();
    dialog.showModal();
}));
dialog?.querySelector('.close')?.addEventListener('click', () => dialog.close());
dialog?.addEventListener('click', event => {
    if (event.target === dialog) dialog.close();
});

document.querySelectorAll('form[data-ajax]').forEach(form => form.addEventListener('submit', async event => {
    event.preventDefault();
    const status = form.querySelector('.form-status');
    if (status) status.textContent = 'Sending...';
    try {
        const response = await fetch(form.action, { method: 'POST', body: new FormData(form) });
        const data = await response.json();
        if (status) status.textContent = data.message;
        if (data.ok) form.reset();
    } catch {
        if (status) status.textContent = 'Unable to send. Please try again later.';
    }
}));
